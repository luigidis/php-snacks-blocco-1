<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

// var_dump($posts);
?>





<?php
foreach ($posts as $posts_key => $posts_value) {
    // var_dump($posts_key); //stampa la data
    // var_dump($posts_value); //stampa i post realtivi alla data
    $post_date = $posts_key; // assegna diversa variabile alla data

    for ($i = 0; $i < count($posts_value); $i++) {
        // var_dump($posts_value[$i]); //Stampa il post relativo all'indice
        // var_dump($post_date); // stampa la data
        $value = $posts_value[$i];
?>
        <div>
            <?php
            echo "{$post_date} - {$value['title']} - {$value['author']} - {$value['text']}";
            ?>
        </div>
<?php
    }
}
?>