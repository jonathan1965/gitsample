<?php
//about theme info
add_action( 'admin_menu', 'skt_secure_abouttheme' );
function skt_secure_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'skt-secure'), esc_html__('About Theme', 'skt-secure'), 'edit_theme_options', 'skt_secure_guide', 'skt_secure_mostrar_guide');   
} 
//guidline for about theme
function skt_secure_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_attr_e('Theme Information', 'skt-secure'); ?>
		   </div>
          <p><?php esc_attr_e('SKT Secure is a template suitable for security service agency providing company, CCTV, firewall gateway, antivirus, private investigators, bodyguards, police departments, digital hacking, ethical hackers, alarm, protection services, home automation, private detective agencies, commando training institutes, personal secure, strong room, lockers, military, armed men forces and guardians.','skt-secure'); ?></p>
		  <a href="<?php echo esc_url(SKT_SECURE_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(SKT_SECURE_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_attr_e('Live Demo', 'skt-secure'); ?></a> | 
				<a href="<?php echo esc_url(SKT_SECURE_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_attr_e('Buy Pro', 'skt-secure'); ?></a> | 
				<a href="<?php echo esc_url(SKT_SECURE_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_attr_e('Documentation', 'skt-secure'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(SKT_SECURE_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>