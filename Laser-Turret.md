This is a stationary [gun turret](https://en.wikipedia.org/wiki/Gun_turret)
configuration. It tracks [objects of
interest](https://groups.google.com/forum/#!topic/conreality/zfCe8upi_t4)
using a pan/tilt optical camera and engages them using a directed-energy
solution (a laser).

![Laser turret frame](https://cdn.shopify.com/s/files/1/1004/5324/products/1967-02_large.gif)

Components
----------

An initial simple and affordable configuration might look like this:

* [[Turret Frame|Turret Frames]]: Adafruit Mini Pan/Tilt Kit
* [[Main Board|Main Boards]]: BeagleBone Black
* [[Camera Module|Camera Modules]]: CMUcam5 Pixy
* [[Laser Module|Laser Modules]]: _TBD_

Discussions
-----------

Discussions happen on the [[mailing list|Mailing List]]. Some relevant
threads:

* [Laser turret POC](https://groups.google.com/forum/#!topic/conreality/Niw7hiMYxwc)
* [Gimbal control and POC hardware](https://groups.google.com/forum/#!topic/conreality/r3QpMyAFzEg)
* [Initial focus of our R&D efforts](https://groups.google.com/forum/#!topic/conreality/zfCe8upi_t4)

Limitations
-----------

* The maximum slew rate and the precision of tracking are contingent on the
  quality of the servos driving the turret's camera mount.
* The pan/tilt mechanism does have limits to its range of motion (180° pan,
  150° tilt).

Challenges
----------

* How to best handle the offset between the camera aperture and the laser pointer?
