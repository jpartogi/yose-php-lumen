## Running locally

Simply run:

```sh
php artisan serve
```

... open your browser and navigate to:

```sh
http://localhost:8000
```

## Running tests

```sh
php phpunit.phar
```

## Routes

To add routes open:

```sh
app/Http/routes.php
```

## Controllers

To add controllers go to:

```sh
app/Http/Controllers
```

## Views

To add views open:

```sh
resources/views
```

## Deploy

To play the game, you will have to deploy the game to a server accessible from the game server.

If you want to try out the [Heroku Cloud Plarform](http://www.heroku.com), I have included the ```Procfile``` files required by Heroku. 

You should be able to deploy the application with a simple ```git push``` to Heroku

## Continuous Integration

I have included ```circle.yml``` configuration file for CircleCI.com

YoseTheGame
