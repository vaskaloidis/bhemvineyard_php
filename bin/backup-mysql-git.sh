#!/bin/bash

##
# MySQL DB dump to Git commit
# 
# Dumps the specified mysql database to the given location and commits it and
# the previous database to the Git repository.
#
# It is assumed you have already setup the Git respository to only be the 
# a checkout of the database backup location
# 
# To do that (in the repository): 
# $ git config core.sparsecheckout true
# $ echo sql-backup/ > .git/info/sparse-checkout
# $ git read-tree -m -u HEAD
#
# Author:   Aaron Gustafson, Easy-Designs LLC
# Copyright:    Copyright (c) 2011 Easy-Designs LLC
# Since:    Version 0.1
##

# path to Git repository
REPO_PATH="../sql/"
REPO_BRANCH="master"

# database settings
DB_NAME="bhemvineyard"
DB_USER="root"
DB_PASS="worldcup2014"

FILENAME=${DB_NAME}.sql

# svn up the content
cd $REPO_PATH
git pull --quiet

# dump the database using the mysql administrator - so we can see all dbs
mysqldump -u$DB_USER -p$DB_PASS --opt --routines --skip-extended-insert --compact --force "${DB_NAME}" > "${FILENAME}"

# add everything we have - will throw a warning the dbname.sql already is added but its fine
git add .
# commit
git commit --quiet -m "SQL Database Dump"
# push
git push --quiet origin $REPO_BRANCH
