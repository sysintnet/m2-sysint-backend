# m2-sysint-backend

### Installation

With composer:

```sh
$ composer config repositories.m2-sysint-backend vcs https://github.com/sysintnet/m2-sysint-backend.git
$ composer require sysintnet/m2-sysint-backend:dev-master
```

Manually:

Copy the zip into `../app/code/Sysint/Backend` directory


#### After installation by either means, enable the extension by running following commands:

```sh
$ php bin/magento module:enable Sysint_Backend --clear-static-content
$ php bin/magento setup:upgrade
```