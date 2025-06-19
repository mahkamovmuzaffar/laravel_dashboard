<?php

namespace Tests\Unit;

use App\Utils\BaseUtils;
use PHPUnit\Framework\TestCase;

class UtilsTest extends TestCase
{
    /** @test */
    public function it_masks_card_numbers_correctly()
    {
        $result = BaseUtils::card_mask('8600123456789012');
        $this->assertEquals('8600 ****** 9012', $result);
    }

    /** @test */
    public function it_masks_phone_numbers_correctly()
    {
        $result = BaseUtils::phone_mask('+998901234567');
        $this->assertEquals('+998 90 *** ** 67', $result);
    }

    /** @test */
    public function it_validates_uzbek_phone_number_correctly()
    {
        $result = BaseUtils::phone_country_check('+998901234567');
        $this->assertTrue($result);

        $resultInvalid = BaseUtils::phone_country_check('+777901234567');
        $this->assertFalse($resultInvalid);
    }

    /** @test */
    public function it_generates_hash_correctly()
    {
        $input = 'hello world';
        $hash1 = BaseUtils::make_hash($input);
        $hash2 = BaseUtils::make_hash($input);

        // Hash must be same for same input
        $this->assertEquals($hash1, $hash2);

        // Must not be empty
        $this->assertNotEmpty($hash1);
    }
}
