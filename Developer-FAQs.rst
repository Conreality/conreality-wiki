How do I fix the error ``Unchecked dependencies for environment dev``?
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

::

    $ mix -h
    Unchecked dependencies for environment dev:
    * nerves (Hex package)
      the dependency is not available, run "mix deps.get"
    * nerves_system_qemu_arm (Hex package)
      the dependency is not available, run "mix deps.get"
    ** (Mix) Can't continue due to errors on dependencies

If you receive an error similar to the aforementioned when running a
``mix`` task, you are missing some required dependencies. Execute
``mix deps.get`` to fix this.
