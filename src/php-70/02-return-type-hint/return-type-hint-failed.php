<?php

declare(strict_types = 1);

function addUser(string $name, int $age, bool $active) : bool
{
    return $name; // coz name is string return
}

addUser('First user', 30, true);