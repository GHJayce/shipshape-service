<?php

declare(strict_types=1);

namespace Ghjayce\ShipshapeService\Storage\Write;

use Ghjayce\Shipshape\Entity\Config\ShipshapeConfig;
use Ghjayce\Shipshape\Entity\Context\ShipshapeContext;
use Ghjayce\ShipshapeService\Common\Base\BaseService;
use Ghjayce\ShipshapeService\Storage\Write\Entity\Context;
use Ghjayce\ShipshapeService\Storage\Write\Entity\Enum;

class WriteStorage extends BaseService
{
    public function execute(ShipshapeConfig $config, Context $context): mixed
    {
        $works = $config->getWorks();
        $defaultActions = Enum::ACTIONS_MAPPING;
        $defaultWorks = $config->intoCallable($defaultActions);
        $works += $defaultWorks;
        $config->setWorks($works);

        $shipshapeContext = ShipshapeContext::make()->setClientContext($context);
        return $this->shipshape->execute($config, $shipshapeContext);
    }
}
