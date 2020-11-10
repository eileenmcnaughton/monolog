# monolog

This replaces/supplements the core implementation of PSR-3 logging when Civi::log() is used.

DO NOT USE IN PRODUCTION. This is currently experimental and may change significantly with no upgrade path. It may also cause weight gain.

The extension is licensed under [MIT](LICENSE.txt).

## Requirements

* PHP v7.2+
* CiviCRM 5.31+ (may work with earlier - untested)

## Installation (CLI, Zip)

**IMPORTANT**: You need to run `composer install` from within this extension's folder after downloading in order to get monolog installed properly.

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl https://lab.civicrm.org/extensions/monolog/-/archive/master/monolog-master.zip
```

## Installation (CLI, Git)

**IMPORTANT**: You need to run `composer install` from within this extension's folder after downloading in order to get monolog installed properly.

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://lab.civicrm.org/extensions/monolog.git
cv en monolog
```

## Getting Started

1. Go to Administer - System Settings - Debugging and Error Handling.
2. There'll be a new field where you can specify the folder path to where you want logs stored. (In real life will want this to be more configurable, e.g. network locations, different locations per channel, different output formats, etc... It should maybe be configured via a config file in the filesystem.)

## Known Issues

Yes.
