---
title: ARK - Signing & Verifying Messages
---

# ARK: Signing & Verifying Messages

The Payvo Wallet allows the signing and verification of text-based messages. These messages are stored offline but can be shared and verified by others using the signer's publicKey and message signature.

---

On this page, you can learn more about the following:

* [Signing a Message](#signing-a-message)
* [Verifying a Message](#verifying-a-message)

## Signing a Message

With a signed message, others can verify that a given message and signature combination originates from you.

<x-alert type="success">
Signing and verifying messages are off-chain operations. Nothing is stored online and there are no associated transaction fees.
</x-alert>

### Getting Started

To get started, click the 3-button menu of the wallet from which you'd like to sign a message, then select **'Sign Message'** from the drop-down menu.

<div style="width: 300px; float: inherit; margin: auto">

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-message-sign-menu-focus.png)

</div>

### Entering and Signing the Message

You'll then enter the text message and your signing credentials (e.g. your recovery mnemonic).

When you're ready to proceed, click the **'Sign'** button.

<div style="width: 500px; float: inherit; margin: auto">

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-message-sign-menu-details.png)

</div>

### Success

Congrats! You've successfully signed a message!

You may click **'Copy Signature**' to copy the details to your clipboard. You can then share the details with others or save them for future use.

<div style="width: 500px; float: inherit; margin: auto">

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-message-sign-menu-signed.png)

</div>

## Verifying a Message

To verify a message, you can use either the data as copied from the message signing steps (JSON), manually enter the signer's public key, message and signature.

<x-alert type="success">
Signing and verifying messages are off-chain operations. Nothing is stored online and there are no associated transaction fees.
</x-alert>

### Getting Started

To get started, click the 3-button menu of the wallet from which you'd like to verify a message, then select **'Verify Message'** from the drop-down menu.

<div style="width: 300px; float: inherit; margin: auto">

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-message-verify-menu-focus.png)

</div>

### Entering and Verifying the Message

Next, enter the details from the signed message into the provided fields. You may use either the JSON data copied from a message's signing or enter the details manually.

When you're ready to proceed, click the **'Verify'** button.

|                                                JSON                                               |                                             Manual Entry                                            |
| :-----------------------------------------------------------------------------------------------: | :-------------------------------------------------------------------------------------------------: |
| ![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-message-verify-json.png) | ![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-message-verify-manual.png) |

### Success

Congrats! You've successfully verified a message!

<div style="width: 500px; float: inherit; margin: auto">

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-message-verified.png)

</div>
