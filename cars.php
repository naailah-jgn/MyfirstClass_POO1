<?php

class Cars {

    private int $nbWheels;

    private int $currentSpeed;

    private int $energyLevel = 10;

    public function __construct(private string $color, private int $nbSeats, private string $energy) 
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;

    }

    public function start(): string
    {
        if($this->energyLevel > 10){
            return "Start the car!";
        }else{
            return "Go fill the car";
        }
    }
    public function forward(): string
    {
        $this->currentSpeed > 15;
        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed():int 
    {
       return $this->currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbSeats(): int
    {
       return $this->nbSeats;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int
    {
       return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    
    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }

}
