<?php

Breadcrumbs::register('admin.products.product.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push('Product', route('admin.products.product.index'));
});

Breadcrumbs::register('admin.products.product.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.products.product.index');
    $breadcrumbs->push('Product', route('admin.products.product.create'));
});

Breadcrumbs::register('admin.products.product.show', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.products.product.index');
    $breadcrumbs->push(session()->get('title_product'), route('admin.products.product.show',\Route::current()->getParameter('product')));
});

Breadcrumbs::register('admin.products.product.edit', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.products.product.index');
    $breadcrumbs->push(session()->get('title_product'), route('admin.products.product.edit',\Route::current()->getParameter('product')));
});
