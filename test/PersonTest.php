<?php


namespace Farel\Test;


use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{

    private Person $person;

    protected function setUp(): void
    {

    }

    /**
     * @before
     */
    public function createPerson()
    {
        $this->person = new Person("Zeta");
    }

    public function testSuccess()
    {
        self::assertEquals("Hello Farel, my name is Zeta", $this->person->sayHello("Farel"));
    }

    public function testException()
    {
        $this->expectException(\Exception::class);
        $this->person->sayHello(null);
    }

    public function testGoodByeSuccess()
    {
        $this->expectOutputString("Good bye Farel" . PHP_EOL);
        $this->person->sayGoodBye("Zeta");
    }


}