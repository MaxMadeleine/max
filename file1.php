<?php
class Max
{
    public function getMax()
    {
        $age = self::getMaxAge();

        return "Hi Max is $age years old!";
    }

    private function getMaxAge(){
        return 20;
    }
}
