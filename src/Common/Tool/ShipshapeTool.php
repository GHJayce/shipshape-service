<?php

declare(strict_types=1);

namespace Ghjayce\ShipshapeService\Common\Tool;

use Ghjayce\Shipshape\Entity\Context\ClientContext;
use Ghjayce\Shipshape\Entity\Context\ShipshapeContext;
use Ghjayce\Shipshape\Shipshape;

class ShipshapeTool
{
    public static function eachCallableActions(array $callableActions, ClientContext $context, ShipshapeContext $shipshapeContext): ShipshapeContext
    {
        foreach ($callableActions as $callableAction) {
            $result = call_user_func($callableAction, $context, $shipshapeContext);
            $shipshapeContext = Shipshape::handleActionResult($result, $shipshapeContext);
            $context = $shipshapeContext->getClientContext();
        }
        return $shipshapeContext;
    }
}
