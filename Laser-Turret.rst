Our Mark I laser turret is a stationary tabletop `gun
turret <https://en.wikipedia.org/wiki/Gun_turret>`__ configuration. It
[[tracks|Targeting System]] `objects of
interest <https://groups.google.com/forum/#!topic/conreality/zfCe8upi_t4>`__
using an optical camera mounted on a pan/tilt frame and engages them
using an instantaneous directed-energy solution (the laser).

|Photo of Conreality Laser Turret MkI|

Components
==========

Our recommended, known-good reference configuration is the following:

-  1× [[Turret Frame|Turret Frames]]: `RobotGeek Desktop
   RoboTurret <http://www.robotgeek.com/robotgeek-desktop-roboturret.aspx>`__
   (MSRP $99)
-  1× [[Main Board|Main Boards]]: [[Raspberry Pi 3]] (MSRP $35)
-  1× [[Camera Module|Camera Modules]]: [[CMUcam5 Pixy]] (MSRP $75)
-  1× [[Laser Module|Laser Modules]]: (included in turret frame kit)
-  1× Storage Card: Generic 4GB+ microSDHC or microSDXC card (MSRP $3+)

Note that you can fairly easily substitute [[another control
board|Supported Hardware]] than the Raspberry Pi 3. If you choose to do
so, adapt the firmware installation instructions that follow
accordingly.

Specifications
==============

TODO

Assembly
========

Expect assembly to take 2-3 hours, longer in case you don't have a
suitable magnetized `hex key <https://en.wikipedia.org/wiki/Hex_key>`__
at your disposal as some of the bolts are quite small and nontrivial to
place.

-  `Geekduino Getting Started
   Guide <http://learn.robotgeek.com/robotgeek-101-1/228-geekduino-getting-started-guide-2.html?kit=roboTurret>`__
-  `Desktop RoboTurret V3 Getting
   Started <http://learn.robotgeek.com/getting-started/29-desktop-roboturret/46-robotgeek-roboturret-getting-started-2.html>`__
-  `Desktop RoboTurret V3 Assembly
   Guide <http://learn.robotgeek.com/getting-started/29-desktop-roboturret/45-roboturret-v3-assembly-guide-2.html>`__

Installation
============

To install Conreality on the turret, follow the [[Installation Guide]],
making sure to pay particular attention to any Raspberry Pi-specific
instructions.

Configuration
=============

TODO

Discussion
==========

Some relevant discussion threads from our [[mailing list|Mailing List]]
archives:

-  `Laser turret
   POC <https://groups.google.com/forum/#!topic/conreality/Niw7hiMYxwc>`__
-  `Gimbal control and POC
   hardware <https://groups.google.com/forum/#!topic/conreality/r3QpMyAFzEg>`__
-  `Initial focus of our R&D
   efforts <https://groups.google.com/forum/#!topic/conreality/zfCe8upi_t4>`__

Unsorted Links
==============

-  `Andoer/Zifon YT-260 Remote Control Motorized Pan & Tilt
   Head <https://www.aliexpress.com/item/Zifon-YT-260-Remote-Control-Motorized-Pan-Tilt-for-Extreme-Camera-Wifi-Camera-and-Smartphone/32759960387.html>`__
   230° pan, 60° tilt, 2.5°/s, 260g load

-  `Bescor MP-101 Motorized Pan & Tilt
   Head <https://bescor.com/product/mp-101/>`__ aka `Hague PH Pan & Tilt
   Camera
   Powerhead <https://www.haguecamerasupports.com/aerial-masts-powerheads/hague-ph-pan-tilt-camera-powerhead>`__
   aka `Maxwell
   MP-101 <http://www.nature-images.eu/contents/reviews/mp-101/index.html>`__

-  `MP-101b <http://www.21best.com/21_best/electronic/security/video/pan_tilt/MP-101b-pan-tilt.html>`__
   340° pan, ± 15° tilt, 3-12°/s, 6 lb load

-  `MP-360 <http://www.21best.com/21_best/electronic/security/video/pan_tilt/MP-360-pan-tilt.html>`__
   360° pan, ± 15° tilt, 3-12°/s, 6 lb load

-  `PT1000n <http://www.21best.com/21_best/electronic/security/video/pan_tilt/PT1000-Motor-Manual.html>`__
   350° pan, ± 35° tilt, 7°/s, 20 lb load

-  `PT2000c <http://www.21best.com/21_best/electronic/security/video/pan_tilt/PT2000c-Motor-Manual.html>`__
   355° pan, 100° tilt, 0.25-10°/s, 32 lb load

.. |Photo of Conreality Laser Turret MkI| image:: http://www.robotgeek.com/resize/shared/images/PImages/ASM-RG-TURRETb.jpg?bw=640&bh=640

