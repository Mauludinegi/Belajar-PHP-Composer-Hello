<?php
namespace ProgrammerGie\Belajar;
/**
 * Summary of Customer
 */
class Customer {
    /**
     * Summary of __construct
     * @param string $name
     */
    public function __construct(private string $name) {

    }
    public function sayHello(string $name = "Guest"):string {
        return "Hello $name, My name is $this->name";
    }
}