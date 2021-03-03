# PHP-CL Core: PHP 8 for Developers
This repository is designed to provide examples for the _PHP 8 for PHP Developers_ course.
For more information see [https://phptraining.net/courses/php8](https://phptraining.net/courses/php8)

## Local Setup Procedure
1. Install Docker
    * If you are running Windows, start here: [https://docs.docker.com/docker-for-windows/install/](https://docs.docker.com/docker-for-windows/install/).
    * If you are on a Mac, start here: [https://docs.docker.com/docker-for-mac/install/](https://docs.docker.com/docker-for-mac/install/).
    * If you are on Linux, have a look here: [https://docs.docker.com/engine/install/](https://docs.docker.com/engine/install/).
2. Install Docker Compose.  For all operating systems, start here: [https://docs.docker.com/compose/install/](https://docs.docker.com/compose/install/).
3. Install the source code associated with this book onto your local computer.
    * If you have installed git, use the following command:
```
git clone https://github.com/phpcl/phpcl_core_php8_developers.git
```
    * Otherwise, you can simply download and unzip from this URL: [https://github.com/phpcl/phpcl_core_php8_developers/archive/master.zip](https://github.com/phpcl/phpcl_core_php8_developers/archive/master.zip)
    * And then unzip into a folder you create which we refer to as `/path/to/repo` in this guide
4. Build docker container associated with this book online:
    * From your local computer, open a command prompt (terminal window).
    * Change directory to `/path/to/repo`.
    * First time only, open a terminal window/command prompt and issue this command to build  the environment:
```
cd /path/to/repo
docker-compose build
```
    * Please note that the initial build might take up to 15 minutes to complete depending on your connection speed.
5. Issue this command the bring the container online:
    * From your local computer, open a command prompt (terminal window):
```
cd /path/to/repo
docker-compose up -d
```
    * Note that this will also do `build` if you prefer to skip step 4
6. To access the running docker container web server:
    * Open the browser on your local computer
    * To access PHP 8 enter this URL: `http://localhost:8888`
    * To access PHP 7 enter this URL: `http://localhost:7777`
7. To open a command shell into the running docker container:
    * From your local computer, open a command prompt (terminal window).
    * To access PHP 7: `docker exec -it php8_tips_php7 /bin/bash`
    * To access PHP 8: `docker exec -it php8_tips_php8 /bin/bash`
8. When you are finished working with the container, bring it offline using the following command:
```
cd /path/to/repo
docker-compose down
```

## Usage Information
Sample database:
* Database Name: `phpcl`
* Database User: `phpcl`
* Database Password: `password`
* Database Access via phpMyAdmin:
  * PHP 7: `http://localhost:7777/phpmyadmin`
  * PHP 8: `http://localhost:8888/phpmyadmin`
