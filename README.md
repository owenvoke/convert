# Convert

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-github-actions]][link-github-actions]
[![Style CI][ico-styleci]][link-styleci]
[![Total Downloads][ico-downloads]][link-downloads]
[![Buy us a tree][ico-treeware-gifting]][link-treeware-gifting]

A package for converting data.

## Install

Via Composer

```bash
$ composer require owenvoke/convert
```

## Usage

#### Byte Conversion

**Convert from a string to bytes**

```php
use OwenVoke\Convert\Bytes;

// Metric standard format
Bytes::toInt('1B');
// IEC standard format
Bytes::toInt('1GiB');
```

**Convert from bytes to a human-readable string**

```php
use OwenVoke\Convert\Bytes;

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

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email security@voke.dev instead of using the issue tracker.

## Credits

- [Owen Voke][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Treeware

You're free to use this package, but if it makes it to your production environment you are required to buy the world a tree.

It’s now common knowledge that one of the best tools to tackle the climate crisis and keep our temperatures from rising above 1.5C is to plant trees. If you support this package and contribute to the Treeware forest you’ll be creating employment for local families and restoring wildlife habitats.

You can buy trees [here][link-treeware-gifting].

Read more about Treeware at [treeware.earth][link-treeware].

[ico-version]: https://img.shields.io/packagist/v/owenvoke/convert.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-github-actions]: https://img.shields.io/github/workflow/status/owenvoke/convert/Tests.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/233832615/shield
[ico-downloads]: https://img.shields.io/packagist/dt/owenvoke/convert.svg?style=flat-square
[ico-treeware-gifting]: https://img.shields.io/badge/Treeware-%F0%9F%8C%B3-lightgreen?style=flat-square

[link-packagist]: https://packagist.org/packages/owenvoke/convert
[link-github-actions]: https://github.com/owenvoke/convert/actions
[link-styleci]: https://styleci.io/repos/233832615
[link-downloads]: https://packagist.org/packages/owenvoke/convert
[link-treeware]: https://treeware.earth
[link-treeware-gifting]: https://ecologi.com/owenvoke?gift-trees
[link-author]: https://github.com/owenvoke
[link-contributors]: ../../contributors
