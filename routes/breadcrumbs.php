<?php
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Inicio', route('admin.dashboard'));
});


// Home > Administración > Estados
Breadcrumbs::for('admin.estado.index', function (BreadcrumbTrail $trail) {
    $trail->push('Estados', route('admin.estado.index'));
});
// Home > Administración > Estados
Breadcrumbs::for('admin.estado.edit', function (BreadcrumbTrail $trail, $estado) {
    $trail->parent('admin.estado.index');
    $trail->push($estado->nombre_estado, route('admin.estado.edit', $estado->id));
});

