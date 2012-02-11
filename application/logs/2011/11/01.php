<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-01 04:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL app/kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-11-01 04:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL app/kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-01 17:04:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL guide was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-11-01 17:04:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL guide was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-01 17:05:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL fdewf was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-11-01 17:05:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL fdewf was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-01 18:14:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-01 18:14:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}