# Project Anti grazer Backend

This repository contains the backend code for Anti grazer, built with Symfony.

## Table of Contents

- [Getting Started](#getting-started)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Running the Application](#running-the-application)
- [Testing](#testing)
- [API Documentation](#api-documentation)
- [Deployment](#deployment)
- [Built With](#built-with)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## Getting Started

These instructions will get you a copy of the backend up and running on your local machine for development and testing purposes.

## Prerequisites

- PHP 7.4 or higher
- Composer
- Symfony CLI
- A web server like Apache
- A database server like MySQL

## Installation

1. Clone the repository:
    ```php
    git clone https://github.com/username/project-name.git
    cd project-name/backend
    ```
2. Install dependencies:
    ```php
    composer install
    ```
3. Configure your environment variables in the `.env` file.
4. Create the database and the schema:
    ```php
    bin/console doctrine:database:create
    bin/console doctrine:schema:create
    ```

## Running the Application

1. Start the Symfony server:
    ```php
    symfony server:start
    ```

## Testing

Run the tests with the following command:
```php
bin/phpunit
```

## API Documentation

API documentation is available at `/api/doc`.

## Deployment

Additional notes about how to deploy this on a live system.

## Built With

- [Symfony](https://symfony.com/) - The web framework used.
- [Doctrine](https://www.doctrine-project.org/) - Object-Relational-Mapper (ORM)
- [API Platform](https://api-platform.com/) - API framework (if used)

## Contributing

Please read [CONTRIBUTING.md](../CONTRIBUTING.md) for details on our code of conduct, and the process for submitting pull requests to us.

## License

This project is licensed under the MIT License - see the [LICENSE.md](../LICENSE.md) file for details.

## Contact

For any inquiries, please reach out to contact@jja-dev.fr.
