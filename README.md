# Convert

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-github-actions]][link-github-actions]
[![Style CI][ico-styleci]][link-styleci]
[![Code Coverage][ico-code-coverage]][link-code-coverage]
[![Total Downloads][ico-downloads]][link-downloads]

A package for converting data.

## Install

Via Composer

```bash
$ composer require pxgamer/convert
```

## Usage

#### Byte Conversion

**Convert from a string to bytes**

```php
use pxgamer\Convert\Bytes;

// Metric standard format
Bytes::toInt('1B');
// IEC standard format
Bytes::toInt('1GiB');
```

**Convert from bytes to a human-readable string**

```php
use pxgamer\Convert\Bytes;

// This is always formatted as metric in the output
Bytes::toString(1000);
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

```bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) and [CODE_OF_CONDUCT](.github/CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email security@pxgamer.xyz instead of using the issue tracker.

## Credits

- [pxgamer][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/pxgamer/convert.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-github-actions]: https://img.shields.io/github/workflow/status/pxgamer/convert/Continuous%20Integration.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/233832615/shield
[ico-code-coverage]: https://img.shields.io/codecov/c/github/pxgamer/convert.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/pxgamer/convert.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/pxgamer/convert
[link-github-actions]: https://github.com/pxgamer/convert/actions
[link-styleci]: https://styleci.io/repos/233832615
[link-code-coverage]: https://codecov.io/gh/pxgamer/convert
[link-downloads]: https://packagist.org/packages/pxgamer/convert
[link-author]: https://github.com/pxgamer
[link-contributors]: ../../contributors
