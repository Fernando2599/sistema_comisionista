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
// Estados/editar
Breadcrumbs::for('admin.estado.edit', function (BreadcrumbTrail $trail, $estado) {
    $trail->parent('admin.estado.index');
    $trail->push($estado->nombre_estado, route('admin.estado.edit', $estado->id));
});

// Estados/Crear
Breadcrumbs::for('admin.estado.create', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.estado.index');
    $trail->push('Crear', route('admin.estado.create'));
});
// Estados/show
Breadcrumbs::for('admin.estado.show', function (BreadcrumbTrail $trail, $estado) {
    $trail->parent('admin.estado.index');
    $trail->push($estado->nombre_estado, route('admin.estado.show', $estado->id));
});

// Roles
Breadcrumbs::for('admin.roles.index', function (BreadcrumbTrail $trail) {
    $trail->push('Roles', route('admin.roles.index'));
});

// Roles/Crear
Breadcrumbs::for('admin.roles.create', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.roles.index');
    $trail->push('Crear', route('admin.roles.create'));
});

// Roles/editar
Breadcrumbs::for('admin.roles.edit', function (BreadcrumbTrail $trail, $role) {
    $trail->parent('admin.roles.index');
    $trail->push($role->name, route('admin.estado.edit', $role->id));
});

// Roles/show
Breadcrumbs::for('admin.roles.show', function (BreadcrumbTrail $trail, $role) {
    $trail->parent('admin.roles.index');
    $trail->push($role->name, route('admin.roles.show', $role->id));
});
