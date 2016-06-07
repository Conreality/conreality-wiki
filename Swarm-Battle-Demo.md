*"Creating art and beauty with our autonomous weapons systems."*

Also known as "Ballet & Battle", to be prospectively presented at
[HCPP16](Events).

## Script

### Script for Ballet

Presenter stands in front of a homogeneous group of 20 small drones. To the
tune of a sound track, he uses hand gestures to arm and prime the drones,
turning on their LEDs (initially of a homogeneous color), raising them into
the air (initially as one big swarm), dividing them into two distinct swarms
(LEDs change color accordingly, and drones regroup in the air into two
flocks), and designating their enemy swarm and letting them fire at will.

This phase of the script takes about a minute, or perhaps two in case we
decide to do more ballet prior to the battle.

### Script for Battle I

Drones in each swarm designate a target in the enemy swarm, and fire their
laser at it at will. Both drones and swarms move: drones within the swarm,
to avoid getting hit by enemy firing solutions, and the swarm as a whole to
demonstrate dynamism. The swarms keep their distance (variable, but min/max
bounded) from each other.

This phase of the battle goes on for a minute or so, with no clear victor
emerging and all drones staying in the air.

### Script for Battle II

One of the swarms autonomously, or as response to command from presenter,
changes to an alternate battle strategy, where all drones (10x) in the swarm
concentrate fire on the same designated enemy drone (1x) instead of shooting
at different targets.

As a result, the target drone quickly incurs significant (simulated) damage
and has to perform an emergency landing (or just falls from the air, in case
a soft landing can be guaranteed to avoid damaging hardware).

The targeting process repeats individually for all drones in the losing swarm,
until only the victorious swarm is left in the air.

This phase of the battle is over in about a minute, concluding the demo.

## Questions

1. Good flocking algorithm for swarms?

  * To be researched from the academic literature.

  * Ideally, use two different algorithms, to obtain visually distinct swarm
    behavior for each team.

2. Visibility of laser beams in fog-machine output?

  * Not so much fog that you can't see the battle, but enough that laser
    beams are largely visible.

  * To be tested in Berlin or Bratislava over the summer.

3. Simultaneous radio control of multiple Crazyflies?

  * Low-tech solution: 20x Crazyradio PA USB dongles, connected to USB
    hub(s), configured to use different radio channels.

    * Cost of 20x dongles is non-ideal, but the alternative would require
      modifying Crazyflie firmware to support multiplexing over one or two
      channels; possible, but additional work. (Time versus money, as usual.)

    * Availability and feasibility of 20-port USB hubs? (Or 2x 10-port.)

## Budget

Costs estimated from German distributors, and include taxes.

### Budget for Drones

The cost estimate for an individual drone is sub-€300:

* €200 [Crazyflie 2.0](https://www.bitcraze.io/crazyflie-2/)
* €30 [Crazyradio PA](https://www.bitcraze.io/crazyradio-pa/)
* €20 [LED-ring deck](https://www.bitcraze.io/led-ring-deck/)
* €20 DWM1000 modules used as tags
* €10 PCB adapter for DWM1000
* €5 Laser module

### Budget for Ground Control Station

* €0 Laptop. (Reuse existing.)
* €5x20 for USB hub (cost estimated per port). Probably use 2x USB hubs.
* €100? Fog machine rental
* €20x4 DWM1000 modules used as anchors
* €10x4 PCB adapter for DWM1000
