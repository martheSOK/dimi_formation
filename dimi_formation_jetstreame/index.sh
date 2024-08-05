#!/bin/bash

createProject (){
    echo "Entrer le nom du projet"
    read projectName

    composer create-project laravel/laravel --prefer-dist $projectName
    echo "******************* projet install avec succes **************"
    cd $projectName
    echo "****************** insallation des dépendences **************"
     #insatallProjectDependencise
    composer require laravel/jetstream
    php artisan jetstream:install livewire
    #php artisan jetstream:install livewire --teams 

    echo "********************youpi!!!!!!******************"

}
createProject

#insatall_projectDependencise (){
    #composer require laravel/jetstream
    #php artisan jetstream:install livewire
    #php artisan jetstream:install livewire --teams #pour créer les équipes

    #npm install
    #npm run build       seulement utiliser en production
    #php artisan migrate
#}
spatie(){
composer require spatie/laravel-permission
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"

}

# main(){
#     createProject
#     insatall_projectDependencise
#  }
#  main
