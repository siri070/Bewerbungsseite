
<section class="intro" >
    <div class="introBox">
        <div class="content">

            <p>Sie müssen sich einloggen um in diesen Bereich zu kommen. <br> Der Benutzername und das Passwort stehen in den Bewerbugnsunterlagen.</p>

            <?php
            $form = new Form($GLOBALS ['appurl']."/login/login", null);
            echo $form->email()->label('Benutzer')->name('Benutzer');
            echo $form->password()->label('Passwort')->name('passwort');
            echo $form->submit()->label('Login')->name('send');
            echo '</div>';
            echo '</form>';
            ?>
        </div>
    </div>
</section>
