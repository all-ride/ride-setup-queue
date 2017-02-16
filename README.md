# Ride: Queue Setup

Installer hook to setup the Ride queue through the [Composer](http://getcomposer.org) dependency manager.

When installed/updated through composer, this script will:

* install needed packages
* make sure _application/worker.sh_ exists and configured

## Related Modules

- [ride/app-queue-orm](https://github.com/all-ride/ride-app-queue-orm)
- [ride/cli](https://github.com/all-ride/ride-cli)
- [ride/lib-queue](https://github.com/all-ride/ride-lib-queue)
- [ride/setup](https://github.com/all-ride/ride-setup)
- [ride/setup-cli](https://github.com/all-ride/ride-setup-cli)

## Installation

You can use [Composer](http://getcomposer.org) to install this module.

```
composer require ride/setup-queue
```
