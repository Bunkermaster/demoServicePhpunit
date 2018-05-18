<?php

namespace App\Tests;

use App\Service\DateStuff;
use PHPUnit\Framework\TestCase;

class DateStuffTest extends TestCase
{
    public function testAge()
    {
        $dateStuff = new DateStuff();
        $this->assertEquals(12, $dateStuff->getAge(new \DateTime()));
    }
}
