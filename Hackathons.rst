.. 11th-conreality-hackathon:

11th Conreality Hackathon
-------------------------

| **When**: November 18th to 19th, 2017
| **Where**: [[Lviv]]
| **Who**: TBD

*To be written up.*

https://www.facebook.com/events/309023262907238/

.. 10th-conreality-hackathon:

10th Conreality Hackathon
-------------------------

| **When**: April 8th, 2017
| **Where**: Berlin
| **Who**: TBD

*To be written up.*

https://www.facebook.com/events/1636582173033431/

.. 9th-conreality-hackathon:

9th Conreality Hackathon
------------------------

| **When**: October 2016
| **Where**: Bratislava
| **Who**: @bendiken, @DanKomorny, @mikegogulski

*To be written up.*

.. 8th-conreality-hackathon:

8th Conreality Hackathon
------------------------

| **When**: July 30th to August 1st, 2016
| **Where**: Bratislava
| **Who**: TBD

*To be written up.*

.. 7th-conreality-hackathon:

7th Conreality Hackathon
------------------------

| **When**: ..., 2016
| **Where**: Bratislava
| **Who**: ...

*To be written up.*

.. 6th-conreality-hackathon:

6th Conreality Hackathon
------------------------

| **When**: April 8th to April 11th, 2016
| **Where**: Bratislava
| **Who**: ...

*Our next hackathon is currently planned for mid-April.*

.. 5th-conreality-hackathon:

5th Conreality Hackathon
------------------------

| **When**: February 26th to February 29th, 2016
| **Where**: Bratislava
| **Who**: @ab0032, @DanKomorny, @mikegogulski

*To be written up.*

.. 4th-conreality-hackathon:

4th Conreality Hackathon
------------------------

| **When**: January 29th to February 4th, 2016
| **Where**: Bratislava
| **Who**: @ab0032, @bendiken, @DanKomorny, @mikegogulski

The development team once again reconvened in Bratislava for an extended
hackathon. The primary outcomes of this hackathon were as follows:

1.  Disassembled @DanKomorny's `airsoft
    rifle <http://www.hobbytron.com/ElectricM14RISEBRM6681SniperRifleFPS370AirsoftGun.html>`__
    that he contributed (i.e., sacrificed) to the project.

2.  Figured out (but did not yet test) how to programmatically drive the
    AEG mechbox by hooking up a transistor to control the 7V trigger
    circuit.

3.  Did a code base walk-through on the big monitor in order to
    disseminate know-how on the software architecture and its current
    implementation.

4.  `Figured
    out <https://github.com/conreality/conreality/commit/3c819aedf364dee395de71d309e0e5121d108cb5>`__
    an effective late-bound, type-safe design for device drivers--after
    initial misadventures.

5.  `Implemented <https://github.com/conreality/conreality/commit/8da1d3afb00a1f5de1f8e6d24c943889cea86029>`__
    device driver instantiation from user-supplied configuration.

6.  `Achieved <https://github.com/conreality/conreality/commit/f4fb376f2522f631bfb1312d8c61fc58c58f2f28>`__
    and demonstrated laser fire control from the IRC C&C situation room.

7.  Worked on device drivers for the Raspberry Pi's (BCM283x) PWM pins.

8.  `Fixed <https://github.com/conreality/conreality/commit/dc2a7caea0d27847932cd24a03ed16b7ddfed327>`__
    the linking error that @ab0032 had been blocked by when attempting
    to build the project on Debian. The project now builds cleanly on
    Ubuntu and Debian both.

9.  Repurposed @mikegogulski's old server hardware (``charlie.local``)
    as a build host managing virtual machines for specific build targets
    (``trusty-amd64``, ``jessie-amd64``, etc) using standard *libvirt*
    tooling.

10. Automated the build VM installation and post-installation
    configuration procedures substantially, using scripts based on
    ``virt-install``.

11. Encountered complications setting up ``{trusty,jessie}-armhf`` build
    VMs. Discussed the option of purchasing an ODROID-XU4 board to be
    used specifically as an ARMv7 build machine.

12. Settled on laser tag as the likeliest technology basis to enable
    effective (and cost-effective) automatic scoring of human-human and
    human-machine games. Hybrid laser tag & airsoft is a possibility to
    explore as well, as projectile-induced feedback learning is an
    essential differentiator of adults' games from kids' games.

13. Discussed funding options for more substantial POC hardware
    acquisitions planned for later in the year.

|Photo of the 4th Conreality Hackathon|

.. 3rd-conreality-hackathon:

