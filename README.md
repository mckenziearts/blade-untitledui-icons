# Blade Untitled UI Icons

<a href="https://github.com/mckenziearts/blade-untitledui-icons/actions?query=workflow%3ATests">
    <img src="https://github.com/blade-ui-kit/blade-untitledui-icons/workflows/Tests/badge.svg" alt="Tests">
</a>
<a href="https://packagist.org/packages/mckenziearts/blade-untitledui-icons">
    <img src="https://img.shields.io/packagist/v/mckenziearts/blade-untitledui-icons" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/mckenziearts/blade-untitledui-icons">
    <img src="https://img.shields.io/packagist/dt/mckenziearts/blade-untitledui-icons" alt="Total Downloads">
</a>

A package to easily make use the free version of [Untitled UI Icons](https://www.untitledui.com/icons) in your Laravel Blade views.

For a full list of available icons see [the SVG directory](resources/svg) or preview them at [Untitledui.com](https://www.untitledui.com/icons).

## Requirements

- PHP 8.1 or higher
- Laravel 9.0 or higher

## Installation

```bash
composer require mckenziearts/blade-untitledui-icons
```

## Blade Icons

Blade UntitledUI Icons uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality. We also recommend to [enable icon caching](https://github.com/blade-ui-kit/blade-icons#caching) with this library.

## Usage

Icons can be used as self-closing Blade components which will be compiled to SVG icons:

```blade
<x-untitled-ui-activity/>
```

You can also pass classes to your icon components:

```blade
<x-untitled-ui-activity class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-untitled-ui-activity style="color: #555"/>
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-untitledui-icons --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-untitledui-icons/activity.svg') }}" width="10" height="10"/>
```

## Changelog

Check out the [CHANGELOG](CHANGELOG.md) in this repository for all the recent changes.

## Maintainers

Blade Untitled UI Icons is developed and maintained by Arthur Monney.

## License

Blade Untitled UI Icons is open-sourced software licensed under [the MIT license](LICENSE.md).
