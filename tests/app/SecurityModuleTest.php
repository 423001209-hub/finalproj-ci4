<?php

namespace App\Tests;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;

class SecurityModuleTest extends CIUnitTestCase
{
    use FeatureTestTrait;

    public function testHomePage()
    {
        $result = $this->get('/');
        $result->assertStatus(200);
    }

    public function testSecurityFormPageLoads()
    {
        $result = $this->get('/');
        $result->assertStatus(200);
    }

    public function testCsrfTokenIsPresentInForm()
    {
    $result = $this->get('/');
    $body = $result->getBody();
    $this->assertStringContainsString('csrf_', $body);
    }

    public function testXssInputIsEscaped()
    {
        $rawInput = '<script>alert(1)</script>';
        $escaped  = esc($rawInput, 'html');

        $this->assertNotEquals($rawInput, $escaped);
        $this->assertStringContainsString('&lt;script&gt;', $escaped);
    }

    public function testEscFunctionReturnsNotNull()
    {
        $result = esc('Hello World', 'html');
        $this->assertNotNull($result);
    }
}