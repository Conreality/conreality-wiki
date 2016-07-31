Getting Started
---------------

These instructions will help you get set up with a local Conreality
development environment such that you will be able to build the whole
project from source and to contribute improvements to the project.

### Installation

Conreality development requires [[Erlang/OTP|Erlang]], [[Elixir]], and
[[Nerves]].

#### Ubuntu

The quickest way to get set up with Erlang and Elixir on Ubuntu is using the
package repository from [Erlang
Solutions](https://www.erlang-solutions.com/resources/download.html):

    $ wget https://packages.erlang-solutions.com/erlang-solutions_1.0_all.deb
    $ sudo dpkg -i erlang-solutions_1.0_all.deb
    $ sudo apt-get update
    $ sudo apt-get install erlang
    $ sudo apt-get install elixir

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

### Post-Installation

https://hexdocs.pm/nerves/installation.html

    $ mix local.hex
    $ mix local.rebar

    $ mix archive.install https://github.com/nerves-project/archives/raw/master/nerves_bootstrap.ez

Developer Manuals
-----------------

* [Application Programming Interface (API)](https://api.conreality.org)
* [Driver Development Kit (DDK)](https://ddk.conreality.org)
* [Software Development Kit (SDK)](https://sdk.conreality.org)
