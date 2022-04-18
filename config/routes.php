<?php
return [
    'products/category/([\w-]+)/page-([0-9]+)' => 'product/category/$1/$2',

    'products/category/([\w-]+)' => 'product/category/$1',

    'products/([\w-]+)' => 'product/view/$1', //actionView in ProductController

//  'products' => 'product/list', //actionList in ProductController


    'news' => 'news/index',

    'search/?(.*)' => 'search/show',


    'user/register' => 'user/register',

    'user/login' => 'user/login',

    'user/logout' => 'user/logout',


    'cabinet/edit' => 'cabinet/edit',

    'cabinet/history' => 'cabinet/history',

    'cabinet' => 'cabinet/index',


    'cart/add/([0-9]+)' => 'cart/add/$1',

    'cart/addAjax/([0-9]+)/(.*)' => 'cart/addAjax/$1/$2',

    'cart/checkout' => 'cart/checkout',

    'cart/deleteall' => 'cart/deleteAll',

    'cart/delete/([0-9]+)' => 'cart/delete/$1',

    'cart' => 'cart/index',


    'admin' => 'admin/index',


    'admin/product/create' => 'adminProduct/create',

    'admin/product' => 'adminProduct/index',

    'admin/product/edit/([0-9]+)' => 'adminProduct/edit/$1',

    'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',


    'admin/category/create' => 'adminCategory/create',

    'admin/category' => 'adminCategory/index',

    'admin/category/edit/([0-9]+)' => 'adminCategory/edit/$1',

    'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',


    'admin/attribute/create/product-([0-9]+)' => 'adminAttribute/create/$1',

    'admin/attribute' => 'adminAttribute/index',

    'admin/attribute/edit/([0-9]+)' => 'adminAttribute/edit/$1',

    'admin/attribute/delete/([0-9]+)' => 'adminAttribute/delete/$1',


    'admin/order/([0-9]+)' => 'adminOrder/view/$1',

    'admin/order' => 'adminOrder/index',

    'admin/order/edit/([0-9]+)' => 'adminOrder/edit/$1',

    'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',


    'admin/common' => 'adminCommon/index',

    'admin/common/edit' => 'adminCommon/edit',

    'contacts' => 'contacts/index',

    'delivery' => 'delivery/index',

    'sitemap.xml' => 'site/sitemap', //actionIndex in SiteController

    '' => 'site/index', //actionIndex in SiteController

    '.+' => 'error/show',
];