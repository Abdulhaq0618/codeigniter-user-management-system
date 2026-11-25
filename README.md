# CodeIgniter 4 - User Management System

A simple and responsive User Management System developed using **CodeIgniter 4, PHP, MySQL, and Bootstrap 5**.

This project allows users to manage user records through a clean dashboard with Create, Read, Update, and Delete (CRUD) functionality.

## Features

- View all registered users.
- Add new users.
- Edit existing user information.
- Delete users with confirmation.
- Form validation for required fields.
- Email format and duplicate email validation.
- Phone number validation (11 digits).
- Responsive Bootstrap 5 interface.
- MySQL database integration.

## Technologies Used

| Technology | Purpose |
|---|---|
| PHP | Backend programming |
| CodeIgniter 4 | PHP framework |
| MySQL | Database |
| Bootstrap 5 | Frontend styling |
| HTML5 | Page structure |
| CSS3 | Styling |
| JavaScript | Interactive features |
| Git & GitHub | Version control |

## Project Structure

```text
UserManagement/
├── app/
│   ├── Controllers/
│   │   └── User.php
│   ├── Models/
│   │   └── UserModel.php
│   ├── Views/
│   │   ├── users.php
│   │   ├── addUser.php
│   │   └── editUser.php
│   └── Config/
│       └── Routes.php
├── public/
├── tests/
├── writable/
├── .gitignore
├── composer.json
└── README.md
```

## Installation and Setup

### 1. Clone the repository

```bash
git clone https://github.com/Abdulhaq0618/codeigniter-user-management-system.git
```

### 2. Open the project

Move the project folder into your XAMPP `htdocs` directory.

### 3. Install dependencies

Open a terminal inside the project folder and run:

```bash
composer install
```

### 4. Configure the environment

Copy the `env` example file to `.env` and configure your database settings.

```ini
app.baseURL = 'http://localhost:8080/'

database.default.hostname = localhost
database.default.database = user_management
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.port = 3306
```

### 5. Create the database

Create a MySQL database named:

```sql
CREATE DATABASE user_management;
```

Import the SQL file from the project's database folder (provided separately in this repository).

### 6. Run the application

Start Apache and MySQL from XAMPP.

From the project directory, run:

```bash
php spark serve
```

If PHP is not configured in your Windows PATH, use:

```powershell
C:\xampp\php\php.exe spark serve
```

### 7. Open the application

Visit:

http://localhost:8080/users

## Database Structure

The application uses a `users` table with the following fields:

| Column | Type | Description |
|---|---|---|
| id | INT | Primary key, auto increment |
| name | VARCHAR(100) | User name |
| email | VARCHAR(100) | Unique email address |
| phone | VARCHAR(11) | Phone number |

## Author

**Abdulhaq0618**

GitHub: https://github.com/Abdulhaq0618

## License

This project is available under the license included in this repository.