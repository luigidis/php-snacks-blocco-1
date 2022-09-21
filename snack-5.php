<?php
 $p =   'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita earum corrupti quae amet. Eius quaerat quae obcaecati blanditiis nisi, recusandae labore culpa placeat aspernatur. Officiis enim iste blanditiis nemo provident!
        Voluptates eos obcaecati reprehenderit laudantium itaque nostrum. Dicta, minima. Velit a nam soluta sint error, voluptatibus repellendus explicabo excepturi vel, enim ut eligendi neque cum iusto, est mollitia laudantium pariatur!
        Soluta repellat nesciunt aliquid laudantium explicabo pariatur odio fugiat, voluptatibus, cumque possimus facilis, dolores quam dicta voluptatum? Modi id, est voluptatum omnis officiis voluptate facere accusamus soluta asperiores. Rem, dolorem!
        Illum ad, voluptatem maiores totam ea numquam minima aliquam ullam quod? Sed, corporis neque delectus necessitatibus itaque aspernatur reiciendis earum sint molestiae accusamus facere esse dolorem expedita mollitia dicta quod.
        Quas fugiat laboriosam quam totam soluta, accusamus ratione, sequi autem harum expedita fuga incidunt consequuntur eaque architecto commodi recusandae repudiandae reprehenderit porro, quae impedit deleniti officiis temporibus amet? Sint, aliquid?
        Dicta a nam alias ipsa quisquam in dolore laborum pariatur voluptatum, rem, ipsam consequatur animi maxime quae magni dolor. Reprehenderit doloremque culpa, soluta saepe modi laboriosam doloribus sequi exercitationem illo.
        Deserunt numquam eos omnis repudiandae ut obcaecati quo ipsum eaque ex, unde, consequuntur dolorem delectus explicabo, animi harum voluptatum! Et, rem assumenda! Porro numquam error, non praesentium magnam quaerat nostrum?
        In quo similique, porro voluptatum magnam sed aliquid. Culpa voluptas voluptatibus numquam reiciendis sapiente. Minima, a! In provident, repudiandae, ut, hic culpa nobis maxime perferendis tempora repellat assumenda quos dolor.
        Magni reiciendis labore deserunt soluta! Doloribus esse doloremque voluptatem atque deleniti, recusandae animi perferendis porro quod odit, soluta sit ipsum nobis facere distinctio rem qui inventore. Maiores dignissimos in ex.
        Modi aperiam voluptates quaerat et repudiandae sunt adipisci harum magnam doloremque facilis possimus praesentium ea asperiores unde deleniti optio, aspernatur fugiat molestiae voluptatibus magni eum sapiente? Neque earum dolor quisquam?';

 $array_p = explode(".", $p);
//  var_dump($array_p);

for ($i = 0; $i < count($array_p); $i++) {
    // var_dump($array_p[$i]);
?>
    <div>
        <?php
            echo "{$array_p[$i]}.";
        ?>
    </div>
<?php
};
?>

