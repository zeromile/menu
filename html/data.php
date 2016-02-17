<?php
$menu=[
    'DINNERS'=>[
        'type'=>'singlecategory',
        'name'=>'Delicious Dinners',
        'image'=>'link1',
        'items'=>[
            'item1'=>[
                'name'=>'Steak',
                'image'=>'imagelink1',
            ],
            'item2'=>[
                'name'=>'Chicken',
                'image'=>'imagelink2',
            ],
            'item3'=>[
                'name'=>'Shrimp',
                'image'=>'imagelink3',
            ],
        ],
    ],
    'DESERTS'=>[
        'type'=>'singlecategory',
        'name'=>'Delectible Deserts',
        'image'=>'link2',
        'items'=>[
            'item1'=>[
                'name'=>'Pie',
                'image'=>'imagelink1',
            ],
            'item2'=>[
                'name'=>'Cupcake',
                'image'=>'imagelink2',
            ],
            'item3'=>[
                'name'=>'Fruitcup',
                'image'=>'imagelink3',
            ],
        ],
    ],
    'APPETIZERS'=>[
        'type'=>'singlecategory',
        'name'=>'A\'ight Appetizers',
        'image'=>'link2',
        'items'=>[
            'item1'=>[
                'name'=>'Chicken Fingers',
                'image'=>'imagelink1',
            ],
            'item2'=>[
                'name'=>'Mozarella Sticks',
                'image'=>'imagelink2',
            ],
            'item3'=>[
                'name'=>'Onion Blossom',
                'image'=>'imagelink3',
            ],
        ],
    ],
    'DRINKS'=>[
        'type'=>'subcategory',
        'name'=>'Get yo Drink on',
        'image'=>'link2',
        'catcode'=>'DRINKS',
        'subcategory'=>[
            'FRUITYDRINKS'=>[
                'name'=>'Fruity Drinks',
                'image'=>'Imagelink',
                'items'=>[
                    'item1'=>[
                        'name'=>'Pina Colada',
                        'image'=>'imagelink1',
                    ],
                    'item2'=>[
                        'name'=>'Fuzzy Navel',
                        'image'=>'imagelink2',
                    ],
                    'item3'=>[
                        'name'=>'Long Island Iced Tea',
                        'image'=>'imagelink3',
                    ],
                ],
            ],
            'BEERS'=>[
                'name'=>'Da Beers',
                'image'=>'Imagelink',
                'items'=>[
                    'item1'=>[
                        'name'=>'Coors',
                        'image'=>'imagelink1',
                    ],
                    'item2'=>[
                        'name'=>'Heineken',
                        'image'=>'imagelink2',
                    ],
                    'item3'=>[
                        'name'=>'Bud Light',
                        'image'=>'imagelink3',
                    ],
                ],
            ],
        ],
    ],
];