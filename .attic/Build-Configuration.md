Custom Location
---------------

By default, `make install` will install all the files in `/usr/local/bin`,
`/usr/local/lib` etc. You can specify an installation prefix other than
`/usr/local` using `--prefix`, for instance:

    $ ./configure --prefix=/opt/conreality

Optional Features
-----------------

### `--disable-compile`

Do not use the native code compiler for target.

### `--enable-coverage`

Instrument binaries for code coverage reporting.

### `--enable-debug`

Instrument binaries with debugging support.

### `--enable-develop`

Build development packages and a custom OCaml toplevel.

Environment Variables
---------------------

    CC          C compiler command
    CFLAGS      C compiler flags
    LDFLAGS     linker flags, e.g. -L<lib dir> if you have libraries in a
                nonstandard directory <lib dir>
    LIBS        libraries to pass to the linker, e.g. -l<library>
    CPPFLAGS    C/C++ preprocessor flags, e.g. -I<include dir> if
                you have headers in a nonstandard directory <include dir>
    CPP         C preprocessor
    CXX         C++ compiler command
    CXXFLAGS    C++ compiler flags
    CXXCPP      C++ preprocessor

Cross-Compilation
-----------------

    $ ./configure --help

    ...

    System types:
      --build=BUILD     configure for building on BUILD [guessed]
      --host=HOST       cross-compile to build programs to run on HOST [BUILD]
