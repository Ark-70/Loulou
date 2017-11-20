<?php
require('ChromePhp.php');

/**
 * Alias debug.
 */
function d( $data, $message = null, $options = array() ) {
  debug( $data, $message, $options );
}

/**
 * Alias debug.
 */
function dd( $data, $message = null, $options = array() ) {
  debug( $data, $message, $options );
  die();
}

/**
 * Affiche un message de débuguage vers la console ou l'écran selon la
 * configuration indiquée dans les constantes DEBUG et DEBUG_TARGET.
 * @param objet   $data
 *                la donnée à afficher.
 * @param string  $message
 *                un message d'accompagnement (optionnel)
 * @param array   $options
 *                les options.
 * @return void
 */
function debug( $data, $message = null, $options = array() ) {

  if ('DEBUG') {
    if ('DEBUG_TARGET' === 'console') {
      trace2console( $data, $message );
    } else {
      trace2screen( $data, $message, $options);
    }
  }
}

/**
 * Affiche un message de débuguage vers  l'écran.
 * @param objet   $data
 *                la donnée à afficher.
 * @param string  $message
 *                un message d'accompagnement (optionnel)
 * @param array   $options
 *                les options.
 * @return void
 */
function trace2screen( $data, $message = null, $options = array() ) {

  $options = array_merge(
    array(
      'start-tag' => '== '
    ),
    $options
  );

  // donne des infos sur contexte
  $debug = debug_backtrace();
  unset( $debug[ 0] );
  // l'affichage est encapsulé dans une div.debug-trace pour le CSS
  // affiche (eventuellement) un texte d'intro
  echo '<div class="debug-trace">';
  foreach ($debug as $d) {
    if (  !empty($d['file']) && $d['file'] !== __FILE__ ) {
      echo '<p class="debug-trace-line-info">' .
           ' line ' . $d['line'] .
           ' on file ' .  $d['file'] .
           '</p>';
    }
  }
  if ( !is_null( $message ) ) {
    echo $options[ 'start-tag' ] . "<strong>$message</strong> ";

  }
  // debug final
  echo "<pre>";var_dump( $data );echo "</pre>";
  echo '</div><!-- //.debug-trace-->';
}

/**
 * Affiche un message de débuguage vers la console.
 *
 * @return void
 */
function trace2console($data, $message = null) {
  ChromePhp::log( $message, $datas );
}

?>
