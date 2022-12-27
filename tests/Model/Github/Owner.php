<?php
namespace Legolabs\Values\Tests\Model\Github;

use Legolabs\Values\ValuesTrait;

class Owner
{
    use ValuesTrait;

    public function getId()
    {
        return $this->getValue('id');
    }

    public function getLogin()
    {
        return $this->getValue('login');
    }
}
