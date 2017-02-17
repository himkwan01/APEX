# Project 5 - Encryption

Time spent: **7** hours spent in total

## User Stories

The following **required** functionality is completed:

1\. Symmetric Encrypt/Decrypt
  * [x]  Required: Repair the symmetric encrypt and decrypt code

2\. Encrypted Message 1
  * [x]  Required: Decrypt the government message
  * [x]  Required: Encrypt a response and include in this README
          Response: Jub9OpgrYAlk4enO3DeXNVyPpSuUaa8wpzuWZM3Y8bo=

3\. Generate Public-Private Keys
  * [x]  Required: Repair the key generator code
  * [x]  Required: Generate keys for "johnsteed" and add him to the Agent Directory

4\. Asymmetric Encrypt/Decrypt
  * [x]  Required: Repair the asymmetric encrypt and decrypt code

5\. Create/Verify Signature
  * [x]  Required: Repair the create and verify signature code
  
6\. Encrypted Message 2
  * [x]  Required: Decrypt the message
  * [x]  Required: Verify the message
  * [x]  Required: Include a response message in this README
         Message:
5Fm8Q6ZFxC68QYPr80zgHUXU6T4uGFAmVQtGQOIy1Xk19lx0RW2phL0MSdUAshBvNC3gK/jkMcUNCT73iL676SB7tgIS/2nyijYEOvlcdK4YWfIMHAyxrA3jLnZgmsk5nuSI/Y9tADEZvWyzEwvh1KYVgk/trZqCXxxditrNOqFaGVjsew5e+hMbFo1UYuNaC8XIKYZ8cqd6XcpltsK+cOubkI8NS93a43pom9Sa69+Jlk7x4uZ8pp2LI5aunhOTDeoERqtPq+SDCJ7ZFASw5IDKzR5u/1qz8pX5UYHOGU900wJ6RauMnnn0fc1Q+pzc3To+omBqg7epmQETw89UZw==

Signature:
bekC/rGOpb14SrDHUtqAX8AgdudGMI+Hw8TxTMx4i8/2/pS2eWNIi1lvAPoVyYc5DWtVJcoUbxelABHmRofVUEodkeGwdtJJLhD7AE3M/xQ8C7X8ZwcX77tUgzalovMZ4SWR6rOqXnZELfOFY5BtSOlPPiWUsdt0NY3XrAqbJE5zVX/x/d+ZlvI1GwqxJAKuBMdgvaHrpnH1TQ3WBtnZ9xirwF8Rv55h/NcV4scgkrJ0Xgij8dLnKIxwo3E4C+nX8MbPyDRLLyWV1wHdMMNnC/xsdMBCxuFfV4YwOnWU9laaCalmkFuODO1N+40tDBNzEtApKfUPx/3CjsbD7aYP+w==

7\. Agent Messages
  * [x]  Required: Repair the dropbox code
  * [x]  Required: Repair the messages area
  * [x]  Required: Display encrypted messages for all agents
  * [x]  Required: Messages indicate whether the message signature is valid
  * [x]  Required: Your messages are automatically decrypted

8\. Identify the Double Agent
  * [x]  Required: Decrypt as many email messages as possible</br>
         Email 1: The SQL injection we discussed is in place. Just search for an agent.</br>
         Email 2:</br>
         Email 3: Today I was able to sneak several XSS vulnerabilities onto one of the encrypt/decrypt pages.</br>
         Email 4:</br>
         Email 5: Let me know before you go inside. I'll create a distraction. - Austin</br>
         Email 6: Let me know before you go inside. I'll create a distraction. - Natasha</br>
  * [x]  Required: Identify the double agent: Natasha
         Email 5 signature is not valid, while email 6 signature is valid.

The following objectives are **optional**:

* Bonus Objective 1\.
  * [ ]  Track down the bugs in the code and fix them.

* Bonus Objective 2\.
  * [ ]  Write a report of your discoveries (longer than 300 characters).
  * [ ]  Compose a secure email for sending over an insecure network.
  * [ ]  Include the email with your encrypted report in this README.

* Bonus Objective 3\.
  * [ ]  Add a "Create/Verify Checksum" section to the Encryption Tools area.

* Advanced Objective 1\.
  * [ ]  Add support for other symmetric algorithms.

## Video Walkthrough

Here's a walkthrough of implemented user stories:

<img src='http://i.imgur.com/8cB65s5.gif' title='Video Walkthrough' width='' alt='Video Walkthrough' />

GIF created with [LiceCap](http://www.cockos.com/licecap/).

## Notes

Describe any challenges encountered while building the app.

## License

    Copyright 2017 Tsz Him Kwan

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.
