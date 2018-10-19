<?php $properties_taxonomies = array(
    array(
        'name' => get_taxonomy("location")->name,
        'label' => __tr("Région"),
        'value' => isset($_GET["location"]) ? $_GET["location"] : "",
    ),
    array(
        'name' => get_taxonomy("budget")->name,
        'label' => __tr("Budget"),
        'value' => isset($_GET["budget"]) ? $_GET["budget"] : "",
    ),
    array(
        'name' => get_taxonomy("room")->name,
        'label' => __tr("Nombre de pièces"),
        'value' => isset($_GET["room"]) ? $_GET["room"] : "",
    ),
);
?>
<form class="properties_filters">
    <?php foreach ($properties_taxonomies as $taxonomy) {
        $raw_terms = get_terms([
            'taxonomy' => $taxonomy["name"],
            'hide_empty' => false,
        ]);

        $terms_names = [];

        foreach ($raw_terms as $raw_term) {
            $terms_names[] = $raw_term->name;
        }
        include(locate_template("./views/containers/transactions/dropdown.php"));
    } ?>

    <div class="search-button-wrapper">
        <a href="#" class="button bg-blue-left">
            <?= __tr('Rechercher') ?>
        </a>
    </div>
</form>