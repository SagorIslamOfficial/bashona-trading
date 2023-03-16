<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T4ej6QOc2o2dz5OZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tv4a4SSOHCYZNOZq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mg9kkodRCtK62uJD',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front-end-home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about-us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front-end-about-us',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/art-venture' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front-end-company-art-venture',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/tns' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front-end-company-tns',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/bd-digital' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front-end-company-bd-digital',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company/connect-to-fly' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front-end-company-ctf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front-end-service',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/gallery' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front-end-gallery',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front-end-contact',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'front-end-contact-email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/about-us/about-us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about-us.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'about-us.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/about-us/about-us/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about-us.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/about-us/about-message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about-message.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'about-message.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/about-us/about-message/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about-message.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/about-us/about-team' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about-team.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'about-team.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/about-us/about-team/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about-team.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/add-company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add-company.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'add-company.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/add-company/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add-company.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/art-venture/art-venture-about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'art-venture-about.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'art-venture-about.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/art-venture/art-venture-about/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'art-venture-about.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/art-venture/service/art-venture-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'art-venture-category.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'art-venture-category.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/art-venture/service/art-venture-category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'art-venture-category.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/art-venture/service/art-venture-item' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'art-venture-item.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'art-venture-item.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/art-venture/service/art-venture-item/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'art-venture-item.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/art-venture/art-venture-team' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'art-venture-team.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'art-venture-team.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/art-venture/art-venture-team/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'art-venture-team.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/tns/tns-about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tns-about.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'tns-about.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/tns/tns-about/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tns-about.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/tns/service/tns-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tns-category.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'tns-category.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/tns/service/tns-category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tns-category.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/tns/service/tns-item' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tns-item.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'tns-item.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/tns/service/tns-item/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tns-item.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/tns/tns-team' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tns-team.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'tns-team.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/tns/tns-team/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tns-team.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/bd-digital/bd-digital-about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bd-digital-about.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'bd-digital-about.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/bd-digital/bd-digital-about/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bd-digital-about.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/bd-digital/service/bd-digital-service-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bd-digital-service-category.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'bd-digital-service-category.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/bd-digital/service/bd-digital-service-category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bd-digital-service-category.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/bd-digital/service/bd-digital-service-item' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bd-digital-service-item.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'bd-digital-service-item.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/bd-digital/service/bd-digital-service-item/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bd-digital-service-item.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/bd-digital/bd-digital-team' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bd-digital-team.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'bd-digital-team.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/bd-digital/bd-digital-team/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bd-digital-team.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/connect-to-fly/ctf-about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ctf-about.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'ctf-about.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/connect-to-fly/ctf-about/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ctf-about.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/connect-to-fly/service/ctf-service-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ctf-service-category.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'ctf-service-category.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/connect-to-fly/service/ctf-service-category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ctf-service-category.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/connect-to-fly/service/ctf-service-item' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ctf-service-item.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'ctf-service-item.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/connect-to-fly/service/ctf-service-item/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ctf-service-item.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/connect-to-fly/ctf-team' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ctf-team.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'ctf-team.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company/connect-to-fly/ctf-team/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ctf-team.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/gallery/gallery-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gallery-category.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'gallery-category.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/gallery/gallery-category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gallery-category.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/gallery/gallery-item' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gallery-item.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'gallery-item.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/gallery/gallery-item/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gallery-item.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contact/address' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'address.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'address.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contact/address/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'address.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contact/map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'map.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'map.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contact/map/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'map.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contact/whatsapp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'whatsapp.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'whatsapp.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contact/whatsapp/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'whatsapp.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/client' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'client.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/client/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/partial-header' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'partial-header.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'partial-header.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/partial-header/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'partial-header.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/quick-link' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quick-link.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'quick-link.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/quick-link/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quick-link.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/footer-page-integration' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'footer-page-integration.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'footer-page-integration.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/footer-page-integration/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'footer-page-integration.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/footer-social' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'footer-social.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'footer-social.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/footer-social/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'footer-social.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/slider' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slider.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'slider.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/slider/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slider.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/heading-and-sub-text/hst-about-us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-about-us.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'hst-about-us.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/heading-and-sub-text/hst-about-us/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-about-us.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/heading-and-sub-text/companies/hst-companies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-companies.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'hst-companies.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/heading-and-sub-text/companies/hst-companies/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-companies.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/heading-and-sub-text/companies/hst-art-venture' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-art-venture.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'hst-art-venture.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/heading-and-sub-text/companies/hst-art-venture/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-art-venture.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/heading-and-sub-text/companies/hst-bd-digital' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-bd-digital.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'hst-bd-digital.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/heading-and-sub-text/companies/hst-bd-digital/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-bd-digital.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/heading-and-sub-text/companies/hst-tns' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-tns.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'hst-tns.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/heading-and-sub-text/companies/hst-tns/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-tns.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/heading-and-sub-text/companies/hst-connect-to-fly' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-connect-to-fly.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'hst-connect-to-fly.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/heading-and-sub-text/companies/hst-connect-to-fly/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-connect-to-fly.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/heading-and-sub-text/hst-service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-service.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'hst-service.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/heading-and-sub-text/hst-service/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-service.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/heading-and-sub-text/hst-gallery' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-gallery.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'hst-gallery.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/heading-and-sub-text/hst-gallery/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-gallery.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/heading-and-sub-text/hst-contact-us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-contact-us.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'hst-contact-us.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/heading-and-sub-text/hst-contact-us/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-contact-us.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/company/(?|art\\-venture/service/details/([^/]++)(*:56)|tns/service/details/([^/]++)(*:91)|bd\\-digital/service/details/([^/]++)(*:134)|connect\\-to\\-fly/service/details/([^/]++)(*:183))|/service/details/([^/]++)(*:217)|/admin/(?|about\\-us/about\\-(?|us/([^/]++)(?|(*:269)|/edit(*:282)|(*:290))|message/([^/]++)(?|(*:318)|/edit(*:331)|(*:339))|team/([^/]++)(?|(*:364)|/edit(*:377)|(*:385)))|c(?|o(?|mpany/(?|a(?|dd\\-company/([^/]++)(?|(*:439)|/edit(*:452)|(*:460))|rt\\-venture/(?|art\\-venture\\-(?|about/([^/]++)(?|(*:518)|/edit(*:531)|(*:539))|team/([^/]++)(?|(*:564)|/edit(*:577)|(*:585)))|service/art\\-venture\\-(?|category/([^/]++)(?|(*:640)|/edit(*:653)|(*:661))|item(?|\\-(?|images/([^/]++)(*:697)|portfolio/([^/]++)(*:723))|/([^/]++)(?|(*:744)|/edit(*:757)|(*:765))))))|tns/(?|tns\\-(?|about/([^/]++)(?|(*:810)|/edit(*:823)|(*:831))|team/([^/]++)(?|(*:856)|/edit(*:869)|(*:877)))|service/tns\\-(?|category/([^/]++)(?|(*:923)|/edit(*:936)|(*:944))|item(?|\\-(?|images/([^/]++)(*:980)|portfolio/([^/]++)(*:1006))|/([^/]++)(?|(*:1028)|/edit(*:1042)|(*:1051)))))|bd\\-digital/(?|bd\\-digital\\-(?|about/([^/]++)(?|(*:1112)|/edit(*:1126)|(*:1135))|team/([^/]++)(?|(*:1161)|/edit(*:1175)|(*:1184)))|service/bd\\-digital\\-(?|service\\-(?|category/([^/]++)(?|(*:1251)|/edit(*:1265)|(*:1274))|item/([^/]++)(?|(*:1300)|/edit(*:1314)|(*:1323)))|item\\-(?|images/([^/]++)(*:1358)|portfolio/([^/]++)(*:1385))))|connect\\-to\\-fly/(?|ctf\\-(?|about/([^/]++)(?|(*:1442)|/edit(*:1456)|(*:1465))|team/([^/]++)(?|(*:1491)|/edit(*:1505)|(*:1514)))|service/ctf\\-(?|service\\-(?|category/([^/]++)(?|(*:1573)|/edit(*:1587)|(*:1596))|item/([^/]++)(?|(*:1622)|/edit(*:1636)|(*:1645)))|item\\-(?|images/([^/]++)(*:1680)|portfolio/([^/]++)(*:1707)))))|ntact/(?|address/([^/]++)(?|(*:1748)|/edit(*:1762)|(*:1771))|map/([^/]++)(?|(*:1796)|/edit(*:1810)|(*:1819))|whatsapp/([^/]++)(?|(*:1849)|/edit(*:1863)|(*:1872))))|lient/([^/]++)(?|(*:1901)|/edit(*:1915)|(*:1924)))|gallery/gallery\\-(?|category/([^/]++)(?|(*:1975)|/edit(*:1989)|(*:1998))|item/([^/]++)(?|(*:2024)|/edit(*:2038)|(*:2047)))|partial\\-header/([^/]++)(?|(*:2085)|/edit(*:2099)|(*:2108))|quick\\-link/([^/]++)(?|(*:2141)|/edit(*:2155)|(*:2164))|footer\\-(?|page\\-integration/([^/]++)(?|(*:2214)|/edit(*:2228)|(*:2237))|social/([^/]++)(?|(*:2265)|/edit(*:2279)|(*:2288)))|slider/([^/]++)(?|(*:2317)|/edit(*:2331)|(*:2340))|heading\\-and\\-sub\\-text/(?|hst\\-(?|about\\-us/([^/]++)(?|(*:2406)|/edit(*:2420)|(*:2429))|service/([^/]++)(?|(*:2458)|/edit(*:2472)|(*:2481))|gallery/([^/]++)(?|(*:2510)|/edit(*:2524)|(*:2533))|contact\\-us/([^/]++)(?|(*:2566)|/edit(*:2580)|(*:2589)))|companies/hst\\-(?|co(?|mpanies/([^/]++)(?|(*:2642)|/edit(*:2656)|(*:2665))|nnect\\-to\\-fly/([^/]++)(?|(*:2701)|/edit(*:2715)|(*:2724)))|art\\-venture/([^/]++)(?|(*:2759)|/edit(*:2773)|(*:2782))|bd\\-digital/([^/]++)(?|(*:2815)|/edit(*:2829)|(*:2838))|tns/([^/]++)(?|(*:2863)|/edit(*:2877)|(*:2886))))))/?$}sDu',
    ),
    3 => 
    array (
      56 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front-end-company-art-venture-service-details',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      91 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front-end-company-tns-service-details',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      134 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front-end-company-bd-digital-service-details',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      183 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front-end-company-ctf-service-details',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      217 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front-end-service-details',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      269 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about-us.show',
          ),
          1 => 
          array (
            0 => 'about_u',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      282 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about-us.edit',
          ),
          1 => 
          array (
            0 => 'about_u',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      290 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about-us.update',
          ),
          1 => 
          array (
            0 => 'about_u',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'about-us.destroy',
          ),
          1 => 
          array (
            0 => 'about_u',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      318 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about-message.show',
          ),
          1 => 
          array (
            0 => 'about_message',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      331 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about-message.edit',
          ),
          1 => 
          array (
            0 => 'about_message',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      339 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about-message.update',
          ),
          1 => 
          array (
            0 => 'about_message',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'about-message.destroy',
          ),
          1 => 
          array (
            0 => 'about_message',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      364 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about-team.show',
          ),
          1 => 
          array (
            0 => 'about_team',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      377 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about-team.edit',
          ),
          1 => 
          array (
            0 => 'about_team',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      385 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about-team.update',
          ),
          1 => 
          array (
            0 => 'about_team',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'about-team.destroy',
          ),
          1 => 
          array (
            0 => 'about_team',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      439 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add-company.show',
          ),
          1 => 
          array (
            0 => 'add_company',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      452 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add-company.edit',
          ),
          1 => 
          array (
            0 => 'add_company',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      460 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add-company.update',
          ),
          1 => 
          array (
            0 => 'add_company',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'add-company.destroy',
          ),
          1 => 
          array (
            0 => 'add_company',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      518 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'art-venture-about.show',
          ),
          1 => 
          array (
            0 => 'art_venture_about',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      531 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'art-venture-about.edit',
          ),
          1 => 
          array (
            0 => 'art_venture_about',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      539 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'art-venture-about.update',
          ),
          1 => 
          array (
            0 => 'art_venture_about',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'art-venture-about.destroy',
          ),
          1 => 
          array (
            0 => 'art_venture_about',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      564 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'art-venture-team.show',
          ),
          1 => 
          array (
            0 => 'art_venture_team',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      577 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'art-venture-team.edit',
          ),
          1 => 
          array (
            0 => 'art_venture_team',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      585 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'art-venture-team.update',
          ),
          1 => 
          array (
            0 => 'art_venture_team',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'art-venture-team.destroy',
          ),
          1 => 
          array (
            0 => 'art_venture_team',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      640 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'art-venture-category.show',
          ),
          1 => 
          array (
            0 => 'art_venture_category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      653 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'art-venture-category.edit',
          ),
          1 => 
          array (
            0 => 'art_venture_category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      661 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'art-venture-category.update',
          ),
          1 => 
          array (
            0 => 'art_venture_category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'art-venture-category.destroy',
          ),
          1 => 
          array (
            0 => 'art_venture_category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      697 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'art-venture-item-images.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      723 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'art-venture-item-portfolio',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      744 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'art-venture-item.show',
          ),
          1 => 
          array (
            0 => 'art_venture_item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      757 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'art-venture-item.edit',
          ),
          1 => 
          array (
            0 => 'art_venture_item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      765 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'art-venture-item.update',
          ),
          1 => 
          array (
            0 => 'art_venture_item',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'art-venture-item.destroy',
          ),
          1 => 
          array (
            0 => 'art_venture_item',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      810 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tns-about.show',
          ),
          1 => 
          array (
            0 => 'tns_about',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      823 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tns-about.edit',
          ),
          1 => 
          array (
            0 => 'tns_about',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      831 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tns-about.update',
          ),
          1 => 
          array (
            0 => 'tns_about',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'tns-about.destroy',
          ),
          1 => 
          array (
            0 => 'tns_about',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      856 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tns-team.show',
          ),
          1 => 
          array (
            0 => 'tns_team',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      869 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tns-team.edit',
          ),
          1 => 
          array (
            0 => 'tns_team',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      877 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tns-team.update',
          ),
          1 => 
          array (
            0 => 'tns_team',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'tns-team.destroy',
          ),
          1 => 
          array (
            0 => 'tns_team',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      923 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tns-category.show',
          ),
          1 => 
          array (
            0 => 'tns_category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      936 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tns-category.edit',
          ),
          1 => 
          array (
            0 => 'tns_category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      944 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tns-category.update',
          ),
          1 => 
          array (
            0 => 'tns_category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'tns-category.destroy',
          ),
          1 => 
          array (
            0 => 'tns_category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      980 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tns-item-images.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1006 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tns-item-portfolio.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1028 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tns-item.show',
          ),
          1 => 
          array (
            0 => 'tns_item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1042 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tns-item.edit',
          ),
          1 => 
          array (
            0 => 'tns_item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1051 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tns-item.update',
          ),
          1 => 
          array (
            0 => 'tns_item',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'tns-item.destroy',
          ),
          1 => 
          array (
            0 => 'tns_item',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1112 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bd-digital-about.show',
          ),
          1 => 
          array (
            0 => 'bd_digital_about',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1126 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bd-digital-about.edit',
          ),
          1 => 
          array (
            0 => 'bd_digital_about',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1135 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bd-digital-about.update',
          ),
          1 => 
          array (
            0 => 'bd_digital_about',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'bd-digital-about.destroy',
          ),
          1 => 
          array (
            0 => 'bd_digital_about',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1161 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bd-digital-team.show',
          ),
          1 => 
          array (
            0 => 'bd_digital_team',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1175 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bd-digital-team.edit',
          ),
          1 => 
          array (
            0 => 'bd_digital_team',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1184 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bd-digital-team.update',
          ),
          1 => 
          array (
            0 => 'bd_digital_team',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'bd-digital-team.destroy',
          ),
          1 => 
          array (
            0 => 'bd_digital_team',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1251 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bd-digital-service-category.show',
          ),
          1 => 
          array (
            0 => 'bd_digital_service_category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1265 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bd-digital-service-category.edit',
          ),
          1 => 
          array (
            0 => 'bd_digital_service_category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1274 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bd-digital-service-category.update',
          ),
          1 => 
          array (
            0 => 'bd_digital_service_category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'bd-digital-service-category.destroy',
          ),
          1 => 
          array (
            0 => 'bd_digital_service_category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1300 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bd-digital-service-item.show',
          ),
          1 => 
          array (
            0 => 'bd_digital_service_item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1314 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bd-digital-service-item.edit',
          ),
          1 => 
          array (
            0 => 'bd_digital_service_item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1323 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bd-digital-service-item.update',
          ),
          1 => 
          array (
            0 => 'bd_digital_service_item',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'bd-digital-service-item.destroy',
          ),
          1 => 
          array (
            0 => 'bd_digital_service_item',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1358 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bd-digital-item-images.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1385 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bd-digital-item-portfolio.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1442 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ctf-about.show',
          ),
          1 => 
          array (
            0 => 'ctf_about',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1456 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ctf-about.edit',
          ),
          1 => 
          array (
            0 => 'ctf_about',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1465 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ctf-about.update',
          ),
          1 => 
          array (
            0 => 'ctf_about',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'ctf-about.destroy',
          ),
          1 => 
          array (
            0 => 'ctf_about',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1491 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ctf-team.show',
          ),
          1 => 
          array (
            0 => 'ctf_team',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1505 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ctf-team.edit',
          ),
          1 => 
          array (
            0 => 'ctf_team',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1514 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ctf-team.update',
          ),
          1 => 
          array (
            0 => 'ctf_team',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'ctf-team.destroy',
          ),
          1 => 
          array (
            0 => 'ctf_team',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1573 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ctf-service-category.show',
          ),
          1 => 
          array (
            0 => 'ctf_service_category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1587 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ctf-service-category.edit',
          ),
          1 => 
          array (
            0 => 'ctf_service_category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1596 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ctf-service-category.update',
          ),
          1 => 
          array (
            0 => 'ctf_service_category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'ctf-service-category.destroy',
          ),
          1 => 
          array (
            0 => 'ctf_service_category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1622 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ctf-service-item.show',
          ),
          1 => 
          array (
            0 => 'ctf_service_item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1636 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ctf-service-item.edit',
          ),
          1 => 
          array (
            0 => 'ctf_service_item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1645 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ctf-service-item.update',
          ),
          1 => 
          array (
            0 => 'ctf_service_item',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'ctf-service-item.destroy',
          ),
          1 => 
          array (
            0 => 'ctf_service_item',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1680 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ctf-item-images.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1707 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ctf-item-portfolio.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1748 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'address.show',
          ),
          1 => 
          array (
            0 => 'address',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1762 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'address.edit',
          ),
          1 => 
          array (
            0 => 'address',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1771 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'address.update',
          ),
          1 => 
          array (
            0 => 'address',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'address.destroy',
          ),
          1 => 
          array (
            0 => 'address',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1796 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'map.show',
          ),
          1 => 
          array (
            0 => 'map',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1810 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'map.edit',
          ),
          1 => 
          array (
            0 => 'map',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1819 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'map.update',
          ),
          1 => 
          array (
            0 => 'map',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'map.destroy',
          ),
          1 => 
          array (
            0 => 'map',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1849 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'whatsapp.show',
          ),
          1 => 
          array (
            0 => 'whatsapp',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1863 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'whatsapp.edit',
          ),
          1 => 
          array (
            0 => 'whatsapp',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1872 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'whatsapp.update',
          ),
          1 => 
          array (
            0 => 'whatsapp',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'whatsapp.destroy',
          ),
          1 => 
          array (
            0 => 'whatsapp',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1901 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.show',
          ),
          1 => 
          array (
            0 => 'client',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1915 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.edit',
          ),
          1 => 
          array (
            0 => 'client',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1924 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.update',
          ),
          1 => 
          array (
            0 => 'client',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'client.destroy',
          ),
          1 => 
          array (
            0 => 'client',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1975 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gallery-category.show',
          ),
          1 => 
          array (
            0 => 'gallery_category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1989 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gallery-category.edit',
          ),
          1 => 
          array (
            0 => 'gallery_category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1998 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gallery-category.update',
          ),
          1 => 
          array (
            0 => 'gallery_category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'gallery-category.destroy',
          ),
          1 => 
          array (
            0 => 'gallery_category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2024 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gallery-item.show',
          ),
          1 => 
          array (
            0 => 'gallery_item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2038 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gallery-item.edit',
          ),
          1 => 
          array (
            0 => 'gallery_item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2047 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gallery-item.update',
          ),
          1 => 
          array (
            0 => 'gallery_item',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'gallery-item.destroy',
          ),
          1 => 
          array (
            0 => 'gallery_item',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2085 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'partial-header.show',
          ),
          1 => 
          array (
            0 => 'partial_header',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2099 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'partial-header.edit',
          ),
          1 => 
          array (
            0 => 'partial_header',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2108 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'partial-header.update',
          ),
          1 => 
          array (
            0 => 'partial_header',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'partial-header.destroy',
          ),
          1 => 
          array (
            0 => 'partial_header',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2141 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quick-link.show',
          ),
          1 => 
          array (
            0 => 'quick_link',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2155 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quick-link.edit',
          ),
          1 => 
          array (
            0 => 'quick_link',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2164 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quick-link.update',
          ),
          1 => 
          array (
            0 => 'quick_link',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'quick-link.destroy',
          ),
          1 => 
          array (
            0 => 'quick_link',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2214 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'footer-page-integration.show',
          ),
          1 => 
          array (
            0 => 'footer_page_integration',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2228 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'footer-page-integration.edit',
          ),
          1 => 
          array (
            0 => 'footer_page_integration',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2237 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'footer-page-integration.update',
          ),
          1 => 
          array (
            0 => 'footer_page_integration',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'footer-page-integration.destroy',
          ),
          1 => 
          array (
            0 => 'footer_page_integration',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2265 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'footer-social.show',
          ),
          1 => 
          array (
            0 => 'footer_social',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2279 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'footer-social.edit',
          ),
          1 => 
          array (
            0 => 'footer_social',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2288 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'footer-social.update',
          ),
          1 => 
          array (
            0 => 'footer_social',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'footer-social.destroy',
          ),
          1 => 
          array (
            0 => 'footer_social',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2317 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slider.show',
          ),
          1 => 
          array (
            0 => 'slider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2331 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slider.edit',
          ),
          1 => 
          array (
            0 => 'slider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2340 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slider.update',
          ),
          1 => 
          array (
            0 => 'slider',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'slider.destroy',
          ),
          1 => 
          array (
            0 => 'slider',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2406 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-about-us.show',
          ),
          1 => 
          array (
            0 => 'hst_about_u',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2420 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-about-us.edit',
          ),
          1 => 
          array (
            0 => 'hst_about_u',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2429 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-about-us.update',
          ),
          1 => 
          array (
            0 => 'hst_about_u',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'hst-about-us.destroy',
          ),
          1 => 
          array (
            0 => 'hst_about_u',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2458 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-service.show',
          ),
          1 => 
          array (
            0 => 'hst_service',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2472 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-service.edit',
          ),
          1 => 
          array (
            0 => 'hst_service',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2481 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-service.update',
          ),
          1 => 
          array (
            0 => 'hst_service',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'hst-service.destroy',
          ),
          1 => 
          array (
            0 => 'hst_service',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2510 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-gallery.show',
          ),
          1 => 
          array (
            0 => 'hst_gallery',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2524 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-gallery.edit',
          ),
          1 => 
          array (
            0 => 'hst_gallery',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2533 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-gallery.update',
          ),
          1 => 
          array (
            0 => 'hst_gallery',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'hst-gallery.destroy',
          ),
          1 => 
          array (
            0 => 'hst_gallery',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2566 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-contact-us.show',
          ),
          1 => 
          array (
            0 => 'hst_contact_u',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2580 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-contact-us.edit',
          ),
          1 => 
          array (
            0 => 'hst_contact_u',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2589 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-contact-us.update',
          ),
          1 => 
          array (
            0 => 'hst_contact_u',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'hst-contact-us.destroy',
          ),
          1 => 
          array (
            0 => 'hst_contact_u',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2642 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-companies.show',
          ),
          1 => 
          array (
            0 => 'hst_company',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2656 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-companies.edit',
          ),
          1 => 
          array (
            0 => 'hst_company',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2665 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-companies.update',
          ),
          1 => 
          array (
            0 => 'hst_company',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'hst-companies.destroy',
          ),
          1 => 
          array (
            0 => 'hst_company',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2701 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-connect-to-fly.show',
          ),
          1 => 
          array (
            0 => 'hst_connect_to_fly',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2715 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-connect-to-fly.edit',
          ),
          1 => 
          array (
            0 => 'hst_connect_to_fly',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2724 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-connect-to-fly.update',
          ),
          1 => 
          array (
            0 => 'hst_connect_to_fly',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'hst-connect-to-fly.destroy',
          ),
          1 => 
          array (
            0 => 'hst_connect_to_fly',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2759 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-art-venture.show',
          ),
          1 => 
          array (
            0 => 'hst_art_venture',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2773 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-art-venture.edit',
          ),
          1 => 
          array (
            0 => 'hst_art_venture',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2782 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-art-venture.update',
          ),
          1 => 
          array (
            0 => 'hst_art_venture',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'hst-art-venture.destroy',
          ),
          1 => 
          array (
            0 => 'hst_art_venture',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2815 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-bd-digital.show',
          ),
          1 => 
          array (
            0 => 'hst_bd_digital',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2829 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-bd-digital.edit',
          ),
          1 => 
          array (
            0 => 'hst_bd_digital',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2838 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-bd-digital.update',
          ),
          1 => 
          array (
            0 => 'hst_bd_digital',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'hst-bd-digital.destroy',
          ),
          1 => 
          array (
            0 => 'hst_bd_digital',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2863 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-tns.show',
          ),
          1 => 
          array (
            0 => 'hst_tn',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2877 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-tns.edit',
          ),
          1 => 
          array (
            0 => 'hst_tn',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2886 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hst-tns.update',
          ),
          1 => 
          array (
            0 => 'hst_tn',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'hst-tns.destroy',
          ),
          1 => 
          array (
            0 => 'hst_tn',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::T4ej6QOc2o2dz5OZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007bd0000000000000000";}";s:4:"hash";s:44:"fs3nHYMuWpco3d3gyBW0+UOUVG58Kj+1K6urbsHzMfI=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::T4ej6QOc2o2dz5OZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tv4a4SSOHCYZNOZq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::tv4a4SSOHCYZNOZq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mg9kkodRCtK62uJD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mg9kkodRCtK62uJD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front-end-home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEnd\\FrontEndController@index',
        'controller' => 'App\\Http\\Controllers\\FrontEnd\\FrontEndController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front-end-home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front-end-about-us' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEnd\\FrontEndController@aboutUs',
        'controller' => 'App\\Http\\Controllers\\FrontEnd\\FrontEndController@aboutUs',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front-end-about-us',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front-end-company-art-venture' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/art-venture',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEnd\\FrontEndController@companyArtVenture',
        'controller' => 'App\\Http\\Controllers\\FrontEnd\\FrontEndController@companyArtVenture',
        'namespace' => NULL,
        'prefix' => 'company/art-venture',
        'where' => 
        array (
        ),
        'as' => 'front-end-company-art-venture',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front-end-company-art-venture-service-details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/art-venture/service/details/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEnd\\FrontEndController@companyArtVentureServiceDetails',
        'controller' => 'App\\Http\\Controllers\\FrontEnd\\FrontEndController@companyArtVentureServiceDetails',
        'namespace' => NULL,
        'prefix' => 'company/art-venture',
        'where' => 
        array (
        ),
        'as' => 'front-end-company-art-venture-service-details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front-end-company-tns' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/tns',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEnd\\FrontEndController@companyTns',
        'controller' => 'App\\Http\\Controllers\\FrontEnd\\FrontEndController@companyTns',
        'namespace' => NULL,
        'prefix' => 'company/tns',
        'where' => 
        array (
        ),
        'as' => 'front-end-company-tns',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front-end-company-tns-service-details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/tns/service/details/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEnd\\FrontEndController@companyTnsServiceDetails',
        'controller' => 'App\\Http\\Controllers\\FrontEnd\\FrontEndController@companyTnsServiceDetails',
        'namespace' => NULL,
        'prefix' => 'company/tns',
        'where' => 
        array (
        ),
        'as' => 'front-end-company-tns-service-details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front-end-company-bd-digital' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/bd-digital',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEnd\\FrontEndController@companyBdDigital',
        'controller' => 'App\\Http\\Controllers\\FrontEnd\\FrontEndController@companyBdDigital',
        'namespace' => NULL,
        'prefix' => 'company/bd-digital',
        'where' => 
        array (
        ),
        'as' => 'front-end-company-bd-digital',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front-end-company-bd-digital-service-details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/bd-digital/service/details/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEnd\\FrontEndController@companyBdDigitalServiceDetails',
        'controller' => 'App\\Http\\Controllers\\FrontEnd\\FrontEndController@companyBdDigitalServiceDetails',
        'namespace' => NULL,
        'prefix' => 'company/bd-digital',
        'where' => 
        array (
        ),
        'as' => 'front-end-company-bd-digital-service-details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front-end-company-ctf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/connect-to-fly',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEnd\\FrontEndController@companyConnectToFly',
        'controller' => 'App\\Http\\Controllers\\FrontEnd\\FrontEndController@companyConnectToFly',
        'namespace' => NULL,
        'prefix' => 'company/connect-to-fly',
        'where' => 
        array (
        ),
        'as' => 'front-end-company-ctf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front-end-company-ctf-service-details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company/connect-to-fly/service/details/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEnd\\FrontEndController@companyConnectToFlyServiceDetails',
        'controller' => 'App\\Http\\Controllers\\FrontEnd\\FrontEndController@companyConnectToFlyServiceDetails',
        'namespace' => NULL,
        'prefix' => 'company/connect-to-fly',
        'where' => 
        array (
        ),
        'as' => 'front-end-company-ctf-service-details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front-end-service' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEnd\\FrontEndController@service',
        'controller' => 'App\\Http\\Controllers\\FrontEnd\\FrontEndController@service',
        'namespace' => NULL,
        'prefix' => '/service',
        'where' => 
        array (
        ),
        'as' => 'front-end-service',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front-end-service-details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'service/details/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEnd\\FrontEndController@serviceDetails',
        'controller' => 'App\\Http\\Controllers\\FrontEnd\\FrontEndController@serviceDetails',
        'namespace' => NULL,
        'prefix' => '/service',
        'where' => 
        array (
        ),
        'as' => 'front-end-service-details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front-end-gallery' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'gallery',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEnd\\FrontEndController@gallery',
        'controller' => 'App\\Http\\Controllers\\FrontEnd\\FrontEndController@gallery',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front-end-gallery',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front-end-contact' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEnd\\FrontEndController@contact',
        'controller' => 'App\\Http\\Controllers\\FrontEnd\\FrontEndController@contact',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front-end-contact',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front-end-contact-email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEnd\\EmailContactController@store',
        'controller' => 'App\\Http\\Controllers\\FrontEnd\\EmailContactController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front-end-contact-email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEnd\\BackendController@dashboard',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\BackendController@dashboard',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about-us.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/about-us/about-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'about-us.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsController@index',
        'namespace' => NULL,
        'prefix' => 'admin/about-us',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about-us.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/about-us/about-us/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'about-us.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsController@create',
        'namespace' => NULL,
        'prefix' => 'admin/about-us',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about-us.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/about-us/about-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'about-us.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsController@store',
        'namespace' => NULL,
        'prefix' => 'admin/about-us',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about-us.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/about-us/about-us/{about_u}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'about-us.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsController@show',
        'namespace' => NULL,
        'prefix' => 'admin/about-us',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about-us.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/about-us/about-us/{about_u}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'about-us.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/about-us',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about-us.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/about-us/about-us/{about_u}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'about-us.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsController@update',
        'namespace' => NULL,
        'prefix' => 'admin/about-us',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about-us.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/about-us/about-us/{about_u}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'about-us.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/about-us',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about-message.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/about-us/about-message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'about-message.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsMessageController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsMessageController@index',
        'namespace' => NULL,
        'prefix' => 'admin/about-us',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about-message.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/about-us/about-message/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'about-message.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsMessageController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsMessageController@create',
        'namespace' => NULL,
        'prefix' => 'admin/about-us',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about-message.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/about-us/about-message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'about-message.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsMessageController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsMessageController@store',
        'namespace' => NULL,
        'prefix' => 'admin/about-us',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about-message.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/about-us/about-message/{about_message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'about-message.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsMessageController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsMessageController@show',
        'namespace' => NULL,
        'prefix' => 'admin/about-us',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about-message.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/about-us/about-message/{about_message}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'about-message.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsMessageController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsMessageController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/about-us',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about-message.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/about-us/about-message/{about_message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'about-message.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsMessageController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsMessageController@update',
        'namespace' => NULL,
        'prefix' => 'admin/about-us',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about-message.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/about-us/about-message/{about_message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'about-message.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsMessageController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsMessageController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/about-us',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about-team.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/about-us/about-team',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'about-team.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsTeamController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsTeamController@index',
        'namespace' => NULL,
        'prefix' => 'admin/about-us',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about-team.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/about-us/about-team/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'about-team.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsTeamController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsTeamController@create',
        'namespace' => NULL,
        'prefix' => 'admin/about-us',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about-team.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/about-us/about-team',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'about-team.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsTeamController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsTeamController@store',
        'namespace' => NULL,
        'prefix' => 'admin/about-us',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about-team.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/about-us/about-team/{about_team}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'about-team.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsTeamController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsTeamController@show',
        'namespace' => NULL,
        'prefix' => 'admin/about-us',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about-team.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/about-us/about-team/{about_team}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'about-team.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsTeamController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsTeamController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/about-us',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about-team.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/about-us/about-team/{about_team}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'about-team.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsTeamController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsTeamController@update',
        'namespace' => NULL,
        'prefix' => 'admin/about-us',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about-team.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/about-us/about-team/{about_team}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'about-team.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsTeamController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\AboutUs\\AboutUsTeamController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/about-us',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add-company.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/add-company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'add-company.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\AddCompanyController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\AddCompanyController@index',
        'namespace' => NULL,
        'prefix' => 'admin/company',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add-company.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/add-company/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'add-company.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\AddCompanyController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\AddCompanyController@create',
        'namespace' => NULL,
        'prefix' => 'admin/company',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add-company.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/company/add-company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'add-company.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\AddCompanyController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\AddCompanyController@store',
        'namespace' => NULL,
        'prefix' => 'admin/company',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add-company.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/add-company/{add_company}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'add-company.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\AddCompanyController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\AddCompanyController@show',
        'namespace' => NULL,
        'prefix' => 'admin/company',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add-company.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/add-company/{add_company}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'add-company.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\AddCompanyController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\AddCompanyController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/company',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add-company.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/company/add-company/{add_company}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'add-company.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\AddCompanyController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\AddCompanyController@update',
        'namespace' => NULL,
        'prefix' => 'admin/company',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add-company.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/company/add-company/{add_company}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'add-company.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\AddCompanyController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\AddCompanyController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/company',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'art-venture-about.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/art-venture/art-venture-about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'art-venture-about.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\ArtVentureAboutController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\ArtVentureAboutController@index',
        'namespace' => NULL,
        'prefix' => 'admin/company/art-venture',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'art-venture-about.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/art-venture/art-venture-about/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'art-venture-about.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\ArtVentureAboutController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\ArtVentureAboutController@create',
        'namespace' => NULL,
        'prefix' => 'admin/company/art-venture',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'art-venture-about.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/company/art-venture/art-venture-about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'art-venture-about.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\ArtVentureAboutController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\ArtVentureAboutController@store',
        'namespace' => NULL,
        'prefix' => 'admin/company/art-venture',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'art-venture-about.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/art-venture/art-venture-about/{art_venture_about}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'art-venture-about.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\ArtVentureAboutController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\ArtVentureAboutController@show',
        'namespace' => NULL,
        'prefix' => 'admin/company/art-venture',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'art-venture-about.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/art-venture/art-venture-about/{art_venture_about}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'art-venture-about.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\ArtVentureAboutController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\ArtVentureAboutController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/company/art-venture',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'art-venture-about.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/company/art-venture/art-venture-about/{art_venture_about}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'art-venture-about.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\ArtVentureAboutController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\ArtVentureAboutController@update',
        'namespace' => NULL,
        'prefix' => 'admin/company/art-venture',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'art-venture-about.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/company/art-venture/art-venture-about/{art_venture_about}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'art-venture-about.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\ArtVentureAboutController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\ArtVentureAboutController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/company/art-venture',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'art-venture-category.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/art-venture/service/art-venture-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'art-venture-category.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\Service\\ArtVentureCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\Service\\ArtVentureCategoryController@index',
        'namespace' => NULL,
        'prefix' => 'admin/company/art-venture/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'art-venture-category.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/art-venture/service/art-venture-category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'art-venture-category.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\Service\\ArtVentureCategoryController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\Service\\ArtVentureCategoryController@create',
        'namespace' => NULL,
        'prefix' => 'admin/company/art-venture/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'art-venture-category.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/company/art-venture/service/art-venture-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'art-venture-category.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\Service\\ArtVentureCategoryController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\Service\\ArtVentureCategoryController@store',
        'namespace' => NULL,
        'prefix' => 'admin/company/art-venture/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'art-venture-category.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/art-venture/service/art-venture-category/{art_venture_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'art-venture-category.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\Service\\ArtVentureCategoryController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\Service\\ArtVentureCategoryController@show',
        'namespace' => NULL,
        'prefix' => 'admin/company/art-venture/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'art-venture-category.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/art-venture/service/art-venture-category/{art_venture_category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'art-venture-category.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\Service\\ArtVentureCategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\Service\\ArtVentureCategoryController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/company/art-venture/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'art-venture-category.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/company/art-venture/service/art-venture-category/{art_venture_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'art-venture-category.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\Service\\ArtVentureCategoryController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\Service\\ArtVentureCategoryController@update',
        'namespace' => NULL,
        'prefix' => 'admin/company/art-venture/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'art-venture-category.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/company/art-venture/service/art-venture-category/{art_venture_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'art-venture-category.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\Service\\ArtVentureCategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\Service\\ArtVentureCategoryController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/company/art-venture/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'art-venture-item-images.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/company/art-venture/service/art-venture-item-images/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\Service\\ArtVentureItemController@deleteImages',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\Service\\ArtVentureItemController@deleteImages',
        'namespace' => NULL,
        'prefix' => 'admin/company/art-venture',
        'where' => 
        array (
        ),
        'as' => 'art-venture-item-images.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'art-venture-item-portfolio' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/company/art-venture/service/art-venture-item-portfolio/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\Service\\ArtVentureItemController@deletePortfolioImage',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\Service\\ArtVentureItemController@deletePortfolioImage',
        'namespace' => NULL,
        'prefix' => 'admin/company/art-venture',
        'where' => 
        array (
        ),
        'as' => 'art-venture-item-portfolio',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'art-venture-item.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/art-venture/service/art-venture-item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'art-venture-item.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\Service\\ArtVentureItemController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\Service\\ArtVentureItemController@index',
        'namespace' => NULL,
        'prefix' => 'admin/company/art-venture/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'art-venture-item.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/art-venture/service/art-venture-item/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'art-venture-item.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\Service\\ArtVentureItemController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\Service\\ArtVentureItemController@create',
        'namespace' => NULL,
        'prefix' => 'admin/company/art-venture/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'art-venture-item.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/company/art-venture/service/art-venture-item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'art-venture-item.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\Service\\ArtVentureItemController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\Service\\ArtVentureItemController@store',
        'namespace' => NULL,
        'prefix' => 'admin/company/art-venture/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'art-venture-item.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/art-venture/service/art-venture-item/{art_venture_item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'art-venture-item.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\Service\\ArtVentureItemController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\Service\\ArtVentureItemController@show',
        'namespace' => NULL,
        'prefix' => 'admin/company/art-venture/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'art-venture-item.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/art-venture/service/art-venture-item/{art_venture_item}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'art-venture-item.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\Service\\ArtVentureItemController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\Service\\ArtVentureItemController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/company/art-venture/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'art-venture-item.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/company/art-venture/service/art-venture-item/{art_venture_item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'art-venture-item.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\Service\\ArtVentureItemController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\Service\\ArtVentureItemController@update',
        'namespace' => NULL,
        'prefix' => 'admin/company/art-venture/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'art-venture-item.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/company/art-venture/service/art-venture-item/{art_venture_item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'art-venture-item.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\Service\\ArtVentureItemController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\Service\\ArtVentureItemController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/company/art-venture/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'art-venture-team.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/art-venture/art-venture-team',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'art-venture-team.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\ArtVentureTeamController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\ArtVentureTeamController@index',
        'namespace' => NULL,
        'prefix' => 'admin/company/art-venture',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'art-venture-team.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/art-venture/art-venture-team/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'art-venture-team.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\ArtVentureTeamController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\ArtVentureTeamController@create',
        'namespace' => NULL,
        'prefix' => 'admin/company/art-venture',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'art-venture-team.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/company/art-venture/art-venture-team',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'art-venture-team.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\ArtVentureTeamController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\ArtVentureTeamController@store',
        'namespace' => NULL,
        'prefix' => 'admin/company/art-venture',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'art-venture-team.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/art-venture/art-venture-team/{art_venture_team}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'art-venture-team.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\ArtVentureTeamController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\ArtVentureTeamController@show',
        'namespace' => NULL,
        'prefix' => 'admin/company/art-venture',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'art-venture-team.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/art-venture/art-venture-team/{art_venture_team}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'art-venture-team.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\ArtVentureTeamController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\ArtVentureTeamController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/company/art-venture',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'art-venture-team.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/company/art-venture/art-venture-team/{art_venture_team}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'art-venture-team.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\ArtVentureTeamController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\ArtVentureTeamController@update',
        'namespace' => NULL,
        'prefix' => 'admin/company/art-venture',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'art-venture-team.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/company/art-venture/art-venture-team/{art_venture_team}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'art-venture-team.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\ArtVentureTeamController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ArtVenture\\ArtVentureTeamController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/company/art-venture',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tns-about.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/tns/tns-about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'tns-about.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\TnsAboutController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\TnsAboutController@index',
        'namespace' => NULL,
        'prefix' => 'admin/company/tns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tns-about.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/tns/tns-about/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'tns-about.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\TnsAboutController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\TnsAboutController@create',
        'namespace' => NULL,
        'prefix' => 'admin/company/tns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tns-about.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/company/tns/tns-about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'tns-about.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\TnsAboutController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\TnsAboutController@store',
        'namespace' => NULL,
        'prefix' => 'admin/company/tns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tns-about.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/tns/tns-about/{tns_about}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'tns-about.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\TnsAboutController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\TnsAboutController@show',
        'namespace' => NULL,
        'prefix' => 'admin/company/tns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tns-about.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/tns/tns-about/{tns_about}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'tns-about.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\TnsAboutController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\TnsAboutController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/company/tns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tns-about.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/company/tns/tns-about/{tns_about}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'tns-about.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\TnsAboutController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\TnsAboutController@update',
        'namespace' => NULL,
        'prefix' => 'admin/company/tns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tns-about.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/company/tns/tns-about/{tns_about}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'tns-about.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\TnsAboutController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\TnsAboutController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/company/tns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tns-category.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/tns/service/tns-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'tns-category.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\Service\\TnsServiceCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\Service\\TnsServiceCategoryController@index',
        'namespace' => NULL,
        'prefix' => 'admin/company/tns/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tns-category.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/tns/service/tns-category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'tns-category.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\Service\\TnsServiceCategoryController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\Service\\TnsServiceCategoryController@create',
        'namespace' => NULL,
        'prefix' => 'admin/company/tns/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tns-category.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/company/tns/service/tns-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'tns-category.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\Service\\TnsServiceCategoryController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\Service\\TnsServiceCategoryController@store',
        'namespace' => NULL,
        'prefix' => 'admin/company/tns/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tns-category.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/tns/service/tns-category/{tns_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'tns-category.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\Service\\TnsServiceCategoryController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\Service\\TnsServiceCategoryController@show',
        'namespace' => NULL,
        'prefix' => 'admin/company/tns/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tns-category.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/tns/service/tns-category/{tns_category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'tns-category.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\Service\\TnsServiceCategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\Service\\TnsServiceCategoryController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/company/tns/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tns-category.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/company/tns/service/tns-category/{tns_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'tns-category.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\Service\\TnsServiceCategoryController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\Service\\TnsServiceCategoryController@update',
        'namespace' => NULL,
        'prefix' => 'admin/company/tns/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tns-category.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/company/tns/service/tns-category/{tns_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'tns-category.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\Service\\TnsServiceCategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\Service\\TnsServiceCategoryController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/company/tns/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tns-item-images.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/company/tns/service/tns-item-images/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\Service\\TnsServiceItemController@deleteTnsImages',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\Service\\TnsServiceItemController@deleteTnsImages',
        'namespace' => NULL,
        'prefix' => 'admin/company/tns',
        'where' => 
        array (
        ),
        'as' => 'tns-item-images.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tns-item-portfolio.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/company/tns/service/tns-item-portfolio/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\Service\\TnsServiceItemController@deleteTnsPortfolioImage',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\Service\\TnsServiceItemController@deleteTnsPortfolioImage',
        'namespace' => NULL,
        'prefix' => 'admin/company/tns',
        'where' => 
        array (
        ),
        'as' => 'tns-item-portfolio.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tns-item.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/tns/service/tns-item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'tns-item.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\Service\\TnsServiceItemController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\Service\\TnsServiceItemController@index',
        'namespace' => NULL,
        'prefix' => 'admin/company/tns/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tns-item.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/tns/service/tns-item/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'tns-item.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\Service\\TnsServiceItemController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\Service\\TnsServiceItemController@create',
        'namespace' => NULL,
        'prefix' => 'admin/company/tns/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tns-item.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/company/tns/service/tns-item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'tns-item.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\Service\\TnsServiceItemController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\Service\\TnsServiceItemController@store',
        'namespace' => NULL,
        'prefix' => 'admin/company/tns/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tns-item.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/tns/service/tns-item/{tns_item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'tns-item.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\Service\\TnsServiceItemController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\Service\\TnsServiceItemController@show',
        'namespace' => NULL,
        'prefix' => 'admin/company/tns/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tns-item.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/tns/service/tns-item/{tns_item}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'tns-item.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\Service\\TnsServiceItemController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\Service\\TnsServiceItemController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/company/tns/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tns-item.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/company/tns/service/tns-item/{tns_item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'tns-item.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\Service\\TnsServiceItemController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\Service\\TnsServiceItemController@update',
        'namespace' => NULL,
        'prefix' => 'admin/company/tns/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tns-item.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/company/tns/service/tns-item/{tns_item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'tns-item.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\Service\\TnsServiceItemController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\Service\\TnsServiceItemController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/company/tns/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tns-team.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/tns/tns-team',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'tns-team.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\TnsTeamController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\TnsTeamController@index',
        'namespace' => NULL,
        'prefix' => 'admin/company/tns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tns-team.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/tns/tns-team/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'tns-team.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\TnsTeamController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\TnsTeamController@create',
        'namespace' => NULL,
        'prefix' => 'admin/company/tns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tns-team.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/company/tns/tns-team',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'tns-team.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\TnsTeamController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\TnsTeamController@store',
        'namespace' => NULL,
        'prefix' => 'admin/company/tns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tns-team.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/tns/tns-team/{tns_team}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'tns-team.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\TnsTeamController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\TnsTeamController@show',
        'namespace' => NULL,
        'prefix' => 'admin/company/tns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tns-team.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/tns/tns-team/{tns_team}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'tns-team.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\TnsTeamController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\TnsTeamController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/company/tns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tns-team.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/company/tns/tns-team/{tns_team}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'tns-team.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\TnsTeamController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\TnsTeamController@update',
        'namespace' => NULL,
        'prefix' => 'admin/company/tns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tns-team.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/company/tns/tns-team/{tns_team}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'tns-team.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\TnsTeamController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\Tns\\TnsTeamController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/company/tns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bd-digital-about.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/bd-digital/bd-digital-about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'bd-digital-about.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\BdDigitalAboutController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\BdDigitalAboutController@index',
        'namespace' => NULL,
        'prefix' => 'admin/company/bd-digital',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bd-digital-about.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/bd-digital/bd-digital-about/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'bd-digital-about.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\BdDigitalAboutController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\BdDigitalAboutController@create',
        'namespace' => NULL,
        'prefix' => 'admin/company/bd-digital',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bd-digital-about.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/company/bd-digital/bd-digital-about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'bd-digital-about.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\BdDigitalAboutController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\BdDigitalAboutController@store',
        'namespace' => NULL,
        'prefix' => 'admin/company/bd-digital',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bd-digital-about.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/bd-digital/bd-digital-about/{bd_digital_about}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'bd-digital-about.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\BdDigitalAboutController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\BdDigitalAboutController@show',
        'namespace' => NULL,
        'prefix' => 'admin/company/bd-digital',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bd-digital-about.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/bd-digital/bd-digital-about/{bd_digital_about}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'bd-digital-about.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\BdDigitalAboutController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\BdDigitalAboutController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/company/bd-digital',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bd-digital-about.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/company/bd-digital/bd-digital-about/{bd_digital_about}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'bd-digital-about.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\BdDigitalAboutController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\BdDigitalAboutController@update',
        'namespace' => NULL,
        'prefix' => 'admin/company/bd-digital',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bd-digital-about.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/company/bd-digital/bd-digital-about/{bd_digital_about}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'bd-digital-about.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\BdDigitalAboutController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\BdDigitalAboutController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/company/bd-digital',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bd-digital-service-category.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/bd-digital/service/bd-digital-service-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'bd-digital-service-category.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\Service\\BdDigitalServiceCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\Service\\BdDigitalServiceCategoryController@index',
        'namespace' => NULL,
        'prefix' => 'admin/company/bd-digital/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bd-digital-service-category.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/bd-digital/service/bd-digital-service-category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'bd-digital-service-category.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\Service\\BdDigitalServiceCategoryController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\Service\\BdDigitalServiceCategoryController@create',
        'namespace' => NULL,
        'prefix' => 'admin/company/bd-digital/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bd-digital-service-category.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/company/bd-digital/service/bd-digital-service-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'bd-digital-service-category.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\Service\\BdDigitalServiceCategoryController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\Service\\BdDigitalServiceCategoryController@store',
        'namespace' => NULL,
        'prefix' => 'admin/company/bd-digital/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bd-digital-service-category.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/bd-digital/service/bd-digital-service-category/{bd_digital_service_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'bd-digital-service-category.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\Service\\BdDigitalServiceCategoryController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\Service\\BdDigitalServiceCategoryController@show',
        'namespace' => NULL,
        'prefix' => 'admin/company/bd-digital/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bd-digital-service-category.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/bd-digital/service/bd-digital-service-category/{bd_digital_service_category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'bd-digital-service-category.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\Service\\BdDigitalServiceCategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\Service\\BdDigitalServiceCategoryController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/company/bd-digital/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bd-digital-service-category.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/company/bd-digital/service/bd-digital-service-category/{bd_digital_service_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'bd-digital-service-category.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\Service\\BdDigitalServiceCategoryController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\Service\\BdDigitalServiceCategoryController@update',
        'namespace' => NULL,
        'prefix' => 'admin/company/bd-digital/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bd-digital-service-category.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/company/bd-digital/service/bd-digital-service-category/{bd_digital_service_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'bd-digital-service-category.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\Service\\BdDigitalServiceCategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\Service\\BdDigitalServiceCategoryController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/company/bd-digital/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bd-digital-item-images.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/company/bd-digital/service/bd-digital-item-images/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\Service\\BdDigitalServiceItemController@deleteBdDigitalImages',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\Service\\BdDigitalServiceItemController@deleteBdDigitalImages',
        'namespace' => NULL,
        'prefix' => 'admin/company/bd-digital',
        'where' => 
        array (
        ),
        'as' => 'bd-digital-item-images.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bd-digital-item-portfolio.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/company/bd-digital/service/bd-digital-item-portfolio/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\Service\\BdDigitalServiceItemController@deleteBdDigitalPortfolioImage',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\Service\\BdDigitalServiceItemController@deleteBdDigitalPortfolioImage',
        'namespace' => NULL,
        'prefix' => 'admin/company/bd-digital',
        'where' => 
        array (
        ),
        'as' => 'bd-digital-item-portfolio.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bd-digital-service-item.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/bd-digital/service/bd-digital-service-item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'bd-digital-service-item.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\Service\\BdDigitalServiceItemController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\Service\\BdDigitalServiceItemController@index',
        'namespace' => NULL,
        'prefix' => 'admin/company/bd-digital/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bd-digital-service-item.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/bd-digital/service/bd-digital-service-item/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'bd-digital-service-item.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\Service\\BdDigitalServiceItemController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\Service\\BdDigitalServiceItemController@create',
        'namespace' => NULL,
        'prefix' => 'admin/company/bd-digital/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bd-digital-service-item.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/company/bd-digital/service/bd-digital-service-item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'bd-digital-service-item.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\Service\\BdDigitalServiceItemController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\Service\\BdDigitalServiceItemController@store',
        'namespace' => NULL,
        'prefix' => 'admin/company/bd-digital/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bd-digital-service-item.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/bd-digital/service/bd-digital-service-item/{bd_digital_service_item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'bd-digital-service-item.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\Service\\BdDigitalServiceItemController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\Service\\BdDigitalServiceItemController@show',
        'namespace' => NULL,
        'prefix' => 'admin/company/bd-digital/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bd-digital-service-item.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/bd-digital/service/bd-digital-service-item/{bd_digital_service_item}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'bd-digital-service-item.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\Service\\BdDigitalServiceItemController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\Service\\BdDigitalServiceItemController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/company/bd-digital/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bd-digital-service-item.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/company/bd-digital/service/bd-digital-service-item/{bd_digital_service_item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'bd-digital-service-item.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\Service\\BdDigitalServiceItemController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\Service\\BdDigitalServiceItemController@update',
        'namespace' => NULL,
        'prefix' => 'admin/company/bd-digital/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bd-digital-service-item.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/company/bd-digital/service/bd-digital-service-item/{bd_digital_service_item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'bd-digital-service-item.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\Service\\BdDigitalServiceItemController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\Service\\BdDigitalServiceItemController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/company/bd-digital/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bd-digital-team.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/bd-digital/bd-digital-team',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'bd-digital-team.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\BdDigitalTeamController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\BdDigitalTeamController@index',
        'namespace' => NULL,
        'prefix' => 'admin/company/bd-digital',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bd-digital-team.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/bd-digital/bd-digital-team/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'bd-digital-team.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\BdDigitalTeamController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\BdDigitalTeamController@create',
        'namespace' => NULL,
        'prefix' => 'admin/company/bd-digital',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bd-digital-team.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/company/bd-digital/bd-digital-team',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'bd-digital-team.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\BdDigitalTeamController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\BdDigitalTeamController@store',
        'namespace' => NULL,
        'prefix' => 'admin/company/bd-digital',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bd-digital-team.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/bd-digital/bd-digital-team/{bd_digital_team}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'bd-digital-team.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\BdDigitalTeamController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\BdDigitalTeamController@show',
        'namespace' => NULL,
        'prefix' => 'admin/company/bd-digital',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bd-digital-team.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/bd-digital/bd-digital-team/{bd_digital_team}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'bd-digital-team.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\BdDigitalTeamController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\BdDigitalTeamController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/company/bd-digital',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bd-digital-team.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/company/bd-digital/bd-digital-team/{bd_digital_team}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'bd-digital-team.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\BdDigitalTeamController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\BdDigitalTeamController@update',
        'namespace' => NULL,
        'prefix' => 'admin/company/bd-digital',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bd-digital-team.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/company/bd-digital/bd-digital-team/{bd_digital_team}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'bd-digital-team.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\BdDigitalTeamController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\BdDigital\\BdDigitalTeamController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/company/bd-digital',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ctf-about.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/connect-to-fly/ctf-about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'ctf-about.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\ConnectToFlyAboutController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\ConnectToFlyAboutController@index',
        'namespace' => NULL,
        'prefix' => 'admin/company/connect-to-fly',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ctf-about.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/connect-to-fly/ctf-about/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'ctf-about.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\ConnectToFlyAboutController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\ConnectToFlyAboutController@create',
        'namespace' => NULL,
        'prefix' => 'admin/company/connect-to-fly',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ctf-about.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/company/connect-to-fly/ctf-about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'ctf-about.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\ConnectToFlyAboutController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\ConnectToFlyAboutController@store',
        'namespace' => NULL,
        'prefix' => 'admin/company/connect-to-fly',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ctf-about.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/connect-to-fly/ctf-about/{ctf_about}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'ctf-about.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\ConnectToFlyAboutController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\ConnectToFlyAboutController@show',
        'namespace' => NULL,
        'prefix' => 'admin/company/connect-to-fly',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ctf-about.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/connect-to-fly/ctf-about/{ctf_about}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'ctf-about.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\ConnectToFlyAboutController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\ConnectToFlyAboutController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/company/connect-to-fly',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ctf-about.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/company/connect-to-fly/ctf-about/{ctf_about}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'ctf-about.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\ConnectToFlyAboutController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\ConnectToFlyAboutController@update',
        'namespace' => NULL,
        'prefix' => 'admin/company/connect-to-fly',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ctf-about.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/company/connect-to-fly/ctf-about/{ctf_about}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'ctf-about.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\ConnectToFlyAboutController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\ConnectToFlyAboutController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/company/connect-to-fly',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ctf-service-category.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/connect-to-fly/service/ctf-service-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'ctf-service-category.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\Service\\ConnectToFlyServiceCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\Service\\ConnectToFlyServiceCategoryController@index',
        'namespace' => NULL,
        'prefix' => 'admin/company/connect-to-fly/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ctf-service-category.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/connect-to-fly/service/ctf-service-category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'ctf-service-category.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\Service\\ConnectToFlyServiceCategoryController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\Service\\ConnectToFlyServiceCategoryController@create',
        'namespace' => NULL,
        'prefix' => 'admin/company/connect-to-fly/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ctf-service-category.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/company/connect-to-fly/service/ctf-service-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'ctf-service-category.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\Service\\ConnectToFlyServiceCategoryController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\Service\\ConnectToFlyServiceCategoryController@store',
        'namespace' => NULL,
        'prefix' => 'admin/company/connect-to-fly/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ctf-service-category.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/connect-to-fly/service/ctf-service-category/{ctf_service_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'ctf-service-category.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\Service\\ConnectToFlyServiceCategoryController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\Service\\ConnectToFlyServiceCategoryController@show',
        'namespace' => NULL,
        'prefix' => 'admin/company/connect-to-fly/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ctf-service-category.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/connect-to-fly/service/ctf-service-category/{ctf_service_category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'ctf-service-category.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\Service\\ConnectToFlyServiceCategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\Service\\ConnectToFlyServiceCategoryController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/company/connect-to-fly/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ctf-service-category.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/company/connect-to-fly/service/ctf-service-category/{ctf_service_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'ctf-service-category.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\Service\\ConnectToFlyServiceCategoryController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\Service\\ConnectToFlyServiceCategoryController@update',
        'namespace' => NULL,
        'prefix' => 'admin/company/connect-to-fly/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ctf-service-category.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/company/connect-to-fly/service/ctf-service-category/{ctf_service_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'ctf-service-category.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\Service\\ConnectToFlyServiceCategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\Service\\ConnectToFlyServiceCategoryController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/company/connect-to-fly/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ctf-item-images.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/company/connect-to-fly/service/ctf-item-images/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\Service\\ConnectToFlyServiceItemController@deleteConnectToFlyImages',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\Service\\ConnectToFlyServiceItemController@deleteConnectToFlyImages',
        'namespace' => NULL,
        'prefix' => 'admin/company/connect-to-fly',
        'where' => 
        array (
        ),
        'as' => 'ctf-item-images.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ctf-item-portfolio.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/company/connect-to-fly/service/ctf-item-portfolio/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\Service\\ConnectToFlyServiceItemController@deleteConnectToFlyPortfolioImage',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\Service\\ConnectToFlyServiceItemController@deleteConnectToFlyPortfolioImage',
        'namespace' => NULL,
        'prefix' => 'admin/company/connect-to-fly',
        'where' => 
        array (
        ),
        'as' => 'ctf-item-portfolio.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ctf-service-item.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/connect-to-fly/service/ctf-service-item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'ctf-service-item.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\Service\\ConnectToFlyServiceItemController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\Service\\ConnectToFlyServiceItemController@index',
        'namespace' => NULL,
        'prefix' => 'admin/company/connect-to-fly/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ctf-service-item.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/connect-to-fly/service/ctf-service-item/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'ctf-service-item.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\Service\\ConnectToFlyServiceItemController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\Service\\ConnectToFlyServiceItemController@create',
        'namespace' => NULL,
        'prefix' => 'admin/company/connect-to-fly/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ctf-service-item.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/company/connect-to-fly/service/ctf-service-item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'ctf-service-item.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\Service\\ConnectToFlyServiceItemController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\Service\\ConnectToFlyServiceItemController@store',
        'namespace' => NULL,
        'prefix' => 'admin/company/connect-to-fly/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ctf-service-item.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/connect-to-fly/service/ctf-service-item/{ctf_service_item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'ctf-service-item.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\Service\\ConnectToFlyServiceItemController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\Service\\ConnectToFlyServiceItemController@show',
        'namespace' => NULL,
        'prefix' => 'admin/company/connect-to-fly/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ctf-service-item.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/connect-to-fly/service/ctf-service-item/{ctf_service_item}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'ctf-service-item.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\Service\\ConnectToFlyServiceItemController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\Service\\ConnectToFlyServiceItemController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/company/connect-to-fly/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ctf-service-item.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/company/connect-to-fly/service/ctf-service-item/{ctf_service_item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'ctf-service-item.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\Service\\ConnectToFlyServiceItemController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\Service\\ConnectToFlyServiceItemController@update',
        'namespace' => NULL,
        'prefix' => 'admin/company/connect-to-fly/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ctf-service-item.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/company/connect-to-fly/service/ctf-service-item/{ctf_service_item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'ctf-service-item.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\Service\\ConnectToFlyServiceItemController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\Service\\ConnectToFlyServiceItemController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/company/connect-to-fly/service',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ctf-team.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/connect-to-fly/ctf-team',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'ctf-team.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\ConnectToFlyTeamController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\ConnectToFlyTeamController@index',
        'namespace' => NULL,
        'prefix' => 'admin/company/connect-to-fly',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ctf-team.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/connect-to-fly/ctf-team/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'ctf-team.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\ConnectToFlyTeamController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\ConnectToFlyTeamController@create',
        'namespace' => NULL,
        'prefix' => 'admin/company/connect-to-fly',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ctf-team.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/company/connect-to-fly/ctf-team',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'ctf-team.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\ConnectToFlyTeamController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\ConnectToFlyTeamController@store',
        'namespace' => NULL,
        'prefix' => 'admin/company/connect-to-fly',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ctf-team.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/connect-to-fly/ctf-team/{ctf_team}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'ctf-team.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\ConnectToFlyTeamController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\ConnectToFlyTeamController@show',
        'namespace' => NULL,
        'prefix' => 'admin/company/connect-to-fly',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ctf-team.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/company/connect-to-fly/ctf-team/{ctf_team}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'ctf-team.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\ConnectToFlyTeamController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\ConnectToFlyTeamController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/company/connect-to-fly',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ctf-team.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/company/connect-to-fly/ctf-team/{ctf_team}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'ctf-team.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\ConnectToFlyTeamController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\ConnectToFlyTeamController@update',
        'namespace' => NULL,
        'prefix' => 'admin/company/connect-to-fly',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ctf-team.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/company/connect-to-fly/ctf-team/{ctf_team}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'ctf-team.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\ConnectToFlyTeamController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Company\\SingleCompany\\ConnectToFly\\ConnectToFlyTeamController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/company/connect-to-fly',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gallery-category.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gallery/gallery-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'gallery-category.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Gallery\\GalleryCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Gallery\\GalleryCategoryController@index',
        'namespace' => NULL,
        'prefix' => 'admin/gallery',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gallery-category.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gallery/gallery-category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'gallery-category.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Gallery\\GalleryCategoryController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Gallery\\GalleryCategoryController@create',
        'namespace' => NULL,
        'prefix' => 'admin/gallery',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gallery-category.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/gallery/gallery-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'gallery-category.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Gallery\\GalleryCategoryController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Gallery\\GalleryCategoryController@store',
        'namespace' => NULL,
        'prefix' => 'admin/gallery',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gallery-category.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gallery/gallery-category/{gallery_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'gallery-category.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Gallery\\GalleryCategoryController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Gallery\\GalleryCategoryController@show',
        'namespace' => NULL,
        'prefix' => 'admin/gallery',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gallery-category.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gallery/gallery-category/{gallery_category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'gallery-category.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Gallery\\GalleryCategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Gallery\\GalleryCategoryController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/gallery',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gallery-category.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/gallery/gallery-category/{gallery_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'gallery-category.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Gallery\\GalleryCategoryController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Gallery\\GalleryCategoryController@update',
        'namespace' => NULL,
        'prefix' => 'admin/gallery',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gallery-category.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/gallery/gallery-category/{gallery_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'gallery-category.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Gallery\\GalleryCategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Gallery\\GalleryCategoryController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/gallery',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gallery-item.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gallery/gallery-item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'gallery-item.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Gallery\\GalleryItemController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Gallery\\GalleryItemController@index',
        'namespace' => NULL,
        'prefix' => 'admin/gallery',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gallery-item.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gallery/gallery-item/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'gallery-item.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Gallery\\GalleryItemController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Gallery\\GalleryItemController@create',
        'namespace' => NULL,
        'prefix' => 'admin/gallery',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gallery-item.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/gallery/gallery-item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'gallery-item.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Gallery\\GalleryItemController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Gallery\\GalleryItemController@store',
        'namespace' => NULL,
        'prefix' => 'admin/gallery',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gallery-item.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gallery/gallery-item/{gallery_item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'gallery-item.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Gallery\\GalleryItemController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Gallery\\GalleryItemController@show',
        'namespace' => NULL,
        'prefix' => 'admin/gallery',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gallery-item.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gallery/gallery-item/{gallery_item}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'gallery-item.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Gallery\\GalleryItemController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Gallery\\GalleryItemController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/gallery',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gallery-item.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/gallery/gallery-item/{gallery_item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'gallery-item.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Gallery\\GalleryItemController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Gallery\\GalleryItemController@update',
        'namespace' => NULL,
        'prefix' => 'admin/gallery',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gallery-item.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/gallery/gallery-item/{gallery_item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'gallery-item.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Gallery\\GalleryItemController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Gallery\\GalleryItemController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/gallery',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'address.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contact/address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'address.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Contact\\AddressController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Contact\\AddressController@index',
        'namespace' => NULL,
        'prefix' => 'admin/contact',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'address.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contact/address/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'address.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Contact\\AddressController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Contact\\AddressController@create',
        'namespace' => NULL,
        'prefix' => 'admin/contact',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'address.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/contact/address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'address.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Contact\\AddressController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Contact\\AddressController@store',
        'namespace' => NULL,
        'prefix' => 'admin/contact',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'address.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contact/address/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'address.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Contact\\AddressController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Contact\\AddressController@show',
        'namespace' => NULL,
        'prefix' => 'admin/contact',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'address.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contact/address/{address}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'address.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Contact\\AddressController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Contact\\AddressController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/contact',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'address.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/contact/address/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'address.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Contact\\AddressController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Contact\\AddressController@update',
        'namespace' => NULL,
        'prefix' => 'admin/contact',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'address.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/contact/address/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'address.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Contact\\AddressController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Contact\\AddressController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/contact',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'map.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contact/map',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'map.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Contact\\MapController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Contact\\MapController@index',
        'namespace' => NULL,
        'prefix' => 'admin/contact',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'map.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contact/map/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'map.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Contact\\MapController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Contact\\MapController@create',
        'namespace' => NULL,
        'prefix' => 'admin/contact',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'map.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/contact/map',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'map.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Contact\\MapController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Contact\\MapController@store',
        'namespace' => NULL,
        'prefix' => 'admin/contact',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'map.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contact/map/{map}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'map.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Contact\\MapController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Contact\\MapController@show',
        'namespace' => NULL,
        'prefix' => 'admin/contact',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'map.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contact/map/{map}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'map.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Contact\\MapController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Contact\\MapController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/contact',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'map.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/contact/map/{map}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'map.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Contact\\MapController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Contact\\MapController@update',
        'namespace' => NULL,
        'prefix' => 'admin/contact',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'map.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/contact/map/{map}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'map.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Contact\\MapController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Contact\\MapController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/contact',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'whatsapp.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contact/whatsapp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'whatsapp.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Contact\\WhatsAppController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Contact\\WhatsAppController@index',
        'namespace' => NULL,
        'prefix' => 'admin/contact',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'whatsapp.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contact/whatsapp/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'whatsapp.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Contact\\WhatsAppController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Contact\\WhatsAppController@create',
        'namespace' => NULL,
        'prefix' => 'admin/contact',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'whatsapp.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/contact/whatsapp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'whatsapp.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Contact\\WhatsAppController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Contact\\WhatsAppController@store',
        'namespace' => NULL,
        'prefix' => 'admin/contact',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'whatsapp.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contact/whatsapp/{whatsapp}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'whatsapp.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Contact\\WhatsAppController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Contact\\WhatsAppController@show',
        'namespace' => NULL,
        'prefix' => 'admin/contact',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'whatsapp.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contact/whatsapp/{whatsapp}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'whatsapp.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Contact\\WhatsAppController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Contact\\WhatsAppController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/contact',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'whatsapp.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/contact/whatsapp/{whatsapp}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'whatsapp.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Contact\\WhatsAppController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Contact\\WhatsAppController@update',
        'namespace' => NULL,
        'prefix' => 'admin/contact',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'whatsapp.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/contact/whatsapp/{whatsapp}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'whatsapp.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Contact\\WhatsAppController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Contact\\WhatsAppController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/contact',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/client',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'client.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\ClientController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\ClientController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/client/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'client.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\ClientController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\ClientController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/client',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'client.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\ClientController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\ClientController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/client/{client}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'client.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\ClientController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\ClientController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/client/{client}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'client.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\ClientController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\ClientController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/client/{client}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'client.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\ClientController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\ClientController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/client/{client}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'client.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\ClientController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\ClientController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partial-header.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/partial-header',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'partial-header.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\PartialHeaderController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\PartialHeaderController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partial-header.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/partial-header/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'partial-header.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\PartialHeaderController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\PartialHeaderController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partial-header.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/partial-header',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'partial-header.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\PartialHeaderController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\PartialHeaderController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partial-header.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/partial-header/{partial_header}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'partial-header.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\PartialHeaderController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\PartialHeaderController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partial-header.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/partial-header/{partial_header}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'partial-header.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\PartialHeaderController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\PartialHeaderController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partial-header.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/partial-header/{partial_header}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'partial-header.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\PartialHeaderController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\PartialHeaderController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partial-header.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/partial-header/{partial_header}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'partial-header.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\PartialHeaderController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\PartialHeaderController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quick-link.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/quick-link',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'quick-link.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\QuickLinkController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\QuickLinkController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quick-link.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/quick-link/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'quick-link.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\QuickLinkController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\QuickLinkController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quick-link.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/quick-link',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'quick-link.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\QuickLinkController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\QuickLinkController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quick-link.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/quick-link/{quick_link}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'quick-link.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\QuickLinkController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\QuickLinkController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quick-link.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/quick-link/{quick_link}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'quick-link.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\QuickLinkController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\QuickLinkController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quick-link.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/quick-link/{quick_link}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'quick-link.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\QuickLinkController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\QuickLinkController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quick-link.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/quick-link/{quick_link}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'quick-link.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\QuickLinkController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\QuickLinkController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'footer-page-integration.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/footer-page-integration',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'footer-page-integration.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\SocialPageIntegrationController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\SocialPageIntegrationController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'footer-page-integration.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/footer-page-integration/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'footer-page-integration.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\SocialPageIntegrationController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\SocialPageIntegrationController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'footer-page-integration.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/footer-page-integration',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'footer-page-integration.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\SocialPageIntegrationController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\SocialPageIntegrationController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'footer-page-integration.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/footer-page-integration/{footer_page_integration}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'footer-page-integration.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\SocialPageIntegrationController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\SocialPageIntegrationController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'footer-page-integration.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/footer-page-integration/{footer_page_integration}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'footer-page-integration.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\SocialPageIntegrationController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\SocialPageIntegrationController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'footer-page-integration.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/footer-page-integration/{footer_page_integration}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'footer-page-integration.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\SocialPageIntegrationController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\SocialPageIntegrationController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'footer-page-integration.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/footer-page-integration/{footer_page_integration}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'footer-page-integration.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\SocialPageIntegrationController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\SocialPageIntegrationController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'footer-social.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/footer-social',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'footer-social.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\FooterSocialLinkController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\FooterSocialLinkController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'footer-social.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/footer-social/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'footer-social.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\FooterSocialLinkController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\FooterSocialLinkController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'footer-social.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/footer-social',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'footer-social.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\FooterSocialLinkController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\FooterSocialLinkController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'footer-social.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/footer-social/{footer_social}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'footer-social.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\FooterSocialLinkController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\FooterSocialLinkController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'footer-social.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/footer-social/{footer_social}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'footer-social.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\FooterSocialLinkController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\FooterSocialLinkController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'footer-social.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/footer-social/{footer_social}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'footer-social.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\FooterSocialLinkController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\FooterSocialLinkController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'footer-social.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/footer-social/{footer_social}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'footer-social.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\FooterSocialLinkController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\FooterSocialLinkController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'slider.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'slider.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\SliderController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\SliderController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'slider.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slider/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'slider.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\SliderController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\SliderController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'slider.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/slider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'slider.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\SliderController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\SliderController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'slider.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slider/{slider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'slider.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\SliderController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\SliderController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'slider.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slider/{slider}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'slider.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\SliderController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\SliderController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'slider.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/slider/{slider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'slider.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\SliderController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\SliderController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'slider.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/slider/{slider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'slider.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\SliderController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\SliderController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-about-us.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/hst-about-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-about-us.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\AboutUs\\HeadingAboutUsController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\AboutUs\\HeadingAboutUsController@index',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-about-us.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/hst-about-us/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-about-us.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\AboutUs\\HeadingAboutUsController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\AboutUs\\HeadingAboutUsController@create',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-about-us.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/heading-and-sub-text/hst-about-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-about-us.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\AboutUs\\HeadingAboutUsController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\AboutUs\\HeadingAboutUsController@store',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-about-us.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/hst-about-us/{hst_about_u}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-about-us.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\AboutUs\\HeadingAboutUsController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\AboutUs\\HeadingAboutUsController@show',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-about-us.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/hst-about-us/{hst_about_u}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-about-us.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\AboutUs\\HeadingAboutUsController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\AboutUs\\HeadingAboutUsController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-about-us.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/heading-and-sub-text/hst-about-us/{hst_about_u}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-about-us.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\AboutUs\\HeadingAboutUsController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\AboutUs\\HeadingAboutUsController@update',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-about-us.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/heading-and-sub-text/hst-about-us/{hst_about_u}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-about-us.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\AboutUs\\HeadingAboutUsController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\AboutUs\\HeadingAboutUsController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-companies.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-companies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-companies.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\HeadingCompanyController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\HeadingCompanyController@index',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-companies.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-companies/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-companies.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\HeadingCompanyController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\HeadingCompanyController@create',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-companies.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-companies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-companies.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\HeadingCompanyController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\HeadingCompanyController@store',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-companies.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-companies/{hst_company}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-companies.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\HeadingCompanyController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\HeadingCompanyController@show',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-companies.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-companies/{hst_company}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-companies.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\HeadingCompanyController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\HeadingCompanyController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-companies.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-companies/{hst_company}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-companies.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\HeadingCompanyController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\HeadingCompanyController@update',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-companies.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-companies/{hst_company}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-companies.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\HeadingCompanyController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\HeadingCompanyController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-art-venture.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-art-venture',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-art-venture.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingArtVentureCompanyController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingArtVentureCompanyController@index',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-art-venture.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-art-venture/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-art-venture.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingArtVentureCompanyController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingArtVentureCompanyController@create',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-art-venture.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-art-venture',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-art-venture.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingArtVentureCompanyController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingArtVentureCompanyController@store',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-art-venture.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-art-venture/{hst_art_venture}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-art-venture.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingArtVentureCompanyController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingArtVentureCompanyController@show',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-art-venture.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-art-venture/{hst_art_venture}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-art-venture.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingArtVentureCompanyController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingArtVentureCompanyController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-art-venture.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-art-venture/{hst_art_venture}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-art-venture.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingArtVentureCompanyController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingArtVentureCompanyController@update',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-art-venture.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-art-venture/{hst_art_venture}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-art-venture.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingArtVentureCompanyController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingArtVentureCompanyController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-bd-digital.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-bd-digital',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-bd-digital.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingBdDigitalCompanyController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingBdDigitalCompanyController@index',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-bd-digital.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-bd-digital/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-bd-digital.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingBdDigitalCompanyController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingBdDigitalCompanyController@create',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-bd-digital.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-bd-digital',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-bd-digital.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingBdDigitalCompanyController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingBdDigitalCompanyController@store',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-bd-digital.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-bd-digital/{hst_bd_digital}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-bd-digital.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingBdDigitalCompanyController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingBdDigitalCompanyController@show',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-bd-digital.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-bd-digital/{hst_bd_digital}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-bd-digital.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingBdDigitalCompanyController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingBdDigitalCompanyController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-bd-digital.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-bd-digital/{hst_bd_digital}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-bd-digital.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingBdDigitalCompanyController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingBdDigitalCompanyController@update',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-bd-digital.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-bd-digital/{hst_bd_digital}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-bd-digital.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingBdDigitalCompanyController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingBdDigitalCompanyController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-tns.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-tns',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-tns.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingTnsCompanyController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingTnsCompanyController@index',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-tns.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-tns/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-tns.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingTnsCompanyController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingTnsCompanyController@create',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-tns.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-tns',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-tns.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingTnsCompanyController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingTnsCompanyController@store',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-tns.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-tns/{hst_tn}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-tns.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingTnsCompanyController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingTnsCompanyController@show',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-tns.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-tns/{hst_tn}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-tns.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingTnsCompanyController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingTnsCompanyController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-tns.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-tns/{hst_tn}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-tns.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingTnsCompanyController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingTnsCompanyController@update',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-tns.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-tns/{hst_tn}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-tns.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingTnsCompanyController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingTnsCompanyController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-connect-to-fly.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-connect-to-fly',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-connect-to-fly.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingConnectToFlyCompanyController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingConnectToFlyCompanyController@index',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-connect-to-fly.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-connect-to-fly/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-connect-to-fly.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingConnectToFlyCompanyController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingConnectToFlyCompanyController@create',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-connect-to-fly.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-connect-to-fly',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-connect-to-fly.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingConnectToFlyCompanyController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingConnectToFlyCompanyController@store',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-connect-to-fly.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-connect-to-fly/{hst_connect_to_fly}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-connect-to-fly.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingConnectToFlyCompanyController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingConnectToFlyCompanyController@show',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-connect-to-fly.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-connect-to-fly/{hst_connect_to_fly}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-connect-to-fly.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingConnectToFlyCompanyController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingConnectToFlyCompanyController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-connect-to-fly.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-connect-to-fly/{hst_connect_to_fly}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-connect-to-fly.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingConnectToFlyCompanyController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingConnectToFlyCompanyController@update',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-connect-to-fly.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/heading-and-sub-text/companies/hst-connect-to-fly/{hst_connect_to_fly}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-connect-to-fly.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingConnectToFlyCompanyController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Company\\SingleCompany\\HeadingConnectToFlyCompanyController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text/companies',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-service.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/hst-service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-service.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Service\\HeadingServiceController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Service\\HeadingServiceController@index',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-service.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/hst-service/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-service.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Service\\HeadingServiceController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Service\\HeadingServiceController@create',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-service.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/heading-and-sub-text/hst-service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-service.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Service\\HeadingServiceController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Service\\HeadingServiceController@store',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-service.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/hst-service/{hst_service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-service.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Service\\HeadingServiceController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Service\\HeadingServiceController@show',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-service.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/hst-service/{hst_service}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-service.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Service\\HeadingServiceController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Service\\HeadingServiceController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-service.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/heading-and-sub-text/hst-service/{hst_service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-service.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Service\\HeadingServiceController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Service\\HeadingServiceController@update',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-service.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/heading-and-sub-text/hst-service/{hst_service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-service.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Service\\HeadingServiceController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Service\\HeadingServiceController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-gallery.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/hst-gallery',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-gallery.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Gallery\\HeadingGalleryController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Gallery\\HeadingGalleryController@index',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-gallery.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/hst-gallery/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-gallery.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Gallery\\HeadingGalleryController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Gallery\\HeadingGalleryController@create',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-gallery.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/heading-and-sub-text/hst-gallery',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-gallery.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Gallery\\HeadingGalleryController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Gallery\\HeadingGalleryController@store',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-gallery.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/hst-gallery/{hst_gallery}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-gallery.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Gallery\\HeadingGalleryController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Gallery\\HeadingGalleryController@show',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-gallery.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/hst-gallery/{hst_gallery}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-gallery.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Gallery\\HeadingGalleryController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Gallery\\HeadingGalleryController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-gallery.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/heading-and-sub-text/hst-gallery/{hst_gallery}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-gallery.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Gallery\\HeadingGalleryController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Gallery\\HeadingGalleryController@update',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-gallery.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/heading-and-sub-text/hst-gallery/{hst_gallery}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-gallery.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Gallery\\HeadingGalleryController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\Gallery\\HeadingGalleryController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-contact-us.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/hst-contact-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-contact-us.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\ContactUs\\HeadingContactController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\ContactUs\\HeadingContactController@index',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-contact-us.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/hst-contact-us/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-contact-us.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\ContactUs\\HeadingContactController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\ContactUs\\HeadingContactController@create',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-contact-us.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/heading-and-sub-text/hst-contact-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-contact-us.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\ContactUs\\HeadingContactController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\ContactUs\\HeadingContactController@store',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-contact-us.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/hst-contact-us/{hst_contact_u}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-contact-us.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\ContactUs\\HeadingContactController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\ContactUs\\HeadingContactController@show',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-contact-us.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heading-and-sub-text/hst-contact-us/{hst_contact_u}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-contact-us.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\ContactUs\\HeadingContactController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\ContactUs\\HeadingContactController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-contact-us.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/heading-and-sub-text/hst-contact-us/{hst_contact_u}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-contact-us.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\ContactUs\\HeadingContactController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\ContactUs\\HeadingContactController@update',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hst-contact-us.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/heading-and-sub-text/hst-contact-us/{hst_contact_u}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'hst-contact-us.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\ContactUs\\HeadingContactController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\SectionDivider\\ContactUs\\HeadingContactController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/heading-and-sub-text',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
