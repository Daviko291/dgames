<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#61-title
    |
    */

    'title' => '',//Pone un titulo en caso de que no se le pase uno desde la vista
    'title_prefix' => 'AdminDK',//pone este titulo luego pone el titulo de la vusta
    'title_postfix' => '',//hace lo mismo q prefix pero inverso

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#62-favicon
    |
    */

    'use_ico_only' => false,//si lo ponemos true mostrara el favicon del folder favicons en public
    'use_full_favicon' => false,//usamos varios favicons dependiendo la resolucion del devices

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#63-logo
    |
    */

    'logo' => '<b>Admin-Games</b>FREE',
    'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',//Ruta del logo
    'logo_img_class' => 'brand-image img-circle elevation-3',//Estilos al logo tamaño etc
    'logo_img_xl' => null,//ponemos un logo max grande cambiando el null por la ruta del logo
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'AdminDK',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#64-user-menu
    |
    */

    'usermenu_enabled' => true,//cambia el nombre del user registrado por un boton de cerrar secion
    'usermenu_header' => true,//activa la cabezera del btn LogOut
    'usermenu_header_class' => 'bg-primary',//Cambia el color del encabezado
    'usermenu_image' => true,//carga una imagen de la bd
    'usermenu_desc' => true,//poner el rol del user debajo de la imagen o lo q quieras
    'usermenu_profile_url' => true,//Agregar un boton de perfil

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Aquí cambiamos el diseño de su panel de administración.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#71-layout
    |
    */

    'layout_topnav' => null,//quita el topbar izq y lo pone arriba de cabezera
    'layout_boxed' => null,//tamaño q abarca el layout
    'layout_fixed_sidebar' => true,//si lo ponemos en true pone el sideBar izq fijo
    'layout_fixed_navbar' => true,//si lo ponemos true pone el navbar fijo
    'layout_fixed_footer' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Aquí puede cambiar el aspecto y el comportamiento de las vistas de autenticación.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#721-authentication-views-classes
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Aquí puede cambiar el aspecto y el comportamiento del panel de administración.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#722-admin-panel-classes
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',//color link activo
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-dark navbar-light',//color del navBar
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Aquí podemos modificar la barra lateral del panel de administración.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#73-sidebar
    |
    */

    'sidebar_mini' => true,//Oculta el sidebar izq cuando clickeamos en el btn
    'sidebar_collapse' => false,//si esta en true se mostrara el sidebar cerrado por defecto
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,//Animacion de despliege sidebar izq por segundos

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Aquí podemos modificar la barra lateral derecha, también conocida como barra lateral de control del panel de administración.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#74-control-sidebar-right-sidebar
    |
    */

    'right_sidebar' => true,//Activa el sidebar derecho de ajustes del admin
    'right_sidebar_icon' => 'fas fa-cogs',//cambiamos el icono de ajustes del admin
    'right_sidebar_theme' => 'dark',//cambio del color
    'right_sidebar_slide' => true,//efecto de la transicion al mostrar el sidebar derecho
    'right_sidebar_push' => true,//muestra el sidebar por encima del contenido al estar en false
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Aquí podemos modificar la configuración de la URL del panel de administración.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#65-urls
    |
    | enlaces donde redirige al hacer click en un boton
    */

    'use_route_url' => false,

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'login_url' => 'login',

    'register_url' => 'register',

    'password_reset_url' => 'password/reset',

    'password_email_url' => 'password/email',

    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#92-laravel-mix
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Aquí podemos modificar la barra lateral / navegación superior del panel de administración.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#8-menu-configuration
    |
    |se vera en el orden q tiene el Array
    */

    'menu' => [
        [
            'text' => 'Busqueda...',//titulo de la caja de busqueda
            'search' => true,//Input
            'topnav' => true,
            'url' => '#',
            'method' => 'post'
        ],

        [
            'text' => 'link 1',//nombre del btn a mostrar
            'url' => '#',      //lugar donde nos llevara al hacer click tambien nombre de la ruta y use route
            'topnav' => 'true' //lugar donde se mostrara este btn en este caso en el NavBar Arriba
            //para poner el link a la derecha usamos topnav_rigth
            //y para ponerlo dentro del user uasamos topnav_user
        ],

        [
            'text' => 'blog',
            'url'  => 'admin/blog',
            'can'  => 'manage-blog',//la direcctiva can verifica si tiene el permiso manage-blog para mostrar el btn
        ],

        [
            'text' => 'Dashboard',
            'url'  => '#',
            'icon' => 'fas fa-fw fa-home',//en vez de ver un circulo psamos un icono de fontAwesome
            'label' => 'Nuevo',// muestra al lado del btn un mensaje
            'label_color' => 'danger',//Color del mensaje q se mostrara
            'icon_color' => 'red',   //Cambia el color del icono
        ],

        [
            'text' => 'multilevel',
            'submenu' => [                    //->pone una flecha para desplasaece en en array submenu
                [
                    'text' => 'Nivel 1',
                    'submenu' => [
                        [
                            'text' => 'Nivel 2',
                            'url' => '#'
                        ]
                    ],
                    [

                    ]
                ],

                [
                    'text' => 'Nivel 1',
                    'url' => 'home',
                ]
            ],

        ],

        [
            'text'        => 'pages',
            'url'         => 'admin/pages',
            'icon'        => 'far fa-fw fa-file',
            'label'       => 4,
            'label_color' => 'success',
        ],

        ['header' => 'CONFIGURACION DE CUENTA'],//Crea una seccion con titulo para el grupo de botones
        [
            'text' => 'profile',
            'url'  => 'admin/settings',
            'icon' => 'fas fa-fw fa-user',
        ],

        [
            'text' => 'change_password',
            'url'  => 'admin/settings',
            'icon' => 'fas fa-fw fa-lock',
        ],

        [
            'text'    => 'multilevel',
            'icon'    => 'fas fa-fw fa-share',
            'submenu' => [
                [
                    'text' => 'level_one',
                    'url'  => '#',
                ],
                [
                    'text'    => 'level_one',
                    'url'     => '#',
                    'submenu' => [
                        [
                            'text' => 'level_two',
                            'url'  => '#',
                        ],
                        [
                            'text'    => 'level_two',
                            'url'     => '#',
                            'submenu' => [
                                [
                                    'text' => 'level_three',
                                    'url'  => '#',
                                ],
                                [
                                    'text' => 'level_three',
                                    'url'  => '#',
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'text' => 'level_one',
                    'url'  => '#',
                ],
            ],
        ],

        ['header' => 'labels'],
        [
            'text'       => 'important',
            'icon_color' => 'red',
            'url'        => '#',
        ],

        [
            'text'       => 'warning',
            'icon_color' => 'yellow',
            'url'        => '#',
        ],

        [
            'text'       => 'information',
            'icon_color' => 'cyan',
            'url'        => '#',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#83-custom-menu-filters
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#91-plugins
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],

        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],

        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],

        'Sweetalert2' => [
            'active' => false,//Activamos para todas las paginas
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,//si ponemos a true tenemos q poner la location abajo del js y ya no usamos el cdn
                    'location' => 'vendor/sweetalert2/sweetalert2.all.js',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,//cuando esta em false en por q usaremos en location un cdn
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#93-livewire
    */

    'livewire' => false,
];
