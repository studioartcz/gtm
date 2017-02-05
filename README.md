# Google Tag Manager wrapper (WIP)
Nette framework plugin - GTM with data layer for dynamic remarketing

Usage
------------
- Basic websites
- Ecommerce
- Catalogue of companies

Installation
------------

The best way to install is using  [Composer](http://getcomposer.org/):

```sh
$ composer require studioartcz/googledatalayer
```

Configuration
-------------

.neon
```yml
extensions:
	feed: StudioArtcz\GoogleDataLayer\DI\GoogleDataLayerExtension

googleDataLayer:
	gtmId: '%gtmId%'
```
