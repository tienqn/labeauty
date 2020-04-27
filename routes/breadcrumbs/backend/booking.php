<?php

Breadcrumbs::for('admin.booking.index', function ($trail) {
    $trail->push(__('labels.backend.access.booking.management'), route('admin.booking.index'));
});

Breadcrumbs::for('admin.booking.show', function ($trail, $id) {
    $trail->parent('admin.booking.index');
    $trail->push(__('menus.backend.access.booking.view'), route('admin.booking.show', $id));
});

Breadcrumbs::for('admin.booking.waiting', function ($trail) {
    $trail->parent('admin.booking.index');
    $trail->push(__('menus.backend.access.booking.waiting'), route('admin.booking.waiting'));
});

Breadcrumbs::for('admin.booking.called', function ($trail) {
    $trail->parent('admin.booking.index');
    $trail->push(__('menus.backend.access.booking.called'), route('admin.booking.called'));
});

Breadcrumbs::for('admin.booking.processing', function ($trail) {
    $trail->parent('admin.booking.index');
    $trail->push(__('menus.backend.access.booking.processing'), route('admin.booking.processing'));
});

Breadcrumbs::for('admin.booking.completed', function ($trail) {
    $trail->parent('admin.booking.index');
    $trail->push(__('menus.backend.access.booking.completed'), route('admin.booking.completed'));
});

Breadcrumbs::for('admin.booking.reject', function ($trail) {
    $trail->parent('admin.booking.index');
    $trail->push(__('menus.backend.access.booking.reject'), route('admin.booking.reject'));
});