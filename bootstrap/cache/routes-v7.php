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
            '_route' => 'generated::0ZIVHkSON81mwfyF',
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
            '_route' => 'generated::VNbuZwc4rbv2Wnou',
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
            '_route' => 'generated::DE3PgYKxUJYzKxzg',
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
      '/company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front-end-company',
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
      '/admin/footer-tag' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'footer-tag.index',
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
            '_route' => 'footer-tag.store',
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
      '/admin/footer-tag/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'footer-tag.create',
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
      0 => '{^(?|/company/(?|art\\-venture/service/details/([^/]++)(*:56)|tns/service/details/([^/]++)(*:91)|bd\\-digital/service/details/([^/]++)(*:134)|connect\\-to\\-fly/service/details/([^/]++)(*:183))|/service/details/([^/]++)(*:217)|/admin/(?|about\\-us/about\\-(?|us/([^/]++)(?|(*:269)|/edit(*:282)|(*:290))|team/([^/]++)(?|(*:315)|/edit(*:328)|(*:336)))|c(?|o(?|mpany/(?|a(?|dd\\-company/([^/]++)(?|(*:390)|/edit(*:403)|(*:411))|rt\\-venture/(?|art\\-venture\\-(?|about/([^/]++)(?|(*:469)|/edit(*:482)|(*:490))|team/([^/]++)(?|(*:515)|/edit(*:528)|(*:536)))|service/art\\-venture\\-(?|category/([^/]++)(?|(*:591)|/edit(*:604)|(*:612))|item/([^/]++)(?|(*:637)|/edit(*:650)|(*:658)))))|tns/(?|tns\\-(?|about/([^/]++)(?|(*:702)|/edit(*:715)|(*:723))|team/([^/]++)(?|(*:748)|/edit(*:761)|(*:769)))|service/tns\\-(?|category/([^/]++)(?|(*:815)|/edit(*:828)|(*:836))|item/([^/]++)(?|(*:861)|/edit(*:874)|(*:882))))|bd\\-digital/(?|bd\\-digital\\-(?|about/([^/]++)(?|(*:941)|/edit(*:954)|(*:962))|team/([^/]++)(?|(*:987)|/edit(*:1000)|(*:1009)))|service/bd\\-digital\\-service\\-(?|category/([^/]++)(?|(*:1073)|/edit(*:1087)|(*:1096))|item/([^/]++)(?|(*:1122)|/edit(*:1136)|(*:1145))))|connect\\-to\\-fly/(?|ctf\\-(?|about/([^/]++)(?|(*:1202)|/edit(*:1216)|(*:1225))|team/([^/]++)(?|(*:1251)|/edit(*:1265)|(*:1274)))|service/ctf\\-service\\-(?|category/([^/]++)(?|(*:1330)|/edit(*:1344)|(*:1353))|item/([^/]++)(?|(*:1379)|/edit(*:1393)|(*:1402)))))|ntact/(?|address/([^/]++)(?|(*:1443)|/edit(*:1457)|(*:1466))|map/([^/]++)(?|(*:1491)|/edit(*:1505)|(*:1514))))|lient/([^/]++)(?|(*:1543)|/edit(*:1557)|(*:1566)))|gallery/gallery\\-(?|category/([^/]++)(?|(*:1617)|/edit(*:1631)|(*:1640))|item/([^/]++)(?|(*:1666)|/edit(*:1680)|(*:1689)))|partial\\-header/([^/]++)(?|(*:1727)|/edit(*:1741)|(*:1750))|quick\\-link/([^/]++)(?|(*:1783)|/edit(*:1797)|(*:1806))|footer\\-(?|tag/([^/]++)(?|(*:1842)|/edit(*:1856)|(*:1865))|social/([^/]++)(?|(*:1893)|/edit(*:1907)|(*:1916)))|slider/([^/]++)(?|(*:1945)|/edit(*:1959)|(*:1968))|heading\\-and\\-sub\\-text/(?|hst\\-(?|about\\-us/([^/]++)(?|(*:2034)|/edit(*:2048)|(*:2057))|service/([^/]++)(?|(*:2086)|/edit(*:2100)|(*:2109))|gallery/([^/]++)(?|(*:2138)|/edit(*:2152)|(*:2161))|contact\\-us/([^/]++)(?|(*:2194)|/edit(*:2208)|(*:2217)))|companies/hst\\-(?|co(?|mpanies/([^/]++)(?|(*:2270)|/edit(*:2284)|(*:2293))|nnect\\-to\\-fly/([^/]++)(?|(*:2329)|/edit(*:2343)|(*:2352)))|art\\-venture/([^/]++)(?|(*:2387)|/edit(*:2401)|(*:2410))|bd\\-digital/([^/]++)(?|(*:2443)|/edit(*:2457)|(*:2466))|tns/([^/]++)(?|(*:2491)|/edit(*:2505)|(*:2514))))))/?$}sDu',
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
      315 => 
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
      328 => 
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
      336 => 
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
      390 => 
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
      403 => 
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
      411 => 
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
      469 => 
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
      482 => 
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
      490 => 
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
      515 => 
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
      528 => 
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
      536 => 
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
      591 => 
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
      604 => 
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
      612 => 
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
      637 => 
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
      650 => 
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
      658 => 
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
      702 => 
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
      715 => 
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
      723 => 
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
      748 => 
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
      761 => 
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
      769 => 
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
      815 => 
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
      828 => 
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
      836 => 
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
      861 => 
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
      874 => 
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
      882 => 
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
      941 => 
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
      954 => 
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
      962 => 
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
      987 => 
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
      1000 => 
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
      1009 => 
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
      1073 => 
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
      1087 => 
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
      1096 => 
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
      1122 => 
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
      1136 => 
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
      1145 => 
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
      1202 => 
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
      1216 => 
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
      1225 => 
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
      1251 => 
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
      1265 => 
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
      1274 => 
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
      1330 => 
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
      1344 => 
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
      1353 => 
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
      1379 => 
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
      1393 => 
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
      1402 => 
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
      1443 => 
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
      1457 => 
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
      1466 => 
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
      1491 => 
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
      1505 => 
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
      1514 => 
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
      1543 => 
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
      1557 => 
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
      1566 => 
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
      1617 => 
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
      1631 => 
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
      1640 => 
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
      1666 => 
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
      1680 => 
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
      1689 => 
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
      1727 => 
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
      1741 => 
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
      1750 => 
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
      1783 => 
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
      1797 => 
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
      1806 => 
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
      1842 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'footer-tag.show',
          ),
          1 => 
          array (
            0 => 'footer_tag',
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
      1856 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'footer-tag.edit',
          ),
          1 => 
          array (
            0 => 'footer_tag',
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
      1865 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'footer-tag.update',
          ),
          1 => 
          array (
            0 => 'footer_tag',
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
            '_route' => 'footer-tag.destroy',
          ),
          1 => 
          array (
            0 => 'footer_tag',
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
      1893 => 
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
      1907 => 
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
      1916 => 
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
      1945 => 
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
      1959 => 
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
      1968 => 
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
      2034 => 
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
      2048 => 
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
      2057 => 
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
      2086 => 
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
      2100 => 
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
      2109 => 
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
      2138 => 
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
      2152 => 
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
      2161 => 
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
      2194 => 
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
      2208 => 
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
      2217 => 
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
      2270 => 
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
      2284 => 
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
      2293 => 
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
      2329 => 
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
      2343 => 
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
      2352 => 
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
      2387 => 
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
      2401 => 
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
      2410 => 
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
      2443 => 
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
      2457 => 
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
      2466 => 
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
      2491 => 
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
      2505 => 
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
      2514 => 
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
    'generated::0ZIVHkSON81mwfyF' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000002dc0000000000000000";}";s:4:"hash";s:44:"HJOkxL9x/a62tg3Iw8kwypQfXuqWAhKy+cFT/gsizqw=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::0ZIVHkSON81mwfyF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::VNbuZwc4rbv2Wnou' => 
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
        'as' => 'generated::VNbuZwc4rbv2Wnou',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::DE3PgYKxUJYzKxzg' => 
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
        'as' => 'generated::DE3PgYKxUJYzKxzg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'front-end-company' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEnd\\FrontEndController@company',
        'controller' => 'App\\Http\\Controllers\\FrontEnd\\FrontEndController@company',
        'namespace' => NULL,
        'prefix' => '/company',
        'where' => 
        array (
        ),
        'as' => 'front-end-company',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'footer-tag.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/footer-tag',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'footer-tag.index',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\FooterTagController@index',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\FooterTagController@index',
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
    'footer-tag.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/footer-tag/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'footer-tag.create',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\FooterTagController@create',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\FooterTagController@create',
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
    'footer-tag.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/footer-tag',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'footer-tag.store',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\FooterTagController@store',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\FooterTagController@store',
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
    'footer-tag.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/footer-tag/{footer_tag}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'footer-tag.show',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\FooterTagController@show',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\FooterTagController@show',
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
    'footer-tag.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/footer-tag/{footer_tag}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'footer-tag.edit',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\FooterTagController@edit',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\FooterTagController@edit',
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
    'footer-tag.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/footer-tag/{footer_tag}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'footer-tag.update',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\FooterTagController@update',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\FooterTagController@update',
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
    'footer-tag.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/footer-tag/{footer_tag}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'footer-tag.destroy',
        'uses' => 'App\\Http\\Controllers\\BackEnd\\Home\\FooterTagController@destroy',
        'controller' => 'App\\Http\\Controllers\\BackEnd\\Home\\FooterTagController@destroy',
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
