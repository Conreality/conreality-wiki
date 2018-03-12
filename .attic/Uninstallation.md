Uninstall Binary Packages
-------------------------

### Ubuntu 14.04 LTS (Trusty Tahr)

    $ sudo apt-get purge -y conreality conreality-doc conreality-dev
    $ sudo apt-add-repository -y -r 'deb http://pkg.conreality.org/ubuntu trusty main'
    $ sudo apt-get update

### Debian 8.2 (Jessie)

    $ sudo apt-get purge conreality conreality-doc conreality-dev
    $ sudo apt-add-repository -y -r 'deb http://pkg.conreality.org/debian jessie main'
    $ sudo apt-get update
