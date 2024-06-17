<?php

declare(strict_types=1);

namespace Ghjayce\ShipshapeService\Common\Base;

use Ghjayce\Shipshape\Contract\ShipshapeInterface;

class BaseService
{
    public function __construct(protected ShipshapeInterface $shipshape)
    {
    }
}
