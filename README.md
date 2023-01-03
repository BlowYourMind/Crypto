# Books Library app
Built with PHP 8, composer and Laravel 9. This is my own app about crypto, it is still in progress, some features are not working.

## Installation

```bash
https://github.com/BlowYourMind/Crypto.git
cd Crypto
composer install
```

In `book-library` folder rename the file `.env.example` to `.env`, or make a copy:
```bash
cp .env.example .env
```

Generate API key:
```
php artisan key:generate
```

Configure your database:
```dosini
DB_CONNECTION=<your-db-server>
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<your-db-name>
DB_USERNAME=<your-db-user-name>
DB_PASSWORD=<your-password>
```

Now initialize database
```bash
php artisan migrate
```

## Usage
Run servers:
```bash
php artisan serve
```

Point your browser to address `http://localhost:8000/`

## API
To check this project you need to get api key and url from here https://coinmarketcap.com/api/
paste it in the .env file

or you can use my own api key, remember it is free key so it have limit of responses
```
API_URL="https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest?CMC_PRO_API_KEY="
API_KEY="7cbb0339-42dc-4d6e-a625-8659afbd47a4"
```
