# Silk

The WordPress Plugin

## Overview

This is a WordPress plugin wrapper for [Silk](https://packagist.org/packages/silk/silk), the library and Composer package.

Library plugins like this are currently not accepted on the WordPress.org plugin repository.

However, this plugin is still installable and auto-updatable via the awesome [GitHub Updater](https://github.com/afragen/github-updater) plugin!
Just install and activate the GitHub Updater plugin, and you will receieve automatic updates for this plugin.

## Installation


#### Install via GitHub Updater

- Install and activate [GitHub Updater](https://github.com/afragen/github-updater)
- From wp-admin, go to _Settings > GitHub Updater > Install Plugin_
  - Plugin URI: `aaemnnosttv/silk-plugin`
  - Repository Branch:  _(leave empty)_
  - Remote Repository Host: `GitHub`
  - Click _Install Plugin_
  - Activate the plugin!

#### Install Manually

- [Download your desired release](https://github.com/aaemnnosttv/silk-plugin/releases) from GitHub
- Upload plugin contents to `wp-content/plugins/silk-plugin`
- Activate the plugin!

## Usage

This plugin has no settings screen or options, it merely loads the library and will protect you from blowing up your website if your version of PHP is too low.

In addition to that, it fires a single action once loaded: `silk/loaded`.

> Note: This action is only fired as part of this plugin.  It is not part of the library.

To be sure that the code is available before using it, use this hook, or check that it has been already fired.

**Example**

In your plugin or theme, before loading code depending on Silk...

```php
if (did_action('silk/loaded')) {
    load_my_stuff();
} else {
    add_action('silk/loaded', 'load_my_stuff');
}
```