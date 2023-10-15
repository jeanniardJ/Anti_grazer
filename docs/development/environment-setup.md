# Environment Setup

This document guides you through setting up your development environment for contributing to the Anti Grazer project.

## Table of Contents

- [Prerequisites](#prerequisites)
- [Getting the Code](#getting-the-code)
- [Installing Dependencies](#installing-dependencies)
- [Setting Up the Database](#setting-up-the-database)
- [Running the Application](#running-the-application)
- [Additional Configurations](#additional-configurations)

## Prerequisites

Ensure you have the following installed on your machine:

- [Git](https://git-scm.com/downloads)
- [PHP](https://www.php.net/downloads) (version 8.1 or higher)
- [Composer](https://getcomposer.org/download/)
- [Node.js](https://nodejs.org/en/download/) (version X.X or higher)
- [Yarn](https://yarnpkg.com/getting-started/install)

## Getting the Code

1. Fork the [Anti Grazer repository](https://github.com/your-username/anti-grazer) on GitHub.
2. Clone your fork locally:

```bash
git clone https://github.com/your-username/anti-grazer.git
cd anti-grazer
```

## Installing Dependencies

1. Install PHP dependencies:

```bash
composer install
```

2. Install JavaScript dependencies:

```bash
yarn install # or npm install
```

## Setting Up the Database

1. Copy the `.env.example` file to a new file named `.env`:

```bash
cp .env.example .env
```

2. Update the database connection settings in the `.env` file.
3. Run the migrations to set up the database schema:

```bash
php bin/console doctrine:migrations:migrate
```

## Running the Application

1. Start the Symfony server:

```bash
symfony server:start
```

2. In a new terminal window, start the front-end development server:

```bash
yarn dev # or npm run dev
```

3. Open your browser and navigate to [http://localhost:8000](http://localhost:8000).

## Additional Configurations

- To configure additional settings, refer to the [configuration documentation](configuration.md).

---

If you encounter any issues or have questions, feel free to reach out to the team or open an issue on GitHub.
```

In this document, replace placeholders like `your-username`, `X.X`, and any URLs or command lines that may differ in your project setup.
