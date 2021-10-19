---
title: Creating a Wallet
---

# Creating a Wallet

The Payvo Wallet allows you to create and manage wallets from a variety of [supported crypto networks](/docs/wallet/networks/supported).

This page will guide you through the creation process as well as provide advice on securing your mnemonic recovery phrase.

## Getting Started

While signed in to your profile, click the **'Create'** button to get started.

![](/storage/docs/docs/wallet/assets/wallets/wallets-create-focus.png)

## Cryptoasset Selection

You'll now be asked to select for which network you'd like to create a wallet.

When you've made your selection, click the **'Continue'** button to proceed.

![](/storage/docs/docs/wallet/assets/wallets/wallets-create-cryptoassets-selected.png)

<x-alert type="info">
Learn about enabling Development and Test Networks by visiting the documentation for '[General Settings](/docs/wallet/profiles/settings/general#development-and-test-networks)'.
</x-alert>

## Backing up your Mnemonic Recovery Passphrase

In this section, you'll be required to record your 24-word mnemonic recovery passphrase.

Your 24-word mnemonic passphrase should be recorded carefully with each word written exactly as shown, including spaces between each word. One misspelled word or misplaced letter could mean losing access to this wallet and all its assets.

<x-alert type="warning">
Visit the ['Securing Wallets'](/docs/wallet/wallets/security) documentation page for **important information** about securing your wallet's credentials.
</x-alert>

---

When you're ready to proceed, click the **'Continue'** button.

![](/storage/docs/docs/wallet/assets/wallets/wallets-create-mnemonic.png)

<x-alert type="danger">
Recovery credentials should **always** be stored securely. There is no way to recover them if lost, and anyone with access also has access to your funds
</x-alert>

## Confirming your Mnemonic Recovery Passphrase

Next, you'll be asked to confirm several words from your mnemonic recovery phrase. This will not guarantee your entire recovery phrase is correct but helps ensure your recovery phrase was indeed saved.

<x-alert type="warning">
Note that your wallet will **not** be created if you choose to leave the wallet creation process without confirming your recovery phrase.
</x-alert>

To confirm your recovery passphrase, click each word as requested.

If you get an error, click the **'Back'** button and ensure you have recorded your recovery phrase correctly.

After you've successfully confirmed your recovery phrase, you'll be able to proceed by clicking the **'Continue'** button.

![](/storage/docs/docs/wallet/assets/wallets/wallets-create-mnemonic-confirm.png)

## Creating an Encryption Password

After confirming your mnemonic recovery phrase, you'll be given the option to set a [BIP38](https://github.com/bitcoin/bips/blob/master/bip-0038.mediawiki) encryption password. This password will be associated **only** with this particular wallet, it is distinct from a profile password and is not a replacement for your wallet's mnemonic recovery phrase.

<x-alert type="warning">
Visit the ['Securing Wallets'](/docs/wallet/wallets/security) documentation page for **important information** about securing your wallet's credentials.
</x-alert>

If you do **not** wish to use an encryption password, you may click the **'Skip'** button. Opting to skip this means you will be required to enter your recovery phrase any time you wish to sign a transaction or message.

If you would like to make use of an encryption password, enter and confirm your new password, then click **'Continue'** to proceed. With this option, you will only need to enter this encryption password when signing a transaction or message.

![](/storage/docs/docs/wallet/assets/wallets/wallets-create-password.png)

## Success

Congrats! You've just created a new wallet!

![](/storage/docs/docs/wallet/assets/wallets/wallets-create-completed.png)

<x-alert type="danger">
Don't forget to keep your mnemonic recovery phrase and encryption password safe. Being careless with these credentials may lead to a complete loss of funds.
</x-alert>
