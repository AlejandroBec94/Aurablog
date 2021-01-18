
<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Auroblog por Alejandro Becerra

Instrucciones de instalación

- Instale paquetes composer
```
    composer install
```
- Instale paquete npm
```
    npm install
``` 
- Migrar y llenar base de datos **SQLite** 
```
    php artisan migrate:fresh --seed
```

- Configure virtualhost como **auroblog.test**  (opcional)

-  En caso de crear virtualhost ejecute el siguiente comando (opcional)
```
    npm run serve
``` 
- En caso de no haber creado virtual host, ejecute por separado los siguientes comando
```
    php artisan serve
    npm run watch
```  
- Ingresar a virtualhost o a localhost

- Para ingresar: 
```
    email: admin@admin.com
    password: 123456
```
## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [a.becor94@gmail.com](mailto:a.becor94@gmail.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
