## 🚀 How to Install

Follow these steps to set up the Laravel-based webshop on your local machine:

1. **Run the Install Script**: Execute the included PowerShell script.
    ```bash
    .\install.ps1
    ```
2. **Install Composer Dependencies**: Generate dependencies in the `vendor` folder.
    ```bash
    composer install
    ```
3. **Set Up Environment Variables**: Rename `.env.example` to `.env`.
    ```bash
    mv .env.example .env
    ```
4. **Configure Database**: Update the MySQL DB credentials in `.env`. MySQL 8+ is supported; enter your username and password.
5. **Generate Application Key**: Run the following command to generate the application key.
    ```bash
    php artisan key:generate
    ```
6. **Run Migrations**: Migrate the database schema.
    ```bash
    php artisan migrate
    ```
7. **Install NPM Dependencies**: Install required frontend packages.
    ```bash
    npm install
    ```
8. **Build Frontend Assets**: Compile the frontend assets.
    ```bash
    npm run build
    ```
9. **Start the Development Server**: Run the application.
    ```bash
    php artisan serve
    ```

---

## 🖼️ Screenshots

Here are some visuals of the webshop:

<p align="center">
  <img src="https://github.com/csabika98/webshop-lrv-php/blob/main/screenshots/19.png?raw=true" alt="Screenshot 19" width="1500">
  <img src="https://github.com/csabika98/webshop-lrv-php/blob/main/screenshots/18.png?raw=true" alt="Screenshot 18" width="1500">
  <img src="https://github.com/csabika98/webshop-lrv-php/blob/main/screenshots/17.png?raw=true" alt="Screenshot 17" width="1500">
  <img src="https://github.com/csabika98/webshop-lrv-php/blob/main/screenshots/16.png?raw=true" alt="Screenshot 16" width="1500">
  <img src="https://github.com/csabika98/webshop-lrv-php/blob/main/screenshots/15.png?raw=true" alt="Screenshot 15" width="1500">
  <img src="https://github.com/csabika98/webshop-lrv-php/blob/main/screenshots/14.png?raw=true" alt="Screenshot 14" width="1500">
  <img src="https://github.com/csabika98/webshop-lrv-php/blob/main/screenshots/13.png?raw=true" alt="Screenshot 13" width="1500">
  <img src="https://github.com/csabika98/webshop-lrv-php/blob/main/screenshots/12.png?raw=true" alt="Screenshot 12" width="1500">
  <img src="https://github.com/csabika98/webshop-lrv-php/blob/main/screenshots/9.png?raw=true" alt="Screenshot 9" width="1500">
  <img src="https://github.com/csabika98/webshop-lrv-php/blob/main/screenshots/10.png?raw=true" alt="Screenshot 10" width="1500">
  <img src="https://github.com/csabika98/webshop-lrv-php/blob/main/screenshots/11.png?raw=true" alt="Screenshot 11" width="1500">
  <img src="https://github.com/csabika98/webshop-lrv-php/blob/main/screenshots/8.png?raw=true" alt="Screenshot 8" width="1500">
  <img src="https://github.com/csabika98/webshop-lrv-php/blob/main/screenshots/6.png?raw=true" alt="Screenshot 6" width="1500">
  <img src="https://github.com/csabika98/webshop-lrv-php/blob/main/screenshots/5.png?raw=true" alt="Screenshot 5" width="1500">
  <img src="https://github.com/csabika98/webshop-lrv-php/blob/main/screenshots/3.png?raw=true" alt="Screenshot 3" width="1500">
  <img src="https://github.com/csabika98/webshop-lrv-php/blob/main/screenshots/2.png?raw=true" alt="Screenshot 2" width="1500">
</p>

---

<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions">
    <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>

---

## 🎉 Welcome to This Laravel-based Webshop!

Welcome to our modern and efficient webshop built on the Laravel framework – a platform renowned for its expressive and elegant syntax. We've designed this webshop with your convenience and satisfaction in mind, ensuring a seamless shopping experience from start to finish.

### 🌟 Why Choose Our Webshop?

Our Laravel-based webshop offers a host of features and benefits, including:

- **Simple and Intuitive Design**: Navigate through our webshop effortlessly thanks to our clean and user-friendly interface.
- **Secure Transactions**: Rest assured that your transactions are secure with robust security measures implemented throughout the platform.
- **Fast and Reliable Performance**: Experience lightning-fast loading times and reliable performance, ensuring minimal wait times during your shopping journey.
- **Extensive Product Range**: Explore our extensive range of products, carefully curated to cater to diverse tastes and preferences.
- **Seamless Checkout Process**: Enjoy a hassle-free checkout process, with multiple payment options available for your convenience.
- **Responsive Customer Support**: Need assistance? Our dedicated support team is always ready to assist you with any queries or concerns you may have.

### 📚 Get Started with Laravel

New to Laravel? Don't worry – we've got you covered! Dive into our comprehensive documentation and video tutorial library to learn everything you need to know about Laravel and how to make the most out of our webshop.

- **Documentation**: Access our extensive [documentation](https://laravel.com/docs) for detailed guides and tutorials.
- **Laravel Bootcamp**: Join our Laravel Bootcamp and embark on a journey to build a modern Laravel application from scratch.
- **Laracasts**: Prefer video tutorials? Check out Laracasts for thousands of video tutorials covering Laravel, PHP, unit testing, and more.

### 💖 Our Sponsors

We extend our heartfelt thanks to our sponsors for their generous support, enabling us to continuously improve and enhance our webshop. Interested in becoming a sponsor? Learn more about our [Laravel Partners program](https://partners.laravel.com).

### 👥 Contributing

We welcome contributions from the community to further enhance our webshop and make it even better! Interested in contributing? Check out our [contribution guide](https://laravel.com/docs/contributions) in the Laravel documentation.

### 📜 Code of Conduct

To ensure a welcoming and inclusive community, we kindly ask all members to adhere to our [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

### 🔐 Report Security Vulnerabilities

Your security is our top priority. If you discover any security vulnerabilities within our webshop, please report them to us immediately by emailing Taylor Otwell at [taylor@laravel.com](mailto:taylor@laravel.com). Rest assured that all security concerns will be promptly addressed.

### 📄 License

Our Laravel-based webshop is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT), allowing you the freedom to use, modify, and distribute the software as you see fit.

