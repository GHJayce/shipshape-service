<?php

declare(strict_types=1);

namespace Ghjayce\ShipshapeService\Common\Traits;

use Ghjayce\Shipshape\Entity\Context\ClientContext;
use Ghjayce\Shipshape\Entity\Context\ShipshapeContext;
use Ghjayce\ShipshapeService\Common\Tool\ShipshapeTool;

trait ShipshapeHelper
{
    public function eachCallableActions(array $callableActions, ClientContext $context, ShipshapeContext $shipshapeContext): ShipshapeContext
    {
        return ShipshapeTool::eachCallableActions($callableActions, $context, $shipshapeContext);
    }
}
