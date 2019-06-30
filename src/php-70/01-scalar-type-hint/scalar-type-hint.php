<?php

declare(strict_types = 1);

function addUser(string $name, int $age, bool $active)
{
    print $name . ' ' . $age . ' ' . $active;
}

addUser('First user', 30, true);

addUser('Second user', '30', false);