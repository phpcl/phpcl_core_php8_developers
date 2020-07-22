# PHP-CL Core: PHP 8 for Developers

## Day Zero Setup Procedure:

### From Github
Do the following online:
1. Create github.com account (if not already)
2. From github.com fork this repo: [https://github.com/phpcl/phpcl_core_php8_developers](https://github.com/phpcl/phpcl_core_php8_developers) into your own github account
3. Go to your github.com account page
4. Locate the forked repo (which we refer to as `$FORK`) in this guide
5. Click on the `Code` button and copy the clone URL

### From Linux for PHP Cloud Services
Do the following online:
1. Go to this website and write down your public-facing IP address: `https://ip2c.org`
2. Login to your LfPHP Cloud Services account
3. Click on `Account` and then choose on one of your _Hosting Plans_ and click on `Details` for that plan
4. Write down the account (immediately under _Status_ and just above _Website_) which we refer to as `$ACCOUNT` in this guide
5. From the left side navigation menu click on `Access Tokens`
6. Enter the IP address noted in step 1 and click `Add`
7. Write down (or copy) the access token generated (which we refer to as `$TOKEN`) in this guide
8. Write down (or copy) the username you used to login into your LfPHP account, which we refer to as `$USER` in this guide

### From Your Local Computer
1. Install PHP (if not already)
2. Clone `$FORK` into a directory `/path/to/repo` on your local computer
```
git clone $FORK /path/to/repo/$FORK
```
3. Update Linux for Composer
```
cd /path/to/repo/$FORK
php composer.phar self-update
php composer.phar update
```

#### linuxforcomposer.json
Copy the file `linuxforcomposer.json.dist` to `linuxforcomposer.json`
In the newly copied `linuxforcomposer.json` file:
* Locate the `lfphp-cloud` key  
* Replace the values of the following subkeys with the values you wrote down in the preceding steps:
```
  /* other keys not shown */
  "lfphp-cloud" : {
        "account"  : "$ACCOUNT",
        "username" : "$USER",
        "token"    : "$TOKEN"
    }
}
```
Be sure to save the file when done!

#### Dockerfile
Copy `Dockerfile.dist` to `Dockerfile`
In the newly copied `Dockerfile` you need to change the github source to your own:
* Change URL `"https://github.com/phpcl/phpcl_core_php8_developers.git"` to the URL `$FORK` you wrote down in an earlier step above.  
Don't forget to save the file when done!


#### Local Test
If you want to test locally before deployment, proceed as follows:
1. Install _Docker_
  * Windows: [https://docs.docker.com/docker-for-windows/install/](https://docs.docker.com/docker-for-windows/install/)
  * Mac: [https://docs.docker.com/docker-for-mac/install/](https://docs.docker.com/docker-for-mac/install/)
  * Linux: 
    * Ubuntu/Debian: [https://docs.docker.com/engine/install/ubuntu/](https://docs.docker.com/engine/install/ubuntu/)
    * Fedora/CentOS/RedHat: [https://docs.docker.com/engine/install/fedora/](https://docs.docker.com/engine/install/fedora/)
2. Use Linux for Composer to start the container locally:
```
cd /path/to/repo/$FORK
php vendor/bin/linuxforcomposer.phar docker:run start
```
3. Find the container ID (which we refer to as `$CONTAINER_ID` in this guide):
```
docker container ls
```
4. Find the IP address assigned (which we refer to as `$CONTAINER_IP_ADDR` in this guide):
```
docker exec -it $CONTAINER_ID /bin/bash -c "ifconfig"
```
5. Test from your browser using this URL: `http://$CONTAINER_IP_ADDR/`
  * Alternatively: `http://localhost:8888/`


#### Deploy the Repo to LfPHP Cloud Services
You are now ready to deploy to your LfPHP Cloud Services account.  Proceed as follows:
1. Use Linux for Composer to deploy:
```
cd /path/to/repo/$FORK
php vendor/bin/linuxforcomposer.phar docker:run deploy
```
2. Return to your LfPHP Cloud Services account plan _Dashboard_
3. Wait until the _Status_ button goes green.  **WARNING:** this could take around a few minutes to complete because PHP 8 needs to be compiled!!!
4. Click on the link _Website View_

## Usage Information
Sample database:
* Database Name: `phpcl`
* Database User: `phpcl`
* Database Password: `password`
* Otherwise you can also view the database through the LfPHP Cloud Services _Dashboard_.
Refreshing source code:
* Edit or create the target file from your local repository
* Push the changes to github adding a comment `$COMMENT`
```
cd /path/to/repo/$FORK
git add *
git commit -m '$COMMENT'
git push
```
* From the main page of the website click on the link `Refresh Source Code`

