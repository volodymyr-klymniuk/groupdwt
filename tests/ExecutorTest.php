<?php

namespace Tests\TestCase;

// use executor file=

class ExecutorTest extends TestCase
{
    /**
     * @throws \Exception
     *
     * @param string $fileName
     *
     * @dataProvider
     */
     public function testA(string $fileName)
     {
        // $command =
     }

     public function filesDataProvider(): array
     {
        return [
            [
                'correct-input.txt',
            ],
            [
                'incorrect-input-0.txt',
            ],
        ];
     }
}