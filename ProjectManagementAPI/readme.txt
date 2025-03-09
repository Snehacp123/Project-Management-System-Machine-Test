# Project Management API

## Overview
This project is a Project Management API built with Laravel. It provides various functionalities to manage projects, tasks, and users.

## Environment Configuration
The project uses the following environment variables configured in the `.env` file:

- **APP_NAME**: Laravel
- **APP_ENV**: local
- **APP_KEY**: base64:rdRLvNbwjHSz6XGyEdv9SHibUpBDW4W0q6e4EYN/pk4=
- **APP_DEBUG**: true
- **APP_URL**: http://localhost

- **LOG_CHANNEL**: stack
- **LOG_DEPRECATIONS_CHANNEL**: null
- **LOG_LEVEL**: debug

- **DB_CONNECTION**: mysql
- **DB_HOST**: 127.0.0.1
- **DB_PORT**: 3306
- **DB_DATABASE**: laravel
- **DB_USERNAME**: root
- **DB_PASSWORD**: 

- **BROADCAST_DRIVER**: log
- **CACHE_DRIVER**: file
- **FILESYSTEM_DISK**: local
- **QUEUE_CONNECTION**: sync
- **SESSION_DRIVER**: file
- **SESSION_LIFETIME**: 120

- **MEMCACHED_HOST**: 127.0.0.1

- **REDIS_HOST**: 127.0.0.1
- **REDIS_PASSWORD**: null
- **REDIS_PORT**: 6379

- **MAIL_MAILER**: smtp
- **MAIL_HOST**: mailpit
- **MAIL_PORT**: 1025
- **MAIL_USERNAME**: null
- **MAIL_PASSWORD**: null
- **MAIL_ENCRYPTION**: null
- **MAIL_FROM_ADDRESS**: "hello@example.com"
- **MAIL_FROM_NAME**: "${APP_NAME}"

- **AWS_ACCESS_KEY_ID**: 
- **AWS_SECRET_ACCESS_KEY**: 
- **AWS_DEFAULT_REGION**: us-east-1
- **AWS_BUCKET**: 
- **AWS_USE_PATH_STYLE_ENDPOINT**: false

- **PUSHER_APP_ID**: 
- **PUSHER_APP_KEY**: 
- **PUSHER_APP_SECRET**: 
- **PUSHER_HOST**: 
- **PUSHER_PORT**: 443
- **PUSHER_SCHEME**: https
- **PUSHER_APP_CLUSTER**: mt1

- **VITE_PUSHER_APP_KEY**: "${PUSHER_APP_KEY}"
- **VITE_PUSHER_HOST**: "${PUSHER_HOST}"
- **VITE_PUSHER_PORT**: "${PUSHER_PORT}"
- **VITE_PUSHER_SCHEME**: "${PUSHER_SCHEME}"
- **VITE_PUSHER_APP_CLUSTER**: "${PUSHER_APP_CLUSTER}"

- **JWT_SECRET**: 2qpkwKxLFbH7yOAEUOGHDUBIfhV4fbgGtVjUyZoTv9aL2Z4RGdDnWadOt1UplGs3

## Setup
1. Clone the repository.
2. Copy the `.env.example` file to `.env` and update the environment variables as needed.
3. Run `composer install` to install the dependencies.
4. Run `php artisan key:generate` to generate the application key.
5. Run `php artisan migrate` to run the database migrations.
6. Run `php artisan serve` to start the development server.

## Usage
The API provides endpoints to manage projects, tasks, and users. Refer to the API documentation for detailed information on the available endpoints and their usage.

## License
This project is licensed under the MIT License.