<?php

namespace App\Entity;

interface DefenderInterface
{
    public function takeDamage(integer $damage);

    public function getHealth(): integer;

    public function isDead(): bool;
}
