<?php

use PHPUnit\Framework\TestCase;

use Demo\Service\Printer;
use Demo\Entity\Student;

class StackTest extends TestCase
{
    private $pri;

    protected function setUp() : void{
        $this->pri = new Printer();
        $this->pri->add(new Student('Anna4', 33, 'anna@yahoo.de', 'Uni Muen'));
    }
    protected function tearDown(): void{
    }
    /*
    public function testPushAndPop(){
        $stack = [];
        $this->assertSame(0, count($stack));
        array_push($stack, 'foo');
        $this->assertSame('foo', $stack[count($stack)-1]);
        $this->assertSame(1, count($stack));
        $this->assertSame('foo', array_pop($stack));
        $this->assertSame(0, count($stack));
    }
    */
    public function testAddPerson(){
        $this->assertEquals($this->pri->printAbles[0]->getEmail(), "anna@yahoo.de");
        $this->assertEquals($this->pri->printAbles[0]->getUni(), "Uni Muen");
    }
}
