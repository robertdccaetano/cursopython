<?php $v->layout("_theme"); ?>
<div class="users">
    <?php if($users):
     foreach ( $users as $user):
        ?>
    <article class="users_user">
        <h3><?= $user->first_name, " ", $user->last_name;?></h3>
    </article>
    <?php
     endforeach;
        
    else:
        ?>
    <h4>Não existem usuários cadastrados!</h4>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    
    <?php
    endif ?>
</div>    