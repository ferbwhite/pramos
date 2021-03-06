<?php

global $fusion_settings;
if ( ! $fusion_settings ) {
	$fusion_settings = Fusion_Settings::get_instance();
}

$icon_color        = $fusion_settings->get( 'icon_color' );
$icon_circle_color = $fusion_settings->get( 'icon_circle_color' );
?>
<script type="text/template" id="fusion-builder-block-module-font-awesome-preview-template">

	<#
	var
	icon_color = '',
	circle_background = '',
	icon_color = params.iconcolor,
	circle_background = params.circlecolor,
	icon = params.icon,
	circle_background = '';

	if ( '' === params.iconcolor ||  ! params.iconcolor ) {
		icon_color = '<?php echo esc_attr( $icon_color ); ?>';
	} else {
		icon_color = params.iconcolor;
	}

	if ( 'no' === params.circle && ( '#ffffff' === icon_color || -1 !== icon_color.indexOf( 'rgba(255,255,255' ) ) ) {
		icon_color = '#dddddd';
	}

	if ( '' === params.circlecolor ||  ! params.circlecolor ) {
		circle_background = '<?php echo esc_attr( $icon_circle_color ); ?>';
	} else {
		circle_background = params.circlecolor;
	}

	if ( 'undefined' !== typeof icon && -1 === icon.trim().indexOf( ' ' ) ) {
		icon = 'fa ' + icon;
	}
	#>

	<# if ( params.circle === 'yes' ) { #>
		<div class="fusion-icon-circle-preview" style="background: {{ circle_background }}">
	<# } #>
		<span class="fa-preview {{ icon }}" style="color: {{ icon_color }}"></span>
	<# if ( params.circle === 'yes' ) { #>
		</div>
	<# } #>

</script>
