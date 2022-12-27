<?php
namespace Legolabs\Values\Tests\Model;

use Legolabs\Values\CastTrait;
use function Legolabs\Values\register_cast_hooks;

class CastableObject extends EmptyObject
{
    use CastTrait;

    public function __construct()
    {
        parent::__construct();

        register_cast_hooks($this);
    }
}
