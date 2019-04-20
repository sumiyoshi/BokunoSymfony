# BokunoSymfony

## Install

```
docker-compose build
docker-compose exec app composer install

docker-compose exec app composer up -d

docker-compose run --rm node npm install -g yarn
```

## Command

```
docker-compose exec app php bin/console
```

## Create Project

```

docker-compose exec app composer create-project symfony/skeleton .

```