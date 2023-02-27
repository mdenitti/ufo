# UFO

## Introduction

This app allows users to report and view UFO sightings. In order to run the app, you will need to have the following requirements installed on your system:

- PHP 7.0 or later
- MySQL
- Apache or Nginx web server
- Composer

## Installation

1. Clone the repository to your local machine.
2. Run `composer install` to install the necessary dependencies.
3. Create a new MySQL database and import the `database.sql` file located in the `sql` folder of the app.
4. Copy the files from the `ufo` folder to your web server's document root.
5. Update the database credentials in the `env.example.php` file located in the `includes` folder. Replace `DB_USERNAME`, `DB_PASSWORD`, and `DB_NAME` with your MySQL database username, password, and database name respectively.

## Usage

1. Open the app in your web browser by navigating to the URL where the app is installed.
2. To report a UFO sighting, fill out the form with the details of the sighting and click "Submit".
3. To view a list of all reported sightings, click the "Sighting list" button on the app's home page. This will take you to a page that displays a table of all sightings. Click the "Details" button for a sighting to view more information about it.

## Version Control 1.0.2
The current version of the app is 1.0.2. You can use version control software, such as Git, to track changes to the app and collaborate with others on the development of the app.

## Conclusion

Thank you for using the UFO Sighting App. If you have any questions or issues, please feel free to contact us.