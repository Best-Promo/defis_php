<?php
use PHPUnit\Framework\TestCase;

final class DefiscTest extends TestCase
{
    public function testCountTrue(){
        $this->assertEquals(3, Defisc::countTrue([true, false, false, true, true]));
        $this->assertEquals(2, Defisc::countTrue([true, false, false, false, true]));
        $this->assertEquals(0, Defisc::countTrue([]));
    }

    public function testCountVowel(){
        $this->assertEquals(2, Defisc::countVowel('cedric'));
        $this->assertEquals(1, Defisc::countVowel('bob'));
        $this->assertEquals(4, Defisc::countVowel('catherine'));
    }
}
