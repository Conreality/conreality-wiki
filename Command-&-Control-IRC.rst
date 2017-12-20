This is a brain dump. TL;DR: IRC (including existing IRCd code) may be
usable in a C&C role, but running IRCd on every drone in a swarm won't
work well.

IRC is defined in several RFCs:

-  RFC 1459, IRC: https://tools.ietf.org/html/rfc1459
-  RFC 2810, IRC Architecture: https://tools.ietf.org/html/rfc2810
-  RFC 2811, IRC Channel Management: https://tools.ietf.org/html/rfc2811
-  RFC 2812, IRC Client Protocol: https://tools.ietf.org/html/rfc2812
-  RFC 2813, IRC Server Protocol: https://tools.ietf.org/html/rfc2813

Relevant characteristics:

-  An IRC network is an ***a***\ *cyclic graph* (spanning tree) of
   servers (nodes) and links between them (see RFC 1459 Fig. 1 and Fig.
   2), with clients connected each to a single server. *No loops are
   permitted in the graph.*

   -  Example topology map, DALnet, 1998:
      http://www.oocities.org/siamdalnet/hircmap.html
   -  Links are generally *manually* configured, either via a config
      file or by an operator issuing /CONNECT commands
   -  Some IRCds support the configuration of one or more *failover*
      (not standby) links to each server-to-server link

      -  Implementation logic is typically “if this link to server A
         fails, try B, then try C, then try A again”
      -  Implementations are unsophisticated, and don’t support weighted
         costings of links based on static costs, bandwidth, latency,
         etc.
      -  Example:
         https://wiki.inspircd.org/Linking_To_Other_Servers#Failover_Connections
      -  (I surveyed config files for ircu, ircd2.11, ngircd, bahamut,
         ircd-seven, and snircd, looking at this feature. cf.
         https://en.wikipedia.org/wiki/Comparison_of_Internet_Relay_Chat_daemons)

   -  Historically, IRC network topologies have been maintained
      \*statically, manually,*and *politically*
   -  Although the topology is correctly referred to as a spanning tree,
      this is unrelated to the self-healing topologies of, e.g.,
      switched/bridged Ethernet networks running the Spanning Tree
      Protocol

-  IRC is designed for relatively few servers forming the network core,
   each serving thousands of clients

   -  The largest current public IRC network, Freenode, has ~100,000
      clients but only 23 public servers and a small number of
      non-public hub servers. The largest IRC network I’ve seen
      mentioned, in terms of number of servers, had only 44.

-  When an IRC server connects to another IRC server, the two servers
   *must* exchange:

   -  A full list of all global channels, and their modes, that each
      server has connectivity to
   -  A full list of all connected clients (nicks), and their modes,
      that each server has connectivity to
   -  This information (the global channel and node rosters) is then
      flooded to all other servers in the network
   -  IMPLICATION: netsplits and re-joins are *very* expensive in terms
      of the data that must be exchanged each time a server-to-server
      link goes up or is replaced by a failover link, and in terms of
      the computation that each server must subsequently perform to
      update its representation of the network state

-  While network state information flooding must take place across the
   spanning tree upon link activation, messages posted to a channel
   (NOTICE protocol messages) are only flooded to those servers which
   have clients listening to the channel

-  A great deal of IRC specification and code is devoted to the problems
   of managing unpredictable, unreliable and sometimes malicious
   clients, under rulesets determined by channel, server and network
   operators.

Possible objections to using IRC for a drone swarm network:

-  It’s simply the wrong tool for the job, given its design history and
   the issues highlighted above
-  Considerable and complex software development must be done in order
   to enable existing IRCds to be automatically assembled into a
   functional topology
-  One IRCd per drone may be infeasible as swarm size increases due to
   (at least) O(N^2) complexity in selecting from among possible
   topologies
-  Lack of link costing can result in highly inefficient
   automatically-generated topologies
-  Lack of IP-layer multicasting means a lot of CPU and bandwidth get
   spent flooding the network

Possible workarounds via adapting existing IRCd code:

-  Remove static server link config and authentication; allow any server
   to connect to any other; PLUS
-  Implement a real spanning-tree pruning mechanism to allow standby
   links to persist and failover to occur rapidly; AND
-  Include logic to preference/cost links based on packet loss and/or
   latency; BUT
-  It’s easy to create naive implementations that would allow or
   encourage the node graph to be either a single long chain or a single
   hub with the rest of the nodes as spokes

Alternatives to IRC:

-  SILC, https://www.ietf.org/archive/id/draft-riikonen-silc-spec-09.txt

   -  Very similar in effect to IRC, though SILC supports a more robust
      topology consisting of a core ring of hub servers, each with
      dependent leaf servers with clients attached
   -  No RFC, few implementations

-  XMPP

   -  Ugh. Federate my XML, dawg.

-  Creative uses of Multicast IP(!), DHCP, DNS (and mDNS?)

   -  Each drone has an IP address, assigned via DHCP (DHCP server at
      the base station[s]?) or APIPA/RFC3330/RFC3927 (169.254.0.0/16)
      (this was already a requirement)
   -  Drones can register their ROS topics and services in DNS as SRV
      and TXT records (again presumably with authoritative DNS server[s]
      at the base station[s])
   -  Drones can listen on specified (via DNS?) Multicast IP addresses
      for both C&C messages (goal-setting, teleoperation, etc.) and
      swarm-wide shared information (telemetry, video/audio streams,
      events, etc.)
   -  DNS server(s) can provide swarm-wide roster of drones, topics and
      services, both to the base station(s) and to other drones
   -  Conceivably, each drone could be auto-assigned a multicast address
      which it then uses to publish swarm-wide information
   -  Feasibility depends on network routing protocol (OLSR, BATMAN,
      BABEL, etc.) support for IP multicast
