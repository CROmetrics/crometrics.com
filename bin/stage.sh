git remote add staging git@git.wpengine.com:staging/crometrics.git

echo "***************************************"
echo "***************************************"
echo "http://crometrics.staging.wpengine.com/"
echo "***************************************"
echo "***************************************"

git push -f staging HEAD:master
