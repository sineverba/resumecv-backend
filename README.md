Resume CV Backend
=================

> Demo backend project for online resume, written with Laravel

| CI - CD      | Status                                                                                                                                                                                                               | 
|--------------|----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| Semaphore CI | [![Build Status](https://sineverba.semaphoreci.com/badges/resumecv-backend/branches/master.svg?style=shields&key=8993a8be-8cf8-480c-9d0e-0cc0041daf4b)](https://sineverba.semaphoreci.com/projects/resumecv-backend) |
| CircleCI     | [![CircleCI](https://circleci.com/gh/sineverba/resumecv-backend/tree/develop.svg?style=svg)](https://circleci.com/gh/sineverba/resumecv-backend/tree/develop)                                                        |
| SonarCloud   | [![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=sineverba_resumecv-backend&metric=alert_status)](https://sonarcloud.io/dashboard?id=sineverba_resumecv-backend)                     |

## First setup
1. `$ composer install`
2. `$ cp .env.example .env`

## Upgrade
`composer update`

### Production deploy (see production folder)

1. Add `Semaphore CI` key in `authorized_keys` file on VPS
2. Generate a `APP_KEY`: `php artisan key:generate --show`
3. Copy the generated APP_KEY in a `.env` file on VPS
4. In `docker-compose.yml` on VPS, refer to the `.env` file:

```yml
env_file:
      - ./.env
```
