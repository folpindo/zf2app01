<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Album\Controller\Album' => 'Album\Controller\AlbumController',
        ),
    ),
// The following section is new and should be added to your file
    'router' => array(
        'routes' => array(
            'album' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/album[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Album\Controller\Album',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'album' => __DIR__ . '/../view',
        ),
    ),

	'console'=> array(
		'router'=> array(
			'routes' => array(
				'user-reset-password' => array(
					'options' => array(
						'route' => 'user resetpassword [--verbose|-v] <userEmail>',
						'defaults' => array(
							'controller' => 'Album\Controller\Album',
							'action' => 'password'
						) 
					)
				)			
			)
		)
	),
);
