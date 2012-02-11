<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-09 21:32:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/media/css/default.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-09 21:32:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/media/css/default.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-09 21:36:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\routes.php [ 4 ]
2012-02-09 21:36:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\routes.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-09 22:16:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-09 22:16:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-09 22:22:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-09 22:22:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-09 22:22:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: theme ~ APPPATH\classes\controller\home.php [ 38 ]
2012-02-09 22:22:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: theme ~ APPPATH\classes\controller\home.php [ 38 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\controller\home.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\Resources\PH...', 38, Array)
#1 [internal function]: Controller_Home->before()
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-09 22:25:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-09 22:25:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-09 22:30:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-09 22:30:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-09 22:30:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-09 22:30:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-09 22:33:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: theme_get ~ APPPATH\classes\controller\home.php [ 40 ]
2012-02-09 22:33:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: theme_get ~ APPPATH\classes\controller\home.php [ 40 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\controller\home.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\Resources\PH...', 40, Array)
#1 [internal function]: Controller_Home->before()
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-09 22:53:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\controller\index.php [ 42 ]
2012-02-09 22:53:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\controller\index.php [ 42 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-09 22:53:49 --- ERROR: ErrorException [ 1 ]: Call to undefined method Cookie::del() ~ APPPATH\classes\controller\index.php [ 42 ]
2012-02-09 22:53:49 --- STRACE: ErrorException [ 1 ]: Call to undefined method Cookie::del() ~ APPPATH\classes\controller\index.php [ 42 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-09 22:55:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: themes ~ APPPATH\classes\controller\home.php [ 40 ]
2012-02-09 22:55:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: themes ~ APPPATH\classes\controller\home.php [ 40 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\controller\home.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\Resources\PH...', 40, Array)
#1 [internal function]: Controller_Home->before()
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-09 22:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.jsp ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-09 22:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.jsp ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-09 23:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.ht ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-09 23:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.ht ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-09 23:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.ph ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-09 23:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.ph ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-09 23:51:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sadsd2.s ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-09 23:51:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sadsd2.s ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-09 23:51:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sadsd2.s ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-09 23:51:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sadsd2.s ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-09 23:51:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sadsd2.s ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-09 23:51:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sadsd2.s ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-09 23:52:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sadsd2.s was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-09 23:52:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sadsd2.s was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-09 23:52:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sadsd2.s was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-09 23:52:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sadsd2.s was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-09 23:52:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sadsd2.s was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-09 23:52:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sadsd2.s was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-09 23:52:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sadsd2.s was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-09 23:52:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sadsd2.s was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-09 23:52:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template\header_index.php [ 5 ]
2012-02-09 23:52:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template\header_index.php [ 5 ]
--
#0 G:\Resources\PHP\app\kohana\application\views\template\header_index.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\Resources\PH...', 5, Array)
#1 G:\Resources\PHP\app\kohana\application\views\index.php(1): require_once('G:\Resources\PH...')
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 G:\Resources\PHP\app\kohana\application\classes\controller\errors.php(104): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Errors->after()
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Errors))
#8 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-09 23:52:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template\header_index.php [ 5 ]
2012-02-09 23:52:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template\header_index.php [ 5 ]
--
#0 G:\Resources\PHP\app\kohana\application\views\template\header_index.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\Resources\PH...', 5, Array)
#1 G:\Resources\PHP\app\kohana\application\views\index.php(1): require_once('G:\Resources\PH...')
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 G:\Resources\PHP\app\kohana\application\classes\controller\errors.php(104): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Errors->after()
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Errors))
#8 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-09 23:53:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template\header_index.php [ 5 ]
2012-02-09 23:53:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template\header_index.php [ 5 ]
--
#0 G:\Resources\PHP\app\kohana\application\views\template\header_index.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\Resources\PH...', 5, Array)
#1 G:\Resources\PHP\app\kohana\application\views\index.php(1): require_once('G:\Resources\PH...')
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 G:\Resources\PHP\app\kohana\application\classes\controller\errors.php(104): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Errors->after()
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Errors))
#8 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-09 23:53:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template\header_index.php [ 5 ]
2012-02-09 23:53:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template\header_index.php [ 5 ]
--
#0 G:\Resources\PHP\app\kohana\application\views\template\header_index.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\Resources\PH...', 5, Array)
#1 G:\Resources\PHP\app\kohana\application\views\index.php(1): require_once('G:\Resources\PH...')
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 G:\Resources\PHP\app\kohana\application\classes\controller\errors.php(104): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Errors->after()
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Errors))
#8 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-09 23:53:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template\header_index.php [ 5 ]
2012-02-09 23:53:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template\header_index.php [ 5 ]
--
#0 G:\Resources\PHP\app\kohana\application\views\template\header_index.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\Resources\PH...', 5, Array)
#1 G:\Resources\PHP\app\kohana\application\views\index.php(1): require_once('G:\Resources\PH...')
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 G:\Resources\PHP\app\kohana\application\classes\controller\errors.php(104): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Errors->after()
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Errors))
#8 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-09 23:53:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template\header_index.php [ 5 ]
2012-02-09 23:53:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template\header_index.php [ 5 ]
--
#0 G:\Resources\PHP\app\kohana\application\views\template\header_index.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\Resources\PH...', 5, Array)
#1 G:\Resources\PHP\app\kohana\application\views\index.php(1): require_once('G:\Resources\PH...')
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 G:\Resources\PHP\app\kohana\application\classes\controller\errors.php(104): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Errors->after()
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Errors))
#8 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-09 23:53:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template\header_index.php [ 5 ]
2012-02-09 23:53:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template\header_index.php [ 5 ]
--
#0 G:\Resources\PHP\app\kohana\application\views\template\header_index.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\Resources\PH...', 5, Array)
#1 G:\Resources\PHP\app\kohana\application\views\index.php(1): require_once('G:\Resources\PH...')
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 G:\Resources\PHP\app\kohana\application\classes\controller\errors.php(104): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Errors->after()
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Errors))
#8 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-02-09 23:57:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: theme ~ APPPATH\classes\model\secure.php [ 139 ]
2012-02-09 23:57:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: theme ~ APPPATH\classes\model\secure.php [ 139 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\model\secure.php(139): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\Resources\PH...', 139, Array)
#1 G:\Resources\PHP\app\kohana\application\classes\controller\home.php(42): Model_Secure::set_theme(NULL)
#2 [internal function]: Controller_Home->before()
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#7 {main}