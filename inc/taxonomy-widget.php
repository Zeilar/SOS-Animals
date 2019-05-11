<?php

// Register and load the widget
function sosa_load_widget() {
    register_widget( 'Taxonomy_Widget' );
}
add_action( 'widgets_init', 'sosa_load_widget' );
 
// Creating the widget 
class Taxonomy_Widget extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'Taxonomy_Widget', 
 
// Widget name will appear in UI
__('Taxonomy list', 'sosa'), 
 
// Widget description
array( 'description' => __( 'Lists dog taxonomies', 'sosa' ), ) 
);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
 
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];
 
// This is where you run the code and display the output

$sexes = get_terms([
    'taxonomy' => 'sex',
    'hide_empty' => false,
]);

$sizes = get_terms([
    'taxonomy' => 'size',
    'hide_empty' => false,
]);

$countries = get_terms([
    'taxonomy' => 'country',
    'hide_empty' => false,
]);

?>

<ul>

    <h2><?php _e('Categories', 'sosa'); ?></h2>

    <h3 class="mt-3"><?php _e('Sexes', 'sosa'); ?></h3>

    <li class="sexes">

        <?php 
        
            foreach ($sexes as $sex) {

                _e('<a class="widget-taxonomy-link" href="/sex/' . $sex->name . '">' . $sex->name . '</a><br>', 'sosa');
            }
        
        ?>

    </li> <!-- sexes -->

    <h3 class="mt-3"><?php _e('Sizes', 'sosa'); ?></h3>

    <li class="sizes">
        
        <?php 
        
            foreach ($sizes as $size) {

                _e('<a class="widget-taxonomy-link" href="/size/' . $size->name . '">' . $size->name . '</a><br>', 'sosa');
            }
        
        ?>

    </li> <!-- sizes -->

    <h3 class="mt-3"><?php _e('Countries', 'sosa'); ?></h3>

    <li class="countries">
        
        <?php 
        
            foreach ($countries as $country) {

                _e('<a class="widget-taxonomy-link" href="/country/' . $country->name . '">' . $country->name . '</a><br>', 'sosa');
            }
        
        ?>

    </li> <!-- countries -->

</ul>

<?php

echo $args['after_widget'];
}
         
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'wpb_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
     
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class wpb_widget ends here