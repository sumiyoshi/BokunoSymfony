# BokunoSymfony

## Install

```
docker-compose build
docker-compose up -d
docker-compose exec app composer install

```

## Command

```
docker-compose exec app php bin/console
```

## Test

```
docker-compose exec app php bin/phpunit --coverage-html tests/@report
```




## Other

### node

```
docker-compose run --rm node npm install
docker-compose run --rm node npm run start
docker-compose exec app composer require encore
```

### Create Skeleton Project

```
docker-compose exec app composer create-project symfony/skeleton .
```

