#!/bin/sh
# MacOS specific: Delete .bak files.
# See https://stackoverflow.com/questions/4247068/sed-command-with-i-option-failing-on-mac-but-works-on-linux
# and https://superuser.com/questions/241333/mac-remove-all-files-with-a-certain-extension-from-a-directory-tree
find ./ -name "*.bak" -exec rm {} \;
