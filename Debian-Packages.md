Package Repositories
--------------------

    # Debian 8.x (Jessie)
    deb http://apt.conreality.org/debian jessie main

    # Ubuntu 14.04 LTS (Trusty Tahr)
    deb http://apt.conreality.org/ubuntu trusty main

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
