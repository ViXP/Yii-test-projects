#!/bin/bash
#run PHP server
ps -ef | grep php | grep -v grep | awk '{print $2}' | xargs kill