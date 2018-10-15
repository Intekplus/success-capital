<div class="newsletter">
    <form action='/newsletter_page.php'>
        <label for="subscribe"><?= __tr('Abonnez-vous à notre newsletter') ?></label>
        <div class="newsletter-wrapper"> 
            <input type="text" id="email" class="email" name="e-mail" placeholder="Adresse email">
            <a class="button send-btn bg-blue-bl-small" href="#"><?= __tr('Envoyer') ?></a>
        </div>
    </form>
</div>