---
title: ARK - Sending Transfers
---

# ARK: Sending Transfers

An ARK Transfer allows a user to broadcast a transaction to the network sending ARK tokens from one ARK wallet to another. This transaction type provides the utility of store-of-value and value transfer. It also contains a special data field of 255 bytes called the VendorField, allowing raw data, code, or plain text to be stored on the blockchain. The Memo (also known as a VendorField for ARK) is public and immutable and is also utilized in ARK SmartBridge Technology.

## Getting Started

While inside the wallet from which you'd like to send funds, click the **'Send'** button at the top right of the Payvo Wallet to get started.

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-transfer-single-focus.png)

## Entering the Transfer Details

Here you will be able to enter various details about the transfer you'd like to send.

* **Recipient**:
  * The destination address to which you will be sending funds.
  * Make sure you're using the correct recipient address. Sending to the wrong address typically means a loss of funds.
  * You may send to single or multiple recipients.
  * To learn how to send to multiple recipients, visit the '[Multi-Payment](/docs/wallet/transactions/ark/multi-payment)' documentation page.
* **Amount**:
  * The total amount of ARK you'd like to send.
* **Memo**:
  * Also known as the VendorField.
  * This is an optional field that allows up to 255 characters.
  * Users may include public messages here.
* **Fee**:
  * This is the cost of sending a transaction and is rewarded to the Validator who forges your transaction.
  * You may select a slow, average, fast, or custom fee.

<x-alert type="success">
Learn more about ARK transaction fees by visiting the ['ARK Fees'](/docs/wallet/transactions/ark/fees) documentation page.
</x-alert>

---

When you're finished entering your Transfer's details, click the **'Continue'** button to proceed.

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-transfer-single-send.png)

## Reviewing the Transfer

Next, you'll be allowed to review all of your Transfer's details for errors.

When you've verified that your transaction details are correct, click the **'Continue'** button to proceed.

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-transfer-single-review.png)

## Authenticating the Transfer

Finally, before sending, you'll be asked to sign the transaction using your wallet's credentials (e.g. mnemonic recovery phrase, secret phrase, encryption password, etc).

Enter your signing credentials in the provided field, then click the **'Send'** button when you're ready to broadcast your transaction.

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-transfer-single-authenticate.png)

## Success

Congrats! You've just sent an ARK Transfer transaction!

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-transfer-single-sent.png)
