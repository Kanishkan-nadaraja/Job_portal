# Employer Registration System

This project is designed to facilitate the registration of employers through a web-based interface. Below are the details regarding the project structure, setup instructions, and usage guidelines.

## Project Structure

```
system
├── php
│   └── config.php          # Contains database connection settings and configurations
├── employer_register.php    # Registration page for employers
└── README.md                # Documentation for the project
```

## Setup Instructions

1. **Clone the Repository**: 
   Clone this repository to your local machine using the following command:
   ```
   git clone <repository-url>
   ```

2. **Install Dependencies**: 
   Ensure you have PHP and a web server (like Apache) installed. You may also need to install Composer for dependency management if required.

3. **Database Configuration**:
   - Open the `php/config.php` file.
   - Update the database connection settings with your database credentials.

4. **Create Database**:
   - Create a database for the application.
   - Run the necessary SQL scripts to create the required tables (if provided).

5. **Access the Application**:
   - Start your web server and navigate to `http://localhost/system/employer_register.php` to access the employer registration page.

## Usage Guidelines

- Fill in the registration form with the required details:
  - Business Name
  - Email
  - Business Registration Number
  - Phone
  - Required Details

- Upon submission, the application will check for existing email addresses to prevent duplicates.
- If the email is unique, the employer's data will be inserted into the database, and a success message will be displayed.

## Contributing

Contributions are welcome! Please feel free to submit a pull request or open an issue for any enhancements or bug fixes.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.