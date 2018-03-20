
Installation
------------

For Linux, download and install the
`SDK <https://developer.leapmotion.com/get-started/>`__. Run::

  $ sudo dpkg --install Leap-*-x64.deb

or::

  $ sudo dpkg --install Leap-*-x86.deb

depending on your system. On some platforms you can start the service
by::

  $ sudo service leapd restart

if this is not available, do::

  $ sudo leapd

Next start your Leap Motion pipeline with::

  $ LeapControlPanel

You now have everything ready to use the Leap Motion.

Usage
-----

The LeapControlPanel should open a tray icon on your desktop, from here
you can open the *Diagnostic Visualizer* to see the data your device is
capturing. If you don't have the tray icon, stop the LeapControlPanel
and run it again like so::

  $ LeapControlPanel --showsettings

From here you can go to `Troubleshooting` and open the *Diagnostic
Visualizer* from there.
