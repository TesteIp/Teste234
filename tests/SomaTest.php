<?php

use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../soma.php'; // Inclui a função para testar

class SomaTest extends TestCase {
    public function testSoma() {
        $this->assertEquals(5, soma(2, 3)); // Este teste falhará
    }
}
