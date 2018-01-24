
Ground stations
---------------

Choices for Ardupilot compatible ground stations go as such

-  `Mission Planner <https://github.com/ArduPilot/MissionPlanner>`__ (Windows, MacOS)
-  `APM Planner <https://github.com/ArduPilot/apm_planner>`__ (Windows, MacOS, Linux)
-  `MAVProxy <https://github.com/ArduPilot/MAVProxy>`__ (Linux)
-  `QGroundControl <http://qgroundcontrol.com/>`__ (Windows, MacOS, Linux, Android, iOS)

If for some reason you'd prefer to not user the provided emlidtool
to manage your Ardupilot, here is how you do it manually on the RPi
-  ``$ sudo arducopter -A udp:192.168.x.x:14550``
With the emlidtool this is done automatically on boot.

APM Planner
^^^^^^^^^^^

APM Planner listens for UDP on port 14550, and so should instantly
catch the connection over the network from the RPi.
Boot up APM Planner, your copter should immediately appear in your,
with the measuring instruments already working.

MAVProxy
^^^^^^^^

MAVProxy needs to be set manually to listen, with one of the following
-  ``$ mavproxy.py --master=udp:192.168.x.x:14550``
-  ``$ mavproxy.py --master=udp:0.0.0.0:14550``
The correct IP address, port and type of stream need to be specified.
Use the CLI options --map and --console to see more output.
