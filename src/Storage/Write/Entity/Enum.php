<?php

declare(strict_types=1);

namespace Ghjayce\ShipshapeService\Storage\Write\Entity;

use Ghjayce\ShipshapeService\Storage\Write\Action\ProcessData;
use Ghjayce\ShipshapeService\Storage\Write\Action\StoreData;
use Ghjayce\ShipshapeService\Storage\Write\Action\ValidateInput;

class Enum
{
    public const ACTION_NAME_OF_VALIDATE_INPUT = 'validateInput';
    public const ACTION_NAME_OF_PROCESS_DATA = 'processData';
    public const ACTION_NAME_OF_STORE_DATA = 'storeData';

    public const ACTIONS_MAPPING = [
        self::ACTION_NAME_OF_VALIDATE_INPUT => ValidateInput::class,
        self::ACTION_NAME_OF_PROCESS_DATA => ProcessData::class,
        self::ACTION_NAME_OF_STORE_DATA => StoreData::class,
    ];
}
