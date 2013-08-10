<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NumeralizorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Numeralizor');
    }

    function it_should_convert_numbers_to_numerals()
    {
        $this->toNumerals(1)->shouldReturn('I');
        $this->toNumerals(2)->shouldReturn('II');
        $this->toNumerals(3)->shouldReturn('III');
        $this->toNumerals(4)->shouldReturn('IV');
        $this->toNumerals(5)->shouldReturn('V');
        $this->toNumerals(6)->shouldReturn('VI');
        $this->toNumerals(7)->shouldReturn('VII');
        $this->toNumerals(8)->shouldReturn('VIII');
        $this->toNumerals(9)->shouldReturn('IX');
        $this->toNumerals(10)->shouldReturn('X');
        $this->toNumerals(11)->shouldReturn('XI');
        $this->toNumerals(12)->shouldReturn('XII');
        $this->toNumerals(13)->shouldReturn('XIII');
        $this->toNumerals(14)->shouldReturn('XIV');
        $this->toNumerals(15)->shouldReturn('XV');
        $this->toNumerals(16)->shouldReturn('XVI');
        $this->toNumerals(17)->shouldReturn('XVII');
        $this->toNumerals(18)->shouldReturn('XVIII');
        $this->toNumerals(19)->shouldReturn('XIX');
        $this->toNumerals(20)->shouldReturn('XX');
        $this->toNumerals(22)->shouldReturn('XXII');
        $this->toNumerals(25)->shouldReturn('XXV');
        $this->toNumerals(27)->shouldReturn('XXVII');
        $this->toNumerals(29)->shouldReturn('XXIX');
        $this->toNumerals(30)->shouldReturn('XXX');
        $this->toNumerals(34)->shouldReturn('XXXIV');
        $this->toNumerals(35)->shouldReturn('XXXV');
        $this->toNumerals(39)->shouldReturn('XXXIX');
        $this->toNumerals(40)->shouldReturn('XL');
        $this->toNumerals(50)->shouldReturn('L');
        $this->toNumerals(55)->shouldReturn('LV');
        $this->toNumerals(70)->shouldReturn('LXX');
        $this->toNumerals(90)->shouldReturn('XC');
        $this->toNumerals(95)->shouldReturn('XCV');
        $this->toNumerals(99)->shouldReturn('XCIX');
        $this->toNumerals(100)->shouldReturn('C');
        $this->toNumerals(500)->shouldReturn('D');
        $this->toNumerals(900)->shouldReturn('CM');
        $this->toNumerals(1000)->shouldReturn('M');
        $this->toNumerals(1200)->shouldReturn('MCC');
        $this->toNumerals(2000)->shouldReturn('MM');
        $this->toNumerals(2020)->shouldReturn('MMXX');
        $this->toNumerals(4000)->shouldReturn('MMMM');
    }
}
