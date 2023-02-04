Laravel Property Listing API
============================

This is a RESTful API built with Laravel framework that provides functionality for brokers, properties and authentication.

Endpoints
---------

*   Brokers

    *   Get all brokers: `GET /api/brokers`
    *   Get single broker: `GET /api/brokers/{id}`
    *   Create new broker: `POST /api/brokers`
    *   Update broker: `PUT /api/brokers/{id}`
    *   Delete broker: `DELETE /api/brokers/{id}`
*   Properties

    *   Get all properties: `GET /api/properties`
    *   Get single property: `GET /api/properties/{id}`
    *   Create new property: `POST /api/properties`
    *   Update property: `PUT /api/properties/{id}`
    *   Delete property: `DELETE /api/properties/{id}`
*   Authentication

    *   Register: `POST /api/register`
    *   Login: `POST /api/login`

Requirements
------------

*   PHP 8.0 or higher
*   Laravel 8.0 or higher
*   MySQL

Installation
------------

*   Clone the repository: `git clone https://github.com/ikamal7/Laravel-property-listing-API.git`
*   Install dependencies: `composer install`
*   Copy the example env file and make the required configuration changes in the .env file: `cp .env.example .env`
*   Generate an app encryption key: `php artisan key:generate`
*   Create a database and inform the settings in the .env file
*   Run migrations: `php artisan migrate`
*   Start the development server: `php artisan serve`

The API will be available at `http://localhost:8000/api`.

License
-------

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
