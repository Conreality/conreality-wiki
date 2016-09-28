* http://developer.parrot.com/docs/SDK3/#general-information

## Installation

* http://developer.parrot.com/docs/SDK3/#download-all-sources
* http://developer.parrot.com/docs/SDK3/#how-to-build-the-sdk
* http://developer.parrot.com/docs/SDK3/#general-build

    $ sudo apt install repo

    $ sudo mkdir -p /opt/parrot && sudo chown $USER:staff /opt/parrot
    $ cd /opt/parrot
    $ repo init -u https://github.com/Parrot-Developers/arsdk_manifests.git

    $ time ./build.sh -p arsdk-native -t build-sdk -j

## Examples

* https://github.com/Parrot-Developers/Samples

    $ export SDK=/opt/parrot
