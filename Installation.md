Install from Binary Packages
----------------------------

### Ubuntu 14.04 LTS (Trusty Tahr)

Import the public key used to sign the distributed
[[binary packages|Debian Packages]]:

    $ curl -s https://apt.conreality.org/keys/current.asc | sudo apt-key add -

Add the APT repository used to distribute binary packages:

    $ sudo apt-add-repository -y 'deb http://apt.conreality.org/ubuntu trusty main'
    $ sudo apt-get update

Install the Conreality [[server daemon|Server Daemon]] and command-line tools:

    $ sudo apt-get install -y conreality

### Debian 8.2 (Jessie)

(Coming soon.)

Install from Source Code
------------------------

Please refer to the Conreality
[README](https://github.com/conreality/conreality/blob/master/README.rst)
file for instructions on how to build and install the latest release
directly from source code.
