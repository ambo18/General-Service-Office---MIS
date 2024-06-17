# General Service Office MIS

This project is the "General Service Office Management Information System" (MIS) designed for the inventory management of the General Mac Arthur Eastern Samar Market. The system is implemented using PHP and MySQL and runs on XAMPP.

## Table of Contents
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Features

- **Generate Reports**: Generate various inventory and management reports.
- **Print MR Form**: Print Material Requisition forms.
- **Request Management**: Borrowers can submit requests for materials.

## Installation

To set up the project on your local machine, follow these steps:

### Prerequisites

- XAMPP (or any other similar local server environment)

### Steps

1. **Clone the repository:**

    ```bash
    git clone https://github.com/yourusername/GeneralServiceOfficeMIS.git
    ```

2. **Move the project files to the XAMPP directory:**

    Copy the cloned repository to the `htdocs` directory of your XAMPP installation.

3. **Start XAMPP:**

    Open the XAMPP Control Panel and start the Apache and MySQL services.

4. **Create the database:**

    - Open your browser and go to `http://localhost/phpmyadmin`.
    - Create a new database, for example, `gsomis`.
    - Import the database schema from the `database.sql` file located in the project directory.

5. **Access the application:**

    Open your browser and go to `http://localhost/GeneralServiceOfficeMIS`.

## Usage

1. **Login:**

    Use the login page to enter the system. Default credentials can be set in the database if needed.

2. **Dashboard:**

    The dashboard provides an overview of the main features, including the following:
    - Displays the total number of equipment and supplies.
    - Lists the specific equipment and supplies.
    - Shows the total number of requests from borrowers.
    - Displays the total records in the system.

3. **Reports:**

    Generate and download various reports on inventory status and other relevant data.

4. **Print MR Forms:**

    Print Material Requisition forms for inventory items.

5. **Borrower Requests:**

    Manage requests from borrowers, including approving or denying requests.

## Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Commit your changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Create a new Pull Request.
