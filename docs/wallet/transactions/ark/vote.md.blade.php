---
title: ARK - Voting for Validators
---

# ARK: Voting for Validators

A key feature of the ARK DPoS model is that each address can vote for one Validator of their choosing to secure the network. Vote and unvote transaction type is, therefore, necessary to enable this functionality. Once an address votes for a Validator, funds can enter and leave the address as needed, and vote weight adjusts automatically. Voting does not send funds to the Validator's ARK address in question - it only assigns vote weight

Holders of ARK vote through their wallets for Validators who secure the network, insert blocks into the ledger and create new ARK. The top 51 vote earners are nominated into forging Validators. The number of Validators is related to **[DPOS mechanism configuration](https://whitepaper.ark.io/public-network#4-2-consensus-mechanism)**.

---

**1 ARK address can vote for only one Validator at a time:**

> If you wish to vote for more than one Validator you can create multiple wallets, split your ARK among those wallets and vote for a different Validator with each wallet. For example, if you have 1000 ARK, you can vote for one Validator with all of your ARK in one wallet, or you can divide your ARK into two wallets of 500 ARK each and vote for two different Validator. You can create as many wallets as you want and divide your ARK among them in any proportion you choose.

**1 ARK equals a voting weight of 1:**

> The more ARK you hold, the more voting weight you possess. If you split your ARK into multiple wallets, your voting power divides proportionally among those wallets. For example, if you have 1,000 ARK your voting power is equal to 1,000 ARK. If you split your ARK into two wallets, each will have a voting power of 500 ARK.

**Each vote or un-vote comes with a fee:**

> Each transaction in the ARK network costs a certain amount of ARK. With the implementation of dynamic fees, this cost will become adjustable. You can choose how much you want to spend for each specific transaction, even for voting and for un-voting.

## Vote Types

There are 3 types of votes that a user can make:

* **Vote**: Voting for a Validator from a wallet that is **not** currently voting.
* **Unvote**: Removing your vote for a Validator from a wallet that **is** currently voting.
* **Switch-Vote**: Switching your vote from your current Validator to another Validator.

## Getting Started

While inside the wallet you'd like to use for voting, click the **'Vote'** button.

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-vote-single-focus.png)

## Validator Selection

In this section, you will opt to either **Vote** for a Validator, **Unvote** the Validator you currently vote for, or **Switch** your **Vote** to a new Validator.

<x-alert type="info">
Different Validators offer different proposals in exchange for your vote. Some are public, some are private. Some share commissions or services, Some do not.
</x-alert>

<x-alert type="success">
_For more about ARK Validator and their contributions, visit: [https://arkdelegates.live](https://arkdelegates.live)_
</x-alert>

### Validator Selection: Voting

When not already voting, you can use this list to find and select the Validator of your choosing. Afterward, the button next to their name should now show **'Selected'**.

When you're ready to proceed, click the **Continue** button.

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-vote-single-delegate-selected.png)

### Validator Selection: Unvoting

If you'd like to remove your vote, find and select on your current Validator. Afterward, the button next to their name should now show **'Unselected'**.

When you're ready to proceed, click the **Continue** button.

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-vote-unvote-delegate-selected.png)

### Validator Selection: Vote Switching

If you're already voting for a Validator and simply wish to vote for a new Validator, find and select the new Validator of your choosing. Afterward, the button next to your current Validator will show **'Unselected'** while your newly-selected Validator will show **'Selected'**.

When you're ready to proceed, click the **Continue** button.

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-vote-switch-delegate-selected.png)

## Setting the Fee

Here, you'll be able to specify the fee for your transaction. It's typically best to leave this fee set as **'Average'** unless instructed to do otherwise.

<x-alert type="success">
Learn more about ARK transaction fees by visiting the ['ARK Fees'](/docs/wallet/transactions/ark/fees) documentation page.
</x-alert>

---

When you're ready to proceed, click the **Continue** button.

| Vote        |
| :---------: |
| ![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-vote-single-continue.png) |

| Unvote      |
| :---------: |
| ![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-vote-unvote-continue.png) |

| Switch-Vote |
| :---------: |
| ![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-vote-switch-continue.png) |

## Reviewing your Vote

Next, you’ll be allowed to review your **Vote**, **Unvote**, or **Switch-Vote** details for errors.

When you’ve verified that the details are correct, click the **‘Continue’** button to proceed.

| Vote        |
| :---------: |
| ![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-vote-single-review.png) |

| Unvote      |
| :---------: |
| ![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-vote-unvote-review.png) |

| Switch-Vote |
| :---------: |
| ![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-vote-switch-review.png) |

## Authenticating your Vote

Finally, before sending, you'll be asked to sign the transaction using your wallet's credentials (e.g. mnemonic recovery phrase, secret phrase, encryption password, etc).

Enter your signing credentials in the provided field, then click the **'Send'** button when you're ready to broadcast your transaction.

![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-vote-single-authenticate.png)

## Success

Congrats! You've successfully cast a **Vote**, **Unvote**, or **Switch-Vote**!

| Vote        |
| :---------: |
| ![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-vote-single-sent.png) |

| Unvote      |
| :---------: |
| ![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-vote-unvote-sent.png) |

| Switch-Vote |
| :---------: |
| ![](/storage/docs/docs/wallet/assets/transactions/transactions-ark-vote-switch-sent.png) |
