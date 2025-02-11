<?php

use App\Domain\Human;
use App\Domain\People;

arch()->preset()->strict();
arch()->preset()->php();
arch()->preset()->security();

test("Should be a Person and Human", function () {
    $person = new Human();

    expect($person)->toBeInstanceOf(Human::class);
    expect($person)->toBeInstanceOf(People::class);
});