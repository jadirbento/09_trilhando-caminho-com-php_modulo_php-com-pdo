<?php
define( 'MYSQL_HOST', 'localhost' );
define( 'MYSQL_USER', 'root' );
define( 'MYSQL_PASSWORD', '' );
define( 'MYSQL_DB_NAME', 'php_com_pdo' );
$oConn=null;


function DbOpenConnection() {
    global $oConn;

    if ($oConn == null) {

        try
        {
            $oConn = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
            $oConn->exec("set names utf8");
        }
        catch ( PDOException $e )
        {
            echo 'N�o foi possivel estabelecer uma conex�o com banco. <br> C�digo do erro: '.$e->getCode() . ' <br> Descri��o do erro: '. $e->getMessage();
        }

    }
    return $oConn;
}

?>