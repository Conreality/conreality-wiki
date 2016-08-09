Introduction
------------

Getting Started
---------------

These instructions will help you get set up with a local Conreality
development environment such that you will be able to build the whole
project from source and to contribute improvements to the project.

### Installation (System-Specific)

Conreality development requires a Unix system with the [[Erlang/OTP|Erlang]]
platform, the [[Elixir]] compiler and tooling, and the [[Nerves]] framework.

#### Ubuntu

The quickest way to get set up with Erlang and Elixir on Ubuntu is using the
package repository from [Erlang
Solutions](https://www.erlang-solutions.com/resources/download.html):

    $ wget https://packages.erlang-solutions.com/erlang-solutions_1.0_all.deb
    $ sudo dpkg -i erlang-solutions_1.0_all.deb
    $ sudo apt-get update
    $ sudo apt-get install erlang
    $ sudo apt-get install elixir

We recommend [Ubuntu 16.04 LTS (Xenial Xerus)](http://releases.ubuntu.com/16.04/)
as a known-good development environment; most of the core team use this.

#### MacOS

The quickest way to get set up with Erlang and Elixir on Macs is using
[Homebrew](http://brew.sh):

    $ brew update
    $ brew install erlang
    $ brew install elixir
    $ brew install fwup squashfs coreutils

Alternatively, download Erlang and Elixir disk images from [Erlang
Solutions](https://www.erlang-solutions.com/resources/download.html)
and [install fwup](https://github.com/fhunleth/fwup#installing) according to
its upstream installation instructions.

#### Windows

At present, the best option for Windows users is to get set up with a Ubuntu
16.04 virtual machine (VM) using
[VirtualBox](https://en.wikipedia.org/wiki/VirtualBox).

#### Other

For other varieties of Linux than Ubuntu, or other Unix systems, please
refer to the upstream
[Erlang](https://www.erlang-solutions.com/resources/download.html),
[Elixir](http://elixir-lang.org/install.html), and
[Nerves](https://hexdocs.pm/nerves/installation.html) installation guides.

### Installation (Generic)

After installing Erlang and Elixir, make sure to update your versions of the
`hex` and `rebar` package and build tools:

    $ mix local.hex
    $ mix local.rebar

In case you're wondering, the `mix` utility was installed as part of Elixir.

As a final step, install the Nerves bootstrap and tooling:

    $ mix archive.install https://github.com/nerves-project/archives/raw/master/nerves_bootstrap.ez

### Development Environment

    $ git clone https://github.com/conreality/conreality.git
    $ cd conreality

    $ NERVES_TARGET=rpi mix deps.get

### Building the Firmware Image

    $ NERVES_TARGET=rpi mix firmware

### Burning the Firmware Image

    $ NERVES_TARGET=rpi mix firmware.burn

Developer Manuals
-----------------

* [Application Programming Interface (API)](https://api.conreality.org)
* [Driver Development Kit (DDK)](https://ddk.conreality.org)
* [Software Development Kit (SDK)](https://sdk.conreality.org)
