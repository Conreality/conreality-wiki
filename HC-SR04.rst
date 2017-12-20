HC-SR04 Ultrasonic Ranging Module
=================================

Data sheet:
http://www.robotshop.com/media/files/pdf/datasheet-sen026.pdf

User's manual:
https://docs.google.com/document/d/1Y-yZnNhMYy7rwhAgyL_pfa39RsB-x2qR4vP8saG73rE/edit

Cost: ~$1 each in qty. 5

Specifications:

-  power supply: 5V DC
-  quiescent current: < 2mA
-  effectual angle: < 15°
-  ranging distance: 2 cm – 500 cm
-  resolution: 0.3 cm

Best theoretical sample rate (our calculation): ~13 Hz

Real sample rate (sysfs, measured): ~14 Hz

Linux kernel driver (sysfs)
---------------------------

https://github.com/johannesthoma/linux-hc-sro4

(Raspbian kernel tree and cross-compile toolchain are installed on
charlie, in syadasti's environment)

Demo code, GPIO, Python, 1 Hz
-----------------------------

From
http://tutorials-raspberrypi.com/raspberry-pi-ultrasonic-sensor-hc-sr04/

::

    #Libraries
    import RPi.GPIO as GPIO
    import time

    #GPIO Mode (BOARD / BCM)
    GPIO.setmode(GPIO.BCM)

    #set GPIO Pins
    GPIO_TRIGGER = 18
    GPIO_ECHO = 24

    #set GPIO direction (IN / OUT)
    GPIO.setup(GPIO_TRIGGER, GPIO.OUT)
    GPIO.setup(GPIO_ECHO, GPIO.IN)

    def distance():
        # set Trigger to HIGH
        GPIO.output(GPIO_TRIGGER, True)

        # set Trigger after 0.01ms to LOW
        time.sleep(0.00001)
        GPIO.output(GPIO_TRIGGER, False)

        StartTime = time.time()
        StopTime = time.time()

        # save StartTime
        while GPIO.input(GPIO_ECHO) == 0:
            StartTime = time.time()

        # save time of arrival
        while GPIO.input(GPIO_ECHO) == 1:
            StopTime = time.time()

        # time difference between start and arrival
        TimeElapsed = StopTime - StartTime
        # multiply with the sonic speed (34300 cm/s)
        # and divide by 2, because there and back
        distance = (TimeElapsed * 34300) / 2

        return distance

    if __name__ == '__main__':
        try:
            while True:
                dist = distance()
                print ("Measured Distance = %.1f cm" % dist)
                time.sleep(1)

            # Reset by pressing CTRL + C
        except KeyboardInterrupt:
            print("Measurement stopped by User")
            GPIO.cleanup()

Demo code, sysfs kernel driver, Python, by Mike
-----------------------------------------------

::

    #!/usr/bin/env python
    import time

    hz = 50
    delay = 1.0 / float(hz)
    print '%f' % delay
    scale = 17150.0 / 1000000.0
    sysfs_file = '/sys/class/distance-sensor/distance_18_24/measure'

    while True:
        then = time.time()

        with open(sysfs_file, 'r') as f:
            m = f.read()

        m = float(m)
        dcm = m * scale
        now = time.time()
        delta_t = now - then
        print '%f cm\t\t(raw value = %d)\t(delta_t = %fs)' % (dcm, int(m), delta_t)
        if delay > delta_t:
            time.sleep(delay - delta_t)

