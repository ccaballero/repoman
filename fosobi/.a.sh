ARQUITECTURA=i386,amd64
METODO=http
RAMAS=quantal
PRINCIPAL=us.archive.ubuntu.com
DIR_MIRROR=/media/multimedia/repos/ubuntu
SECCIONES=main,universe,multiverse,restricted

debmirror -a ${ARQUITECTURA} \
-s ${SECCIONES} \
-h ${PRINCIPAL}/ubuntu \
-d ${RAMAS} -r / --progress \
-e ${METODO} --ignore-release-gpg --nosource \
${DIR_MIRROR} 
