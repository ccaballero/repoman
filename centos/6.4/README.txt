
What images are in this directory

CentOS-6.4-x86_64-netinstall.iso
  This is the network install and rescue image.
  This image is designed to be burned onto a CD. You then boot your computer off the CD.

CentOS-6.4-x86_64-minimal.iso
  The aim of this image is to install a very basic CentOS 6.4 system, with the minimum of packages needed to have a functional system.
  Please burn this image onto a CD and boot your computer off it. A preselected set of packages will be installed on your system. Everything else needs to be installed using yum.
  Please read http://wiki.centos.org/Manuals/ReleaseNotes/CentOSMinimalCD6.4 for more details about this image.
  Beware that the set of packages installed by this image is NOT identical to the one installed when choosing the group named "Minimal" from the full DVD image.

CentOS-6.4-x86_64-bin-DVD1.iso
CentOS-6.4-x86_64-bin-DVD2.iso
  These two dvd images contain the entire base distribution.
  Please burn DVD1 onto a DVD and boot your computer off it.
  A basic install will not need DVD2.
  After the installation is complete, please run "yum update" in order to update your system.


 Remember that in order to be able to partition your disk you will need to run the GUI installer which in turns needs enough RAM. The same is true for the network setup step. The release notes ( http://wiki.centos.org/Manuals/ReleaseNotes/CentOS6.4 ) provide more details about these aspects.
