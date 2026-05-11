<?php
/**
 * Tests for BloomTheory
 */

use PHPUnit\Framework\TestCase;
use Bloomtheory\Bloomtheory;

class BloomtheoryTest extends TestCase {
    private Bloomtheory $instance;

    protected function setUp(): void {
        $this->instance = new Bloomtheory(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Bloomtheory::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
