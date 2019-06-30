<?php

declare(strict_types = 1);

function addUser(string $name, int $age, bool $active) : bool
{
    return $active;
}

addUser('First user', 30, true);