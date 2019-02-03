# A docker configuration for LAMP stack development

## Depencedcies

All you have to do is install [docker](https://docs.docker.com/install/) and
[docker compose](https://docs.docker.com/compose/).

## How it works?

After installing Docker and Compose, cd into this folder and run `docker-compose up`.

This will set-up the environment with PHP, Apache, Mariadb (mySQL).

There is an example content in the `DocumentRood` folder. Anything you put in that folder
will be accessable from http://localhost .

*Notes:* By running http://localhost/create\_tables.php a demo table will be created with an example entry.

