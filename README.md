
<p align="center">
  <img src="https://seeklogo.com/images/L/lumen-logo-3B3EF36866-seeklogo.com.png" width="50px"/>
  <br>
</p>
<div align=center>
    <a href="#desc">Description</a> | <a href="#prerequisites">Prerequisites</a> | <a href="#running">Running</a> | <a href="#principles">Principles</a> | <a href="#methodologiesDesigns">Methodologies & Designs</a> | <a href="#librariesFrameworks">Libraries and Frameworks</a>
</div>
<br>
<hr>
<h2 id="desc">
    Description
</h2>

API for republic payment control

- - -

<h2 id="prerequisites">
  Prerequisites
</h2>

- [Git](https://git-scm.com/download/), [Docker](https://docs.docker.com/get-docker/) and [Docker-Compose](https://docs.docker.com/compose/install/) installed.
- - - -

<h2 id="running">
  Running the project
</h2>

All commands below are done in the terminal


**1** - Clone the repository and access the directory created by the clone:

```sh
git clone https://github.com/acmachado14/controle-api.git && cd controle-api
```

**2** - Install Composer dependences and create the database:

```sh
composer install
```

**3** - Run Migrations:

```sh
php artisan migrate
```

**4** - Finally run the project:

```sh
php -S localhost:8000 -t public
```
- - - -

<h2 id="principles">
 Principles
</h2>

Representational State Transfer (REST)

- - -

<h2 id="methodologiesDesigns">
 Methodologies and Designs
</h2>

* Clean Architecture
* DDD

- - -

<h2 id="librariesFrameworks">
 Libraries and Frameworks
</h2>

* Php
* Git
* Lumen
* Eloquent
* Docker
* Composer
* Symfony
* PHPUnit
