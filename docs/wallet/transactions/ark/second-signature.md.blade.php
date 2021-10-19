---
title: ARK - Registering a 2nd Signature
---

# ARK: Registering a 2nd Signature

This transaction type adds an extra layer of security to your wallet by allowing you to create a 2nd mnemonic passphrase.

This 2nd mnemonic is used to create a secondary signature for every transaction you create.

Once registered on-chain, any transaction from your wallet will be required to include a valid 2nd signature or it will be rejected.

---

On this page, you can learn more about the following:

* [Registering a 2nd Signature](#registering-a-2nd-signature)
* [Using a 2nd Signature](#using-a-2nd-signature)

## Registering a 2nd Signature

### Getting Started

To get started, click the 3-button menu of the wallet from which you'd like to register a 2nd signature, then select **'Second Signature'** from the drop-down menu.

<div style="width: 300px; float: inherit; margin: auto">

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-second-signature-reg-menu-focus.png)

</div>

### Confirming the Registration Details

Next, you'll be asked to review your registration details.

If everything looks correct, click the **'Continue'** button.

<div style="width: 500px; float: inherit; margin: auto">

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-second-signature-reg-details.png)

</div>

<x-alert type="success">
Learn more about ARK transaction fees by visiting the ['ARK Fees'](/docs/wallet/transactions/ark/fees) documentation page.
</x-alert>

### Your 2nd Mnemonic Passphrase

You'll now be required to backup and verify your 2nd mnemonic passphrase.

<x-alert type="warning">
Visit the ['Securing Wallets'](/docs/wallet/wallets/security) documentation page for **important information** about securing your wallet's credentials.
</x-alert>

**Recording your 2nd Mnemonic**:

Your 24-word mnemonic passphrase should be recorded carefully with each word written exactly as shown, including spaces between each word. One misspelled word or misplaced letter could mean losing access to this wallet and all its assets.

When you're finished recording your 2nd mnemonic passphrase.. read it again, word-by-word, making sure it's recorded accurately.

<x-alert type="warning">
It's recommended to **not** store credentials digitally. The option to copy or save your mnemonic passphrase is provided as a convenience, but it's significantly more secure to **write it down on paper** instead.
</x-alert>

When you're ready to proceed, click the **'Continue'** button.

<div style="width: 500px; float: inherit; margin: auto">

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-second-signature-reg-passphrase.png)

</div>

---

**Confirming your 2nd Mnemonic**:

Next, you'll be asked to confirm several words from your 2nd mnemonic passphrase. This will not guarantee your entire 2nd mnemonic is correct but helps ensure your 2nd mnemonic was indeed saved.

To confirm your 2nd mnemonic passphrase, click each word as requested.

If you get an error, click the **'Back'** button and ensure you have recorded your 2nd mnemonic passphrase correctly.

---

After you've successfully confirmed your 2nd mnemonic passphrase, you'll be able to proceed by clicking the **'Continue'** button.

<div style="width: 500px; float: inherit; margin: auto">

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-second-signature-reg-passphrase-confirm.png)

</div>

### Reviewing the Registration

Next, you'll be allowed to review all of your registration details for errors.

When you've verified that your details are correct, click the **'Continue'** button to proceed.

<div style="width: 500px; float: inherit; margin: auto">

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-second-signature-reg-review.png)

</div>

### Authenticating the Registration

Finally, before sending, you'll be asked to sign the transaction using your wallet's credentials (e.g. mnemonic recovery phrase, secret phrase, encryption password, etc).

Enter your signing credentials in the provided field, then click the **'Send'** button when you're ready to broadcast your transaction.

<div style="width: 500px; float: inherit; margin: auto">

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-second-signature-reg-authenticate.png)

</div>

### Success

Congrats! You've just registered an ARK Second Signature!

<div style="width: 500px; float: inherit; margin: auto">

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-second-signature-reg-sent.png)

</div>

## Using a 2nd Signature

A 2nd signature is used during wallet import and while authenticating a transaction.

### Getting Started

Get started by creating a transaction as you normally would.

|                                             Transaction Details                                             |                                             Transaction Review                                             |
| :---------------------------------------------------------------------------------------------------------: | :--------------------------------------------------------------------------------------------------------: |
| ![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-second-signature-send-details.png) | ![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-second-signature-send-review.png) |

### Authentication using a 2nd Signature

During the authentication step, you'll now be required to enter your 1st _and_ 2nd mnemonic passphrase.

Click the **'Send'** button as you would for any other transaction to broadcast it to the network.

<div style="width: 500px; float: inherit; margin: auto">

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-second-signature-send-authenticate.png)

</div>

### Success

Congrats! You've successfully used a second signature for sending a transaction!

<div style="width: 500px; float: inherit; margin: auto">

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-second-signature-sent.png)

</div>
