This page will describe the software architecture.

Sandboxing
----------

We need to be able to safely and effectively utilize external software
packages, written in a great variety of programming languages and without
question containing bugs and security vulnerabilities. We treat them as
black boxes that we feed input, and only care about the output.
