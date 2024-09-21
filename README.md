# Blade Icons Template

<a href="https://github.com/blade-organization/blade-heroicons/actions?query=workflow%3ATests">
    <img src="https://github.com/blade-ui-kit/blade-heroicons/workflows/Tests/badge.svg" alt="Tests">
</a>
<a href="https://packagist.org/packages/smarteknoloji/blade-circle-flags">
    <img src="https://img.shields.io/packagist/v/blade-organization/blade-heroicons" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/smarteknoloji/blade-circle-flags">
    <img src="https://img.shields.io/packagist/dt/blade-organization/blade-heroicons" alt="Total Downloads">
</a>


A package to easily make use of [circle-flags](https://github.com/fahrim/blade-circle-flags) in your Laravel Blade views.

For a full list of available icons see [the SVG directory](resources/svg) or preview them at [https://hatscripts.github.io/circle-flags/](https://hatscripts.github.io/circle-flags/).

## Requirements

- PHP 8.2 or higher
- Laravel 10.0 or higher

## Installation

```bash
composer require smarteknoloji/blade-circle-flags
```

## Updating

Please refer to [`the upgrade guide`](UPGRADE.md) when updating the library.

## Blade Icons

Blade circle-flags uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality. We also recommend to [enable icon caching](https://github.com/blade-ui-kit/blade-icons#caching) with this library.

## Configuration

Blade circle-flags also offers the ability to use features from Blade Icons like default classes, default attributes, etc. If you'd like to configure these, publish the `blade-circle-flags.php` config file:

```bash
php artisan vendor:publish --tag=blade-circle-flags-config
```

## Usage

Icons can be used as self-closing Blade components which will be compiled to SVG icons:

```blade
<x-circleflag-l-zh/>
```

You can also pass classes to your icon components (flags):

```blade
<x-circleflag-l-zh class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-circleflag-l-zh style="color: #555"/>
```

The country flag icons can be referenced like this:

```blade
<x-circleflag-c-cn/>
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-circle-flags --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-circle-flags/c-cn.svg') }}" width="10" height="10"/>
```

## Changelog

Check out the [CHANGELOG](CHANGELOG.md) in this repository for all the recent changes.

## Maintainers

Blade circle-flags is developed and maintained by Blade Developer.

## License

Blade circle-flags is open-sourced software licensed under [the MIT license](LICENSE.md).
