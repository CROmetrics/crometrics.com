git remote add production git@git.wpengine.com:production/crometrics.git
git fetch production

git diff production/master HEAD

git diff --stat production/master HEAD

read -r -p "Deploy HEAD diff above to production? [y/N] " response
if [[ $response =~ ^([yY][eE][sS]|[yY])$ ]]
then
  git push -f production HEAD:master
else
  echo "Please run again and type yes"
fi
