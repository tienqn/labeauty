<?php

Breadcrumbs::for('admin.slider.index', function ($trail) {
    $trail->push(__('Quản lý banner'), route('admin.slider.index'));
});

Breadcrumbs::for('admin.slider.show', function ($trail, $id) {
    $trail->parent('admin.slider.index');
    $trail->push(__('Chi tiết banner'), route('admin.slider.show', $id));
});