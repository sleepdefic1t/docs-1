---
title: Securing Wallets
---

# Securing Wallets

Securing your wallet's credentials is critically important and should always be done carefully.

These credentials are your proof of ownership. They allow you to restore/re-import your wallet and are used to sign cryptoasset transactions.

<x-alert type="warning">
If you’ve ever heard, "Not your keys, not your crypto..", this is it, these are your keys. Keep them safe!
</x-alert>

---

On this page:

* [Backing up a Mnemonic Passphrase](#backing-up-a-mnemonic-passphrase)
* [Creating an Encryption Password](#creating-an-encryption-password)

<x-alert type="danger">
Keep your mnemonic phrase and encryption password safe. Being careless with these credentials may lead to a complete loss of funds.
</x-alert>

## Backing up a Mnemonic Passphrase

Your mnemonic passphrase should be recorded carefully with each word written exactly as it is shown, including spaces between each word. One misspelled word or misplaced letter could mean losing access to a wallet and all its assets.

<x-alert type="warning">
It's recommended to **not** store credentials digitally. The option to copy or save your mnemonic passphrase is provided as a convenience, but it's significantly more secure to **write it down on paper** instead.
</x-alert>

### Mnemonic Generation

The Payvo Wallet will, by default, generate a unique 24-word mnemonic passphrase during the wallet creation process. This is known as a [BIP-39](https://github.com/bitcoin/bips/blob/master/bip-0039.mediawiki) mnemonic code and is used to generate what's known as a [deterministic wallet](https://en.bitcoin.it/wiki/Deterministic_wallet).

The Payvo Wallet also allows importing any BIP-39 compatible mnemonic.

When you're finished recording your mnemonic.. read it again, word-by-word, making sure it's recorded accurately.

<x-alert type="info">
Example 24-word BIP-39 Mnemonic: `soap amateur smart right theory daughter urban dragon worry shoe crucial define hope park skull raven tree tide valley draft awake behave morning two`
</x-alert>

![](/storage/docs/docs/wallet/assets/wallets/wallets-create-mnemonic.png)

<x-alert type="danger">
Recovery credentials should **always** be stored securely. There is no way to recover them if lost, and anyone with access also has access to your funds
</x-alert>

## Creating an Encryption Password

While creating or importing a wallet, you'll be allowed to create a [BIP-38](https://github.com/bitcoin/bips/blob/master/bip-0038.mediawiki) password. This lets you spend from your wallet using only the encryption password itself while your recovery credentials remain put away for safe-keeping. That is, you will not need to retrieve and enter your recovery phrase every time you wish to sign a transaction or message.

<x-alert type="warning">
Encryption Passwords are **not** a replacement for your wallet's mnemonic. You **cannot** _restore_ or _import_ a wallet using an Encryption Password.
</x-alert>

![](/storage/docs/docs/wallet/assets/wallets/wallets-create-password.png)

**Password Requirements**:

* 8 characters minimum
* including:
  * 1 upper-case
  * 1 lower-case
  * 1 number
  * 1 special character

<x-alert type="info">
If your encryption password is ever forgotten or misplaced, you can simply [delete](/docs/wallet/wallets/delete) your wallet, then follow the directions on the [import](/docs/wallet/wallets/import) documentation page to recover your wallet using its 24-word mnemonic passphrase.
</x-alert>