3rd Conreality Hackathon
------------------------

| **When**: December 24th to December 26th, 2015
| **Where**: Bratislava
| **Who**: @bendiken, @mikegogulski

Our inaugural Christmas hackathon focused on
`provenance <Provenance>`__, `networking <Networking>`__, as well as
`command and control <Command-&-Control>`__ via text and voice control
interfaces. The primary outcomes of this hackathon were as follows:

1. Continued work on `establishing indelible commit
   provenance <https://groups.google.com/d/msg/conreality/3u38BhSUKok/Pl2Jpgx-BAAJ>`__.

2. Installed a private IRC server for the project, for hosting situation
   rooms to be used for development and demo purposes.

3. `Implemented <https://github.com/conreality/conreality/commit/62904b08eb9e54d04837a60de895fdb1ad372607>`__
   configuration parsing for the `daemon <Server-Daemon>`__.

4. `Implemented <https://github.com/conreality/conreality/commit/31c885e919a4d91a62dfd0989f46e6b54feb38ce>`__
   network protocol instantiation from user-supplied configuration.

5. Added IRC client support to the daemon and
   `implemented <https://github.com/conreality/conreality/commit/81234836f56d2da58a079a413b42993d21e73d14>`__
   parsing of IRC-relayed commands as well as inline help.

6. Created a `Conreality app for the Android mobile operating
   system <https://github.com/conreality/conreality-for-android>`__.
   FIXME

7. Implemented voice recognition in the Android app using Google's
   services.

|Photo of the 3rd Conreality Hackathon|

.. 2nd-conreality-hackathon:

2nd Conreality Hackathon
------------------------

| **When**: December 5th to December 6th, 2015
| **Where**: Bratislava
| **Who**: @ab0032, @bendiken, @DanKomorny, @mikegogulski

This was the first hackathon with the full initial development team in
the same room. The primary outcomes of this hackathon were as follows:

1. Shared and discussed the project vision and objectives.

2. Got everyone in the development team set up with OCaml and Lua
   development environments.

3. Installed a third Raspberry Pi for @ab0032 and set up the current
   software.

4. Achieved usable control over a servo from one of Raspberry Pi's GPIO
   pins.

5. Explored prospects for [[Gazebo]] integration.

.. 1st-conreality-hackathon:

1st Conreality Hackathon
------------------------

| **When**: November 7th to November 8th, 2015
| **Where**: Bratislava
| **Who**: @bendiken, @DanKomorny, @mikegogulski

This inaugural hackathon kicked off hardware experimentation for the
`initial POC project <Laser-Turret>`__, based on the two Raspberry Pi
main boards provided by @mikegogulski. The `primary
outcomes <https://groups.google.com/forum/#!topic/conreality/5Zk2kOBW1aU>`__
of this hackathon were as follows:

1. Validated a native build of the Conreality platform with an
   up-to-date OCaml and OPAM toolchain on a Raspberry Pi running Debian
   Jessie. Everything works as expected, and the ARM build procedure is
   now documented in the README.

2. Demonstrated video frame capture on the Raspberry Pi from a Creative
   Live! Cam Chat HD webcam via USB.

3. Demonstrated laser control via a GPIO +3.3V circuit, controlled from
   a shell script as well as from Python.

4. Validated the pan/tilt frame's PWM servo motor control via a servo
   tester device, establishing the effective range of motion and maximum
   slew speed.

5. Demonstrated PWM servo motor control via a GPIO circuit from a
   variety of software, including Bash scripting, RPi.GPIO in Python,
   and ServoBlaster. Bash proved ineffective (probably due to subtle
   timing issues in the inner loop), and Python achieved only jittery
   control (likely due to insufficient and/or variable timing precision
   afforded by the Python runtime), whereas ServoBlaster demonstrated
   smooth control.

6. Attempted to install the Panalyzer logic analyzer on the second
   Raspberry Pi board in order to debug produced PWM control signals.
   Did not work out as yet, due to difficulty configuring the software
   for newer Linux kernel versions.

7. Implemented a unit test harness so as to be able to proceed onwards
   based in a more effective test-driven development (TDD) modality.

All in all quite a productive first hackathon, despite the limited time
available and the voluminous amounts of inebriating beverages consumed.

|Photo of the 1st Conreality Hackathon|

.. |Photo of the 4th Conreality Hackathon| image:: /images/hackathon4.jpg
.. |Photo of the 3rd Conreality Hackathon| image:: /images/hackathon3.jpg
.. |Photo of the 1st Conreality Hackathon| image:: /images/hackathon1.jpg

