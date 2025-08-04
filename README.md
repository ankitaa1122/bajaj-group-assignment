# Bajaj Group - Frontend Assignment

## Features
- Fully responsive layout using HTML with embedded CSS & JS
- Navigation bar with working links to each section/page
- Image slider on homepage 
- Contact form with:
  - Name, Email, Company, Phone, Message
  - Basic checkbox CAPTCHA
- PHP backend with MySQL integration
- Clean folder structure ready to deploy or push to GitHub

## To Run

-Open phpMyAdmin (or any MySQL client) and create a database named bajaj_contact.

-Inside that database, create a table named contacts with following fields:

id → INT, AUTO_INCREMENT, PRIMARY KEY

name → VARCHAR(100)

email → VARCHAR(100)

company → VARCHAR(100)

phone → VARCHAR(20)

message → TEXT

created_at → TIMESTAMP, default CURRENT_TIMESTAMP

-Open the file backend/config.php and update the database credentials as per your system:

-Place your full project folder inside the htdocs directory of XAMPP.

-Start Apache and MySQL from the XAMPP control panel.

-Open your browser and visit:
http://localhost/Bajaj_Project/
Fill out and submit the contact form. save the data to your MySQL database.


## Folder Structure

index.html             → Homepage (with inline CSS + JS)
contact.html           → Contact form page (with inline CSS + JS)
backend/
  config.php           → Database connection
  submit_form.php      → Form processing script
images/                → Folder for logo, banners, and slider images
README.md              → This file


