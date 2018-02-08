Gestión Integral - Prueba
===========================================

Prueba técnica desarrollador del área de Tecnología del Grupo SANCHO BBDO (Tiempo: 1 hora y 30 minutos)

## Instrucciones:

El objetivo de este ejercicio es evaluar sus habilidades en desarrollo de aplicaciones mediante el patrón MVC con y ORMs.

Se tiene las siguientes tablas:
- Clientes y Ciudades, se requiere desarrollar un aplicativo en C# o PHP con las funcionalidades para la tabla Clientes (CRUD), con las siguientes condiciones:
- Utilizar MVC
- Se debe crear una vista que contenga los datos de la tabla Clientes
- Crear una vista parcial para seleccionar la ciudad.

Ejercicio
- Se debe construir una solución mínimo 3 capas, adicionar las funcionalidades de (Adición, Consulta, Actualización, Eliminación).

En la base de datos crear los siguientes procedimientos almacenados:
- AdicionaCliente
- ConsultaCliente
- ConsultaClienteTotal
- ModificaCliente
- ConsultaCiudades

Los cuales le permiten realizar la tarea solicitada

Adicionalmente se debe construir una vista en la que se muestren la totalidad de los clientes ingresados en la base de datos, con la totalidad de las columnas, desde donde se seleccione un Cliente y se pueda cargar a la vista principal y se pueda modificar, consultar y/o Eliminar.

Se debe utilizar Bootstrap para dar aspecto visual al sitio.

## Composición de la aplicación

- PHP 7.1
- MySQL 5.0.12
- Laravel 5.5 (MVC)
- Bootstrap 3.3.7 (Look And Feel)
- jQuery 1.12.4
- jQuery Form Validator 2.3.77 (Validación Formularios)

## Demostración

Clic sobre la imagen para ver el demo en YouTube

[![Clic la imagen para ver demo en YouTube](https://img.youtube.com/vi/A57AdCUKsH8/0.jpg)](https://www.youtube.com/watch?v=A57AdCUKsH8)

## Demo en Heroku


[![Clic aquí para ver el demo en Heroku](https://www.youtube.com/watch?v=A57AdCUKsH8)]

## Modelos

Ciudad
- id (llave primaria)
- nombre

Cliente
- id (llave primaria)
- nombres
- apellidos
- cedula
- email
- telefono
- ciudad_id( llave foranea, Ciudad)

## Caracteristicas

- Modulo de ciudades: permite realizar operaciones CRUD para ciudades, muestra el total de ciudades registradas, por cada ciudad muestra número de clientes registrados. Al hacer clic sobre una ciudad, envia a la vista de clientes por ciudad.

- Modulo de clientes: permite realizar operaciones CRUD para clientes, muestra el total de clientes registrados, al crear y editar un cliente, este es asociado a una ciudad (relación uno a uno).

- Validaciones de formulario realizadas con jQuery Form Validator por el lado de frontend, por el lado de backend se implemento validación por medio de Laravel Request.

## Técnicas de Laravel implementadas

- Relaciones establecidas en los modelos Ciudad y Cliente, por medio de Eloquent ORM Active Record: 1) One to One, un cliente vive en una ciudad. 2) Belongs To, una ciudad tiene varios clientes.
- Modelos Ciudad y Cliente con nombres de tabla, campo de llave primaria y campos de dato de tabla de tipo protegido(protected) para garantizar operaciones de almacenamiento y actualización de los datos.
- Migrations, migraciones para establecer los esquemas entre el modelo y la base de datos
- Seeds, para alimentar tabla Ciudades con registros por defecto.
- Middlewares para Ciudad y para Cliente, permiten agrupamiento de rutas por modulos.
- Routes, rutas agrupadas para Cliente y Ciudad.
- Request, reglas de validación y mensaje por medio de backend en Laravel para garantizar seguridad en la aplicación.

## Prerequisitos de instalación

- XAMPP versión 7.1.4
- Composer 1.4.1

## Instalación

Descargar por medio de GIT:

``
git clone https://github.com/claudiainbytes/gestion-integral-prueba.git
``

Instalación de la base de datos **gi-prueba.sql** desde la terminal:

- El script de base de datos **gi-prueba.sql** está en la raíz del proyecto.

En la terminal de comandos ubicarse dentro de la carpeta del proyecto. Ejecutar los comandos:

Ingreso a MySQL, <username> es nombre de usuario, <password> es la contraseña de acceso del usuario:

``
mysql -u <username> -p <password>
``

Ejecutar el siguiente comando para buscar el código sql de la base de datos:

``
source gi-prueba.sql
``

Para salir de la terminal MySQL escribir:

``
exit
``

Para instalar componentes del proyecto establecidos en composer.json ejecutar

``
composer install
``

En la terminal de comandos ejecutar lo siguiente para modificacion de permisos. Realizarlo desde la raíz del proyecto:

``
sudo chmod -R O+W storage
``

Actualizar composer

``
composer dump-autoload
``

Modificar las siguientes constantes del archivo .env con la siguiente información:

APP_NAME=GIPrueba

APP_URL=ruta_url_local

DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=gi-prueba

DB_USERNAME=nombre_usuario_base_de_datos

DB_PASSWORD=contraseña_usuario_base_de_datos






