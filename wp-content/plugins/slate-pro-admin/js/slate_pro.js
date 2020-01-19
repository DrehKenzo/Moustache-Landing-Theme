jQuery( document ).ready( function( $ ) {

	var $body = $( 'body' );

	$body.addClass( 'slate-pro-admin' );

	// Move elements inside #post-body-content
	// WordPress Version 4.0 - 4.2
	if ( $body.is( '.branch-4' ) || $body.is( '.branch-4-0' ) || $body.is( '.branch-4-1' ) || $body.is( '.branch-4-2' ) ) {
		$( '.wrap > h2, #screen-meta-links, #screen-meta' ).prependTo( '#post-body-content' );

		// Move messages
		if ( $( '.wrap > .updated, .wrap > .error' ).length != 0 && $( '#post-body-content' ).length != 0 ) {
			$( '.wrap > .updated, .wrap > .error' ).insertBefore( '#post-body-content h2' );
		}

		// Move elements on Tags/Category pages
		if ( $( '.edit-tags-php #col-right' ).length != 0 ) {
			$( '.wrap > h2, .wrap > #ajax-response, .wrap > .search-form, .wrap > br' ).prependTo( '#col-right' );
		}
	}

	// WordPress Version 4.3
	if ( $body.is( '.branch-4-3' ) ) {
		$( '.wrap > h1, #screen-meta-links, #screen-meta' ).prependTo( '#post-body-content' );

		// Move messages
		var $messages = $( '.wrap > .updated, .wrap > .error, .wrap > .notice, #wpbody-content > .updated, #wpbody-content > .error, #wpbody-content > .notice, #wpbody-content > .update-nag' );
		if ( $messages.length != 0 && $( '#post-body-content' ).length != 0 ) {
			$messages.insertBefore( '#post-body-content h1' );
		}
	}
	if ( $body.is( '.edit-tags-php.branch-4-3' ) ) {
		// Move elements on Tags/Category pages
		$( '.wrap > h1, .wrap > #ajax-response, .wrap > .search-form, .wrap > br, .wrap > .updated, .wrap > .error, .wrap > .notice, #wpbody-content > .updated, #wpbody-content > .error, #wpbody-content > .notice' ).prependTo( '#col-right .col-wrap' );
	}

	// WordPress Version 4.4 or 4.5
	if ( $body.is( '.branch-4-4' ) || $body.is( '.branch-4-5' ) ) {
		// Move Elements
		$( '.wrap > h1, #screen-meta-links, #screen-meta' ).prependTo( '#post-body-content' );
	}
	if ( $body.is( '.edit-tags-php.branch-4-4' ) || $body.is( '.edit-tags-php.branch-4-5' ) ) {
		// Move elements on Tags/Category pages
		$( '.wrap > h1, .wrap > #ajax-response, .wrap > .search-form, .wrap > br, .wrap > .updated, .wrap > .error' ).prependTo( '#col-right .col-wrap' );
	}

	// WordPress Version 4.6
	if ( $body.is( '.branch-4-6' ) ) {
		// Move Elements
		$( '.wrap > h1, #screen-meta-links, #screen-meta' ).prependTo( '#post-body-content' );
	}
	if ( $body.is( '.edit-tags-php.branch-4-6' ) ) {
		// Move elements on Tags/Category pages
		$( '.wrap > h1, .wrap > #ajax-response, .wrap > .search-form, .wrap > br, .wrap > .updated, .wrap > .error' ).prependTo( '#col-right .col-wrap' );
	}

	// WordPress Version 4.7, 4.8, 4.9
	if ( $body.is( '.branch-4-7' ) || $body.is( '.branch-4-8' ) || $body.is( '.branch-4-9' ) ) {
		// Move Elements
		$( '.wrap > h1, #screen-meta-links, #screen-meta' ).prependTo( '#post-body-content' );
		// Move elements on Posts page
		$( '.page-title-action' ).appendTo( '.wp-heading-inline' );
	}
	if ( $body.is( '.edit-tags-php.branch-4-7' ) || $body.is( '.edit-tags-php.branch-4-8' ) || $body.is( '.edit-tags-php.branch-4-9' ) ) {
		// Move elements on Tags/Category pages
		$( '.wrap > h1, .wrap > #ajax-response, .wrap > .search-form, .wrap > br, .wrap > .updated, .wrap > .error' ).prependTo( '#col-right .col-wrap' );
	}

	// Add background divs
	if ( $( '#poststuff #side-sortables' ).length != 0 && !$body.is( '.index-php' ) ) {
		$( '#side-sortables' ).before( '<div id="side-sortablesback"></div>' );
	}
	if ( $( '.edit-tags-php #col-left' ).length != 0 ) {
		$( '.edit-tags-php #col-left' ).before( '<div id="col-leftback"></div>' );
	}
	if ( $( '.comment-php #submitdiv' ).length != 0 ) {
		$( '.comment-php #submitdiv' ).before( '<div id="submitdiv-back"></div>' );
	}

	// Move Post State span
	if ( $( 'span.post-state' ).length != 0 && $( 'span.post-state' ).parent().is( 'td' ) == false ) {
		$( 'span.post-state' ).each( function() {
			$( this ).insertBefore( $( this ).parent() );
		} );
	}

	// Admin Branding
	$( '#toplevel_page_slate_pro_admin_logo, #toplevel_page_slate_pro_admin_logo_folded' ).on( 'click', 'a', function( e ) {
		e.preventDefault();
	} );
	if ( typeof slate_adminLogo != 'undefined' ) {
		if ( '' != slate_adminLogo ) {
			$( '#adminmenu' ).addClass( 'adminLogoPresent' );
		}
	}

	// Hide User Profile Colors
	if ( typeof slate_colorsHideUserProfileColors != 'undefined' ) {
		if ( '' != slate_colorsHideUserProfileColors ) {
			$( '.profile-php #color-picker' ).parents( 'tr' ).hide();
		}
	}

	// Media Selector
	var file_frame;
	$( '.pageSection' ).on( 'click', '.imageSelect', function( e ) {
		e.preventDefault();
		var imageValue = $( this ).parent().prev( 'li' ).children( '.imageValue' ).attr( 'id' );
		var imageContainer = $( this ).parent().prev( 'li' ).children( '.imageContainer' ).attr( 'id' );

		if ( file_frame )
			file_frame.remove();

		file_frame = wp.media.frames.file_frame = wp.media( {
			title : $( this ).data( 'uploader_title' ),
			button : {
				text : $( this ).data( 'uploader_button_text' )
			},
			multiple : false
		} );

		file_frame.on( 'select', function() {
			var attachment = file_frame.state().get( 'selection' ).first().toJSON();
			$( '#' + imageValue ).val( attachment.url );
			$( '#' + imageContainer ).html( '<img src="' + attachment.url + '" />' );
		} );

		file_frame.open();
		$( this ).siblings( '.imageDelete' ).show();
	} ).on( 'click', '.imageDelete', function( e ) {
		e.preventDefault();
		var imageValue = $( this ).parent().prev( 'li' ).children( '.imageValue' ).attr( 'id' );
		var imageContainer = $( this ).parent().prev( 'li' ).children( '.imageContainer' ).attr( 'id' );
		$( this ).hide();
		$( '#' + imageValue ).val( '' );
		$( '#' + imageContainer ).html( '' );
	} );

	// Colorpicker
	if ( $body.is( '.toplevel_page_slate_pro_color_schemes' ) ) {
		$( '.colorpickerToggle' ).click( function() {
			$( this ).children( '.slate__colorpicker' ).spectrum( 'toggle' );
			return false;
		} );
		$( '.slate__colorpicker' ).spectrum( {
			// allowEmpty: true,
			preferredFormat : 'hex',
			showInitial : true,
			showInput : true,
			chooseText : 'Save Color',
			change : function( color ) {
				color.toHexString();
				$( this ).parent().siblings( '.customColorsInput' ).val( color );
			}
		} );
	}

	// Show and Hide the Custom Color Area
	$( '.colorNav,.colorSection' ).hide();
	if ( $( '.colorCustom input[name="slate_pro_settings[colorScheme]"]' ).is( ':checked' ) ) {
		$( '.colorNav,.colorSection.loginPageColors' ).show();
	}
	$( '.premadeColors' ).on( 'click', 'label', function() {
		$( '.premadeColors label' ).removeClass( 'selected' );
		$( this ).addClass( 'selected' );
		if ( $( this ).parent().is( '.colorCustom' ) ) {
			$( '.colorNav,.colorSection.loginPageColors' ).show();
			$( '.nav-tab' ).removeClass( 'selected' );
			$( '.loginPageColors .nav-tab' ).addClass( 'selected' );
		} else {
			$( '.colorNav,.colorSection' ).hide();
		}
	} );

	// Show and Hide each Custom Color Section
	$( '.colorNav' ).on( 'click', '.nav-tab', function( e ) {
		e.preventDefault();

		$( '.nav-tab' ).removeClass( 'selected' );
		$( this ).addClass( 'selected' );

		var section = $( this ).parent().attr( 'class' );
		$( '.colorSection' ).hide();
		$( '.' + section ).show();
	} );

	// Select All/None
	$( '.slate__select' ).on( 'click', '.slate__selectAll', function( e ) {
		e.preventDefault();
		$( this ).parents( 'h3' ).siblings( 'ul' ).find( 'input[type=checkbox]' ).prop( 'checked', true );
	} ).on( 'click', '.slate__selectNone', function( e ) {
		e.preventDefault();
		$( this ).parents( 'h3' ).siblings( 'ul' ).find( 'input[type=checkbox]' ).prop( 'checked', false );
	} );

} );
