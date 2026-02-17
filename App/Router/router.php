<?php

use Pecee\SimpleRouter\SimpleRouter as Router;


Router::setDefaultNamespace('App\Controller');

Router::get('/', 'WebController@start');
Router::get('/login', 'WebController@login');
Router::get('/cadastrar', 'WebController@cadastrar');
Router::get('/dashboard', 'WebController@dashboard');
Router::get('/logout', 'WebController@logout');

// Router::get('/admin', 'WebController@admin');
// Router::get('/admin/cadastrar', 'WebController@adminCadastrar');
Router::get('/admin/dashboard', 'WebController@adminDashboard');
Router::get('/admin/logout', 'WebController@adminLogout');


Router::error(function() {
    header("Location: /");
});


Router::start();
