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
    foreach($posts as $posts_key => $posts_value) {
            var_dump($posts_key);
            var_dump($posts_value);
            $post_date = $posts_key;
            
           for ($i = 0; $i < count($posts_value); $i++) {
            $posts_value[$i] = $value;
            var_dump($value);
            var_dump($post_date);
            
?>     
        <!-- <div> -->
            <?php 
                // echo "{$posts_key} - {$value['title']} - {$value['author']} - {$value['text']}";
            ?>
        <!-- </div>  -->
    
        <?php
        }   
    }
?>


