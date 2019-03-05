<?php


namespace suvorov;


class TestMain
{
    public function execute() {
        $test = new Test();
        return $test->helloWorld();
    }
}