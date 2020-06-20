# Installation

### Clone the project
```
git clone https://github.com/owiesnama/oktama-task.git
```
### Cd to the project and Copy env file
```
cd ./oktama-task && cp .env.example .env
```
### Run the migrations
```
php artisan october:up
```
### Serve the project

```
php artisan serve
```
You should change the env vars to match your configrations 

*Note: there is an admin user seeded to the database with credentials:*

Email: admin@admin.com
Password: password
