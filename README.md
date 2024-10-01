
---

## ABOUT THE PROJECT

The objective of this project is to create a URL shortener using Laravel.

---

### Laravel Version

This project utilizes Laravel version 6.2. Since this is an older version of Laravel, certain requirements must be met in the development environment.

#### Requirements

- **PHP**: 7.2
- **Composer**: 2.2

---

## MANUAL INSTALLATION

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

8. You can access the application at `/urlshort`. For example: [http://localhost:8000/urlshort](http://localhost:8000/urlshort)

---

## IMAGES

![Image 1](https://raw.githubusercontent.com/atakanhr/webdev-simpleprojects/master/urlshorter/github/images/image1.PNG)
![Image 2](https://raw.githubusercontent.com/atakanhr/webdev-simpleprojects/master/urlshorter/github/images/image2.PNG)
![Image 3](https://raw.githubusercontent.com/atakanhr/webdev-simpleprojects/master/urlshorter/github/images/image3.PNG)

---

## THANK YOU

Special thanks to [EMİR (CSS)](https://github.com/emirkivrak) for their contributions.

---