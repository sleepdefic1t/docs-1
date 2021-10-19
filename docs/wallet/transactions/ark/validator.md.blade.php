---
title: ARK - Registering & Resigning a Validator
---

# ARK: Registering & Resigning a Validator

A user or organization can register their address to become a Validator and secure the network by participating in consensus. Upon accumulating sufficient vote weight, the Validator will begin forging transactions and receiving block commissions. The Validator registers a custom username for their address to help distinguish it from other Validators.

---

On this page, you can learn more about the following:

* [Registering a Validator](#registering-a-validator)
* [Resigning a Validator](#resigning-a-validator)

## Registering a Validator

Registering as a Validator is a simple transaction that provides network nodes with a record of the sending address opening itself to accept votes from other wallets. You can only vote for an address that was registered in this fashion.

### Getting Started

To get started, click the 3-button menu of the wallet from which you'd like to register as a Validator, then select **'Delegate'** from the drop-down menu.

<div style="width: 300px; float: inherit; margin: auto">

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-validator-reg-menu-focus.png)

</div>

### Entering your Validator Name

Next, you'll be asked to enter the username for your Validator.

This name is important. It appears in block explorers and wallets, and is how people will find and vote for your Validator. In short, this name is part of your branding.

<x-alert type="success">
See the current list of active, standby, and resigned Validators in the ARK Block Explorer's ['Delegate Monitor'](https://explorer.ark.io/delegate-monitor).
</x-alert>

**Validator Username Requirements**:

* 1 character min.
* 20 characters max.
* permitted special characters: `!`, `@`, `$`, `&`, or `_`.
* no space character or other special characters are permitted.

---

When you're ready, click the **'Continue'** button to proceed.

<div style="width: 500px; float: inherit; margin: auto">

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-validator-reg-details.png)

</div>

<x-alert type="success">
Learn more about ARK transaction fees by visiting the ['ARK Fees'](/docs/wallet/transactions/ark/fees) documentation page.
</x-alert>

### Reviewing your Registration

You'll now be allowed to review your registration details for errors.

If everything looks correct, click the **'Continue'** button to proceed.

<div style="width: 500px; float: inherit; margin: auto">

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-validator-reg-review.png)

</div>

### Authenticating your Registration

Finally, before sending, you'll be asked to sign the transaction using your wallet's credentials (e.g. mnemonic recovery phrase, secret phrase, encryption password, etc).

Enter your signing credentials in the provided field, then click the **'Send'** button when you're ready to broadcast your transaction.

<div style="width: 500px; float: inherit; margin: auto">

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-validator-reg-authenticate.png)

</div>

### Success

Congrats! You've just registered as an ARK Validator!

<div style="width: 500px; float: inherit; margin: auto">

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-validator-reg-sent.png)

</div>

## Resigning a Validator

The Validator Resignation transaction gives the ability to withdraw from participating in network consensus. This means you will no longer be able to receive votes or enter a forging position.

<x-alert type="danger">
**This is permanent.** This wallet will **not** be allowed to register as a Validator once you have resigned. Additionally, a Validator's username may **not** be used again for registration, neither by the original Validator nor by any other prospective Validator.
</x-alert>

### Getting Started

To get started, click the 3-button menu of the wallet from which you'd like to resign as a Validator, then select **'Resign Delegate'** from the drop-down menu.

<div style="width: 300px; float: inherit; margin: auto">

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-validator-res-menu-focus.png)

</div>

### Reviewing your Resignation

Next, you'll be asked to verify the details of your Validator's resignation.

If everything looks correct, click the **'Continue'** button to proceed.

|                                         Resignation Details                                         |                                         Resignation Review                                         |
| :-------------------------------------------------------------------------------------------------: | :------------------------------------------------------------------------------------------------: |
| ![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-validator-res-details.png) | ![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-validator-res-review.png) |

<x-alert type="success">
Learn more about ARK transaction fees by visiting the ['ARK Fees'](/docs/wallet/transactions/ark/fees) documentation page.
</x-alert>

### Authenticating your Resignation

Finally, before sending, you'll be asked to sign the transaction using your wallet's credentials (e.g. mnemonic recovery phrase, secret phrase, encryption password, etc).

Enter your signing credentials in the provided field, then click the **'Send'** button when you're ready to broadcast your transaction.

<div style="width: 500px; float: inherit; margin: auto">

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-validator-res-authenticate.png)

</div>

### Success

You've successfully resigned as an ARK Validator!

<div style="width: 500px; float: inherit; margin: auto">

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-validator-res-sent.png)

</div>
