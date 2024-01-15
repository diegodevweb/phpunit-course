<?php

namespace Test\Unit\Core\Orders;

use PHPUnit\Framework\TestCase;
use Core\Orders\Customer;

class CustomerTest extends TestCase
{
    public function testAttributes(): void
    {
        $customer = new Customer(
            name: "User Test"
        );
        $this->assertEquals('User Test', $customer->getName());

        $customer->changeName(
            name: "User Test 2"
        );
        $this->assertEquals('User Test 2', $customer->getName());

    }
}