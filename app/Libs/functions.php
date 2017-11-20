<?php

/**
  Retourne la commande de l'URL courante.
  @return string
 */
function get_command() {

  $url = parse_url( $_SERVER['REQUEST_URI'] );
  $url =  trim(str_replace( ROOT_URL, '', $url['path'] ));
  //debug ( $url, '$url' );
  // correction
  if ( $url !== '') {
    $url = str_replace('/','',$url);
  }
  return $url;
}

/**   Retourne l'URL vers une commande.   @param  string  la commande.  */
function url( $url = '' ) {

  echo  ROOT_URL . $url ;
}



/**
  Redirige vers une commande.
  @param  string  la commande.
 */
function redirect( $url ) {

  header('Location: ' . ROOT_URL . $url );
}

/**
 *  Retourne une date au format francais à partir d'une chaine timestamp SQL.
 * @param string  $sqlTimestamp le timestamp SQL.
 * @return string
 */
function getFRdate( $sqlTimestamp ) {
  $timestamp  = strtotime( $sqlTimestamp );
  return date( 'd/m/Y', $timestamp );
}

/**
 *  Retourne une heure au format francais à partir d'une chaine timestamp SQL.
 * @param string  $sqlTimestamp le timestamp SQL.
 * @return string
 */
function getFRtime( $sqlTimestamp ) {
  $timestamp  = strtotime( $sqlTimestamp );
  return date( 'H:i:s', $timestamp );
}

?>
