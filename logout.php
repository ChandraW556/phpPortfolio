<?php

/********************************************************\
 * File: 	index.php				*
 * Author: 	Andreas G�ransson			*
 * Date: 	2011-11-25				*
 * Organization: Andreas G�ransson			*
 *							*
 * Project: 	Portfolio.				*
 *							*
 * Description:	Logout script				*
\********************************************************/

include_once("config.php");

unset( $_SESSION["loggedIn"] );

header("Location: index.php");
?>

