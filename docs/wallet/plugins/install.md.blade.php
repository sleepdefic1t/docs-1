---
title: Installing Plugins
---

# Installing Plugins

Installing a plugin can be done in just a few steps.

In this section, you can choose to either install a listed plugin or install one directly from a Git repository.

* [Installing a Listed Plugin](#installing-a-listed-plugin)
* [Installing from a Url](#installing-from-a-url)

<x-alert type="info">
Plugins are shared resources. Installing or removing a plugin installs or removes that particular plugin for all Payvo Wallet profiles.
</x-alert>

## Installing a Listed Plugin

The most convenient way to install a plugin is using the 'Plugin Manager' to browse for extensions.

### Getting Started

From the **'Plugins Manager'** page, find the plugin you'd like to install and click on it.

<div style="width: 800px; float: inherit; margin: auto">

![](/storage/docs/docs/wallet/assets/plugins/plugins-install-plugin.png)

</div>

Then, click on **'Install'** to proceed to the next step.

<div style="width: 800px; float: inherit; margin: auto">

![](/storage/docs/docs/wallet/assets/plugins/plugins-install-focus.png)

</div>

|     |     |
| :-: | :-: |
| ![](/storage/docs/docs/wallet/assets/plugins/plugins-install-plugin-menu.png) | ![](/storage/docs/docs/wallet/assets/plugins/plugins-install-focus-menu.png) |

You may also use the 3-dot menu of the plugin to begin the install process.

### Reviewing the Plugin's Permissions

To download and install the plugin, you'll first be allowed to review its permissions. These permissions let you know what kind of access and functionality the plugin will be able to have.

For instance, plugins that play sounds, can save files to your computer, use external web URLs, or access your Payvo Profile's data, etc. are required to register their permissions which subsequently appear in the windows exampled below.

If things look acceptable and you'd like to proceed with the installation, click the **'Download'** button.

| Example 1 | Example 2 |
| :-------: | :-------: |
| ![](/storage/docs/docs/wallet/assets/plugins/plugins-install-permission-1.png) | ![](/storage/docs/docs/wallet/assets/plugins/plugins-install-permission-2.png) |

### Installing the Plugin

Once the plugin is done downloading, you may click the **'Install'** button to continue with the installation, or **'Cancel'** to exit the install process.

<div style="width: 400px; float: inherit; margin: auto">

![](/storage/docs/docs/wallet/assets/plugins/plugins-install-continue.png)

</div>

### Success

Congrats! You've just installed a Payvo Wallet Plugin!

<div style="width: 500px; float: inherit; margin: auto">

![](/storage/docs/docs/wallet/assets/plugins/plugins-install-success.png)

</div>

<x-alert type="success">
Proceed to the '[Using a Plugin](/docs/wallet/plugins/use)' page to learn how to enable and use your newly installed plugin!
</x-alert>

## Installing from a Url

You may also install directly from a Url.

<x-alert type="danger">
Use extreme caution when installing directly from a Url. Generally, this should only be used by developers and advanced users who understand the inherent risks of installing un-audited code.
</x-alert>

### Getting Started

From the 'Plugin Manager' page, click the **'Install from Url'** button to get started.

![](/storage/docs/docs/wallet/assets/plugins/plugins-install-github-focus.png)

### Acknowledging the Disclaimer

Before you can proceed with installing a plugin from a Url, you'll need to carefully review and agree to the disclaimer.

Once you've read and understood the disclaimer, click the **'I Accept'** button to continue.

<div style="width: 500px; float: inherit; margin: auto">

![](/storage/docs/docs/wallet/assets/plugins/plugins-install-github-disclaimer.png)

</div>

<x-alert type="info">
You may also check the **'do not show this message again'** box if you no longer wish to see this disclaimer.
</x-alert>

### Entering the Url

Next, enter the Url of the plugin you'd like to install.

This Url should be a valid Git Url for a compatible Payvo Wallet plugin. For example, `https://github.com/dated/delegate-calculator-wallet-plugin`.

When you're ready to continue, click the **'Confirm'** button.

<div style="width: 500px; float: inherit; margin: auto">

![](/storage/docs/docs/wallet/assets/plugins/plugins-install-github-url.png)

</div>

### Proceeding with Installation

If the plugin was valid and compatible with the Payvo Wallet, you'll now be directed to the plugin's main page.

<x-alert type="success">
You can now proceed by following the directions for [Installing a Listed Plugin](#installing-a-listed-plugin).
</x-alert>
