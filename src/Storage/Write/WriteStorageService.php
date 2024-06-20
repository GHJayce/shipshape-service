<?php

declare(strict_types=1);

namespace Ghjayce\ShipshapeService\Storage\Write;

use Ghjayce\Shipshape\Entity\Context\ShipshapeContext;
use Ghjayce\ShipshapeService\Common\Base\BaseService;
use Ghjayce\ShipshapeService\Storage\Write\Entity\Config;
use Ghjayce\ShipshapeService\Storage\Write\Entity\Context;

class WriteStorageService extends BaseService
{
    public function execute(Config $config, Context $context): mixed
    {
        $param = $context->getParam();
        $callableDataProcessors = $config::generateByActions($param->getDataProcessors());
        $callableInputValidators = $config::generateByActions($param->getInputValidators());
        $param->setDataProcessors($config->intoCallable($callableDataProcessors))
            ->setInputValidators($config->intoCallable($callableInputValidators));
        $context->setParam($param);

        $shipshapeContext = ShipshapeContext::make()->setClientContext($context);
        return $this->shipshape->execute($config, $shipshapeContext);
    }
}
