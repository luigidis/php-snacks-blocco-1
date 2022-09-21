<?php
$class = [
    [
        'name' => 'Pippo',
        'lastname' => 'Inzaghi',
        'vote' => [
            7,
            7,
            7,
            7
        ]
    ],
    [
        'name' => 'Chef',
        'lastname' => 'Toni',
        'vote' => [
            7,
            7,
            8,
            8
        ]
    ],
    [
        'name' => 'Carlotta',
        'lastname' => 'Noce',
        'vote' => [
            6,
            5,
            8,
            8,
            7
        ]
    ],
    [
        'name' => 'Roberto',
        'lastname' => 'Chisari',
        'vote' => [
            10,
            9,
            10,
            8,
            10,
            10
        ]
    ],
];

function avg( $values) {
    $sum = array_sum($values);
    $count = count($values);
    return ($count !== 0)? $sum / $count: NAN;
}

?>


<?php 

foreach ($class as $class_key => $class_value) {
    // var_dump($class_key);
    // var_dump($class_value);
    // var_dump(avg($class_value['vote']));
    $avg = avg($class_value['vote']);
    ?>
        <div>
            Nome : 
            <?php 
                echo "{$class_value['name']} /"
            ?>
            Cognome : 
            <?php 
                echo "{$class_value['lastname']} /"
            ?>
            Media Voti : 
            <?php 
                echo "{$avg}"
            ?>
        </div>
<?php
}
?>
