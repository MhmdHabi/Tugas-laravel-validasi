<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CollectionTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testMapping()
    {
        $array = [3, 2, 4, 1, 5, 6, 9, 7, 10, 8];
        $collection = collect($array);

        dd(
            $collection->sum(),
            $collection->min(),
            $collection->max(),
            $collection->average(),
            $collection->count()
        );
    }
}
