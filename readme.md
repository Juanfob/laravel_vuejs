<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Sobre el código
Vamos a integrar Laravel y Vuejs, usaremos vue-resource

Primero debemos tener instalado:
Composer y Node.js

* Agregar dependencias en package.json
    * "vue-resource": "^1.5.1",
    * Ejecutamos npm install
    
* Creamos modelo y migracion
* Creamos controlador y rutas
* Creamos la vista
    * Usamos elixir para la cargar el componente app.js
    * Referencia: https://laravel.com/docs/5.3/elixir
        * https://styde.net/manejo-de-assets-con-elixir-y-gulp-en-laravel-5-1/
 * Crear el componente Notas.vue
    * Primero añadimos a app.js en resources/js
        * require('./bootstrap'); 
          window.Vue = require('vue'); 
          Vue.use(require('vue-resource')); 
          Vue.http.headers.common['X-CSRF-TOKEN'] = document.getElementById('csrf_token').value;
        * Aquí incluimos bootstrap y vue. También vue-resource la librería que nos va a permitir hacer peticiones http. Y finalmente agregamos el token para no tener que preocuparnos en cada petición por POST.