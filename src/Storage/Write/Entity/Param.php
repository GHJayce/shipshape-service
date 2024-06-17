<?php

declare(strict_types=1);

namespace Ghjayce\ShipshapeService\Storage\Write\Entity;

use Ghjayce\Shipshape\Entity\Base\Property;
use Ghjayce\ShipshapeService\Storage\Write\Action\ProcessData\FilterIllegalAttributes;

/**
 * @method array getInputs()
 * @method self setInputs(array $inputs)
 * @method array getAllowAttributes()
 * @method self setAllowAttributes(array $allowAttributes)
 * @method array getInputValidators()
 * @method self setInputValidators(array $inputValidators)
 * @method array getDataProcessors()
 * @method self setDataProcessors(array $dataProcessors)
 */
class Param extends Property
{
    protected array $inputs = [];
    protected array $allowAttributes = [];
    protected array $inputValidators = [];
    protected array $dataProcessors = [
        FilterIllegalAttributes::class,
    ];
}
