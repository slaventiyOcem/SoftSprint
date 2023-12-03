<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/4228/4228232.png" width="200"></a></p>
<p>Link logo: https://cdn-icons-png.flaticon.com/512/4228/4228232.png</p>


## About site:
<h3>The project was completed according to the technical specifications.</h3>

<p>Create a category page with product cards and a page with detailed information about the product. You will be taken to the page with detailed information when you click on the product on the card. You can also add the ability to sort products by date and price by adding a select so the user can change the sorting type. Sorting can be done in just one round, either for growth or for reduction.</p>


- Languages: PHP, js.
- BD: MySQL.
- Technologies: Laravel, Vue.js (OPTIONAL).


<p>Task details: on the product card, display the photo, name, price of the product and the button "Learn more", "Buy". On the page with detailed information, display: product name, photo, description, price.</p>

<p>Database: the table with products should include the following fields: Name, price, description, photo (url), date of creation and editing.<p></p>

## Installation

<p>Before starting, make sure that PHP, Composer and MySQL are installed on your computer.</p>

**Clone the repository:**

```bash
 git clone https://github.com/slaventiyOcem/SoftSprint.git
```
**Go to the project directory:**

```bash
    cd SoftSprint
```
**Install dependencies:**

```bash
    composer install
```

**Create a .env file:**

```bash
    cp .env.example .env
```

**Set up your .env file:**

Set the database parameters (DB_HOST = 127.0.0.1, DB_DATABASE = tz_SoftSprint, DB_USERNAME = root, DB_PASSWORD = root && ' ').
     - Set the application key:

```bash
    php artisan key:generate
```
**Run Docker Compose:**

 ```bash
    docker-compose up -d
 ```
**Perform migrations and populate the database:**

```bash
    docker-compose exec app php artisan migrate --seed
```


 <h3>After completing these steps, your application will be available at http://localhost:8000.</h3>
