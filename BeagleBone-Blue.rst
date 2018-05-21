* http://beagleboard.org/blue
* https://github.com/beagleboard/beaglebone-blue
* `https://github.com/beagleboard/beaglebone-blue/wiki/Frequently-Asked-Questions-(FAQ)`
* https://github.com/beagleboard/beaglebone-blue/wiki/Pinouts
* https://github.com/beagleboard/beaglebone-blue/wiki/Accessories
* http://wiki.seeedstudio.com/BeagleBone_Blue/

Specifications
==============

* https://github.com/beagleboard/beaglebone-blue/blob/master/BeagleBone_Blue_sch.pdf
* Dimensions: 175mm × 112mm × 40mm
* Weight: 36g
* GPS Connector: `6-pin JST SH with 1mm pitch <https://www.sparkfun.com/products/9123>`__

Usage
=====

* Connecting over USB::

  Terminal:
  $ ssh 192.168.7.2 -l debian

  Browser:
  http://192.168.7.2

  Cloud9 IDE:
  http://192.168.7.2:3000


* Test motors::

  $ sudo rc_rest_motors -c {Channel}[1 - 4] -p {Duty cycle}[-1.0 - 1.0]

Libraries
=========

* Python

  * https://github.com/mcdeoliveira/rcpy::

    $ sudo apt update && sudo apt install autoconf-archive roboticscape
    $ sudo apt install python3 python3-pip
    $ sudo pip3 install rcpy

  * https://github.com/mcdeoliveira/pyctrl::

    $ sudo apt install python3 python3-pip python3-numpy python3-scipy
    $ sudo pip3 install pyctrl

  * https://github.com/adafruit/adafruit-beaglebone-io-python::

    $ sudo apt update && sudo apt install build-essential python-dev python-pip -y
    $ sudo pip install Adafruit_BBIO

Books
=====

* http://beagleboard.org/cookbook
* https://www.packtpub.com/hardware-and-creative/beaglebone-robotic-projects-second-edition
* https://github.com/jadonk/BeagleBone-Robotic-Projects-Second-Edition

Tutorials
=========

* https://github.com/mirkix/ardupilotblue
* https://dronerai.de/
* https://dronerai.de/2017/04/23/getting-started-beaglebone-blue/
* https://dronerai.de/2017/04/30/install-ardupilot-on-beaglebone-blue/
* https://dronerai.de/2017/06/04/assembling-a-setup-part-1/

Distributors
============

* `Arrow <https://www.arrow.com/en/products/bbblue/beagleboardorg>`__ (USA)
* `Digi-Key <https://www.digikey.com/product-detail/en/ghi-electronics-llc/BBBLE-SC-568/BBBLE-SC-568-ND/7071862>`__ (USA)
* `Element14 <https://www.element14.com/community/docs/DOC-84044>`__ (EU)
* `Mouser <https://eu.mouser.com/new/beagleboardorg/beaglebone-blue/>`__ (EU)

Retailers
=========

* `SeeedStudio <https://www.seeedstudio.com/BeagleBone-Blue-p-2809.html>`__ (CN)
