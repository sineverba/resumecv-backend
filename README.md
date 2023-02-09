Resume CV Backend
=================

> Demo backend project for online resume, written with Laravel

| Service  | Github link | Demo 																										                                                                                                 |
|----------| ----------- |-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Backend  | [https://github.com/sineverba/resumecv-backend](https://github.com/sineverba/resumecv-backend) | [Swagger](https://resumecvbackend.k2p.it/)                                                                                 |
| Frontend | [https://github.com/sineverba/curriculum-vitae](https://github.com/sineverba/curriculum-vitae) | [Netlify](https://datacv.netlify.app/) - [Vercel](https://curriculum-vitae-ten.vercel.app/) - [Custom](https://cv.k2p.it/) |

| CI - CD      | Status                                                                                                                                                                                                               | 
|--------------|----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| Semaphore CI | [![Build Status](https://sineverba.semaphoreci.com/badges/resumecv-backend/branches/master.svg?style=shields&key=8993a8be-8cf8-480c-9d0e-0cc0041daf4b)](https://sineverba.semaphoreci.com/projects/resumecv-backend) |
| CircleCI     | [![CircleCI](https://dl.circleci.com/status-badge/img/gh/sineverba/resumecv-backend/tree/master.svg?style=svg)](https://dl.circleci.com/status-badge/redirect/gh/sineverba/resumecv-backend/tree/master)             |
| SonarCloud   | [![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=sineverba_resumecv-backend&metric=alert_status)](https://sonarcloud.io/dashboard?id=sineverba_resumecv-backend)                     |
| Qodana | [https://qodana.cloud/projects/zxPYN/reports/3oO1a](https://qodana.cloud/projects/zxPYN/reports/3oO1a) |

## First setup
1. `$ composer install`
2. `$ cp .env.example .env`
3. `$ make migrate`

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
