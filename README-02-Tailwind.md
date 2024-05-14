https://tailwindcss.com/docs/guides/laravel
https://v2.tailwindcss.com/docs/installation

Run terminal

    vendor/bin/sail npm install -D tailwindcss postcss autoprefixer browser-sync daisyui
    vendor/bin/sail npx tailwindcss init -p


reset rights if needed

    sudo chown ubuntu:ubuntu -R ./
    sudo chmod -R 755 ./


open tailwind.config.js and add into content:

    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        ],


Open app.css and add into content:

    @tailwind base;
    @tailwind components;
    @tailwind utilities;

Start your build process in container terminal

    vendor/bin/sail npm run dev
    vendor/bin/sail npm run watch


Add to blade file: welcome.blade.php

    <h1 class="text-3xl font-bold underline">
      Hello world!
    </h1>

Compile manually

    vendor/bin/sail npx tailwindcss-cli build resources/css/app.css -o public/css/app.css
