<?php

declare(strict_types=1);

namespace Ghjayce\ShipshapeService\Storage\Write\Action;

use Ghjayce\Shipshape\Action\Action;
use Ghjayce\Shipshape\Entity\Context\ClientContext;
use Ghjayce\Shipshape\Entity\Context\ShipshapeContext;
use Ghjayce\ShipshapeService\Storage\Write\Entity\Context;

class StoreData extends Action
{
    /**
     * @param Context $context
     * @param ShipshapeContext $shipshapeContext
     * @return array
     */
    public function handle(ClientContext $context, ShipshapeContext $shipshapeContext): array
    {
        $writeResult = $context->getWriteStorage()->save($context->getSaveData());
        return compact('writeResult');
    }
}
