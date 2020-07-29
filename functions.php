<?php 

require_once get_template_directory() . "/class-wp-bootstrap-navwalker.php";

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

function theme_pedro_rf(){
	
	wp_enqueue_style('style-css', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css');	
	wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('font-google', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,800;1,600&display=swap');

	wp_enqueue_script('theme-js', get_template_directory_uri() . '/assets/js/myconfig.js', array("jquery"), false, true);
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array("jquery"), false, true);
	wp_enqueue_script('jsdelivr', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js");
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array("jquery"), false, true );
}

function theme_pedro_setup(){

	// SUPORTE PARA IMAGENS 
	add_theme_support('post-thumbnails');

	//SUPORTE PARA TITLE DO TEMA
	add_theme_support('title-tag');

	//LOGO CUSTOMIZADA
	add_theme_support('custom-logo');

	//AJUSTANDO OS TIPOS DE POSTS
	add_theme_support('post-formats', array('video', 'audio', 'gallery'));

	//SUPORTE PARA MENUS
	add_theme_support('menus');

	register_nav_menu('primary', ("Menu Primario"));
	register_nav_menu('topo', 'Menu Topo');

	// REMOVENDO A BARRA DO ADMIN
	show_admin_bar(false);


}

function pedro_theme_register($wp_customize){

	$wp_customize->get_section('title_tagline')->title = 'Nome do Site e Logo';

	$wp_customize->get_section('custom_css')->description = 'Só coloque CSS adicional se você souber fazer css, ou souber de front-end';

	//CRIANDO UM PAINEL
	$wp_customize->add_panel('opcoes', array(
		'title' => 'Opções do Tema',
		'priority' => 10
	));

	pedro_theme_customizer_title($wp_customize);
	pedro_theme_form($wp_customize);

}

function pedro_theme_customizer_title($wp_customize){
	
	// SETTING
	$wp_customize->add_setting('rf_titulo_txt', array('default'=> ''));
    
    //PANEL
	$wp_customize->add_panel('rf_titulo', array(
		'title' => 'Titulo Topo',
		'priority' => 10
	));

	//SECTION
	$wp_customize->add_section('rf_titulo-01', array(
		'title' => 'Titulo Topo',
		'priority' => 10,
		'panel' => 'rf_titulo'
    ));
    
    //CONTROLLERS
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'rf_titulo_txt',
			array(
				'label' => 'Texto:',
				'section' => 'rf_titulo-01',
				'settins' => 'rf_titulo_txt'
			)
		)
	);

}

function pedro_theme_form($wp_customize){

	// SETTING
	$wp_customize->add_setting('rf_campo_text', array('default'=> ''));

	//PANEL
	$wp_customize->add_panel('rf_formulario', array(
		'title' => 'Campo Texto About',
		'priority' =>11
	));

	//SECTION
	$wp_customize->add_section('rf_formulario', array(
		'title' => 'Campo Formulario About',
		'priority' => 11,
		'panel' => 'rf_titulo'
	));
	
	//CONTROLLERS
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'rf_campo_text',
			array(
				'label' => __( 'Custom Text Area' ),
				'section' => 'rf_formulario',
				'settins' => 'rf_campo_text',
				'type' => 'textarea'
			)
		)
	);

}


// function add_metabox(){

// 	$photo_description = get_post_meta( $post->ID, 'my_photo_desc', true );
 
// 	/* Add WP Editor as replacement of textarea */
// 	echo '<p class="layers-form-item">';
// 	echo '<label>'.__('Photo Description', 'layerswp').'</label> ';
// 	wp_editor( $photo_description, 'my_photo_desc', array(
// 		'wpautop'       => true,
// 		'media_buttons' => false,
// 		'textarea_name' => 'my_photo_desc',
// 		'textarea_rows' => 10,
// 		'teeny'         => true
// 	) );
// 	echo '</p>';

// }




add_action('wp_enqueue_scripts', 'theme_pedro_rf');
add_action('after_setup_theme','theme_pedro_setup');
add_action('customize_register', 'pedro_theme_register');

