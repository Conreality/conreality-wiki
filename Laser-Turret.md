This is a stationary [gun turret](https://en.wikipedia.org/wiki/Gun_turret)
configuration. It [[tracks|Targeting System]] [objects of
interest](https://groups.google.com/forum/#!topic/conreality/zfCe8upi_t4)
using a pan/tilt optical camera and engages them using an instantaneous
directed-energy solution (a laser).

![Laser turret frame](https://cdn.shopify.com/s/files/1/1004/5324/products/1967-02_large.gif)

Components
----------

Our initial proof-of-concept reference configuration is:

* [[Turret Frame|Turret Frames]]: Adafruit Mini Pan/Tilt Kit
* [[Main Board|Main Boards]]: [[BeagleBone Black]]
* [[Camera Module|Camera Modules]]: [[CMUcam5 Pixy]]
* [[Laser Module|Laser Modules]]: _TBD_ (a commodity part)

Discussions
-----------

Discussions take place primarily on the [[mailing list|Mailing List]].
Some relevant threads:

* [Laser turret POC](https://groups.google.com/forum/#!topic/conreality/Niw7hiMYxwc)
* [Gimbal control and POC hardware](https://groups.google.com/forum/#!topic/conreality/r3QpMyAFzEg)
* [Initial focus of our R&D efforts](https://groups.google.com/forum/#!topic/conreality/zfCe8upi_t4)

Limitations
-----------

* The maximum slew rate and the precision of tracking are contingent on the
  quality of the servos driving the turret's camera mount.
  An eventual hardware upgrade would utilize a 3-axis brushless gimbal and a
  gimbal controller such as the [[STorM32-BGC]].
* The current pan/tilt mechanism does have limits to its range of motion
  (180° pan, 150° tilt). The eventual gimbal upgrade will resolve this.

Challenges
----------

* How to best handle the offset between the camera aperture and the laser pointer?
  * Find target with camera, range and target with laser, calculate parallax, fire? --Mike
