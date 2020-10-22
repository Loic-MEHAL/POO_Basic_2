<?php

require_once 'Vehicle.php';

class Truk extends Vehicle
{
  private $energy;

  private $energyLevel;

  private $lading;

  public function __construct(string $color, int $nbSeats, string $energy, string $lading)
  {
      parent::__construct($color, $nbSeats);
      $this->setEnergy($energy);
      $this->setLading($lading);
  }

  const ALLOWED_ENERGIES = [
    'fuel',
    'electric',
    ];

  const ALLOWED_LADING = [
    'in filling',
    'full',
  ];

  public function getEnergy(): string
  {
      return $this->energy;
  }

  public function setEnergy(string $energy): Truk
  {
    if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
    }
    return $this;
  }

  public function getEnergyLevel(): int
  {
      return $this->energyLevel;
  }

  public function setEnergyLevel(int $energyLevel): void
  {
      $this->energyLevel = $energyLevel;
  }
  public function getLading(): string
  {
      return $this->lading;
  }

  public function setLading(string $lading): Truk
  {
    if (in_array($lading, self::ALLOWED_LADING)) {
        $this->lading = $lading;
    }
    return $this;
  }
}

 ?>
