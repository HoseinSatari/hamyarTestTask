# Medium diagnose Module

In this project, the goal is to develop the medium enterprise module.

## Let's start

Follow the steps below to get started with this project.

### Dependencies

Some requirements that must be installed before using the project.

### 1_ Set database in .env :
```bash
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```
### 2_ Enter the following command to install composer packages :
```bash
composer install
```

### 3_ Enter the following command to install npm packages :
```bash
npm install
```

### 4_ Run the following command for site data and creating tables :
```bash
php artisan module:migrate --seed
```

### 4_ To load vue.js components and function correctly in the front end, enter the following command:
```bash
npm run build
```
### 4_ Run the project on port 8000  :
```bash
php artisan serve --port=8000
```


