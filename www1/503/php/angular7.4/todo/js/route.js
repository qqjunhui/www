angular.module("qqapp",["ngRoute"])
    .config(function($routeProvider){
        $routeProvider.when('/',{
            templateUrl:"view/index.html",
            // controller:index,
        })
    })