<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>

<?php 
foreach ($db as $db_key => $db_value) {
    // var_dump($db_key, $db_value);
    if ($db_key == 'teachers') {
?>
    <div style="border: solid 3px red;">   
        <?php
            for ($i = 0; $i < count($db_value); $i++) {
                    $name = $db_value[$i];
                    echo "{$name['name']} /";
            }
        ?>
    </div>
    <?php
        }
    ?>
    <?php 
        if ($db_key == 'pm') {
    ?>  
        <div style="border: solid 3px grey;">   
            <?php
                for ($k = 0; $k < count($db_value); $k++) {
                        $pm = $db_value[$k];
                        
                        echo "{$pm['name']} /";
                }
            ?>
        </div>
        
<?php
        }
} 
?>
            
        
                
                
               
           
    
        

                
                

