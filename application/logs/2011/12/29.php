<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-29 20:51:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-12-29 20:51:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#3 {main}