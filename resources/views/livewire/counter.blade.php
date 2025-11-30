<?php

use function Livewire\Volt\{state};

state([
    'count' => 0,
    'label' => 0,
]);

$increment = function () {
    $this->count++;

    $label = $this->count;

    if ($this->count % 3 === 0 && $this->count % 5 === 0) {
        $label = 'FizzBuzz';
    } elseif ($this->count % 3 === 0) {
        $label = 'Fizz';
    } elseif ($this->count % 5 === 0) {
        $label = 'Buzz';
    }

    $this->label = $label;
};

?>

<div>
    <h1>カウンター</h1>
    <div>
        Count:
        {{ $label }}
    </div>

    <button wire:click="increment">+</button>
</div>
