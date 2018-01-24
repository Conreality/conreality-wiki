
Ground stations
===============

Choices for Ardupilot compatible ground stations go as such

-  `Mission Planner <https://github.com/ArduPilot/MissionPlanner>`__ (Windows, MacOS)
-  `APM Planner <https://github.com/ArduPilot/apm_planner>`__ (Windows, MacOS, Linux)
-  `MAVProxy <https://github.com/ArduPilot/MAVProxy>`__ (Linux)
-  `QGroundControl <http://qgroundcontrol.com/>`__ (Windows, MacOS, Linux, Android, iOS)

If for some reason you'd prefer to not user the provided emlidtool
to manage your Ardupilot, here is how you do it manually on the RPi::

  $ sudo arducopter -A udp:192.168.x.x:14550

With the emlidtool and the correct setup this is done automatically
on boot.

APM Planner
-----------

Installation
^^^^^^^^^^^^

Running
^^^^^^^

APM Planner listens for UDP on port 14550, and so should instantly
catch the connection over the network from the RPi.
Boot up APM Planner, your copter should immediately appear in your,
with the measuring instruments already working.

MAVProxy
--------

Installation
^^^^^^^^^^^^


Install dependencies on a Debian based system::

  $ sudo apt-get install python-dev python-opencv python-wxgtk3.0 python-pip python-matplotlib python-pygame python-lxml

MAVProxy needs to be run in a python2.7 based environment, one way to
easily do this is with virtual environments::

  $ pip install virtualenv

Create a virtual environment for python2.7 with::

  $ virtualenv -p /usr/bin/python2.7 your_folder

After this you can activate it by::

  $ source your_folder/bin/activate

and deactive by simply::

  $ deactivate

After setting up and activating your environment simply::

  $ pip install MAVProxy

Set unto system path in your .bashrc::

  $ export PATH=$PATH:$HOME/.local/bin

Probable that as you run mavproxy.py for the first time,
you are missing some libraries. Fix as needed.

Running
^^^^^^^

MAVProxy needs to be set manually to listen, with one of the following::

  $ mavproxy.py --master=udp:192.168.x.x:14550

  $ mavproxy.py --master=udp:0.0.0.0:14550

The correct IP address, port and type of stream need to be specified.
Use the CLI options --map and --console to see more output.

Simulations (SITL)
==================

To run simulations without any hardware you need to install the Ardupilot
software and use it with the ground stations. Here are the steps for
installing the Ardupilot software on a Debian based system::

  $ git clone git://github.com/ArduPilot/ardupilot.git

  $ cd ardupilot

  $ git submodule update --init --recursive

  $ sudo apt-get install python-matplotlib python-serial python-wxgtk3.0 python-wxtools python-lxml

  $ sudo apt-get install python-scipy python-opencv ccache gawk git python-pip python-pexpect

  $ sudo pip install future pymavlink mavproxy

Add these lines to your .bashrc::

  export PATH=$PATH:$HOME/ardupilot/Tools/autotest
  export PATH=/usr/lib/ccache:$PATH

Now you need to go to the folder of the vehicle you want to simulate,
ArduCopter/-Plane/-Sub/-Rover. Load the default parameters with::

  $ sim_vehicle.py -w

Kill this with Ctrl-C and then start a simulation with::

  $ sim_vehicle.py --console --map --aircraft test

This will start the MAVProxy software paired with a simulated vehicle.
If done within the folder /ardupilot/ArduCopter/, you can takeoff with
the following commands written into the MAVProxy::

  mode guided
  arm throttle
  takeoff 40

From hereon you can do alot of stuff, for example::

  param set circle_radius 2000
  rc 3 1500
  mode circle

will make a copter circle with a radius of 2000cm, pointing the
nose into the center of the circle. The command ``rc 3 1500`` is needed
so that the copter holds altitude. For better visuals it is possible
to run APM Planner which may connect automatically to the simulation.
The following::

  wp load ../Tools/autotest/CMAC-circuit.txt
  mode auto

will make the copter fly through a set of waypoints indefinitely. It
is possible to drag'n'drop these waypoints and easily create new ones
in APM Planner.

Useful links
============

-  `On MAVProxy <http://ardupilot.github.io/MAVProxy/html/getting_started/index.html>`__
-  `On SITL(Software In Loop -simulation) <http://ardupilot.org/dev/docs/sitl-simulator-software-in-the-loop.html>`__
