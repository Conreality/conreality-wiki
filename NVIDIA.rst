NVIDIA Drivers for Linux
========================

For Ubuntu the drivers are easy to install through the graphical
interface ``System Settings -> Software & updates -> Additional
Drivers``. The nvidia-settings is a useful package to install,
helping manage e.g. the xorg.conf. To do things manually do the
following (replace *XXX* with the version number)::

  $ sudo apt purge nvidia*

  $ sudo add-apt-repository ppa:graphics-drivers

  $ sudo apt update

  $ sudo apt install nvidia-XXX nvidia-settings

For CUDA download the wanted version from `this list <https://developer.nvidia.com/cuda-toolkit-archive>`__.
If you download the runfile all you need to do is::

  $ sudo sh cuda_X.X.XX_XXX.XX_linux.run

To update your xorg.conf you can do it from nvidia-settings, manually
editing the file or with the following::

  $ sudo nvidia-xconfig

After rebooting your drivers should be ready, check for immediate errors
with::

  $ nvidia-smi

* https://developer.nvidia.com/vulkan-driver

* http://www.nvidia.com/object/unix.html

* https://en.wikipedia.org/wiki/GeForce#Proprietary

* https://wiki.archlinux.org/index.php/NVIDIA

* https://wiki.gentoo.org/wiki/NVidia/nvidia-drivers

* https://www.funtoo.org/Package:NVIDIA_Linux_Display_Drivers
