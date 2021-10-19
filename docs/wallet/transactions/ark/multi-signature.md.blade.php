---
title: ARK - Registering a Multisignature Wallet
---

# ARK: Registering a Multisignature Wallet

By utilizing Schnorr Signatures - multiple signatures and their corresponding keys can be aggregated into one. This enables the creation of transactions that must be authorized by a minimum number of participants (signatures).

**key facts**:

* This is considered a _**m**_ of _**n**_, or threshold, multisignature scheme (_**m**_ <= _**n**_). This means that out of _**n**_ participants, at least _**m**_ (the threshold) participants are required to sign a transaction for it to be valid.
* Multisignature Wallets must have a minimum of 2, max of 16 total participants (_**n**_).
* Multisignature Wallets with only 2 participants will require both participant signatures.
* The result of a Multisignature Registration is a shared wallet with an associated Multisignature Address.

---

On this page:

* [Registration & Spending Process Overview](#process-overview)
* [Registering a Multisignature Wallet](#registering-a-multisignature-wallet)
* [Importing a Multisignature Wallet](#importing-a-multisignature-wallet)
* [Using a Multisignature Wallet](#using-a-multisignature-wallet)

## Process Overview

An overview of the process of creating and spending from a Multisignature Wallet.

**[Registration](#registering-a-multisignature-wallet)**:

1. Participant #1 adds a number of participants (_**n**_) and minimum number signatures required (threshold _**m**_) to the registration transaction.
2. Each of _**n**_ participants signs the registration transaction.
3. Participant #1 adds the final signature to the registration transaction.
4. Participant #1 broadcasts the registration transaction (containing all of _**n**_ signatures _plus_ the final signature) to the network. This produces a Multisignature Address.

**[Import](#importing-a-multisignature-wallet)**:

1. Each participant imports the shared Multisignature Wallet using its resultant Address.

**Funding**:

1. Someone must now fund the shared Multisignature Wallet.

**[Spending](#using-a-multisignature-wallet)** _(after receiving funds)_:

1. Any 1 of the _**n**_ participants initiates a new transaction from the imported shared Multisignature Wallet.
2. Each of _**m**_ participants signs the new transaction.
3. Any 1 of the _**n**_ participants broadcasts the transaction (containing a minimum of _**m**_ signatures) to the network.

## Registering a Multisignature Wallet

Any wallet may initiate the process of creating a Multisignature Wallet by adding a number of participants to a Multisignature Registration transaction.

### Getting Started

To get started, click the 3-button menu of the wallet from which you'd like to register a new Multisignature Wallet, then select **'Multisignature'** from the drop-down menu.

### Entering the Registration Details

Using the wallet from which you wish to initiate the registration, add a number of participants (_**n**_) to the transaction and set the threshold (_**m**_).

There must be a minimum of 2, max of 16 total participants, including your wallet.

Once all participants (_**n**_) have been added and the threshold (_**m**_) has been set, click the **'Continue'** button.

### Reviewing the Initial Registration

You will now be able to review the registration details for errors.

If everything looks correct, click the **'Continue'** button to proceed.

### Authorizing the Initial Registration

Next, you'll enter your signing credentials.

This does not yet create the Multisignature Wallet but verifies for the other participants that the registration originates from your wallet.

After entering your signing credentials, click the **'Send'** button.

Other participants will now be able to add their signatures to the registration transaction.

### Collecting Signatures

Each of _**n**_ participants will now see the Multisignature Registration pending in their wallet.

**Participant Review**:

Each participant may then click the **'Sign'** button next to the pending registration.

---

After reviewing the registration's details, they may click **'Sign'** to proceed with authenticating the registration.

**Participant Authentication**:

Each participant may now enter their signing credentials to authorize their participation.

After entering their credentials, each participant may now click the **'Continue'** button.

---

Each participant will now be able to see which other participants have and have not yet signed.

### Reviewing the Final Registration

Once all of _**n**_ participants have added their signatures to the registration transaction, the pending registration will have a status of **'Awaiting Final Signature'**.

This final signature must come from the wallet you used to initiate the Multisignature Registration.

Click the **'Sign'** button next to the pending registration to proceed.

<x-alert type="warning">
The final signature **cannot** be added unless _all_ of _**n**_ participants have added their signature to the registration transaction.
</x-alert>

---

You'll now be able to review the registration's details for errors.

If everything looks correct, click the **'Sign'** button to continue with registration.

### Authenticating the Finalized Registration

You'll now be able to enter the final signature.

This signature is essentially the final approval of the registration and all of its details.

Enter your signing credentials and click the **'Continue'** button.

### Broadcasting the Registration

From any participating wallet, the registration should now have a status of **'Ready to Broadcast'**.

---

Any 1 of _**n**_ participants may now click this status to do a final review of the registration's details before clicking the **'Send'** button to broadcast it to the network.

### Success

Congrats! You've successfully registered a Multisignature Wallet!

## Importing a Multisignature Wallet

After creating a Multisignature Wallet, each participant may import the shared wallet using its associated Address.

This shared Multisignature Address may be found in the details of its registration.

---

Import the address as directed on the '[Importing a Wallet](/docs/wallet/wallets/import)' documentation page.

## Using a Multisignature Wallet

From the imported Multisignature Wallet, any 1 of _**n**_ participants may initiate a regular transaction.

### Getting Started

Using the imported Multisignature Wallet, create a transaction as you would from any other wallet.

### Entering the Transaction Details

Next, enter the transaction's details and click the **'Continue'** button.

### Reviewing the Initial Transaction

You'll now be able to review the transaction for errors.

If everything looks correct, click the **'Continue'** button to proceed.

### Collecting Signatures

Each of _**n**_ participants will now see a Multisignature transaction pending in their wallet.

**Participant Review**:

Each participant may then click the **'Sign'** button next to the pending Multisignature transaction.

---

After reviewing the details, they may click **'Sign'** to proceed with authenticating the transaction.

**Participant Authentication**:

Each participant may now enter their signing credentials to authorize the transaction.

After entering their credentials, each participant may now click the **'Continue'** button.

---

Each participant will now be able to see which other participants have and have not yet signed.

### Reviewing the Final Transaction

Once at least _**m**_ of _**n**_ participants have added their signatures to the transaction, the pending transaction will have a status of **'Ready to Broadcast'**.

### Broadcasting the Transaction

<x-alert type="warning">
If the threshold of _**m**_ signatures is not met, the transaction is invalid and cannot be broadcast.
</x-alert>

After verifying the transaction's details are correct, click the **'Send'** button to broadcast the fully-signed transaction to the network.

### Success

Congrats! You've successfully sent a Multisignature Transaction!
