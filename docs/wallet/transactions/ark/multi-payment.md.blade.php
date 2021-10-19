---
title: ARK - Sending Multi-Payments
---

# ARK: Sending Multi-Payments

This type is designed to reduce the payload on the blockchain by enabling multiple payments to be combined and broadcast to the network as a single transaction. This benefits the end-user and Validators by lowering transaction fees per payment and reducing congestion. Currently, ARK's Mainnet will support combining up to 64 payments within a single transaction.

## Getting Started

While inside the wallet from which you'd like to send funds, click the **'Send'** button at the top right of the Payvo Wallet to get started.

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-multipayment-focus.png)

## Entering the Multi-Payment Details

Here you will be able to enter various details about the Multi-Payment transaction you'd like to send.

* **Recipients**:
  * The destination addresses to which you will be sending funds.
  * Make sure you're using the correct recipient addresses. Sending to the wrong addresses typically means a loss of funds.
  * You may send to 2 or more recipients, up to 64 in total.
  * To learn how to send to a single recipient, visit the '[Transfer](/docs/wallet/transactions/ark/transfer)' documentation page.
* **Amount**:
  * The total amount of ARK you'd like to send for each recipient.
* **Memo**:
  * Also known as the VendorField for ARK.
  * This is an optional field that allows up to 255 characters.
  * Users may include public messages here.
  * Only one memo is allowed per transaction. i.e. If a memo is set, all recipients will be able to see it.
* **Fee**:
  * A Multi-Payment fee covers the cost of the transaction regardless of how many participants are added.
  * This is the cost of sending a transaction and is rewarded to the Validator who forges your transaction.
  * You may select a slow, average, fast, or custom fee.

<x-alert type="success">
Learn more about ARK transaction fees by visiting the ['ARK Fees'](/docs/wallet/transactions/ark/fees) documentation page.
</x-alert>

## Adding Recipients

Enter the address and amount to be sent for a particular recipient, then click the **'Add Recipient'** button to include additional recipients.

You may add up to 64 total recipients for ARK Mainnet Multi-Payments.

| Example 1 | Example 2 |
| :-------: | :-------: |
| ![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-multipayment-send-1.png) | ![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-multipayment-send-2.png) |

---

Once you have entered the desired recipient addresses and associated amounts, click the **'Continue'** button to proceed.

If an entry is wrong, you may also click the **'Delete'** button next to the item you'd like to remove.

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-multipayment-send-added.png)

## Reviewing the Multi-Payment

Next, you'll be allowed to review all of your Multi-Payment details for errors.

When you've verified that your details are correct, click the **'Continue'** button to proceed.

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-multipayment-review.png)

## Authenticating the Multi-Payment

Finally, before sending, you'll be asked to sign the transaction using your wallet's credentials (e.g. mnemonic recovery phrase, secret phrase, encryption password, etc).

Enter your signing credentials in the provided field, then click the **'Send'** button when you're ready to broadcast your transaction.

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-multipayment-authenticate.png)

## Success

Congrats! You've just sent an ARK Multi-Payment transaction!

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-multipayment-sent.png)
