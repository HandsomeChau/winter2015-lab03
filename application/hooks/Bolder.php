<?php
/**
 * Created by PhpStorm.
 * User: Edwin
 * Date: 15-01-24
 * Time: 12:16 PM
 */

if ( !defined( 'BASEPATH' ) )
    exit( 'No direct script access allowed' );

function bolder()
{

    $CI = &get_instance();
    $buffer = $CI->output->get_output();

    /*
    $regexPTag = '/<p class="lead">(.*)<\/p>/';
    $regex = '/([A-Z])/';

    var_dump($buffer);

    $matches = array();
    preg_match( $regexPTag, $buffer, $matches );

    for ( $i = 0; $i < sizeof( $matches ); $i++ ) {
        if ( preg_match_all( '/(<p class="lead">)|(<\/p>)/', $matches[$i] ) ) {
            unset( $matches[$i] );
        }
    }

    $matches = array_values( $matches );

    if ( sizeof( $matches ) == 1 ) {
        $content = explode( ' ', $matches[0] );
    }

    for ( $i = 0; $i < sizeof( $content ); $i++ ) {
        preg_replace( $regex, '<strong>' . $content[$i] . '</strong>', $content[$i] );
    }

    implode(' ', $content);


    //$buffer = $content;
    //var_dump(explode($regexPTag, $buffer));
    /*
    $dom = new DOMDocument();
    $dom->loadHTML( $buffer );
    $paragraphs = $dom->getElementsByTagName( 'p' );

    $paragraph = $paragraphs->item( 0 );

    $text = $paragraph->nodeValue;
    $textArray = explode(' ', $text);

    for ( $i = 0; $i < sizeof($textArray); $i++ ) {
        if ( preg_match( $regex, $textArray[$i] ) ) {
            echo $textArray[$i] . '<br/>';
            str_replace($textArray[$i], '<strong>' . $textArray[$i] . '</strong>', $textArray[$i]);
            //$element = $dom->createElement('<strong>', $textArray[$i]);
            //$dom->appendChild($element);
        }
    }


    $buffer = $dom->saveHTML();
    */

    $CI->output->set_output( $buffer );
    $CI->output->_display();

}

/* End of file Bolder.php */
/* Location: ./system/application/hooks/Bolder.php */