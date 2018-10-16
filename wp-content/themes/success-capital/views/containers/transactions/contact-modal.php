<?php ob_start(); ?>
<div class="title-wrapper">
  <h2><?= __tr('Contacter votre agent') ?></h2>
</div>
<form class="contact-forms-wrapper">
    <div class="column">
        <div class="input-group">
            <?php $field_name = __tr("Nom*");
            include(locate_template("./views/components/input.php")); ?>
            <?php $field_name = __tr("Prénom*");
            include(locate_template("./views/components/input.php")); ?>
        </div>
        <div class="input-group">
            <?php $field_name = __tr("Téléphone*");
            include(locate_template("./views/components/input.php")); ?>
            <?php $field_name = __tr("Email*");
            include(locate_template("./views/components/input.php")); ?>
        </div>
        <div class="text-area-wrapper input">
            <label><?php _tr('Message*') ?></label>
            <Textarea class="textArea"></Textarea>
        </div>
        <div class="additionnal-information">
            <p><?php _tr('Vous pouvez consulter notre Charte de protection des données en cliquant sur') ?><a href="<?php echo get_home_url() . '/donnees-personnelles' ?>"> <?php _tr('ce lien') ?></a></p>
            
            <span class="obligatoire"><?php _tr('champs obligatoire *') ?> </span>
        </div>
        <div class="submit-button">
            <a class="button bg-blue-left"><?php _tr('envoyer') ?> </a>
        </div>
    </div>
</form>

<?php $content = ob_get_clean(); ?>

<?php include(locate_template("./views/components/modal.php")); ?>