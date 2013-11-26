#!/bin/bash
#------------------------------------------------------------
debmirror -a i386,amd64 --no-source --md5sums --progress --passive --verbose -s main,multiverse,universe,restricted -h us.archive.ubuntu.com -d quantal,quantal-security,quantal-updates,quantal-backports -r /ubuntu -e http /mnt/repoman/fosobi/repos
#--------------------------------------------------------------
