https://en.wikipedia.org/wiki/Raspberry_Pi

PIN Mappings
------------

* http://raspmap.everpi.net/
* http://www.panu.it/raspberry/

Servo Control
-------------

* [Raspberry Pi Cookbook: Controlling Servo Motors](http://razzpisampler.oreilly.com/ch05.html)
* [Adafruit's Raspberry Pi Lesson 8, Using a Servo Motor](https://learn.adafruit.com/downloads/pdf/adafruits-raspberry-pi-lesson-8-using-a-servo-motor.pdf)
* [RPi Labs: Controlling a Servo from the Raspberry Pi](http://rpi.science.uoit.ca/lab/servo/)
* [Servo Control with Raspberry Pi in 5 minutes or less](http://cihatkeser.com/servo-control-with-raspberry-pi-in-5-minutes-or-less/) (using ServoBlaster)
* [Raspberry Pi Lesson 28: Controlling a Servo on Raspberry Pi with Python](http://www.toptechboy.com/raspberry-pi/raspberry-pi-lesson-28-controlling-a-servo-on-raspberry-pi-with-python/)

Support
-------

Enabling I2C
------------

* If it's there, comment out `blacklist spi-bcm2708` in /etc/modprobe.d/raspi-blacklist.conf
* Ensure that the line `i2c-dev` is present at the end of /etc/modules
* `$ sudo apt-get install i2c-tools`
* `$ sudo adduser <username> i2c` # Repeat for each non-root user
* If the I2C kernel module was blacklisted or if `i2c-dev` was not present in /etc/modules:
  * `$ sudo reboot`
* `$ ls -l /dev/i2c*`

```
    crw-rw---- 1 root i2c 89, 1 Nov 22 05:17 /dev/i2c-1
```

* `$ i2cdetect -y 1`

```
         0  1  2  3  4  5  6  7  8  9  a  b  c  d  e  f
    00:          -- -- -- -- -- -- -- -- -- -- -- -- -- 
    10: -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- 
    20: -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- 
    30: -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- 
    40: -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- 
    50: -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- 
    60: -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- 
    70: -- -- -- -- -- -- -- --             
```            


