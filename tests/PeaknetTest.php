<?php
/**
 * Tests for PeakNet
 */

use PHPUnit\Framework\TestCase;
use Peaknet\Peaknet;

class PeaknetTest extends TestCase {
    private Peaknet $instance;

    protected function setUp(): void {
        $this->instance = new Peaknet(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Peaknet::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
