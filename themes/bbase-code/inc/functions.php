<?php 
function get_page_id_by_template( $template ) {
    $args = [
        'post_type'  => 'page',
        'numberposts'=> 1,
        'nopaging'   => true,
        'meta_key'   => '_wp_page_template',
        'meta_value' => 'page-templates/template-'.$template.'.php'
    ];
    $pages = get_posts( $args );
    return $pages[0];
}

function get_featured_img( $post_id ){
    global $post;
    $url = get_template_directory_uri();
    if( has_post_thumbnail( $post_id ) ){
       $img_id = get_post_thumbnail_id( $post_id ); 
        $images=wp_get_attachment_image_src( $img_id, false, false ); 
        return $images[0];
    }else{
        $post = get_post( $post_id );        
        if( isset( $post ) ){
            $preg=preg_match_all( '/<img.*?src="(.*?)"/', stripslashes( $post->post_content ), $matches );
            if( $preg ){ $i=0;
                foreach( $matches[1] as $image_url ){ $i++;
                    //if(empty($image_url)) continue;
                    if($i==1){return $image_url;}
                }
            }else{
                $images="$url"."/assets/images/nothumb.jpg";
            }
        }else{
            $images="$url"."/assets/images/nothumb.jpg";
        }                
        return $images;
    }
}

function custom_image_size( $post_id, $w, $h, $crop ){
    if( substr( get_featured_img( $post_id), -3 ) == 'gif' ){
        return get_featured_img( $post_id );
    }else{
        $params = array( 'width' => $w, 'height' => $h, 'crop' => $crop );
        return bfi_thumb( get_featured_img( $post_id ), $params );
    }
}

function custom_image_size_url( $url, $w, $h, $crop ){
	$params = array( 'width' => $w, 'height' => $h, 'crop' => $crop );
	return bfi_thumb($url, $params );
}

function add_file_types_to_uploads( $file_types ){
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge( $file_types, $new_filetypes );
	return $file_types;
}
add_action( 'upload_mimes', 'add_file_types_to_uploads' );

add_action( 'wp_body_open', 'add_loading_icon' );
function add_loading_icon(){
    $site_icon = get_field('loading_icon', 'option');?>

    <div class="tbang-loading">
        <div class="tbang_loader">
            <span>
                <?php if($site_icon): ?>
                    <img alt="<?php echo bloginfo('name'); ?>" src="<?php echo $site_icon['url']; ?>">
                <?php endif; ?>
            </span>
        </div>
    </div>
<?php }

add_filter('wpcf7_autop_or_not', '__return_false');
add_filter( 'widget_text', 'do_shortcode' );

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

function tbang_img_link( $file_name ){
    $base_img = get_stylesheet_directory_uri() . "/assets/images/";

    if($file_name && $file_name != ""){
        $url = $base_img . $file_name;
    }else{
        $url = $base_img . "nothumb.jpg";
    }

    return $url;
}

function share_social(){ ?>
    <ul class="share">
        <li class="facebook"><a class="channel-facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" onclick="window.open(this.href, 'mywin', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;"><i class="fa fa-facebook"></i></a></li>

        <li class="twitter"><a class="channel-twitter" target="_blank" href="https://twitter.com/home?status=<?php the_title(); ?> <?php the_permalink() ?>" onclick="window.open(this.href, 'mywin', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;"><i class="fa fa-twitter"></i></a></li>        

        <li class="google"><a class="channel-google" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open(this.href, 'mywin', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;"><i class="fa fa-google-plus"></i></a></li>
    </ul>
<?php
}

add_filter( 'acf/settings/save_json', 'tbang_json_save_point' );
function tbang_json_save_point( $path ) {
    $path = get_stylesheet_directory() . '/assets/acf-json';
    return $path;
}

add_filter( 'acf/settings/load_json', 'tbang_json_load_point' );
function tbang_json_load_point( $paths ) {
    unset( $paths[0] );
    $paths[] = get_stylesheet_directory() . '/assets/acf-json';
    return $paths;
}

add_filter( 'acf/settings/show_admin', 'tbang_acf_show_admin' );
function tbang_acf_show_admin( $show ) {
    
    return current_user_can( 'administrator' );
}

function render_link( $link, $class = 'more-link' ) {
    if( $link ): 
        $link_url       = $link['url'];
        $link_title     = $link['title'];
        $link_target    = $link['target'] ? $link['target'] : '_self'; ?>
        <a class="<?php echo $class; ?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo $link_title; ?></a>
    <?php endif;
}