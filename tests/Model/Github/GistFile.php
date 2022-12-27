<?php
namespace Legolabs\Values\Tests\Model\Github;

use Legolabs\Values\ValuesTrait;

class GistFile
{
    use ValuesTrait;

    public function __construct($content)
    {
        $this->setValue('content', $content);
    }
}