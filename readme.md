Metapp

Projecto de titulo

Installation notes:

upload the files to a server
run commands:
- "composer install"
- "npm install"

to start the site you need to use the command:
- "php artisan serve"

to use your own database you need to:
- "cp .env.example .env" to copy the env file to configure your database
- "php artisan key:generate" to generate the encription key
- modify the .env file with the data of your database
- "php artisan migrate" to migrate your tables into the database


Release notes:

v2.3
- can now register devices to user
- user can asign their registered devices to specific groups in activities
- app recognises which session its selected for the device and loads the corresponding activity and group

v2.2
- genera una tabla con los datos de uso de la aplicacion
- se puede descargar un excel con los datos de uso de la aplicacion

v2.1
- added table with users
- steps now can be set with a specific order
- application can now check the order of the steps
- app saves data from its users
- app can now present an analisis step about the activity
- app now assigns different substeps to different members of a group