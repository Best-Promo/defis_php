<?php
use PHPUnit\Framework\TestCase;

final class DefisbTest extends TestCase
{
    public function testAlphabeticalOrder(){
        $this->assertEquals('ehllo', Defisb::alphabeticalOrder('hello'));
        $this->assertEquals('ccdeir', Defisb::alphabeticalOrder('cedric'));
    }

    public function testCanCapture(){
        $this->assertEquals(false, Defisb::canCapture(['E8', 'F3']));
        $this->assertEquals(true, Defisb::canCapture(['C3', 'F3']));
        $this->assertEquals(true, Defisb::canCapture(['E8', 'E2']));
    }
}
