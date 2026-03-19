<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class CICDTest extends TestCase
{
    /**
     * Test xem CI/CD có nhận code mới không.
     */
    public function test_cicd_is_working(): void
    {
        $this->assertTrue(true);
        // Bạn có thể thử đổi thành false để xem CI báo lỗi "màu đỏ"
    }
}
