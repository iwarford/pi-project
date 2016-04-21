#!/bin/sh
perl -e 'while (<STDIN>) { chomp; print "$_" . int(rand(10)+1)  . "\n"; }'  < random_test_data > randomer_test_data.txt

