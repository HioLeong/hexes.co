var hexApp = angular.module('hexApp',['ngRoute']);

hexApp.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('((');
    $interpolateProvider.endSymbol('))');
});
