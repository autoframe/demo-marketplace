# demo-marketplace
**Fresh installation**

Prerequisites: wsl on Windows and Docker
Open terminal and run
curl -s "https://laravel.build/demo-marketplace?with=mysql,memcached&php=74&devcontainer" | bash


Or for custom components like redis
curl -s "https://laravel.build/demo-marketplace?with=mysql,redis,memcached&php=74&devcontainer" | bash

Start:
cd demo-marketplace && ./vendor/bin/sail up

Stop:
./vendor/bin/sail down

http://localhost/
