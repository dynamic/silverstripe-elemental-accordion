# SilverStripe Elemental Accordion Block

A block that displays content in collapsable panels.

![CI](https://github.com/dynamic/silverstripe-elemental-accordion/workflows/CI/badge.svg)
[![codecov](https://codecov.io/gh/dynamic/silverstripe-elemental-accordion/branch/master/graph/badge.svg)](https://codecov.io/gh/dynamic/silverstripe-elemental-accordion)

[![Latest Stable Version](https://poser.pugx.org/dynamic/silverstripe-elemental-accordion/v/stable)](https://packagist.org/packages/dynamic/silverstripe-elemental-accordion)
[![Total Downloads](https://poser.pugx.org/dynamic/silverstripe-elemental-accordion/downloads)](https://packagist.org/packages/dynamic/silverstripe-elemental-accordion)
[![Latest Unstable Version](https://poser.pugx.org/dynamic/silverstripe-elemental-accordion/v/unstable)](https://packagist.org/packages/dynamic/silverstripe-elemental-accordion)
[![License](https://poser.pugx.org/dynamic/silverstripe-elemental-accordion/license)](https://packagist.org/packages/dynamic/silverstripe-elemental-accordion)

## Requirements

* dnadesign/silverstripe-elemental: ^4.8
* dynamic/silverstripe-elemental-baseobject: ^3.0
* symbiote/silverstripe-gridfieldextensions: ^3.1

## Installation

`composer require dynamic/silverstripe-elemental-accordion`

## License

See [License](license.md)

## Upgrading from version 2

Elemental Accordion drops `sheadawson/silverstripe-linkable` usage in favor of `gorriecoe/silverstripe-linkfield`. To avoid data loss, install the `dynamic/silverstripe-link-migrator` module as follows:

```markdown
composer require dynamic/silverstripe-link-migrator
```

Then, run the task "Linkable to SilverStripe Link Migration" via `/dev/tasks`, or cli via:
```markdown
vendor/bin/sake dev/tasks/LinkableMigrationTask
```

This will populate all of the new Link fields with data from the old class.


## Usage

A block that allows you to create collapsible content blocks.

### Template Notes

The default templates are based off the [jQuery UI Accordion](https://jqueryui.com/accordion/) classes/styling


## Screen Shots

#### Front End sample of an Accordion
![Front End sample of an Accordion](./docs/en/_images/accordion-sample.jpg)

#### CMS - Accordion Main Tab
![Accordion Main Tab](./docs/en/_images/accordion-cms-block.jpg)

#### CMS - Accordion Panel List
![CMS - Accordion Panel List](./docs/en/_images/accordion-cms-list.jpg)

#### CMS - Accordion Panel Edit
![CMS - Accordion Panel Edit](./docs/en/_images/accordion-cms-panel.jpg)


## Getting more elements

See [Elemental modules by Dynamic](https://github.com/orgs/dynamic/repositories?q=elemental&type=all&language=&sort=)

## Configuration

See [SilverStripe Elemental Configuration](https://github.com/dnadesign/silverstripe-elemental#configuration)

## Translations

The translations for this project are managed via [Transifex](https://www.transifex.com/dynamicagency/silverstripe-elemental-accordion/)
and are updated automatically during the release process. To contribute, please head to the link above and get
translating!

## Maintainers

 *  [Dynamic](http://www.dynamicagency.com) (<dev@dynamicagency.com>)

## Bugtracker
Bugs are tracked in the issues section of this repository. Before submitting an issue please read over
existing issues to ensure yours is unique.

If the issue does look like a new bug:

 - Create a new issue
 - Describe the steps required to reproduce your issue, and the expected outcome. Unit tests, screenshots
 and screencasts can help here.
 - Describe your environment as detailed as possible: SilverStripe version, Browser, PHP version,
 Operating System, any installed SilverStripe modules.

Please report security issues to the module maintainers directly. Please don't file security issues in the bugtracker.

## Development and contribution
If you would like to make contributions to the module please ensure you raise a pull request and discuss with the module maintainers.
