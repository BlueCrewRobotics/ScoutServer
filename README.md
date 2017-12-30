# Scout Server

Scouting at FRC events made easy.

## About

Scout is FRC team 6153's interpretation of scouting. Scout is comprised of two parts; The app, and the server. This repository contains all of the server code. The server code is written in php.

## Getting Started

You need very little to get started developing on Scout Server.

### Tools

- Visual Studio Code (Or Any Good Text Editor)
- PHP
- MySQL

### Setting Up

In order for your install of the Scout Server to work, we need to make some modifications.

1) Edit the scout.ini file. You will need to make the appropriate changes for your MySQL config. You will need to create a MySQL user and password. Change the scout.ini file accordingly.

2) Move the scout.ini file. You should move the scout.ini file to the root directory of your server in a place out of sight to your servers public html folder.

3) Point the database.php file to your scout.ini. You will need to edit line 23 of the database.php file to the scout.ini file you **hopefully** placed in the root directory of your server.

4) Import Scout.sql. You will need to import the Scout.sql file into phpMyAdmin so it can set up the database and it's tables.

5) Add your team key. A team key is required when using the scout app for simple authentication. Your can create a row in the table `TeamKeys` with an `id` of `1` and a `teamKey` of your key you want to use.

### Editing

While editing, please follow the guidelines outlined for our team [here](https://github.com/BlueCrewRobotics/Guidelines-and-Resources/wiki "Code Guidelines"). This is one of those situations where you should do as I say, not as I do. The code in this repository is messy and lacking comments.

## Contributing

1. Fork it!
2. Create your feature branch: `git checkout -b my-new-feature`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin my-new-feature`
5. Submit a pull request

## Credits

* **Matthew Gallant** - *Initial work* - [MatthewGallant](https://github.com/MatthewGallant)

## License

[MIT License](https://github.com/BlueCrewRobotics/ScoutServer/blob/master/LICENSE "License")