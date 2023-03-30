 
 The project it's made to update every minute the currency exchange rates for USD, EUR and GBP in CZK.
 
  Tehnologies used: PHP 8, Laravel 9, Vuejs 3, MySQL

  The steps for creating the project:
1. I created a repository with the specific functions to access the database. (every minute I store the currency in a table)
2. I created a command where I call an external API to fetch the currencies. The command is called minute by minute.
3. I created a base class to format the currencies stored in the databse.
4. I create a controller and a route + axios, to send data to Vuejs.
5. I create a table to display the currencies.

* I didn't used the conventional laravel model, because the code is running faster using base classes and repositories. :) 

    Pictures from the project:
    
![image](https://user-images.githubusercontent.com/84518155/228784718-67b6c2ae-c24e-43b0-83b5-dbef6a19c8dd.png)

![image](https://user-images.githubusercontent.com/84518155/228784791-65b55aba-fa78-4a40-882f-6ccb58868204.png)

![image](https://user-images.githubusercontent.com/84518155/228784935-1a3c4795-411a-4412-ad81-cad190acb432.png)
