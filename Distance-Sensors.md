
* [Infrared example](https://www.youtube.com/watch?v=iAWslxNC7e4).

* [Another IR example](https://www.youtube.com/watch?v=gRtdcxOXojo) using the KY-032 sensor.

* [Accustic Sensor HC-SR04 example](https://www.youtube.com/watch?v=ZejQOX69K5M) using ultrasound giving a range from 2cm to 4m with an accuracy up to 3mm.
Since the HC-SR04 runs on 5V and the Raspberry Pi gpio pins use 3.3V resistors are needed:
![image of wiring](http://www.tutorials-raspberrypi.de/wp-content/uploads/2014/05/ultraschall_Steckplatine.png)
After setting up the wiring a simple
[python script](http://tutorials-raspberrypi.com/raspberry-pi-ultrasonic-sensor-hc-sr04/)
will do the job with rather high precision with an error in the few millimeter range for 10, 20 and 30cm.
