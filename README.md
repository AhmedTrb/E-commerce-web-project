# E-commerce Website: SetUpSprint

This project is an e-commerce website developed using HTML, CSS, JavaScript, PHP, and MySQL. It serves as a platform for users who are interested in building their own PC setups by providing them with a variety of PC components for sale. The website offers a range of PC components such as processors, graphics cards, motherboards, RAM, storage devices, power supplies, and peripherals.

## Features :
- **User Authentication:** Users can sign up, log in, and log out securely to access the website's features and make purchases.
- **Product Listings:** The website displays a wide range of PC components categorized by type, and brand, allowing users to browse and search for specific items easily.
- **Shopping Cart:** Users can add products to their shopping cart, review the items in their cart, and proceed to checkout to complete their purchases.
- **Checkout Process:** The website facilitates a secure checkout process where users can review their order details, enter shipping and payment information, and place their orders.
- **User Profile:** Registered users have access to a profile page where they can view their order history, update their account information, and manage their preferences.

Overall, this e-commerce website provides a convenient and user-friendly platform for individuals who are building their PC setups to browse, select, and purchase PC components efficiently.

VIDEO DEMO : [DEMO](https://drive.google.com/file/d/1I5cI4qAhnhip99CPLuo-0v1Wjxn7809G/view?usp=sharing) 
## Project Structure :
```
project/
│   homePage.php
│   README.md
│
├───admin
│       admin.css
│       adminDashboard.php
│       adminOrders.php
│
├───assets
│   ├───css
│   │       style.css
│   │       style1.css
|   |
│   ├───images/
│   │
│   └───js
│
├───config
│       cartManagement.php
│       login.php
│       logout.php
│       orderManagement.php
│       signup.php
│
├───DB-setup
│       scraping_products_data.py
│       setupsprint_ecommerce_website.sql
│
├───includes
│       database.php
│       footer.php
│       header.php
│
├───loaders
│       cartItemsLoader.php
│       profilePastOrdersLoader.php
│       shopProductLoader.php
│
└───pages
        brandsPage.php
        cartPage.php
        checkoutPage.php
        orderConfirmedPage.php
        productDetailPage.php
        profilePage.php
        shopPage.php
        signinPage.php
        SignUpPage.php
```
## Project Setup :
1. if XAMPP is installed on your Computer Clone this repository in “htdocs” folder in your XAMPP installation directory (e.g., C:\xampp\htdocs for Windows) if not download it in [Here](https://www.apachefriends.org/download.html)
```
git clone https://github.com/AhmedTrb/E-commerce-web-project.git
```
2. start Apache and Mysql :

   
![image](https://github.com/AhmedTrb/E-commerce-web-project/assets/24763713/fc9dbb49-70d6-48a6-8c20-60e377fd8435)
- if mysql is running on a different port change the port number in includes/database.php and DB-setup/scraping_products_data 
3. Setup the database :
   - open ["http://localhost/phpmyadmin"](http://localhost/phpmyadmin/) in your browser and create a database named "setupsprint_ecommerce_website";
   - execute the SQL queries inside the DB-setup folder
   - execute the Python code to load data into the DB (all data was scraped from another website)
  
4. Open the project : "[http://localhost/homePage.php](http://localhost/E-commerce-web-project/homePage.php)"
***

## Screenshots : 

### home page :
![image](https://github.com/AhmedTrb/E-commerce-web-project/assets/24763713/ec660008-b3e2-4a8d-b3cf-941a8c6a96a6)


### Shop :
![image](https://github.com/AhmedTrb/E-commerce-web-project/assets/24763713/9b192f51-ae2b-4bfd-b11a-88b7cecf03ea)
### Product Detail :
![image](https://github.com/AhmedTrb/E-commerce-web-project/assets/24763713/5a93442a-a751-4a91-a655-1cb746b3717c)
### Login :
![image](https://github.com/AhmedTrb/E-commerce-web-project/assets/24763713/d242a7c7-c387-4969-9790-0672d1d07694)
### Signup :
![image](https://github.com/AhmedTrb/E-commerce-web-project/assets/24763713/62d31c3f-0a96-4da7-b059-fd7f91798d05)

### Profile Page :
![image](https://github.com/AhmedTrb/E-commerce-web-project/assets/24763713/2d1ace03-d2f6-4dbd-97dc-a5912081118f)
### Cart :
![image](https://github.com/AhmedTrb/E-commerce-web-project/assets/24763713/89a8472e-27a5-4133-89d4-fda8c7c2f63b)
### Checkout :
![image](https://github.com/AhmedTrb/E-commerce-web-project/assets/24763713/9a8ce7c4-b60f-4b7e-8723-fbb6ab4ed341)







