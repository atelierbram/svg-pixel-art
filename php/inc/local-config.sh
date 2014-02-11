#!/bin/bash -x
copy_file()
{
  cp config-local.php config-temp.php
}
copy_file

move_file()
{
 mv -f config-temp.php config.php
}
move_file
