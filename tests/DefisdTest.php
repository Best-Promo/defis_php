<?php
use PHPUnit\Framework\TestCase;

final class DefisdTest extends TestCase
{
    public function testCountValue(){
        $this->assertEquals(2, Defisd::countValue(['toto', 'tata']));
        $this->assertEquals(3, Defisd::countValue(['toto', 'tata', 'titi']));
        $this->assertEquals(0, Defisd::countValue([]));
    }
    
    public function testReadFile(){
        $this->assertEquals('Je suis le contenu du fichier !', Defisd::readFile('./text.txt'));
        $this->assertEquals('Mais c\'est suuuuperrr !', Defisd::readFile('./text2.txt'));
    }
    
    public function testDeleteSpace(){
        $this->assertEquals('Je suis le contenu !', Defisd::deleteSpace(' Je suis le contenu ! '));
        $this->assertEquals('Blop Blop', Defisd::deleteSpace('       Blop Blop '));
    }

    public function testCheckMoreTen(){
        $this->assertEquals([2 => 23, 3 => 123, 4 => 450], Defisd::checkMoreTen([2, 10, 23, 123, 450]));
        $this->assertEquals([3 => 11], Defisd::checkMoreTen([1, 2, 3, 11]));
    }

    public function testSendDiff(){
        $this->assertEquals(["PHP"], Defisd::checkMoreTen(["PHP","Java","C","C++"], ["Java","C","C++"]));
    }
}
