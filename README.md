# Google Tag Manager (WIP)
GTM wrapper with data layer for dynamic remarketing @ Nette framework.

Usage
------------
- Basic product eshop
- Ecommerce
- Catalogue of companies

Installation
------------

The best way to install is using  [Composer](http://getcomposer.org/):

```sh
$ composer require studioartcz/gtm
```

Configuration
-------------

.neon
```yml
extensions:
	GTM: StudioArtcz\GTM\DI\GTMExtension

GTM:
	id: '%gtmId%'
```
