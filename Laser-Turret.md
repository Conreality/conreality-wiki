Our Mark I laser turret is a stationary tabletop [gun turret][]
configuration. It [[tracks|Targeting System]] [objects of
interest](https://groups.google.com/forum/#!topic/conreality/zfCe8upi_t4)
using an optical camera mounted on a pan/tilt frame and engages them using
an instantaneous directed-energy solution (the laser).

[gun turret]: https://en.wikipedia.org/wiki/Gun_turret

![Photo of Conreality Laser Turret MkI](http://www.robotgeek.com/resize/shared/images/PImages/ASM-RG-TURRETb.jpg?bw=640&bh=640)

Components
----------

Our recommended, known-good reference configuration is the following:

* 1× [[Turret Frame|Turret Frames]]: [RobotGeek Desktop RoboTurret](http://www.robotgeek.com/robotgeek-desktop-roboturret.aspx) (MSRP $99)
* 1× [[Main Board|Main Boards]]: [[Raspberry Pi 3]] (MSRP $35)
* 1× [[Camera Module|Camera Modules]]: [[CMUcam5 Pixy]] (MSRP $75)
* 1× [[Laser Module|Laser Modules]]: (included in turret frame kit)

Note that you can fairly easily substitute [[another control board|Supported
Hardware]] than the Raspberry Pi 3. If you choose to do so, adapt the
firmware installation instructions that follow accordingly.

Specifications
--------------

TODO

Assembly
--------

Expect assembly to take 2-3 hours, longer in case you don't have a suitable
magnetized [hex key](https://en.wikipedia.org/wiki/Hex_key) at your disposal
as some of the bolts are quite small and nontrivial to place.

* [Geekduino Getting Started Guide](http://learn.robotgeek.com/robotgeek-101-1/228-geekduino-getting-started-guide-2.html?kit=roboTurret)
* [Desktop RoboTurret V3 Getting Started](http://learn.robotgeek.com/getting-started/29-desktop-roboturret/46-robotgeek-roboturret-getting-started-2.html)
* [Desktop RoboTurret V3 Assembly Guide](http://learn.robotgeek.com/getting-started/29-desktop-roboturret/45-roboturret-v3-assembly-guide-2.html)

Installation
------------

To install Conreality on the turret, follow the [[Installation Guide]],
making sure to pay particular attention to any Raspberry Pi-specific
instructions.

Configuration
-------------

TODO

Discussion
----------

Some relevant discussion threads from our [[mailing list|Mailing List]] archives:

* [Laser turret POC](https://groups.google.com/forum/#!topic/conreality/Niw7hiMYxwc)
* [Gimbal control and POC hardware](https://groups.google.com/forum/#!topic/conreality/r3QpMyAFzEg)
* [Initial focus of our R&D efforts](https://groups.google.com/forum/#!topic/conreality/zfCe8upi_t4)
