<?php

$routes = [
    '/' => 'HomeController@index',
    '/usario/{id}' => 'UsuarioController@show',
    '/sign' => 'HomeController@sign',
    '/desporto' => 'HomeCOntroller@desporto',
    '/economia' => 'HomeCOntroller@economia',
    '/mundo' => 'HomeCOntroller@mundo',
    '/politica' => 'HomeCOntroller@politica',
    '/saude' => 'HomeCOntroller@saude',
    '/contact' => 'HomeCOntroller@contact',
    '/cadastro' => 'UsuarioController@cadastrar',
    '/signIn' => 'UsuarioController@signIn',
    '/cadastrar' => 'HomeController@cadastrar',
    '/apagar{id}' => 'UsuarioController@apagar',
    '/apagado' => 'UsuarioController@apagado',
    '/usario' => 'UsuarioController@show',
    '/logout' => 'UsuarioController@logout',
    '/test' => 'UsuarioController@UsuarioForm',
    '/adicionarNews' => 'HomeController@adicionarNews',
    '/telaAdmin' => 'HomeController@telaAdmin',
    '/visualizarNews' => 'HomeController@visualizarNews',
    '/validarAdmin' => 'HomeController@validarAdmin',
    '/registrarAdmin' => 'HomeController@registrarAdmin',
    '/listarNews' => 'HomeController@listarNews',
    '/editarNews' => 'HomeController@editarNews',
    '/perfilAdmin' => 'HomeController@perfilAdmin',
    '/addNews' => 'NewsController@addNews',
    '/editNews' => 'NewsController@editNews',
    '/deleteNews' => 'NewsController@deleteNews',
    '/updateNews' => 'NewsController@updateNews',
    '/pesquisarNews' => 'NewsController@pesquisarNews',
    '/loginEditor' => 'HomeController@loginEditor',
    '/pesquisar' => 'NewsController@pesquisar',
    '/telaEditor' => 'HomeController@telaEditor',
    '/listarUsuario' => 'HomeController@listarUsuario',
    '/listarEditor' => 'HomeController@listarEditor',
    '/adicionarNEditor' => 'HomeController@adicionarNEditor',
    '/cadastrarEditor' => 'Homecontroller@cadastrarEditor',
    '/cadastrarEditores' => 'EditorController@cadastrar',
    '/loginEd' => 'EditorController@loginEd',
];
