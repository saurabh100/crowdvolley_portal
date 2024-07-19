## Setup crowdvolley Portal Steps

1.  **Configuration**: Configure your database connection settings in the .env file.

2.  **Install Dependencies**: Install the required PHP dependencies using Composer.

    ```bash
      composer update
    ```
    then 

    ```bash
       php artisan key:generate
    ```

3.  **Database Migrations**: Run the database migrations to create the necessary tables.

    ```bash
      php artisan migrate

    ```

4.  **Seed Data (Optional)**: If you'd like to populate the system with sample data, run the seeders.

    ```bash

      php artisan db:seed

    ```

5.  **Start the Application**: Start the Laravel development server.

    ```bash
     php artisan serve

    ```

6.  **Access the Application**: Open your web browser and access the application at http://localhost:8000 (or the URL provided by the Laravel server).


