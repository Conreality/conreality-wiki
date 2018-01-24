
Setting up with the Navio2
--------------------------

The steps necessary to get a Navio2 device working with the RPi3
and a ground station are the following:

-  Download the `Emlid Rasbian Image <http://files.emlid.com/images/emlid-raspbian-20170922.img.xz>`__
   and write it on your SD card.
-  Connect your Navio device with your RPi, insert the ready SD card
   and give the RPi power.
-  To connect your RPi to WiFi you either need to use a keyboard and
   a monitor or you can connect it first by ethernet and SSH into it.::

     $ sudo bash -c "wpa_passphrase SSID password >> /boot/wpa_supplicant.conf

-  Update your system by::

     $ sudo apt-get update && sudo apt-get dist-upgrade

-  Setup your ArduPilot with::

    $ sudo emlidtool ardupilot

   Select the suitable vehicle, enable and start the service.
-  To specify your ground station, you need to edit the corresponding
   file::

     $ sudo vim /etc/default/arducopter

   for the copter.
   Change TELEM1= to your ground stations IP address, with the port
   remaining as 14550.
-  After changing the settings you need to reload using::

     $ sudo systemctl daemon-reload

Connecting to a ground station
------------------------------

-  [[Ardupilot ground stations|Ardupilot]]

Useful links
============

-  `Official Navio2 documentation <https://docs.emlid.com/navio2/>`__
