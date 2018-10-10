<form class="contact-forms-wrapper">
    <div class="column">
        <h2><?php the_sub_field('title') ?></h2>
        <p><?php the_sub_field('content') ?></p>
        <div class="icon-group">
        <span class="field"><i class="fas fa-map-marker-alt"></i><a target="_blank" href="http://maps.google.com/?q=<?php the_field('address', 'option'); ?>"><?php the_field('address', 'option'); ?></a></span>
		<span class="field"><i class="fas fa-phone"></i><a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></span>
        </div>
    </div>
    <div class="column">
        <div class="input-group">
            <?php $field_name=__tr("Nom*"); include( locate_template("./views/components/input.php")); ?>
            <?php $field_name=__tr("Prénom*"); include( locate_template("./views/components/input.php")); ?>
        </div>
        <div class="input-group">
            <?php $field_name=__tr("Téléphone*"); include( locate_template("./views/components/input.php")); ?>
            <?php $field_name=__tr("Email*"); include( locate_template("./views/components/input.php")); ?>
        </div>
        <div class="text-area-wrapper input">
            <label><?php _tr('Message*') ?></label>
            <Textarea class="textArea"></Textarea>
        </div>
        <div class="additionnal-information">
            <p><?php _tr('Vous pouvez consulter notre Charte de protection des données en cliquant sur') ?><a download href="<?php the_sub_field('file') ?>"> <?php _tr('ce lien') ?></a></p>
            
            <span class="obligatoire"><?php _tr('champs obligatoire *') ?> </span>
        </div>
        <div class="submit-button">
            <a class="button bg-blue-left"><?php _tr('envoyer') ?> </a>
        </div>
    </div>

</form>