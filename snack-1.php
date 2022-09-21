<?php 
$partite = [
    [
        'home' => 'Heat',
        'guest' => 'Bulls',
        'point_g' => 50,
        'point_h' => 70
    ],
    [
        'home' => 'Cavaliers',
        'guest' => 'Sixers',
        'point_g' => 80,
        'point_h' => 100
    ],

    [
        'home' => 'Raptors',
        'guest' => 'Celtics',
        'point_g' => 40,
        'point_h' => 120
    ],
    
    [
        'home' => 'Dragons',
        'guest' => 'Minions',
        'point_g' => 80,
        'point_h' => 100
    ]
];
?>

<ul>
    <?php for ($i = 0; $i < count($partite); $i++) {
        $match = $partite[$i];
        ?>

        <li>
            <?php 
                echo "{$match['home']} - {$match['guest']}";
            ?>
            |
            <strong>
                <?php 
                echo "{$match['point_g']} - {$match['point_h']}";
                ?>
            </strong>
        </li>

        <?php
    } ?>
</ul>