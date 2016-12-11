<?php

namespace spec\Easylaravel;

use Easylaravel\Present;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PresentSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Present::class);
    }
}
