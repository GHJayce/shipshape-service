<?php

declare(strict_types=1);

namespace Ghjayce\ShipshapeService\Storage\Write\Entity;

use Ghjayce\Shipshape\Entity\Context\ClientContext;
use Ghjayce\ShipshapeService\Storage\Contract\WriteStorageInterface;

/**
 * @method WriteStorageInterface getWriteStorage()
 * @method self setWriteStorage(WriteStorageInterface $writeStorage)
 * @method array getSaveData()
 * @method self setSaveData(array $saveData)
 * @method Param getParam()
 * @method self setParam(Param $param)
 * @method mixed getWriteResult()
 * @method self setWriteResult(mixed $writeResult)
 */
class Context extends ClientContext
{
    protected Param $param;
    protected array $saveData;
    protected WriteStorageInterface $writeStorage;
    protected mixed $writeResult;
}
