Anchors are fixed-position points of reference used to localize nodes in the
battlespace scenario.

A minimum of three anchors are required as points of reference in a
scenario. More anchors will be needed to cover large battlespaces.
In large battlespaces, anchors can act as routers to pass messages past the
maximal range limitations (~300 meters) of a single node.

Hardware
--------

Our current reference design for an anchor is as follows:

* [[Raspberry Pi]] 2
* [[DWM1000]] + Pi shield
* battery (2S) + 5V regulator
* plastic case

To-do items
-----------

* 3D design for plastic case
* battery selection (24+h continuous power)
* breakout board for DWM1000

See also other [[hardware|Hardware]] node designs.
