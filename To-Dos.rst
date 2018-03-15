The following are known to-do items for the project. In case a
particular to-do item has a user handle associated with it, it's already
in the works by the person designated by the handle; to collaborate on
the task, contact that person directly.

If a to-do item has no user handle associated with it, it is up for
grabs for anyone to do. Once you've actually begun on the task (*not*
before that!), go ahead and record your intent by editing this wiki
page.

Please do **not** add any wishlist-type fluff here--these are all
manifestly actionable items, to be by default done by the person who
added a specific item. Don't add anything that you're not prepared to
step up to implement yourself.

Website Infrastructure
======================

-  Document the procedure for obtaining and installing TLS certificates
   issued by Let's Encrypt. (@bendiken)
-  Force HTTP to HTTPS redirection on all our TLS-enabled websites.
   (@bendiken)
-  Auto-link ``@handles`` in wiki pages to the respective GitHub
   account.

Development Infrastructure
==========================

-  Finish the Debian/Ubuntu packaging based on the Autotools build
   system. (@bendiken)
-  Ensure that the build system supports out-of-tree compiles.
   (@bendiken)
-  Enhance the build system by checking that the OCaml version is
   supported. This requires use of the
   `AX_COMPARE_VERSION <https://www.gnu.org/software/autoconf-archive/ax_compare_version.html>`__
   macro to check ``OCAMLVERSION`` for OCaml 4.02.1+. See the example in
   OPAM's
   `configure.ac <https://github.com/ocaml/opam/blob/master/configure.ac#L17>`__.
-  Support builds with no system dependencies, using bundled external
   dependencies (*difficulty: expert*):

   -  Bundle `libffi <https://github.com/atgreen/libffi>`__ in
      ``lib/libffi``. The project uses an Autotools-based build system.
   -  Bundle `Lua 5.1 <https://github.com/LuaDist/lua>`__ in
      ``lib/lua``. The project uses a Make-based build system.
   -  Bundle `OpenCV 2.4 <https://github.com/Itseez/opencv>`__ in
      ``lib/opencv``. The project uses a CMake-based build system.
   -  Bundle OCaml packages under ``lib/`` as submodules.
   -  Build the transitive dependency graph with correct ordering.

-  Build all manuals (HTML, PDF, EPUB) automatically from post-commit
   hooks.

.. target-architectures--platforms:

Target Architectures & Platforms
================================

-  Validate the build procedure on Mac OS X, FreeBSD, NetBSD, and
   OpenBSD. Amend the platform detection and support configuration in
   `configure.ac <https://github.com/conreality/conreality/blob/master/configure.ac>`__
   accordingly. Document the findings.
-  Work through and document cross-compilation from x86-64 to ARM. The
   Autotools-based build system in principle supports cross compilation.
   This may require changing ``AC_CANONICAL_HOST`` to
   ``AC_CANONICAL_TARGET``. `See the
   manual <https://www.gnu.org/software/autoconf/manual/autoconf-2.69/html_node/Canonicalizing.html>`__.
-  Help `port <https://github.com/nojb/riscv-ocamlopt>`__ the OCaml
   native code compiler to the RISC-V architecture.

Third-Party Dependencies
========================

-  Add support for the ``ioctl(2)`` facility in
   `extunix <https://github.com/ygrek/extunix>`__. (Pull request
   `#11 <https://github.com/ygrek/extunix/pull/11>`__ by @bendiken)
-  Enhance `Alcotest <https://github.com/mirage/alcotest>`__'s
   user-friendliness by pushing ``Float`` matchers, etc, upstream.
-  Update `OCaml-Lua <http://ocaml-lua.forge.ocamlcore.org>`__ to use
   Lua 5.2+ instead of the current Lua 5.1. Lua 5.2 brings significant
   `enhancements <http://www.lua.org/versions.html#5.2>`__.
-  Submit `OCaml-Lua <http://ocaml-lua.forge.ocamlcore.org>`__ Debian
   packaging to upstream.
-  Support @lindig's public-domain, pure-OCaml Lua runtime
   implementation, `Lua-ML <https://github.com/lindig/lua-ml>`__.
-  Fix OpenCV's spurious "Camera dropped frame!" ``stdout`` spamming on
   OS X (ticket `#980 <http://code.opencv.org/issues/980>`__; discussion
   on `Stack Overflow <http://stackoverflow.com/q/6536946/320911>`__)

Project Evangelism
==================

-  Submit a mentoring organization application to `Google Summer of
   Code <https://developers.google.com/open-source/gsoc/>`__ in 2017.
   According to their
   `timeline <https://developers.google.com/open-source/gsoc/timeline?hl=en>`__,
   mentoring organizations must apply by mid-February.
