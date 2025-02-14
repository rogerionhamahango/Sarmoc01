## This project was created using ubuntu system and here you will find principal comands to work in this project

```
sudo composer create-project laravel/laravel sarmoc
```

To access project folder on terminal

```
cd /var/www/sarmoc
```

After that use comand to open the project on vs code for edition

```
code .
```

Access terminal on vs code to start project

If you downloaded the project, you must use this comand to get other dependecies

```
sudo apt install composer
```

then generate the key with

```
sudo php artisan key:generate
```

```
sudo php artisan serve
```

they will show url to access the project on browser

```
http://127.0.0.1:8000
```

When you need to create view with terminal into the project

```
sudo php artisan make:view name_of_view
```

To create view into a new specific folder

```
sudo php artisan make:view name_of_folder\name_of_view
```

To create controller

```
sudo php artisan make:controller NameController
```

To use the controller of a view is important to import into a web.php if it belongs to route othewise into a page required to use it

Create databases using migrations

On .env archive make some changes to databases, username, pasword and

```
sudo php artisan make:migration create_name_of_table_table
```

confirm on database then migration and look for date and name used to create this table on migrations

into migration create columns needed on table.

to execute migration

```
sudo php artisan migrate
```

create model to manipulate data

```
sudo php artisan make:model Name_of_model
```

into of model add

```
protected $table = 'name_of_table'
```
protected $fillable = ['name_of_column', 'other name', 'until complete columns'];
```

create controller for regist workas information

```
sudo php artisan make:controller Store1Controller
```
create model for createuser table

```
sudo php artisan make:model CreateUser
```




