## Introduction

KZVN/L9Core is a package that builds design patterns for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/kzvn/l9-core.svg?style=flat-square)](https://packagist.org/packages/kzvn/l9-core)
[![Total Downloads](https://img.shields.io/packagist/dt/kzvn/l9-core.svg?style=flat-square)](https://packagist.org/packages/kzvn/l9-core)

## Documentation

### Install
```bash
composer require kzvn/l9-core
```

### Usage

Run the following artisan command to create a new Repository, Service, Resource:
```bash
php artisan kzvn:repository UserRepository
php artisan kzvn:service UserService
php artisan kzvn:resource UserResource
```

Example code: 
```php
<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Repositories\UserRepository;

class UserController extends Controller
{
    protected $userRepository;
    
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function show($id){
        $user = $this->userRepository->find($id);
        
        return new UserResource($user);
    }
}

```
## License

Laravel Telescope is open-sourced software licensed under the MIT license.