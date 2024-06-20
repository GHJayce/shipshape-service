<?php

declare(strict_types=1);

namespace Ghjayce\ShipshapeService\Storage\Write\Action;

use Ghjayce\Shipshape\Action\Action;
use Ghjayce\Shipshape\Entity\Context\ClientContext;
use Ghjayce\Shipshape\Entity\Context\ShipshapeContext;
use Ghjayce\ShipshapeService\Common\Traits\ShipshapeHelper;
use Ghjayce\ShipshapeService\Storage\Write\Entity\Context;

class ProcessData extends Action
{
    use ShipshapeHelper;

    /**
     * @param Context $context
     * @param ShipshapeContext $shipshapeContext
     * @return ShipshapeContext
     */
    public function handle(ClientContext $context, ShipshapeContext $shipshapeContext): ShipshapeContext
    {
        $context->setSaveData($context->getParam()->getInputs());
        $validators = $context->getParam()->getDataProcessors();
        return $this->eachCallableActions($validators, $context, $shipshapeContext);
    }
}
