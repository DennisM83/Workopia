# Job Listings App

This is a job listings web application built with vanilla PHP 8, utilizing an MVC architecture similar to Laravel. Users can register, log in, create job listings, and apply to job listings from companies.

## Features

- **User Authentication**: Secure user registration and login system.
- **Job Listing Creation**: Users can create and manage their job listings.
- **Job Application**: Users can apply to job listings from different companies.
- **MVC Architecture**: Organized codebase with Model-View-Controller separation for maintainability and scalability.
- **Responsive Design**: Mobile-friendly layout using Tailwind CSS for accessibility on various devices.

## Technologies Used

- **Backend**: PHP 8
- **Frontend**: HTML, Tailwind CSS
- **Database**: MySQL
- **Architecture**: MVC (Model-View-Controller)

## Installation

### Prerequisites

- PHP >= 8
- MySQL
- Web server (e.g., Apache, Nginx)

### Steps

1. **Clone the repository**
    ```bash
    git clone https://github.com/yourusername/job-listings-app.git
    ```

2. **Navigate to project directory**
    ```bash
    cd job-listings-app
    ```

3. **Import Database**
    - Create a new MySQL database
    - Import the `database.sql` file located in the `database` directory

4. **Configuration**
    - Update `config.php` in the `app/config` directory with your database credentials
    ```php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', 'password');
    define('DB_NAME', 'job_listings');
    ```

5. **Run the Application**
    - Start your web server
    - Open the application in your browser (e.g., `http://localhost/job-listings-app`)

## Usage

1. **Registration**
    - Navigate to the registration page and fill in the required details to create a new account.

2. **Login**
    - After registration, log in using your credentials.

3. **Create Job Listing**
    - Once logged in, navigate to the create job listing page.
    - Fill in the job details and submit the form to create a new job listing.

4. **Apply to Job**
    - Browse through the available job listings.
    - Click on a job listing to view details and apply to the job.

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License

This project is licensed under the MIT License. See the `LICENSE` file for details.
