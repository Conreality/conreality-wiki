Conreality Development C&C Server
=================================

* ircd: ircd-ratbox, from Ubuntu package: http://www.ratbox.org/
* services daemon: ratbox-services, from Ubuntu package: http://services.ratbox.org/
* Useful links:
  * IRC Ops Guide: http://www.irchelp.org/irchelp/ircd/ircopguide.html
  * IRC Command Cosmos: http://www.irchelp.org/irchelp/misc/ccosmos.html
  * IRC Channel Operator's Guide: http://irchelp.org/irchelp/changuide.html
  * RFC 1459 section on MODE commands: https://tools.ietf.org/html/rfc1459#section-4.2.3

User Registration
-----------------

    /msg UserServ REGISTER jhacker mygoodpassword jhacker@example.org
    /msg UserServ LOGIN jhacker mygoodpassword
    /msg NickServ REGISTER

Service Control
---------------

    $ sudo service ircd-ratbox start
    $ sudo service ircd-ratbox stop
    $ sudo service ircd-ratbox restart
    $ sudo service ircd-ratbox reload

Configuration File
------------------

`/etc/ircd-ratbox/ircd.conf`

Database Files
--------------

`/var/lib/ratbox-services/ratbox-services.db` (SQLite 3.x)
