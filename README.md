# AgriBayani
AgriBayani is a web-based application that aims to connect investors with farmers to provide them with capital and allow the farmers to scale up. Agribayani attracts investors as it provides a social media platform for investors to connect and update with their borrowers through the platform.

# Preview
Agribayani is currently hosted on [agribayani.live](agribayani.live)

## Installation instructions
Prerequisites
- PHP (8.1.7 was used)
- Composer (2.5.5 was used)
- NPM (9.5.0 was used)
- xampp (8.1.7 was used)

1. Clone the repository
```
git clone https://github.com/LamberlainMuli/AgriBayani.git
cd AgriBayani
```
2. Install dependencies
```
composer install
npm install
```
3. Run XAMPP Control panel
4. Start Apache and MySQL
5. Start setting up database by going to phpmyadmin (by default http://localhost/phpmyadmin/index.php)
6. Create new database by clicking new, inputting name, and create
7. Click newly created database, go to import, and upload agribayani.sql, a sample database (optional)
8. Create .env (by duplicating and editing .env.example)  to match the database name, username, and password.
```
DB_DATABASE=agribayani
DB_USERNAME=root
DB_PASSWORD=
```
9. Generate app key
```
php artisan key:generate
```
10. Run local server
```
php artisan serve
```
11. Open server (by default: http://127.0.0.1:8000) in browser

## Usage instructions
AgriBayani provides two distinct account options: (1) Investor and (2) Borrower. Broadly speaking, investors have the opportunity to allocate their capital towards borrowers, who are specifically farmers in the Philippines. Beyond the investment component, the online platform also incorporates a social networking aspect to foster meaningful relationships between investors and borrowers, enabling them to connect in an emotional, social, or advisory capacity.

Currently, the web application is not yet in production as the team is yet to find initial investors.

## Technologies used
- **PHP**
  - PHP is a server-side scripting language used for web development to create dynamic web pages and interactive applications.
- **MySQL**
  - MySQL is a popular open-source relational database management system that uses SQL (Structured Query Language) to manage and organize data.
- **Hypertext Markdown Language (HTML)**
  - HTML is the standard markup language used for creating web pages and other web-based documents.
- **Cascading Style Sheets (CSS)**
  - CSS is a stylesheet language used to add style and formatting to HTML documents, such as changing colors, fonts, and layouts.
- **Javascript**
  - JavaScript is a programming language used to create interactive and dynamic web pages and applications.
- **Bootstrap**
  - Bootstrap is a free and open-source CSS framework used for designing responsive and mobile-first websites and web applications.
- **ChatGPT**
  - ChatGPT is an AI-based chatbot or conversational agent developed by OpenAI that can understand natural language and respond to user queries in a conversational manner.
- **Replit**
  - Replit is a web-based integrated development environment (IDE) that allows developers to write, run, and collaborate on code in various programming languages, such as Python, JavaScript, and Java.

## Project contributors
Team **OPT'** /ɑpt praɪm/

- Beaux Nathania Immanuelle Consunji
  - Head developer, front-end developer
- James Bryan Francisco
  - Researcher, designer, front-end developer
- Thaniel Lee
  - Spokesperson, database developer
- James Ivan Mostajo
  - Researcher, front-end developer 
- Lamberlain Muli
  - Back-end developer, prompt engineer
- Joshua Paolo Zapico
  - Researcher, front-end developer

## Additional Resources and Notes
AgriBayani is a project entry for CompsAt's Blue Hacks 2023 event scheduled to take place on April 29-30, 2023. This initiative is motivated by the Sustainable Development Goal (SDG) 8, which is focused on promoting "decent work and economic growth".
