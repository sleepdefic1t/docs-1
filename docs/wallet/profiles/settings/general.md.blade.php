---
title: Profile Settings - General
---

# Profile Settings: General

The 'General' settings page contains basic settings for customizing your profile. It features options for anything from changing your profile name and avatar to setting screenshot protection, auto log-off duration, and whether to allow error reporting.

![](/storage/docs/docs/wallet/assets/profiles/profiles-settings-general.png)

## Getting Started

Get started by clicking your profile avatar and selecting **'Settings'** from the dropdown menu. This will land you on the 'General' settings tab.

![](/storage/docs/docs/wallet/assets/profiles/profiles-settings-menu.png)

## Personal Details

The 'Personal Details' section contains the most basic and high-level settings used for customizing your Profile. This is where you'll be able to set things like your profile name or avatar, your profile language, pricing oracles, and time format.

![](/storage/docs/docs/wallet/assets/profiles/profiles-settings-general-personal.png)

* **Profile Image** (_*optional_): The primary image associated with your profile.
  * Auto-generated from your username by default.
  * Supports custom images.
  * Displayed on the sign-in page and at the top-right of Payvo Wallet after signing in.
* **Profile Name**: Must be at least 1 to 42 characters in length.
  * Displayed on the sign-in page
  * Used to auto-generate your default profile avatar.
* **Language**: The UI Language to be used by the Payvo Wallet.
  * English
* **Passphrase Language**: The language used by your [BIP39](https://github.com/bitcoin/bips/blob/master/bip-0039.mediawiki) mnemonic recovery passphrase.
  * 中文(简体) - (Chinese Simplified)
  * 中文(繁體) - (Chinese Traditional)
  * English
  * Français - (French)
  * Italiano - (Italian)
  * 日本語 - (Japanese)
  * 한국어 - (Korean)
  * Español - (Spanish)
* **Pricing Oracle**: The market data API source used by the Payvo Wallet.
  * Used for retrieving currency values for things like balances and transactions.
    * e.g. A Bitcoin balance or transaction value that is shown in USD.
  * Sources:
    * [CoinCap](https://coincap.io)
    * [CoinGecko](https://www.coingecko.com)
    * [CryptoCompare](https://www.cryptocompare.com)
* **Currency**: The preferred currency for balances and operations shown throughout your profile.
  * eg _USD, CAD, EUR, BTC, etc._
* **Time Format**: Whether to use a **'12-hour'** or **'24-hour'** time format.
  * Used for dates/timestamps for your profile's transaction history.
* **Reset Settings**: Resets your profile settings to their defaults.
  * Does _not_ erase wallets or transaction history.

## Security

The 'Security' section contains some basic ways to keep your Profile safe from prying eyes. Specifically, you can enable/disable screenshot protection and set your profile's auto log-off duration.

### Screenshot Protection

Screenshot protection is an additional security measure to prevent screenshots of the Payvo Wallet from being made.

![](/storage/docs/docs/wallet/assets/profiles/profiles-settings-general-security-screenshot.png)

### Auto Log-Off

Auto Log-Off determines how long the Payvo Wallet should sit idle before logging out from your profile.

![](/storage/docs/docs/wallet/assets/profiles/profiles-settings-general-security-log-off.png)

## Other

The 'Other' section contains additional settings used for further customizing your Payvo Wallet experience. It includes options for enabling test networks and error reporting.

### Development and Test Networks

The 'Development and Test Networks' section is where you can enable the ability to create or import developer and testnet wallets for various networks. This ability is disabled by default.

![](/storage/docs/docs/wallet/assets/profiles/profiles-settings-general-other-networks.png)

---

When enabled, you'll be given the option to select development or test networks while [creating](/docs/wallet/wallets/create) or [importing](/docs/wallet/wallets/import) a wallet.

![](/storage/docs/docs/wallet/assets/profiles/profiles-settings-general-other-networks-select.png)

### Error Reporting

When enabled, the Error Reporting option determines whether anonymized crash reports should be sent to the Payvo Wallet team for improved troubleshooting and for fixing bugs that occur. This option is disabled by default.

![](/storage/docs/docs/wallet/assets/profiles/profiles-settings-general-other-error.png)

## Reset Settings

If you'd like to reset your profile to its default settings, click the **'Reset Settings'** button.

![](/storage/docs/docs/wallet/assets/profiles/profiles-settings-general-reset.png)

<x-alert type="info">
This action does not remove wallets or transactions, only your customized profile settings will be restored to their default values.
</x-alert>

## Applying Changes

When you're done, click the **'Save'** button to confirm any changes or click **'Cancel'** to discard them.

![](/storage/docs/docs/wallet/assets/profiles/profiles-settings-general-save-focus.png)
