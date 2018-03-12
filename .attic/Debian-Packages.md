[[Packages]] are currently available for Ubuntu 14.04 LTS (Trusty Tahr).
Packages for Debian 8.2 (Jessie) are in the works.

Binary packages currently target the 64-bit PC (`amd64`) architecture.
Binary packages for the [[Raspberry Pi]] (`armv6l`) and 32-bit ARM (`armhf`)
are in the works.

Package Repositories
--------------------

### Binary Packages

    # Debian 8.x (Jessie)
    deb http://pkg.conreality.org/debian jessie main

    # Ubuntu 14.04 LTS (Trusty Tahr)
    deb http://pkg.conreality.org/ubuntu trusty main

### Source Packages

    # Debian 8.x (Jessie)
    deb-src http://pkg.conreality.org/debian jessie main

    # Ubuntu 14.04 LTS (Trusty Tahr)
    deb-src http://pkg.conreality.org/ubuntu trusty main

Package List
------------

    $ aptitude search conreality
    p   conreality                   - Augmented-reality wargame
    p   conreality-dev               - Augmented-reality wargame (development)
    p   conreality-doc               - Augmented-reality wargame (documentation)

Package Descriptions
--------------------

### `conreality`

    $ aptitude show conreality
    Package: conreality
    State: installed
    Automatically installed: no
    Version: 0.0.0-1
    Priority: extra
    Section: electronics
    Maintainer: Arto Bendiken <arto@bendiken.net>
    Architecture: amd64
    Uncompressed Size: 3,110 k
    Depends: liblua5.1-0, libopencv-core2.4, libc6 (>= 2.15)
    Suggests: conreality-doc (= 0.0.0-1)
    Description: Augmented-reality wargame
     Program binaries for the Conreality wargame.
    Homepage: https://conreality.org

### `conreality-dev`

    $ aptitude show conreality-dev
    Package: conreality-dev
    State: installed
    Automatically installed: no
    Version: 0.0.0-1
    Priority: extra
    Section: devel
    Maintainer: Arto Bendiken <arto@bendiken.net>
    Architecture: amd64
    Uncompressed Size: 335 k
    Depends: conreality (= 0.0.0-1), libc6 (>= 2.15), liblua5.1-0, libtinfo5
    Enhances: conreality (= 0.0.0-1)
    Description: Augmented-reality wargame (development)
     Developer resources for the Conreality wargame.
    Homepage: https://conreality.org

### `conreality-doc`

    $ aptitude show conreality-doc
    Package: conreality-doc
    State: installed
    Automatically installed: no
    Version: 0.0.0-1
    Priority: extra
    Section: doc
    Maintainer: Arto Bendiken <arto@bendiken.net>
    Architecture: all
    Uncompressed Size: 26.6 k
    Suggests: conreality
    Enhances: conreality (= 0.0.0-1)
    Description: Augmented-reality wargame (documentation)
     Documentation for the Conreality wargame.
    Homepage: https://conreality.org
