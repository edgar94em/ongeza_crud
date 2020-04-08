HOW TO RUN THE CRUD
-The task has been done using laravel framework
-Download the folder ongeza_crud from the provided link on email and copy it to xampp\htdocs.
-You will use laravel to access the database, open cmd prompt and navigate to the crud folder by giving the command cd c:\xampp\htdocs\ongeza_crud
-go to localhost/phpmyadmin in web browser or start xampp or wampp control panel then start apache and mysql and click admin in mysql. Now create an empty database called ongeza_test (as it is named in .env file) of this project.
- Then go back to cmd to migrate the database from folder to database server. “Use php artisan migrate” command from c:\xampp\htdocs\ongeza_crud ( Note that you must have xampp or wampp local server installed in your computer).
-Now go back to cmd command prompt in the path c:\xampp\htdocs\ongeza_crud>then from here type php artisan serve.
-At this point, laravel development server will be started, note that you must have laravel composer installed in your computer.
-Now go to web browser and type localhost:8000/customer.
