<?php

declare(strict_types=1);

namespace Ghjayce\ShipshapeService\Storage\Write\Action\ProcessData;

use Ghjayce\Shipshape\Action\Action;
use Ghjayce\Shipshape\Entity\Context\ClientContext;
use Ghjayce\Shipshape\Entity\Context\ShipshapeContext;
use Ghjayce\ShipshapeService\Storage\Write\Entity\Context;

class FilterIllegalAttributes extends Action
{
    /**
     * @param Context $context
     * @param ShipshapeContext $shipshapeContext
     * @return array|null
     */
    public function handle(ClientContext $context, ShipshapeContext $shipshapeContext): ?array
    {
        $allowAttributes = $context->getParam()->getAllowAttributes();
        if (!$allowAttributes) {
            return null;
        }
        $saveData = $context->getSaveData();
        return compact('saveData');
    }
}
