# URL Shortener Project Documentation

## ABOUT THE PROJECT

The objective of this project is to create a URL shortener using Laravel.

---

### Laravel Version

This project utilizes Laravel version 6.2. As this is an older version of Laravel, certain requirements must be fulfilled in the development environment.

#### Version Dependencies

- **PHP**: 7.2
- **Composer**: 2.2
- **Node.js**: Required for frontend dependencies

---

## MANUAL INSTALLATION

### Requirements:
1. PHP
2. Composer
3. Node.js

### Installation Steps

1. Clone the project repository:

   ```bash
   git clone https://github.com/atakanhr/webdev-simpleprojects.git
   ```

2. Install the vendor files using Composer:

   ```bash
   composer install
   ```

3. Copy the `.env.example` file and create a new file named `.env`.

4. Generate the application secret key and add it to the `.env` file using the following command:

   ```bash
   php artisan key:generate
   ```

5. Configure your database settings in the `.env` file. The application requires a database.

6. Migrate the database tables:

   ```bash
   php artisan migrate
   ```

7. Start the project:

   ```bash
   php artisan serve
   ```

8. You can access the application at `localhost:port`. For example: [http://localhost:8000](http://localhost:8000/urlshort)

---

## DOCKER-COMPOSE INSTALLATION

The Docker setup allows you to launch a ready-made deployment environment with a single command, eliminating the need for manual installation of tools such as PHP.

### Included in Auto Deployment:

- MySQL deployment
- Nginx deployment
- Tools including PHP, Redis, Composer, NPM, and Artisan

To use the Docker setup, extract the `auto-deployment` folder from the project and copy it to a separate location.

1. Run `docker-compose up`. This command will initially build the necessary images, for example, `php:7.2.0-fpm-alpine`, and apply custom configurations. Once the system is up, Nginx will serve on `localhost:80`.

2. To initialize the Laravel project, place your project code within the `src` folder that is created under the `auto-deployment` directory.

3. Copy the `env.example` file and create a file named `.env`. Fill in the SQL information from the Docker Compose file (since they will be on the same network, using `mysql` as the database IP address is sufficient).

4. Execute the command `docker-compose run --rm composer install`. This command will create the vendor folder and download the necessary dependencies.

5. Run the command `docker-compose run --rm artisan key:generate`. This command will generate the necessary application key and write it to the `.env` file.

6. Execute the command `docker-compose run --rm artisan migrate`. This command will process the database tables.

7. Upon accessing `localhost:80`, the application panel will be displayed.

---

## IMAGES

![Image 1](https://raw.githubusercontent.com/atakanhr/webdev-simpleprojects/master/.github/ss-1.png)

---
