# Crometrics.com

This is the official repository for the crometrics.com WordPress theme.

### About

* Host: **WPEngine**
* Production: https://crometrics.com/
* Staging: https://crometrics.staging.wpengine.com/
* circleci: https://circleci.com/gh/CROmetrics/crometrics.com

## Dev Workflow

* With the `Uncode` theme, a lot of changes / text / layout are done directly in the database. You should have a prod account. If you need to change anything on a live page that is primarily setup by the database, you should CLONE the page on prod to a different url like `/meet-the-team-DEVCLONE/` and do all your work there.

* Staging is for auto deploys. It shouldn't save state, work, or backups. If you need to save state, do it in prod per above ^

* For Code Changes (CSS / JS / Theme Header stuff / Etc...), you'll want to do the dev in this repo and submit a PR (if you'd like code review) or push to master if small. Once pushed Staging is auto deploy'ed to via `circle.yml calling ./bin/stage.sh` for every commit on master.

* Once staging looks good, TomF has the ability to `./bin/prod.sh` push. Ping him in slack if you'd like that done.
