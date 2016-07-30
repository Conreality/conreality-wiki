Abstract Interfaces
-------------------

* [abstract](https://github.com/conreality/conreality/blob/master/src/consensus/machinery/abstract.mli)
  * abstract.camera (`Abstract.Camera` module)
  * abstract.gpio.chip (`Abstract.GPIO.Chip` module)
  * abstract.gpio.pin (`Abstract.GPIO.Pin` module)
  * abstract.pwm.pin (`Abstract.PWM.Pin` module)

Current Drivers
---------------

* [sysfs](https://github.com/conreality/conreality/blob/master/src/consensus/machinery/sysfs.mli)
  * sysfs.gpio.pin (`Sysfs.GPIO.Pin` module)

Work-in-Progress Drivers
-------------------------

* [bcm2835](https://github.com/conreality/conreality/blob/master/src/consensus/machinery/bcm2835.mli)
  * bcm2835.gpio.pin (`BCM2835.GPIO.Pin` module)
* [bcm2836](https://github.com/conreality/conreality/blob/master/src/consensus/machinery/bcm2836.mli)
  * bcm2836.gpio.pin (`BCM2836.GPIO.Pin` module)
* [usb](https://github.com/conreality/conreality/blob/master/src/consensus/machinery/usb.mli)
  * usb.camera (`USB.Camera` module)
* [v4l2](https://github.com/conreality/conreality/blob/master/src/consensus/machinery/v4l2.mli)
  * v4l2.camera (`V4L2.Camera` module)

Planned Drivers
---------------

* [bcm2835](https://github.com/conreality/conreality/blob/master/src/consensus/machinery/bcm2835.mli)
  * bcm2835.pwm.pin (`BCM2835.PWM.Pin` module)
* [bcm2836](https://github.com/conreality/conreality/blob/master/src/consensus/machinery/bcm2836.mli)
  * bcm2836.pwm.pin (`BCM2836.PWM.Pin` module)
* TODO: add sensors, etc.
