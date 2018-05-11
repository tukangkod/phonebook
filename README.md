# PhoneBook

## Pre-requisite
* docker compose ([install guide](https://docs.docker.com/compose/install/))
* composer ([install guide](https://getcomposer.org/doc/00-intro.md))
* port 80 & 3306 not used
* phonebook.local mapped to 127.0.0.1

## Step
1. Create folder and clone:
    ```console
    foo@bar:~$ git clone --recursive git@github.com:tukangkod/phonebook.git
    foo@bar:~$ cd phonebook
    # by this time you will see at least three folder:
    #   - cakedock
    #   - phonebook
    #   - public
    ```
2. Compose Install
    ```console
    foo@bar:~$ cd phonebook
    foo@bar:~$ composer install 
    foo@bar:~$ cd ..
    ```
3. Setup docker (cakedock)
    ```console
    foo@bar:~$ cd cakedock
    foo@bar:~$ cp .env.sample .env
    foo@bar:~$ cp ../cake.conf.example cakedock/nginx/sites/cake.conf
    foo@bar:~$ docker-compose up -d --build
    ```
4. Migrate and seed
    ```console
    foo@bar:~$ docker-compose exec --user=cakedock workspace sh
    /var/www $ cd phonebook
    /var/www $ bin/cake install
    ```
5. Open in browser 
    ```console
    foo@bar:~$ open http://phonebook.local/
    ```
6. Stop Docker (need ot run inside cakedock folder)
    ```console
    foo@bar:~$ docker-composer down
    ```