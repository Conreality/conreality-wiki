-  Do your best to adhere to the existing coding conventions and idioms.
-  Don't use hard tabs, and don't leave trailing whitespace on any line.
   Before committing, run ``git diff --check`` to make sure of this.
-  Do document every function you add using
   `Doxygen <http://www.doxygen.org>`__ annotations. Read the
   `tutorial <http://www.stack.nl/~dimitri/doxygen/manual/docblocks.html>`__
   or just look at the existing code for examples.
-  Don't touch the ``VERSION`` file. If you need to change it, do so on
   your private branch only.
-  Do feel free to add yourself to the ``CREDITS`` file and the
   corresponding list in the the ``README``. Alphabetical order applies.
-  Don't touch the ``AUTHORS`` file. If your contributions are
   significant enough, be assured we will eventually add you in there.

Requirements Analysis
=====================

We follow `RFC 2119 <https://tools.ietf.org/html/rfc2119>`__ to indicate
requirement levels:

::

    The key words "MUST", "MUST NOT", "REQUIRED", "SHALL", "SHALL
    NOT", "SHOULD", "SHOULD NOT", "RECOMMENDED",  "MAY", and
    "OPTIONAL" in this document are to be interpreted as described in
    RFC 2119.

In this wiki, there is no need to capitalize these key words, though;
instead, use emphasis (``**shall not**``) to set the key word apart from
the normal flow of text and to indicate that the word is meant to be
interpreted in this formal sense.
