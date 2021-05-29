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

4. se elaboraran las tablas necesarias para este proyecto y se ejecuta el siguiente comando

    php artisan migrate

5. configuramos nuestros modelos con la propiedad fillable y la relacion entre este modelo con las demas tablas.
    tambien se desarrollo en el archivo seeders una logica para probar la base de datos
    
