<?php

use Rakit\Validation\Rules\Date;

class DateTest extends PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        $this->rule = new Date;
    }

    public function testValids()
    {
        $this->assertTrue($this->rule->check("2010-10-10"));
        $this->assertTrue($this->rule->setParameters(['d-m-Y'])->check("10-10-2010"));
    }

    public function testInvalids()
    {
        $this->assertFalse($this->rule->check("10-10-2010"));
        $this->assertFalse($this->rule->setParameters(['Y-m-d'])->check("2010-10-10 10:10"));
    }

}
