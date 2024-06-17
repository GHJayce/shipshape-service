<?php

namespace Ghjayce\ShipshapeService\Storage\Contract;

interface WriteStorageInterface
{
    public function save(array $data): mixed;
}