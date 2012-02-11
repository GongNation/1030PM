<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-14 02:02:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: signup ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-14 02:02:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: signup ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-14 02:15:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-14 02:15:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-14 02:16:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-14 02:16:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-14 02:20:12 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\routes.php [ 17 ]
2012-01-14 02:20:12 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\routes.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-14 02:20:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\routes.php [ 17 ]
2012-01-14 02:20:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\routes.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-14 02:21:26 --- ERROR: Kohana_Exception [ 0 ]: The requested route does not exist: index ~ SYSPATH\classes\kohana\route.php [ 106 ]
2012-01-14 02:21:26 --- STRACE: Kohana_Exception [ 0 ]: The requested route does not exist: index ~ SYSPATH\classes\kohana\route.php [ 106 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\controller\index.php(28): Kohana_Route::get('index')
#1 [internal function]: Controller_Index->before()
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-14 02:37:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-01-14 02:37:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-14 02:38:58 --- ERROR: Kohana_Exception [ 0 ]: The requested route does not exist: default ~ SYSPATH\classes\kohana\route.php [ 106 ]
2012-01-14 02:38:58 --- STRACE: Kohana_Exception [ 0 ]: The requested route does not exist: default ~ SYSPATH\classes\kohana\route.php [ 106 ]
--
#0 G:\Resources\PHP\app\kohana\application\views\template\header_home.php(18): Kohana_Route::get('default')
#1 G:\Resources\PHP\app\kohana\application\views\home.php(1): require_once('G:\Resources\PH...')
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 G:\Resources\PHP\app\kohana\application\classes\controller\home.php(128): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Home->after()
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#8 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-14 02:42:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\template\header_home.php [ 17 ]
2012-01-14 02:42:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\template\header_home.php [ 17 ]
--
#0 G:\Resources\PHP\app\kohana\application\views\template\header_home.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\Resources\PH...', 17, Array)
#1 G:\Resources\PHP\app\kohana\application\views\home.php(1): require_once('G:\Resources\PH...')
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 G:\Resources\PHP\app\kohana\application\classes\controller\home.php(128): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Home->after()
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#8 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-14 04:02:13 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Session::set(), called in G:\Resources\PHP\app\kohana\application\classes\controller\index.php on line 83 and defined ~ SYSPATH\classes\kohana\session.php [ 243 ]
2012-01-14 04:02:13 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Session::set(), called in G:\Resources\PHP\app\kohana\application\classes\controller\index.php on line 83 and defined ~ SYSPATH\classes\kohana\session.php [ 243 ]
--
#0 G:\Resources\PHP\app\kohana\system\classes\kohana\session.php(243): Kohana_Core::error_handler(2, 'Missing argumen...', 'G:\Resources\PH...', 243, Array)
#1 G:\Resources\PHP\app\kohana\application\classes\controller\index.php(83): Kohana_Session->set('username')
#2 [internal function]: Controller_Index->action_logout()
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#7 {main}