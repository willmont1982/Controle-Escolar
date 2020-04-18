<?php

class ApiTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testVisitUrl()
    {
        $this->visit('/')
            ->see('Escola');
    }
}
