/**
 * Gutenburg Default Colors
 */
add_theme_support( 'editor-color-palette', array(
	array(
		'name'  => __( 'Ecru', 'custom_colors' ),
		'slug'  => 'ecru',
		'color' => '#BCAF83',
	),
	array(
		'name'	=> __( 'Olive Green', 'custom_colors' ),
		'slug'	=> 'olivegreen',
		'color'	=> '#B4AF51',
	),
	array(
		'name'  => __( 'Olive', 'custom_colors' ),
		'slug'  => 'olive',
		'color'	=> '#697200',
	),
	array(
		'name'  => __( 'Antique Bronze', 'custom_colors' ),
		'slug'  => 'antiquebronze',
		'color'	=> '#5A580E',
	),
	array(
		'name'  => __( 'Bistre', 'custom_colors' ),
		'slug'  => 'bistre',
		'color'	=> '#2A1B06',
	),
	array(
		'name'  => __( 'Black', 'custom_colors' ),
		'slug'  => 'black',
		'color'	=> '#000000',
	),
	array(
		'name'  => __( 'White', 'custom_colors' ),
		'slug'  => 'white',
		'color' => '#ffffff',
	),
) );
/**
 * Disable Default Colors
 */
add_theme_support( 'disable-custom-colors' );
