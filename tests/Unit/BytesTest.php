<?php

namespace OwenVoke\Convert\Tests\Unit;

use PHPUnit\Framework\TestCase;
use OwenVoke\Convert\Bytes;

class BytesTest extends TestCase
{
    /** @test */
    public function itCanConvertFromAHumanReadableStringToBytes(): void
    {
        $this->assertEquals(100, Bytes::toInt('100'));

        $this->assertEquals(1, Bytes::toInt('1B'));
        $this->assertEquals(2, Bytes::toInt('2B'));

        $this->assertEquals(1000, Bytes::toInt('1KB'));
        $this->assertEquals(1000000, Bytes::toInt('1MB'));
        $this->assertEquals(1000000000, Bytes::toInt('1GB'));
        $this->assertEquals(1000000000000, Bytes::toInt('1TB'));
        $this->assertEquals(1000000000000000, Bytes::toInt('1PB'));

        $this->assertEquals(1024, Bytes::toInt('1KiB', true));
        $this->assertEquals(1048576, Bytes::toInt('1MiB', true));
        $this->assertEquals(1073741824, Bytes::toInt('1GiB', true));
        $this->assertEquals(1099511627776, Bytes::toInt('1TiB', true));
        $this->assertEquals(1125899906842624, Bytes::toInt('1PiB', true));
    }

    /** @test */
    public function itCanConvertFromBytesToAHumanReadableString(): void
    {
        $this->assertEquals('1 byte', Bytes::toString(1));
        $this->assertEquals('2 bytes', Bytes::toString(2));

        $this->assertEquals('1 KB', Bytes::toString(1000));
        $this->assertEquals('1 MB', Bytes::toString(1000000));
        $this->assertEquals('1 GB', Bytes::toString(1000000000));
        $this->assertEquals('1 TB', Bytes::toString(1000000000000));
        $this->assertEquals('1 PB', Bytes::toString(1000000000000000));

        $this->assertEquals('3.21 KB', Bytes::toString(3210));
    }
}
