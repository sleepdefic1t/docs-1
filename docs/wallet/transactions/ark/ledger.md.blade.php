---
title: ARK - Ledger Nano X/S Support
---

# ARK: Ledger Nano X/S Support

The Payvo Wallet supports importing wallets, sending transactions, and signing messages using Ledger NanoX & NanoS hardware wallets.

## Installing the ARK Ledger App

<x-alert type="info">
You'll need to [install the 'ARK Ledger App'](https://support.ledger.com/hc/articles/115005174589-Ark-ARK-) to use a Ledger NanoX or NanoS with ARK.
</x-alert>

## Importing ARK Ledger Wallets

<x-alert type="info">
To learn about importing ARK Ledger Wallets, visit the '[Importing Ledger Wallets](/docs/wallet/wallets/ledger)' documentation page.
</x-alert>

## Supported ARK Transactions

The following ARK transactions and operations are supported by Ledger hardware wallets.

* **NanoX**:
  * Transfer
  * Voting
  * Multisignature
  * IPFS
  * Message Signing
* **NanoS**:
  * Transfer
  * Voting
  * IPFS
  * Message Signing

## Signing ARK Transactions & Messages

The process of using a Ledger device to sign an ARK transaction or message is not much different from that of a traditional credential-based wallet.

The main differences are:

1. The transaction should originate from a wallet imported using a Ledger device.
2. The Ledger device itself will be used to review and approve (sign) a transaction or message.

### Creating a Transaction

From a Ledger-imported ARK wallet, create a [supported transaction](#supported-ark-transactions) or message signing operation as you normally would.

<x-alert type="warning">
Any software that might interfere with your Ledger's connection to the Payvo Wallet should remain closed. For example, Ledger Live should **not** be opened during this process.
</x-alert>

Make sure that your Ledger is connected and unlocked, and that the ARK Ledger App is opened.

<div style="width: 500px; float: inherit; margin: auto">

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-ledger-waiting.png)

</div>

### Reviewing the Details

<x-alert type="danger">
Use caution when reviewing the details being displayed on your Ledger device. Even if an attacker were to somehow spoof what's displayed in the Payvo Wallet, you are ultimately signing what's shown on your Ledger's screen. This is a key feature of Ledger's security and it should **not** be overlooked.
</x-alert>

In addition to the transaction or message details being displayed in the Payvo Wallet, you'll also be required to review them on the Ledger device itself.

Use the buttons on your Ledger to scroll through the transaction or message details, carefully reviewing each screen for accuracy.

### Approving the Transaction or Message

After carefully reviewing the details shown on your Ledger and comparing it with that which is shown in the Payvo Wallet, you may then **'Approve'** or **'Reject'** the transaction or message.

Using the buttons on your Ledger, scroll to either the **'Approve'** or **'Reject'** option, then click both buttons on your Ledger device to select the appropriate action.

|                                          Transaction                                         |                                                Message                                               |
| :------------------------------------------------------------------------------------------: | :--------------------------------------------------------------------------------------------------: |
| ![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-ledger-confirm.png) | ![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-message-ledger-confirm.png) |

### Success

Congrats! You've successfully signed a transaction or message using a Ledger NanoX or NanoS hardware wallet!

|                                        Transaction                                        |                                               Message                                               |
| :---------------------------------------------------------------------------------------: | :-------------------------------------------------------------------------------------------------: |
| ![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-ledger-sent.png) | ![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-message-ledger-signed.png) |
