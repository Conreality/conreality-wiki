Running Firmware with QEMU
==========================

https://github.com/nerves-project/nerves_system_qemu_arm#hello-network

::

    $ sudo qemu-system-arm -M vexpress-a9 -smp 1 -m 256                  \
      -kernel _build/qemu_arm/dev/nerves/system/images/zImage            \
      -dtb _build/qemu_arm/dev/nerves/system/images/vexpress-v2p-ca9.dtb \
      -drive file=_images/qemu_arm/conreality.img,if=sd,format=raw       \
      -append "console=ttyAMA0,115200 root=/dev/mmcblk0p2" -serial stdio \
      -net nic,model=lan9118                                             \
      -net tap,ifname=tap0,script=qemu-ifup.sh,downscript=qemu-ifdown.sh

