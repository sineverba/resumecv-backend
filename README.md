Resume CV Backend
=================

> Demo backend project for online resume, written with Laravel

| CI - CD      | Status                                                                                                                                                                                                               | 
|--------------|----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| Semaphore CI | [![Build Status](https://sineverba.semaphoreci.com/badges/resumecv-backend/branches/master.svg?style=shields&key=8993a8be-8cf8-480c-9d0e-0cc0041daf4b)](https://sineverba.semaphoreci.com/projects/resumecv-backend) |


### Production deploy

1. Add `Semaphore CI` key in `authorized_keys` file on VPS
2. Generate a `APP_KEY`: `php artisan key:generate --show`
3. Copy the generate APP_KEY in a `.env` file on VPS
4. In `docker-compose.yml` on VPS, refer to the `.env` file:

```yml
env_file:
      - ./.env
```
