<?php
namespace Legolabs\Values\Tests\Model;

use Legolabs\Values\ChangedValuesTrait;
use Legolabs\Values\ObjectsTrait;
use Legolabs\Values\ValuesTrait;

class EmptyObject
{
    use ValuesTrait {
        getValue as public;
        setValue as public;
        addValue as public;
    }

    use ObjectsTrait {
        setObject as public;
        getObject as public;
        setObjects as public;
        getObjects as public;
        addObject as public;
    }

    use ChangedValuesTrait;

    public function __construct()
    {
        $this->registerChangedValuesHooks();
    }
}
