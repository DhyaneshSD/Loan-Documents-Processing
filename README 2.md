# Insurance Management System
This project is an Insurance Management System designed to manage insurances online efficiently. It features an intuitive end-user panel for clients and a robust admin panel for administrators, ensuring ease of use and proper functionality. The system is developed using HTML, CSS, JavaScript for the frontend, and PHP with MySQL for the backend.

## Features
### End-User Panel
- **Login and Registration**: New users can register and existing users can log in.
- **Dashboard**: Users can view the policies they have applied for, apply for new policies, ask queries, and give feedback.

### Admin Panel
- **Admin Dashboard**: Admins can log in to manage customer policies, create new policies, and resolve user queries.

## Technologies Used
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL

## Database
1. Set up the database:
   - Create a new MySQL database.
   - Import the provided SQL file (`insurance_management.sql`) to set up the required tables.

2. Update the database configuration in the PHP files:
      Update the database connection details in config.php
         $servername = "your_server_name";
         $username = "your_username";
         $password = "your_password";
         $dbname = "your_database_name";
   
3. Start a local server to run the project (e.g., using XAMPP or WAMP).

## Usage
- **End-User Panel**: Users can register, log in, view and apply for policies, ask queries, and provide feedback.
- **Admin Panel**: Admins can log in to manage policies, create new policies, and resolve user queries.
