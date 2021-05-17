<form method="POST" action="<?= $form->encode($_SERVER['PHP_SELF']) ?>">
<table>
    <?php if($errors){ ?>
        <tr>
            <td>You need to correct the folleing errors:</td>
            <td><ul>
                <?php foreach($errors as $error) {?>
                    <li><?= $form->encode($error) ?></li> 
                <?php } ?>                          
            </ul></td>        
        <?php } ?>

        <tr>
            <td>Dish Name:</td>
            <td><?= $form->input('text',['name' => 'name'])?></td>
        </tr>






</table>
</form>