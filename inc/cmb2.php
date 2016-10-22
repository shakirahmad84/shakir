<?php
/**
 * Get the bootstrap!
 */
if ( file_exists(  __DIR__ . '/cmb2/init.php' ) ) {
  require_once  __DIR__ . '/cmb2/init.php';
} elseif ( file_exists(  __DIR__ . '/CMB2/init.php' ) ) {
  require_once  __DIR__ . '/CMB2/init.php';
}



function shakir_metaboxes() {

    $prefix = '_shakir_';

    $cmb = new_cmb2_box( array(
        'id'            => 'portfolio_metabox',
        'title'         => __( 'Portfolio Metabox', 'shakir' ),
        'object_types'  => array( 'portfolio' ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
    ) );

    $cmb->add_field( array(
        'name'       => __( 'Portfolio Description', 'shakir' ),
        'desc'       => __( 'write your portfolio description here', 'shakir' ),
        'id'         => $prefix . 'portfolio_des',
        'type'       => 'text',
    ) );

    $cmb->add_field( array(
        'name' => __( 'Portfolio URL', 'shakir' ),
        'desc' => __( 'write your portfolio site url here', 'shakir' ),
        'id'   => $prefix . 'portfolio_url',
        'type' => 'text_url',
    ) );

    $cmb->add_field( array(
        'name' => __( 'Show Details Text', 'shakir' ),
        'desc' => __( 'write here your show details text', 'shakir' ),
        'id'   => $prefix . 'portfolio_clk',
        'type' => 'text',
    ) );

}
add_action( 'cmb2_admin_init', 'shakir_metaboxes' );