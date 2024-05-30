# demo-marketplace

./vendor/bin/sail artisan config:cache
./vendor/bin/sail artisan migrate
./vendor/bin/sail artisan migrate:fresh
./vendor/bin/sail artisan make:model Products --seed --factory --controller --migration
./vendor/bin/sail artisan make:model Categories --seed --factory --controller --migration
./vendor/bin/sail artisan make:model Orders --seed --factory --controller --migration

vendor/bin/sail composer require laravel/breeze --dev
vendor/bin/sail php artisan breeze:install
vendor/bin/sail php artisan artisan migrate

vendor/bin/sail npm install
vendor/bin/sail npm run dev

vendor/bin/sail php artisan breeze:install
vendor/bin/sail npm run dev
