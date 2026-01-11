# Hryvinskyi_SeoRobotsApi

API interfaces for SEO robots meta tags management in Magento 2.

> **Part of [hryvinskyi/magento2-seo-robots-pack](https://github.com/hryvinskyi/magento2-seo-robots-pack)** - Complete SEO Robots solution for Magento 2

## Description

This module provides API interfaces and contracts for managing robots meta tags in Magento 2. It defines the service contracts that are implemented by the `Hryvinskyi_SeoRobots` core module.

## Features

- API interfaces for configuration management
- Robots list interface
- No implementation - pure interface definitions
- Follows Magento 2 service contract pattern

## Interfaces

### ConfigInterface

Provides methods to access robots configuration:

- `isEnabled()` - Check if robots functionality is enabled
- `getMetaRobots()` - Get URL pattern-based robots configuration
- `getHttpsMetaRobots()` - Get HTTPS-specific robots settings
- `isNoindexNofollowForNoRouteIndex()` - Check if 404 pages should have NOINDEX,NOFOLLOW
- `isPaginatedRobots()` - Check if paginated content should have custom robots
- `getPaginatedMetaRobots()` - Get paginated content robots type
- `isRobotsXheaderEnabled()` - Check if X-Robots-Tag HTTP header is enabled

### RobotsListInterface

Provides methods to get available robots directives:

- `getOptions()` - Get list of available robots options with labels

## Usage

This module should not be used directly. Instead, use the implementation provided by `Hryvinskyi_SeoRobots`:

```php
use Hryvinskyi\SeoRobotsApi\Api\ConfigInterface;

class YourClass
{
    private $config;

    public function __construct(ConfigInterface $config)
    {
        $this->config = $config;
    }

    public function isRobotsEnabled(): bool
    {
        return $this->config->isEnabled();
    }
}
```

## Dependencies

- Magento 2.4+

## Installation

This module is typically installed as part of the `hryvinskyi/magento2-seo-robots-pack` metapackage:

```bash
composer require hryvinskyi/magento2-seo-robots-pack
php bin/magento module:enable Hryvinskyi_SeoRobotsApi
php bin/magento setup:upgrade
php bin/magento cache:flush
```

## Author

**Volodymyr Hryvinskyi**
- Email: volodymyr@hryvinskyi.com

## License

MIT
