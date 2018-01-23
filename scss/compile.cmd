#!/bin/bash
compass clean
rm -fr css
compass compile
if [ $? -eq 0 ]; then
  ## cp -f css/style.css ../
  ### /home/k/apps/wp/add_permission.cmd
  /home/k/bin/sh_nginx.sh
  clear
  echo 'copied output style.css to child/ '
  echo `date`
fi
