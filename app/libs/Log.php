<?php

/* *
* Log       A logger class which creates logs when an exception is thrown.
* @author   Author: Vivek Wicky Aswal. (https://twitter.com/#!/VivekWickyAswal)
* @git      https://github.com/wickyaswal/PHP-MySQL-PDO-Database-Class
* @version      0.1a
*/
namespace App\Libs;
class Log {

  // dossier d'enregistrement des logs par défaut
  private $path = DIRECTORY_SEPARATOR .  'logs' . DIRECTORY_SEPARATOR;

  /**
   * Le constructeur.
   *
   */
  public function __construct( $path = null)
  {

    date_default_timezone_set( 'Europe/Paris' );
    if ( !is_null($path)) {
      $this->path  = $path;
    } else {
      $this->path  = __DIR__  . $this->path;
    }

  }

  /**
   * Ajoute un message dans le fichier de log.
   *
   * @param string $message le message a ajouter..
   */
  public function write($message)
  {

    // préparer le nom du fichier
    $date = new \DateTime();
    $log = $this->getFileName();
    // vérifier que le dossier existe
    if ( is_dir($this->path) ) {
      // vérifier si le fichier de journalisation existe ...
      if( !file_exists($log) ) {
        // si le fichier n'existe pas, on le crée
        $fh  = fopen($log, 'a+') or die("Fatal Error !");
        // le premier message est ajouté
        $logcontent = "Time : " . $date->format('H:i:s')."\r\n" . $message ."\r\n";
        fwrite($fh, $logcontent);
        fclose($fh);
      } else {
        $this->edit($log,$date, $message);
      }
    } else {
      // si le dossier n'existe pas, on le crée et la méthode est ré-appelée
      if( mkdir($this->path,0777) === true ) {
        $this->write($message);
      }
    }
  }

  /**
   *  Ajoute un message dans un fichier de log existant.
   *
   * @param string $log           le fichier de log à manipuler.
   * @param DateTimeObject $date  la date du message.
   * @param string $message       le message à ajouter.
   */
  private function edit( $log, $date, $message )
  {

    $logcontent = "Time : " . $date->format('H:i:s')."\r\n" . $message ."\r\n\r\n";
    $logcontent = $logcontent . file_get_contents($log);
    file_put_contents($log, $logcontent);
  }

  /**
   *  Retourne le nom du fichier de log.
   */
  public function getFileName()
  {
    $date = new \DateTime();
    return $this->path . $date->format('Y-m-d').".txt";
  }
}
?>
