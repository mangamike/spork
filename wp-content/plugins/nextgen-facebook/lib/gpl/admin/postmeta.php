<?php
/*
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl.txt
Copyright 2012-2014 - Jean-Sebastien Morisset - http://surniaulula.com/
*/

if ( ! defined( 'ABSPATH' ) ) 
	die( 'These aren\'t the droids you\'re looking for...' );

if ( ! class_exists( 'NgfbAdminPostmeta' ) ) {

	class NgfbAdminPostmeta {

		public function __construct( &$plugin ) {
			$this->p =& $plugin;
			$this->p->util->add_plugin_filters( $this, array( 
				'meta_header_rows' => 3,
			) );
		}

		public function filter_meta_header_rows( $rows, $form, $post_info ) {

			$rows[] = '<td colspan="2" align="center">'.$this->p->msgs->get( 'pro-feature-msg' ).'</td>';

			$rows[] = $this->p->util->th( 'Topic', 'medium', 'postmeta-og_art_section', $post_info ).
			'<td class="blank">'.$this->p->options['og_art_section'].'</td>';

			$rows[] = $this->p->util->th( 'Default Title', 'medium', 'postmeta-og_title', $post_info ). 
			'<td class="blank">'.$this->p->webpage->get_title( $this->p->options['og_title_len'], '...', true ).'</td>';
		
			$rows[] = $this->p->util->th( 'Default Description', 'medium', 'postmeta-og_desc', $post_info ).
			'<td class="blank">'.$this->p->webpage->get_description( $this->p->options['og_desc_len'], '...', true ).'</td>';
	
			$rows[] = $this->p->util->th( 'Google / SEO Description', 'medium', 'postmeta-meta_desc', $post_info ).
			'<td class="blank">'.$this->p->webpage->get_description( $this->p->options['meta_desc_len'], '...', true, true, false ).	// no hashtags
			'</td>';

			$rows[] = $this->p->util->th( 'Twitter Card Description', 'medium', 'postmeta-tc_desc', $post_info ).
			'<td class="blank">'.$this->p->webpage->get_description( $this->p->options['tc_desc_len'], '...', true ).'</td>';

			$rows[] = $this->p->util->th( 'Image ID', 'medium', 'postmeta-og_img_id', $post_info ).
			'<td class="blank">&nbsp;</td>';

			$rows[] = $this->p->util->th( 'Image URL', 'medium', 'postmeta-og_img_url', $post_info ).
			'<td class="blank">&nbsp;</td>';

			$rows[] = $this->p->util->th( 'Video URL', 'medium', 'postmeta-og_vid_url', $post_info ).
			'<td class="blank">&nbsp;</td>';

			$rows[] = $this->p->util->th( 'Maximum Images', 'medium', 'postmeta-og_img_max', $post_info ).
			'<td class="blank">'.$this->p->options['og_img_max'].'</td>';

			$rows[] = $this->p->util->th( 'Maximum Videos', 'medium', 'postmeta-og_vid_max', $post_info ).
			'<td class="blank">'.$this->p->options['og_vid_max'].'</td>';

			$rows[] = $this->p->util->th( 'Sharing URL', 'medium', 'postmeta-sharing_url', $post_info ).
			'<td class="blank">'.( get_post_status( $post_info['id'] ) == 'publish' ? 
				$this->p->util->get_sharing_url( true ) :
				'<p>The Sharing URL will be available when the '.$post_info['ptn'].' is published.</p>' ).'</td>';

			return $rows;
		}
	}
}

?>
