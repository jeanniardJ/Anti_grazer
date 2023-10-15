## Overview

The architecture of Anti Grazer is modular and decoupled, aimed at ensuring scalability, maintainability, and robustness. The project is divided into three main components - Backend, Frontend, and Browser Extensions, each having its distinct role and functionality. The following sections describe the architectural design, technologies used, and the interaction between these components.

## Backend (Symfony API)

### Technologies
- PHP 7.4
- Symfony 5
- MySQL

### Description

The backend serves as the heart of the application, handling business logic, data processing, and communication with the database. It exposes a RESTful API that allows the frontend and browser extensions to interact with the system. 

- **Models:** Define the structure of the data and handle the interaction with the database.
- **Controllers:** Process incoming requests, handle business logic, and return responses.
- **Services:** Encapsulate core business logic and provide reusable functionalities across the application.
- **Middleware:** Manage cross-cutting concerns such as authentication, authorization, and error handling.

## Frontend (React)

### Technologies
- ReactJS
- Redux
- Axios

### Description

The frontend provides a user interface for the users to interact with the system. It consumes the API provided by the backend to fetch and send data.

- **Components:** Define the UI elements and handle user interactions.
- **State Management:** Manage the state of the application and ensure consistency.
- **Services:** Handle communication with the backend and manage data fetching, caching, and error handling.

## Browser Extensions (Chrome, Mozilla, Edge)

### Technologies
- JavaScript
- HTML & CSS

### Description

The browser extensions provide real-time protection against grazers and spam on social networks by interacting with the backend to fetch data and apply necessary filters on the client-side.

- **Event Listeners:** Listen to browser events and respond accordingly.
- **API Calls:** Communicate with the backend to fetch necessary data.
- **UI Modifications:** Modify the DOM to provide real-time feedback and actions to the users.

## Interaction Between Components

The backend, frontend, and browser extensions interact through HTTP requests using the RESTful API exposed by the backend. This decoupled architecture allows each component to evolve independently while ensuring a seamless interaction between them.

## Documentation

Detailed documentation for each component, along with API documentation, is available in the `docs` directory.
