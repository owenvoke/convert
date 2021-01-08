<?php

use OwenVoke\Convert\Bytes;

it('can convert from a human-readable string to bytes', function () {
    expect(Bytes::toInt('100'))->toBe(100);

    expect(Bytes::toInt('1B'))->toBe(1);
    expect(Bytes::toInt('2B'))->toBe(2);

    expect(Bytes::toInt('1KB'))->toBe(1000);
    expect(Bytes::toInt('1MB'))->toBe(1000000);
    expect(Bytes::toInt('1GB'))->toBe(1000000000);
    expect(Bytes::toInt('1TB'))->toBe(1000000000000);
    expect(Bytes::toInt('1PB'))->toBe(1000000000000000);

    expect(Bytes::toInt('1KiB', true))->toBe(1024);
    expect(Bytes::toInt('1MiB', true))->toBe(1048576);
    expect(Bytes::toInt('1GiB', true))->toBe(1073741824);
    expect(Bytes::toInt('1TiB', true))->toBe(1099511627776);
    expect(Bytes::toInt('1PiB', true))->toBe(1125899906842624);
});

it('can convert from bytes to a human-readable string', function () {
    expect(Bytes::toString(1))->toBe('1 byte');
    expect(Bytes::toString(2))->toBe('2 bytes');

    expect(Bytes::toString(1000))->toBe('1 KB');
    expect(Bytes::toString(1000000))->toBe('1 MB');
    expect(Bytes::toString(1000000000))->toBe('1 GB');
    expect(Bytes::toString(1000000000000))->toBe('1 TB');
    expect(Bytes::toString(1000000000000000))->toBe('1 PB');

    expect(Bytes::toString(3210))->toBe('3.21 KB');
});
