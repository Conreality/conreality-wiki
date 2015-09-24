This page describes the networking stack used on drones.

Basic Premises
--------------

The timeframe is 2017+. Robots are using commodity off-the-shelf networking:
WiFi and a TCP/IP stack, largely still IPv4 but with increasing support for
IPv6 and IPsec.

Requirements
------------

* In a [[swarm||Swarming]], any node must be reachable in `log(N)` hops.

Mesh Networking
---------------

### Concepts

* https://en.wikipedia.org/wiki/Wireless_mesh_network

### Routing Protocols

* http://p2pfoundation.net/Optimized_Link_State_Protocol
* https://en.wikipedia.org/wiki/B.A.T.M.A.N.
* https://en.wikipedia.org/wiki/Babel_(protocol)

Lag Compensation
----------------

* [Lag Compensation Technique in Quake 3](http://www.ra.is/unlagged/)
  also at [HN](https://news.ycombinator.com/item?id=10034198)
* [Multiplayer networking resources](https://github.com/nickdesaulniers/nickdesaulniers.github.com/issues/5)
