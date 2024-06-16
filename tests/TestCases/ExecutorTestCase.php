<?
namespace Tests\TestCase;

use PHPUnit\Framework\TestCase;

class ExecutorTest extends TestCase
{
    private ExecutionInterface $service;

    public function setUp()
    {
        $this->service = new Service();
    }

    /**
     * @throws \Exception
     *
     * @param string $fileName
     *
     * @dataProvider filesDataProvider
     *
     * @return void
     */
     public function testExecutor(string $fileName, bool $expectError): void
     {
        $this->service->
        //  $this->assertEquals(false, true);
     }

     public function filesDataProvider(): array
     {
        return [
            [
                'correct-input.txt', false,
            ],
            [
                'incorrect-input-0.txt', true,
            ],
        ];
     }
}