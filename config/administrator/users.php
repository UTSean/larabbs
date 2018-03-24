<?php
use App\Models\User;

return [
    'title' => 'Users',

    'single' => 'Users',

    'model' => User::class,

    'permision' => function()
    {
        return Auth::user()->can('manage_users');
    },

    'columns' => [
        'id',

        'avatar' => [
            'title' => 'Profeil picture',

            'output' => function ($avatar, $model) {
                return empty($avatar) ? 'N/A' : '<img src="'.$avatar.'" width="40">';
            },

            'sortable' => false,
        ],

        'name' => [
            'title' => 'Username',
            'sortable' => false,
            'output' => function ($name, $model) {
                return '<a href="/users/'.$model->id.'" target_blank>'.$name.'</a>';
            },
        ],

        'email' => [
            'title' => 'E-mail',
        ],

        'operation' => [
            'title' => 'Management',
            'sortable' => false,
        ],
    ],

    'edit_fields' => [
        'name' => [
            'title' => 'Username',
        ],
        'email' => [
            'title' => 'E-mail',
        ],
        'password' => [
            'title' => 'Password',
            'type' => 'password',
        ],
        'avatar' => [
            'title' => 'Profile Picture',
            'type' => 'image',
            'location' => public_path() . '/uploads/images/avatars',
        ],

        'roles' => [
            'title' => 'User role',
            'type'  => 'relationship',
            'name_field' => 'name',
        ],
    ],

    'filters' => [
        'id' => [
            'title' => 'User ID',
        ],
        'name' => [
            'title' => 'Username',
        ],
        'email' => [
            'title' => 'E-mail',
        ],
    ],
];
 ?>
