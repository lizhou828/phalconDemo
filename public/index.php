<?php

error_reporting(E_ALL);

try {

    /**
     * Read the configuration
     */
    $config = include __DIR__ . "/../app/config/config.php";

    /**
     * Read auto-loader
     */
    include __DIR__ . "/../app/config/loader.php";

    /**
     * Read services
     */
    include __DIR__ . "/../app/config/services.php";

    /**
     * Handle the request
     */
    $application = new \Phalcon\Mvc\Application($di);

    echo $application->handle()->getContent();

} catch (\Exception $e) {
    echo " PhalconException : happened in ".get_class($e)." class <br/> \n";
    echo " ExceptionMessage : <strong style='color:red'>".$e->getMessage()."</strong><br/>\n";
    echo " File=". $e->getFile();
    echo " Line=".$e->getLine()."<br/>\n";
    echo $e->getTraceAsString();
}
