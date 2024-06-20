<?php

declare(strict_types=1);

namespace Ghjayce\ShipshapeService\Storage\Write\Entity;

use Ghjayce\Shipshape\Entity\Config\ShipshapeConfig;
use Ghjayce\ShipshapeService\Storage\Write\Action\ProcessData;
use Ghjayce\ShipshapeService\Storage\Write\Action\StoreData;
use Ghjayce\ShipshapeService\Storage\Write\Action\ValidateInput;

class Config extends ShipshapeConfig
{
    protected array $actions = [
        ValidateInput::class,
        ProcessData::class,
        StoreData::class,
    ];
}
