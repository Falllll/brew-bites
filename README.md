## Brew Bites

Brew Bites is a delightful web app designed to elevate your culinary experience by offering a curated selection of beverages and bites. Whether you're a coffee connoisseur, tea enthusiast, or a foodie looking for tasty treats, Brew Bites has something to satisfy every palate.

## Features

**User**
- **Diverse Menu:** Explore a diverse menu featuring a range of high-quality coffees, teas, and delicious bites.
- **Personalized Experience:** Customize your orders to suit your taste preferences and dietary requirements.
- **Order and Delivery:** Seamlessly place orders and enjoy the convenience of doorstep delivery.
- **User-Friendly Interface:** A clean and intuitive interface for a smooth and enjoyable user experience.
- **Reservation:** Securely book a table in advance for a delightful experience.
- **Contact Us:** Have a compliment or complaint? Feel free to use this feature to get in touch with us. We value your feedback and are here to assist you.
- **Gallery:** Visualize our culinary delights through a captivating gallery showcasing mouthwatering images of our products, events, and more.
- **Blog:** Dive into our blog for engaging content, culinary tips, and behind-the-scenes stories. Stay updated on the latest trends and happenings in the world of food and beverages.
- **FAQ:** Find answers to common questions in our Frequently Asked Questions section. Get quick insights into our policies, services, and any queries you may have.

## Technologies Used

- **Front-End** : HTML, CSS, JavaScript
- **Back-End** : PHP
- **Framework** : Laravel 10, TailwindCSSS 3

## Requirement
- **PHP 8.1^**
- **Composer**
- **Node.JS**
- **xampp8** or **laragon** or whatever you use.

## Installation

- Open the terminal and navigate to the directory where you want to save your project.
- Run ```git clone https://github.com/Falllll/brew-bites.git``` (or use SSH with the appropriate URL).
- Navigate to the project by running ```cd brew-bites```.
- Run ```composer install``` to install the dependencies.
- Run ```cp .env.example .env``` to copy the `.env` file.
- Open the project in your code editor or run ```code .``` if you're using Visual Studio Code.
- In the `.env` file, update `DB_DATABASE` to your actual database name, and configure other database-related fields if needed (`DB_USERNAME`, `DB_PASSWORD`).
- Run ```php artisan key:generate```
- Run ```php artisan migrate --seed```
- Run ```php artisan serve```
- Go to `localhost:8000` in your web browser.

If you meet all the requirements, you should not encounter any issues during the installation process. If you come across any issues, feel free to create a new issue.
