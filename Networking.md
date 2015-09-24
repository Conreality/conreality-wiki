This page describes the networking stack used on drones.

Basic Premises
--------------

The timeframe is 2017+. Robots are using commodity off-the-shelf networking:
WiFi and a TCP/IP stack, largely still IPv4 but with increasing support for
IPv6 and IPsec.

Requirements
------------

* In a [[swarm||Swarming]], any node must be reachable in no more than `log(N)` hops.
* Every (most?) node in a swarm must be capable of forwarding traffic to other nodes, i.e. a router.
* Inter-node and ground station-to-node communication should take advantage of IP multicasting.

Mesh Networking
---------------

### Concepts

* https://en.wikipedia.org/wiki/Wireless_mesh_network

### Routing Protocols

* [OLSR](http://p2pfoundation.net/Optimized_Link_State_Protocol)
* [B.A.T.M.A.N.](https://en.wikipedia.org/wiki/B.A.T.M.A.N.)
* [Babel](https://en.wikipedia.org/wiki/Babel_(protocol))
* [HWMP](https://en.wikipedia.org/wiki/Hybrid_Wireless_Mesh_Protocol) (mandated/defined in 802.11s)


* [Speed-Aware Routing for UAV Ad-Hoc Networks](http://infoscience.epfl.ch/record/189798/files/GLOBECOM-2013-Stefano.pdf) (paper, PDF, compares OLSR and Babel, presents extensions to OLSR)
* [Real-world performance of current proactive multi-hop mesh protocols](http://ro.uow.edu.au/infopapers/736/) (Paper, compares BATMAN, Babel and OLSR. TL;DR: OLSR sucks)

Lag Compensation
----------------

* [Lag Compensation Technique in Quake 3](http://www.ra.is/unlagged/)
  also at [HN](https://news.ycombinator.com/item?id=10034198)
* [Multiplayer networking resources](https://github.com/nickdesaulniers/nickdesaulniers.github.com/issues/5)