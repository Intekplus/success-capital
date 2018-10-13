<?php
function filtered_properties( $budget, $location, $room ) {
    
    $args = array(
                'post_type'   => 'property',
                'posts_per_page' => -1,
                'meta_query' => array(),
                'tax_query' => array(
                    'relation' => 'AND',
                ),
            );    
            
            if ( isset($budget) ) {
                $args["tax_query"][] = 
                    array(
                        'taxonomy' => 'budget',
                        'field'    => 'name',
                        'terms'    => $budget,
                    );
            }

            if ( isset($location) ) {
                $args["tax_query"][] = 
                    array(
                        'taxonomy' => 'location',
                        'field'    => 'name',
                        'terms'    => $location,
                    );
            }

            if ( isset($room) ) {
                $args["tax_query"][] = 
                    array(
                        'taxonomy' => 'room',
                        'field'    => 'name',
                        'terms'    => $room,
                    );
            }
            
            $property = new WP_Query( $args );
            if( $property->have_posts() ) :
    
            while( $property->have_posts() ) :
                $property->the_post();
                $data = [
                    "title" => get_field('title'),
                    "images" => get_field('images'),
                    "price" => number_format(get_field('price'), 0, ',', ' '),
                    "area" => get_field('area'),
                    "rooms" => get_field('rooms'),
                    "description" => get_field('description'),
                    "budget" => get_the_terms( get_the_ID(), 'budget' )[0]->name,
                    "room" => get_the_terms( get_the_ID(), 'room' )[0]->name,
                    "location" => get_the_terms( get_the_ID(), 'location' )[0]->name,
                    "link" => get_permalink(),
                ];
              include( locate_template("./views/containers/transactions/item.php"));
            endwhile;
            wp_reset_postdata();
    
        else :
        ?>
            <div>
                <?php _tr('Desolé aucun résultat d’actualités trouvé selon vos critères de recherche.') ?>
            </div>
        <?php
        endif;
}
