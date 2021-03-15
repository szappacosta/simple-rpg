<?php

namespace App\Entity;

interface AttackerInterface
{
    public function attack(DefenderInterface $defender): void;
}
