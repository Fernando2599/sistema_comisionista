<?php
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Inicio', route('admin.dashboard'));
});


// Estados
Breadcrumbs::for('admin.estado.index', function (BreadcrumbTrail $trail) {
    $trail->push('Estados', route('admin.estado.index'));
});
// Estados/(nombre del registro)
Breadcrumbs::for('admin.estado.edit', function (BreadcrumbTrail $trail, $estado) {
    $trail->parent('admin.estado.index');
    $trail->push($estado->nombre_estado, route('admin.estado.edit', $estado->id));
});

// Estados/Crear
Breadcrumbs::for('admin.estado.create', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.estado.index');
    $trail->push('Crear', route('admin.estado.create'));
});

