<?php

namespace App\Entity;

interface DefenderInterface
{
    public function takeDamage(int $damage);

    public function getHealth(): int;

    public function isDead(): bool;
}
