<?php
//
// FICHIER : app / config.php
//
define( 'SERVER_DEV', 'localhost' );
define( 'SERVER_PROD', 'gallery-mmi.fr' );


$env = $_SERVER[ 'SERVER_NAME' ];

switch ( $env ) {

  // dev
  case SERVER_DEV:
    include 'config.dev.php';
    break;

  // prod
  case SERVER_PROD:
    include 'config.prod.php';
    break;

}

/** séparateur entre dossiers */
define( 'DS', DIRECTORY_SEPARATOR  );

/** Chemin absolu vers le dossier du projet. */
define( 'ROOT_PATH', realpath( __DIR__ . DS . '..' . DS . '..' ) . DS );

/** chemin absolu vers le dossier de l'application */
define( 'APP_PATH', ROOT_PATH . 'app' . DS );

/** chemin absolu vers le dossier des ressources */
define( 'ASSETS_PATH', ROOT_PATH . 'assets' . DS );

/** chemin absolu vers le dossier de l'application */
define( 'STORAGE_PATH', APP_PATH . 'storage' . DS );

