#!/usr/bin/env sh 
git remote add stage git@git.wpengine.com:staging/crometrics.git
git push -f stage HEAD:master