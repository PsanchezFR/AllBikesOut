<?php
    session_start();    // only logout button can log you out.

    //CATCH THE URL REQUESTED
	$requested_url = $_SERVER['PATH_INFO'];
	if(!$requested_url){
	    $requested_url = "/";
    }

    //REQUIRING TOOLS
	require 'config/routes.php';
	require 'tools/logger.php';
	require 'config/pdo.php';

	//REQUIRING MODELS
    require 'model/User.php';

    //CREATING TOOLS REFERENCES
	$logger = new Logger();

	//IF USER LOGGED, SAVE INFORMATIONS IN SESSION
    $USER = NULL;
    if (isset($_SESSION['user_id'])){
        $request = $bdd->prepare('SELECT email, firstname, lastname, last_login, updated_at  FROM user WHERE id=:id');
        $request->bindParam('id', $_SESSION['user_id'], PDO::PARAM_INT);
        $request->execute();
        $USER = $request->fetchObject('model\User');
    }

    //ROUTE LOGIC - test url, routes and files.
    // if incorrect log an error with $logger (cf. tools/logger)
	if(array_key_exists($requested_url, $routes_config))    // route config from routes.php
	{
		$logger -> log("route found : ${requested_url}");
		$controller = $routes_config[$requested_url];

		if(file_exists($controller))
		{	
			$logger -> log("file found : ${controller}");
			require 'view/top.php';
			require $controller;
			require 'view/bot.php';
		}
		else
		{
			$logger -> log("[404] file not found : ${controller}");
			require 'controller/errors/404.php';
		}
	}
	else
	{	
		$logger -> log("[404] route not found : ${requested_url}");
		require 'controller/errors/404.php';
	}
?>