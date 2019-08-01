<?php
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package StudioPress\Genesis
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/genesis/
 */

?>
<p>
	<?php
	$genesis_archive = '<a href="' . esc_url( get_post_type_archive_link( $this->post_type->name ) ) . '">';
	/* translators: Open and close post type archive link, post type name. */
	printf( esc_html__( 'View the %1$s%3$s archive%2$s.', 'genesis' ), $genesis_archive, '</a>', esc_html( $this->post_type->name ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Already escaped.
	?>
</p>

<table class="form-table">
<tbody>

	<tr valign="top">
		<th scope="row"><label for="<?php $this->field_id( 'headline' ); ?>"><b><?php esc_html_e( 'Archive Headline', 'genesis' ); ?></b></label></th>
		<td>
			<p><input class="large-text" type="text" name="<?php $this->field_name( 'headline' ); ?>" id="<?php $this->field_id( 'headline' ); ?>" value="<?php echo esc_attr( $this->get_field_value( 'headline' ) ); ?>" /></p>
			<p class="description">
				<?php
				if ( genesis_a11y( 'headings' ) ) {
					esc_html_e( 'Your child theme uses accessible headings. If you leave this blank, the default accessible heading will be used.', 'genesis' );
				} else {
					esc_html_e( 'Leave empty if you do not want to display a headline.', 'genesis' );
				}
				?>
			</p>
		</td>
	</tr>

	<tr valign="top">
		<th scope="row"><label for="<?php $this->field_id( 'intro_text' ); ?>"><b><?php esc_html_e( 'Archive Intro Text', 'genesis' ); ?></b></label></th>
		<td>
			<?php
			wp_editor(
				$this->get_field_value( 'intro_text' ),
				$this->settings_field . '-intro-text',
				array(
					'textarea_name' => $this->get_field_name( 'intro_text' ),
				)
			);
			?>
			<p class="description"><?php esc_html_e( 'Leave empty if you do not want to display any intro text.', 'genesis' ); ?></p>
		</td>
	</tr>

</tbody>
</table>