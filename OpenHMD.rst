* http://www.openhmd.net

* https://vrwiki.wikispaces.com/OpenHMD

Usage
=====

To compile and install the OpenHMD on Ubuntu all you need to do is::

  $ git clone https://github.com/OpenHMD/OpenHMD.git

  $ cd OpenHMD

  $ ./autogen.sh

  $ ./configure --enable-openglexample

  $ make

  $ sudo make install

To get your HMD working you need to update the udev rules with the
following, if you're using hidapi with hidraw::

  $ sudo echo 'KERNEL=="hidraw*", ATTRS{busnum}=="1", ATTRS{idVendor}=="XXXX", MODE="0666", GROUP="plugdev"' >> /etc/udev/rules.d/83-hmd.rules && udevadm control --reload-rules

Or if you're using hidapi with libusb::

  $ sudo echo 'SUBSYSTEM=="usb", ATTR{idVendor}=="XXXX", MODE="0666", GROUP="plugdev"' >> /etc/udev/rules.d/83-hmd.rules && udevadm control --reload-rules

Replace the idVendor XXXX with the correct code from the following
list, if there is two for one device you need to add them both::

* Oculus - 2833
* Vive - 0bb4 - 28de
* OSVR - 1532
* Deepoon - 0483
* Sony PSVR - 054c
* Pimax 4K - 2833 - 0483
* NOLO CV1 - 0483

Next you need to update your xorg.conf (typically in /etc/X11/), to
allow displaying in the HMD, add this::

  Option "AllowHMD" "Yes"

To get everything working, connect the HMD HDMI and USB, give the HMD
power, and reboot the computer. Your HMD should now show up as an
additional screen in extended mode. To run the opengl example in
OpenHMD navigate to the folder ``OpenHMD/examples/opengl`` and
start the example by::

  $ ./openglexample

If the program opens on your main screen, manually drag to the screen
of the HMD. Incase of the OSVR you may need to flip the display around,
use the nvidia-settings to do this easily.

Source Code
===========

* https://github.com/OpenHMD/OpenHMD

* https://github.com/OpenHMD/OpenHMD/wiki



News
====

* https://twitter.com/openhmd

* https://www.reddit.com/r/openhmd/

People
======

* https://github.com/noname22

* https://twitter.com/wallbraker

* https://twitter.com/JoeyFerwerda
  (`Blog <http://programallthethings.blogspot.com/2017/03/why-cant-firmware-and-api-developers.html>`__)

* https://twitter.com/spulaniraba

Interviews
==========

* https://twit.tv/shows/floss-weekly/episodes/417

Miscellaneous
=============

* https://github.com/ChristophHaag/openvr_api-libre
