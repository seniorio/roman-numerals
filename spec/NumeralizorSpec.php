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
        $this->arabicToRoman(1)->shouldReturn('I');
        $this->arabicToRoman(2)->shouldReturn('II');
        $this->arabicToRoman(3)->shouldReturn('III');
        $this->arabicToRoman(4)->shouldReturn('IV');
        $this->arabicToRoman(5)->shouldReturn('V');
        $this->arabicToRoman(6)->shouldReturn('VI');
        $this->arabicToRoman(7)->shouldReturn('VII');
        $this->arabicToRoman(8)->shouldReturn('VIII');
        $this->arabicToRoman(9)->shouldReturn('IX');
        $this->arabicToRoman(10)->shouldReturn('X');
        $this->arabicToRoman(11)->shouldReturn('XI');
        $this->arabicToRoman(12)->shouldReturn('XII');
        $this->arabicToRoman(13)->shouldReturn('XIII');
        $this->arabicToRoman(14)->shouldReturn('XIV');
        $this->arabicToRoman(15)->shouldReturn('XV');
        $this->arabicToRoman(16)->shouldReturn('XVI');
        $this->arabicToRoman(17)->shouldReturn('XVII');
        $this->arabicToRoman(18)->shouldReturn('XVIII');
        $this->arabicToRoman(19)->shouldReturn('XIX');
        $this->arabicToRoman(20)->shouldReturn('XX');
        $this->arabicToRoman(22)->shouldReturn('XXII');
        $this->arabicToRoman(25)->shouldReturn('XXV');
        $this->arabicToRoman(27)->shouldReturn('XXVII');
        $this->arabicToRoman(29)->shouldReturn('XXIX');
        $this->arabicToRoman(30)->shouldReturn('XXX');
        $this->arabicToRoman(34)->shouldReturn('XXXIV');
        $this->arabicToRoman(35)->shouldReturn('XXXV');
        $this->arabicToRoman(39)->shouldReturn('XXXIX');
        $this->arabicToRoman(40)->shouldReturn('XL');
        $this->arabicToRoman(50)->shouldReturn('L');
        $this->arabicToRoman(55)->shouldReturn('LV');
        $this->arabicToRoman(70)->shouldReturn('LXX');
        $this->arabicToRoman(90)->shouldReturn('XC');
        $this->arabicToRoman(95)->shouldReturn('XCV');
        $this->arabicToRoman(99)->shouldReturn('XCIX');
        $this->arabicToRoman(100)->shouldReturn('C');
        $this->arabicToRoman(500)->shouldReturn('D');
        $this->arabicToRoman(900)->shouldReturn('CM');
        $this->arabicToRoman(1000)->shouldReturn('M');
        $this->arabicToRoman(1200)->shouldReturn('MCC');
        $this->arabicToRoman(2000)->shouldReturn('MM');
        $this->arabicToRoman(2020)->shouldReturn('MMXX');
        $this->arabicToRoman(4000)->shouldReturn('MMMM');
    }
}
