# Faculty Availability

A web application designed to help students find faculty members, check availability, and request meetings without needing to locate faculty cabins manually.

## Problem
Students may need to find a faculty member outside class hours without knowing their location or availability. This project provides a simple web-based workflow for faculty availability and meeting requests.

## Intended workflow
1. A faculty member registers and signs in.
2. Faculty availability is represented through the application.
3. A student selects a faculty member, meeting reason, date, and time.
4. The request can be stored for the faculty member to review.

## Technology
- HTML
- CSS
- JavaScript
- PHP
- MySQL

## Local setup
1. Install PHP and MySQL using a local environment such as XAMPP.
2. Create the database expected by the PHP scripts.
3. Configure the local database connection.
4. Place the repository under the web server's document root.
5. Open the login page through the local PHP server.

## Project status
Educational/portfolio project. The original implementation is a prototype; this cleanup branch focuses on authentication, documentation, and repository hygiene.

## Security
Never store plaintext passwords. Database queries should use prepared statements and user input must be validated server-side.
