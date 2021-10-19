---
title: What are Wallets?
---

# What are Wallets?

Wallets are best described as sub-accounts of a Payvo Wallet profile. Individual wallets are associated with a particular crypto network and are represented by a unique network address.

Each of your profiles can create or import wallets from a variety of [supported crypto networks](/docs/wallet/networks/supported).

New Wallets are created using a 24-word [BIP39](https://github.com/bitcoin/bips/blob/master/bip-0039.mediawiki) mnemonic recovery phrase. This should always be kept safe and stored securely, access to your recovery credentials means access to your wallet and all its assets.

Wallet credentials can also be encrypted and stored using a [BIP-38](https://github.com/bitcoin/bips/blob/master/bip-0038.mediawiki) password. This lets you spend from your wallet using only the encryption password itself while your recovery credentials remain put away for safe-keeping.

<x-alert type="success">
The Payvo Wallet.. _your_ keys, _your_ crypto!
</x-alert>

---

Visit the links below to get started:

<x-link-collection
    :links="[
        ['path' => '/docs/wallet/wallets/create', 'name' => 'Creating a Wallet'],
        ['path' => '/docs/wallet/wallets/import', 'name' => 'Importing a Wallet'],
        ['path' => '/docs/wallet/wallets/ledger', 'name' => 'Importing Ledger Wallets'],
        ['path' => '/docs/wallet/wallets/delete', 'name' => 'Deleting a Wallet'],
    ]"
/>
