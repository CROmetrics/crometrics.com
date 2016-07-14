git remote add production git@git.wpengine.com:production/crometrics.git

echo ""
echo "*****************************"
echo "**** FETCHING PRODUCTION ****"
echo "*****************************"
echo ""

git fetch production

echo ""
echo "*****************************"
echo "********* RAW DIFF **********"
echo "*****************************"
echo ""

git diff production/master HEAD

echo ""
echo "*****************************"
echo "******* MINIMAL DIFF ********"
echo "*****************************"
echo ""

git diff --stat production/master HEAD

echo ""
echo "***********************"
echo ""

read -r -p "Deploy HEAD diff above to production? [y/N] " response
if [[ $response =~ ^([yY][eE][sS]|[yY])$ ]]
then
  git push -f production HEAD:master
else
  echo "Please run again and type yes"
fi
