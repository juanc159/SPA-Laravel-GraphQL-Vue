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
    
6. como queremos usar GRAPHQL debemos definir nuestros TYPES (Project)

7. se implemento la libreria CSS tailwindcss
    npm install 
    nom install tailwindcss

    luego se debe preparar el archivo Resources/css/app.css   y agregar estas lineas
        @import "~tailwindcss/base.css";
        @import "~tailwindcss/components.css";
        @import "~tailwindcss/utilities.css";
    
    se crea un archivo de configuracion para tailwindcss
        npx tailwindcss init
    
    modificar el archivo creado tailwindcss.config.js y cambiar la parte de variants
        variants: {
            extend: {
            display:['group-hover']
            },
        },

    empaquetar nuestros asset y esten disponibles en nuestra carpeta publica de instalacion con 
        npm run dev

8. instalamos VUE.js  y VUE-ROUTER
    npm install vue
    npm install vue-router
    npm run dev

    modificar el archivo webpack.mix.js agregando .vue() en la primera linea del mix

9. modificar el archivo wellcome o la vista inicial
    ver los archivos modificados en el git desde el componente creado, el archivo welcome modificado etc

// problemas: no se muestra los registros de la tabla proyectos, quede en el video 8 del tutorial 
https://www.youtube.com/watch?v=wrhM0dlG-Yo&list=PL145AyWAbMDgy-otHhk8SH-CqFuimxckK&index=8
