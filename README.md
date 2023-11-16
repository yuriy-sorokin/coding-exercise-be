# [Symfony 4] Contact Form - BE Exercise
1. Creates an API endpoint for a contact form using Symfony 4.
2. Assuming a CSV containing data from a legacy website, imports it into a new database.

The data is validated and persisted in a database:
* E-mail (required, valid email address)
* Message (required, max length 1000)

## Exercise
Browse the code in `app/src/` and think of ways on how to improve and refactor it.
Think of design patterns and principles like SOLID, KISS, DRY, etc.

## Installation
#### Requirements
- `Docker` and `docker-compose`

#### Install
1. Clone the repository and execute
```sh
cd ./docker && docker-compose up --build
```
2. Add an entry into your `hosts` file:
```sh
127.0.0.1 sf4-contact-form.local
```

#### Run tests
```sh
cd app/
```
then
```sh
vendor/bin/phpunit
```

## Usage
Visit [http://sf4-contact-form.local:8888](http://sf4-contact-form.local:8888)
