/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
};

$.each(CKEDITOR.dtd.$removeEmpty, function (i, value) {
  CKEDITOR.dtd.$removeEmpty[i] = false;
});

// Display all children elements allowed in a <a> element.
//console.log(CKEDITOR.dtd[ 'a' ]);

// Simply redefine DTD like this:
CKEDITOR.dtd['a']['div'] = 1;
CKEDITOR.dtd['a']['p'] = 1;
CKEDITOR.dtd['a']['i'] = 1;
CKEDITOR.dtd['a']['span'] = 1;

// Check if <div> can be contained in a <p> element.
//console.log( !!CKEDITOR.dtd[ 'a' ][ 'div' ] ); // default false

// Check if <a> can be contained in a <div> element.
//console.log( !!CKEDITOR.dtd[ 'div' ][ 'a' ] ); // default true
