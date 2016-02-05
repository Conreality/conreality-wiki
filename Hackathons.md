5th Conreality Hackathon
------------------------

**When**: February 26th to February 29th, 2016  
**Where**: Bratislava  
**Who**: TBD  

4th Conreality Hackathon
------------------------

**When**: January 29th to February 4th, 2016  
**Where**: Bratislava  
**Who**: @ab0032, @bendiken, @DanKomorny, @mikegogulski  

3rd Conreality Hackathon
------------------------

**When**: December 24th to December 26th, 2015  
**Where**: Bratislava  
**Who**: @bendiken, @mikegogulski  

2nd Conreality Hackathon
------------------------

**When**: December 5th to December 6th, 2015  
**Where**: Bratislava  
**Who**: @ab0032, @bendiken, @DanKomorny, @mikegogulski  

1st Conreality Hackathon
------------------------

**When**: November 7th to November 8th, 2015  
**Where**: Bratislava  
**Who**: @bendiken, @DanKomorny, @mikegogulski  

We made good progress validating and integrating the hardware for the
[initial POC project](Laser-Turret), based on the two Raspberry Pi main
boards provided by @mikegogulski. The [primary
outcomes](https://groups.google.com/forum/#!topic/conreality/5Zk2kOBW1aU)
of this inaugural hackathon were as follows:

1. Validated a native build of the Conreality platform with an up-to-date
   OCaml and OPAM toolchain on a Raspberry Pi running Debian Jessie.
   Everything works as expected, and the ARM build procedure is now
   documented in the README.

2. Demonstrated video frame capture on the Raspberry Pi from a Creative
   Live! Cam Chat HD webcam via USB.

3. Demonstrated laser control via a GPIO +3.3V circuit, controlled from a
   shell script as well as from Python.

4. Validated the pan/tilt frame's PWM servo motor control via a servo tester
   device, establishing the effective range of motion and maximum slew
   speed.

5. Demonstrated PWM servo motor control via a GPIO circuit from a variety of
   software, including Bash scripting, RPi.GPIO in Python, and ServoBlaster.
   Bash proved ineffective (probably due to subtle timing issues in the
   inner loop), and Python achieved only jittery control (likely due to
   insufficient and/or variable timing precision afforded by the Python
   runtime), whereas ServoBlaster demonstrated smooth control.

6. Attempted to install the Panalyzer logic analyzer on the second Raspberry
   Pi board in order to debug produced PWM control signals. Did not work out
   as yet, due to difficulty configuring the software for newer Linux kernel
   versions.

7. Implemented a unit test harness so as to be able to proceed onwards based
   in a more effective test-driven development (TDD) modality.

All in all quite a productive first hackathon, despite the limited
time available and the voluminous amounts of inebriating beverages
consumed.

![Coders hard at work, fueled by local white wine and BBQ takeout bought
with bitcoin. Charlie presiding.](/images/hackathon1.jpg)
