<?php

require 'vendor/autoload.php';

interface VehicleInterface
{
    public function start();
    public function stop();
}

class Vehicle
{
    private $vehicle;

    public function __construct(VehicleInterface $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    public function start()
    {
        return $this->vehicle->start();
    }

    public function stop()
    {
        return $this->vehicle->stop();
    }
}

class Car implements VehicleInterface
{
    public function start()
    {
        echo "Car is starting.<br>";
    }

    public function stop()
    {
        echo "Car is stopping.<br>";
    }
}

class Motorcycle implements VehicleInterface
{
    public function start()
    {
        echo "Motorcycle is starting.<br>";
    }

    public function stop()
    {
        echo "Motorcycle is stopping.<br>";
    }
}

class Truck implements VehicleInterface
{
    public function start()
    {
        echo "Truck is starting.<br>";
    }

    public function stop()
    {
        echo "Truck is stopping.<br>";
    }
}

class Train implements VehicleInterface
{
    public function start()
    {
        echo "Train is starting.<br>";
    }

    public function stop()
    {
        echo "Train is stopping.<br>";
    }
}


$vehicle = new Vehicle(new Train);
$vehicle->start();
$vehicle->stop();
