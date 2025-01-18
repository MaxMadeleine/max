<?php
class Max
{
    private $age;

    public $name = "Max";

    public function __construct()
    {
        $this->age = self::getMaxAge();
    }

    public function getMax()
    {
        $agee = $this->age;
        $namee = $this->name;

        return "Hi $namee is $agee years old!";
    }

    private function getMaxAge()
    {
        return 20;
    }
}
