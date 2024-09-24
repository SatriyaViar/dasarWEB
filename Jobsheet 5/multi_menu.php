<?php
    $menu = [
        [
            "Nama" => "Beranda"
        ],
        [
            "Nama" => "Berita",
            "SubMenu" => [
                [
                    "Nama" => "Wisata",
                    "subMenu" => [
                        [
                            "Nama" => "Pantai"
                        ],
                        [
                            "Nama" => "Gunung"
                        ]
                    ]
                ],
                [
                    "Nama" => "Kuliner"
                ],
                [
                    "Nama" => "Hiburan"
                ]
            ]
        ],
        [
            "Nama" => "Tentang"
        ],
        [
            "Nama" => "Kontak"
        ]
    ];

    function tampilkanMenuBertingkat (array $menu){
        echo "<ul>";
        foreach ($menu as $key => $item) {
            echo "<li>{$item['Nama']}</li>";
        }
        echo "</ul>";
    }

    tampilkanMenuBertingkat($menu);
?>