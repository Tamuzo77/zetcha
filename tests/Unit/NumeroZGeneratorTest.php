<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Actions\NumeroZGenerator;

class NumeroZGeneratorTest extends TestCase
{
    public function test_the_numeroZGenerator_works(): void
    {
        $num = (new NumeroZGenerator())->handle();
        echo $num;
    }
}
