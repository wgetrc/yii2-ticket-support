# Yii2 Support [![Packagist Version](https://img.shields.io/packagist/v/akiraz2/yii2-ticket-support.svg?style=flat-square)](https://packagist.org/packages/akiraz2/yii2-ticket-support) [![Total Downloads](https://img.shields.io/packagist/dt/akiraz2/yii2-ticket-support.svg?style=flat-square)](https://packagist.org/packages/akiraz2/yii2-ticket-support) [![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

Yii2 Support Ticket System - simple, flexible module for Yii2 advanced template (frontend/backend apps)

The latest version includes following features:

* very easy, simple and **fast** (only 3 tables: category, ticket, messages)
* 1 ticket has many messages
* Tickets has title, category, priority, users email and name, can link user id
* Module can **parse mailbox** and automatically add new tickets (or add new messages to ticket)
* Auto close tickets after 7 days of inactivity (by cron or backend app)
* Ticket management (in backend app - admin users can use [Redactor Widget](https://github.com/yiidoc/yii2-redactor))
* Console commands (`yii support/ticket/close`)
* ID of ticket are [**hashed**](https://packagist.org/packages/hashids/hashids)
* compact SEO URL rules
* Module use [yii2-queue](https://github.com/yiisoft/yii2-queue) for background and cron jobs (Sync queue by default, you can use DB, Redis or other)
* Module can use **independent Mailer** component, own config (smtp, user, pass)
* Multi language (en, ru)
* You can use own style css
* MongoDB

> **NOTE:** Module is in initial development. Anything may change at any time.

![Screenshot](docs/screenshot.jpg)

## Documentation

[Read the Documentation](docs/README.md)

## Installation

All installation instructions are located in documentation / [Installation](docs/getting-started.md).

## TODO

* write documentation
* refactoring Mongodb
* add more languages
* more console commands
* rest controllers for api app
* view theme (blue, red, green, gray, dark, etc)
* improve from simple to powerful
* RBAC integration (role support manager)
* tests

## Support

If you have any questions or problems with Yii2-ticket-support you can ask them on email `akiraz@bk.ru`.

## Contributing to this project

Anyone and everyone is welcome to contribute. Please take a moment to
review the [guidelines for contributing](.github/CONTRIBUTING.md).

## License

Yii2-ticket-support is released under the MIT License. See the bundled [LICENSE.md](LICENSE.md)
for details.
