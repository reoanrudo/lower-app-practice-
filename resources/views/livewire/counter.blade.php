<?php

use function Livewire\Volt\{state};

state([
    'count' => 0,
]);

$increment = function () {
        $this->count++;
};

?>

<div>
    <h1>カウンター</h1>
    <div>Count: {{ $count }}</div>

    <button wire:click="increment">+</button>

    <div>
        @if ($count !== 0)
            @if ($count % 3 === 0 && $count % 5 === 0)
                FizzBuzz
            @elseif ($count % 3 === 0)
                Fizz
            @elseif ($count % 5 === 0)
                Buzz
            @endif
        @endif
    </div>
</div>
