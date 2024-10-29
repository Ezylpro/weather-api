# Weather API Setup Guide

Welcome! This guide will walk you through the steps to set up and run the Weather API project using Laravel and Sail.

## Prerequisites

Before getting started, ensure that Docker and Docker Compose are installed on your system. You can find the installation instructions here:  
[Install Docker & Docker Compose](https://docs.docker.com/compose/install/)

---

## Steps to Set Up the Project

1. **Clone the Repository**

   ```bash
   git clone git@github.com:Ezylpro/weather-api.git
   ```

2. **Set Up Environment Configuration**

   Copy the example environment file to create your `.env` file:

   ```bash
   cp .env.example .env
   ```

    > **Note:** You will need an `HG_BRASIL_KEY` to run the application. You can obtain your key by visiting [HG Brasil](https://hgbrasil.com/apis/planos?origin=weather) and adding it to your `.env` file.

3. **Start the Docker Containers**

    Run the following command to start the Docker containers:
    
    ```bash
    docker compose up -d --build
    ```
   
4. **Install Dependencies**

   Run the following command to install Composer dependencies inside the container:

   ```bash
   docker exec -it weather-api composer install
   ```
   
    > **Note:** After the setup, you can start using Laravel Sail instead of `docker exec`. You can also create a shell alias to simplify this process. Check out this guide on setting up an alias:
   [Laravel Sail Alias Configuration](https://laravel.com/docs/11.x/sail#configuring-a-shell-alias)

5. **Generate Application Key**

   Run the following command to generate the application key:

   ```bash
   ./vendor/bin/sail artisan key:generate
   ```

6. **Run Migrations and Seed Database**
    
    Run migrations to set up the database schema and seed initial data:

    ```bash
    ./vendor/bin/sail artisan migrate
    ./vendor/bin/sail artisan db:seed
    ```

## You're All Set!

The Weather API is now ready to use.

- **Live Demo:** [https://weather-app.ezylpro.com/](https://weather-app.ezylpro.com/)
- **API Documentation:** [https://weather-api.ezylpro.com/docs/api](https://weather-api.ezylpro.com/docs/api)

---

Enjoy exploring the Weather API! If you encounter any issues, feel free to reach out.


