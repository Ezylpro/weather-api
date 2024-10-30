# Weather API Setup Guide

Welcome! This guide will walk you through the steps to set up and run the Weather API project using Laravel and Sail.

## Prerequisites

Before getting started, ensure that Docker and Docker Compose are installed on your system. You can find the installation instructions here:  
[Install Docker & Docker Compose](https://docs.docker.com/compose/install/)

---

## Steps to Set Up the Project

1. **Clone the Repository**

   ```bash
   git clone git@github.com:Ezylpro/weather-api.git && cd weather-api
   ```

2. **Set Up Environment Configuration**

   Copy the example environment file to create your `.env` file:

   ```bash
   cp .env.example .env
   ```

    > **Note:** You will need an `HG_BRASIL_KEY` to run the application. You can obtain your key by visiting [HG Brasil](https://hgbrasil.com/apis/planos?origin=weather) and adding it to your `.env` file.

3. **Install Dependencies**

   This command uses a small Docker container containing PHP and Composer to install the application's dependencies. You can read more at [this link](https://laravel.com/docs/11.x/sail#installing-composer-dependencies-for-existing-projects).
    
    ```bash
    docker run --rm \
      -u "$(id -u):$(id -g)" \
      -v "$(pwd):/var/www/html" \
      -w /var/www/html \
      laravelsail/php83-composer:latest \
      composer install --ignore-platform-reqs
    ```
   
    > **Note:** This command will run `composer install` to install the dependencies, so it may take a few moments to complete.

    > **Note:** After the setup, you can start using Laravel Sail to interact with docker. You can also create a shell alias to simplify this process. Check out this guide on setting up an alias: [Laravel Sail Alias Configuration](https://laravel.com/docs/11.x/sail#configuring-a-shell-alias)

4. **Start the Containers**

   After installing the project dependencies, run the following command to start the containers:

   ```bash
   ./vendor/bin/sail up -d
   ```

5. **Generate Application Key**

   Run the following command to generate the application key:

   ```bash
   ./vendor/bin/sail artisan key:generate
   ```

6. **Run Migrations and Seed Database**
    
    Run migrations to set up the database schema and seed initial data:

    ```bash
    ./vendor/bin/sail artisan migrate --seed
    ```

## You're All Set!

The Weather API is now ready to use. You can check out the already existing users credentials [here](./database/seeders/UserSeeder.php).

- **Live Demo:** [weather-app.ezylpro.com/](https://weather-app.ezylpro.com/)
- **API Documentation:** [weather-api.ezylpro.com/docs/api](http://weather-api.ezylpro.com/docs/api)

---

Enjoy exploring the Weather API! If you encounter any issues, feel free to reach out.


