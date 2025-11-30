<?php

use function Livewire\Volt\{state};

state([
    'count' => 0,
    'label' => 0,
]);

$increment = function () {
    $this->count++;

    if ($this->count % 3 === 0 && $this->count % 5 === 0) {
        $this->label = 'FizzBuzz';
    } elseif ($this->count % 3 === 0) {
        $this->label = 'Fizz';
    } elseif ($this->count % 5 === 0) {
        $this->label = 'Buzz';
    } else {
        $this->label = $this->count;
    }
};

?>

<div>
    <h1>FizzBuzz</h1>
    <div>
        Count:
        {{ $label }}
    </div>

    <button wire:click="increment">+</button>
</div>
