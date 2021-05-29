PROYECTO SPA GESTION DE PROYECTOS

- BAKCEND : LARAVEL
- API: CON GRAPHQL
- FRONTEND:  VUE Y TAILWIND


1. creamos el proyecto laravel con composer:

    composer create-project laravel/laravel example-app

2. creamos nuestra BASE DE DATOS y la agregamos al archivo .ENV

3. instalamos mediante composer GRAPHQL
    3.1. nos podemos dirigir a esta pagina GITHUB y seguir los pasos que se muestran acontinuacion:
        
        composer require rebing/graphql-laravel

        php artisan vendor:publish --provider="Rebing\GraphQL\GraphQLServiceProvider"
