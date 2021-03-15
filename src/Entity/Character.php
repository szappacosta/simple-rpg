<?php

namespace App\Entity;

class Character implements CharacterInterface
{
    private int $health;

    private int $attackDamage;

    public function __construct(int $health, int $attackDamage)
    {
        $this->health = $health;
        $this->attackDamage = $attackDamage;
    }

    public function attack(DefenderInterface $defender): void
    {
        $defender->takeDamage($this->attackDamage);
    }

    public function takeDamage(integer $damage)
    {
        $this->health -= $damage;
    }

    public function getHealth(): int
    {
        return $this->health;
    }

    public function isDead(): bool
    {
        return $this->health <= 0;
    }
}
