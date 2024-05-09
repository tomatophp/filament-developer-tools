![Screenshot](https://github.com/tomatophp/filament-developer-tools/blob/master/arts/3x1io-tomato-developer-tools.jpg)

# Filament developer tools

[![Latest Stable Version](https://poser.pugx.org/tomatophp/filament-developer-tools/version.svg)](https://packagist.org/packages/tomatophp/filament-developer-tools)
[![PHP Version Require](http://poser.pugx.org/tomatophp/filament-developer-tools/require/php)](https://packagist.org/packages/tomatophp/filament-developer-tools)
[![License](https://poser.pugx.org/tomatophp/filament-developer-tools/license.svg)](https://packagist.org/packages/tomatophp/filament-developer-tools)
[![Downloads](https://poser.pugx.org/tomatophp/filament-developer-tools/d/total.svg)](https://packagist.org/packages/tomatophp/filament-developer-tools)


Developer tools to manage and build apps on FilamentPHP

## Installation

```bash
composer require tomatophp/filament-developer-tools
```
after install your package please run this command

```bash
php artisan filament-developer-tools:install
```
finally register the plugin on `/app/Providers/Filament/AdminPanelProvider.php`

```php
->plugin(\TomatoPHP\FilamentDeveloperTools\FilamentDeveloperToolsPlugin::make())
```

## Publish Assets

you can publish config file by use this command

```bash
php artisan vendor:publish --tag="filament-developer-tools-config"
```

you can publish views file by use this command

```bash
php artisan vendor:publish --tag="filament-developer-tools-views"
```

you can publish languages file by use this command

```bash
php artisan vendor:publish --tag="filament-developer-tools-lang"
```

you can publish migrations file by use this command

```bash
php artisan vendor:publish --tag="filament-developer-tools-migrations"
```

## Support

you can join our discord server to get support [TomatoPHP](https://discord.gg/Xqmt35Uh)

## Docs

you can check docs of this package on [Docs](https://docs.tomatophp.com/plugins/laravel-package-generator)

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security

Please see [SECURITY](SECURITY.md) for more information about security.

## Credits

- [Fady Mondy](mailto:info@3x1.io)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
