<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-08 03:39:06 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\views\home.php [ 1 ]
2012-01-08 03:39:06 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\views\home.php [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-08 04:24:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH\views\template\header_home.php [ 17 ]
2012-01-08 04:24:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH\views\template\header_home.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-08 04:37:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\controller\index.php [ 48 ]
2012-01-08 04:37:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\controller\index.php [ 48 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-08 04:38:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\controller\index.php [ 48 ]
2012-01-08 04:38:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\controller\index.php [ 48 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-08 04:38:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\controller\index.php [ 48 ]
2012-01-08 04:38:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\controller\index.php [ 48 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-08 04:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL app/kohana/username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-01-08 04:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL app/kohana/username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-08 04:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tom was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-01-08 04:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tom was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-08 04:42:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index/archives was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-01-08 04:42:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index/archives was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-08 04:42:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tom was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-01-08 04:42:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tom was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-08 04:42:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tom was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-01-08 04:42:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tom was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-08 04:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tom was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-01-08 04:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tom was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-08 04:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tom was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-01-08 04:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tom was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-08 04:45:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH\views\template\header_home.php [ 17 ]
2012-01-08 04:45:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH\views\template\header_home.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-08 04:45:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\template\header_home.php [ 17 ]
2012-01-08 04:45:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\template\header_home.php [ 17 ]
--
#0 G:\Resources\PHP\app\kohana\application\views\template\header_home.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\Resources\PH...', 17, Array)
#1 G:\Resources\PHP\app\kohana\application\views\home.php(1): require_once('G:\Resources\PH...')
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 G:\Resources\PHP\app\kohana\application\classes\controller\home.php(164): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Home->after()
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#8 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-08 04:48:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\template\header_home.php [ 17 ]
2012-01-08 04:48:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\template\header_home.php [ 17 ]
--
#0 G:\Resources\PHP\app\kohana\application\views\template\header_home.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\Resources\PH...', 17, Array)
#1 G:\Resources\PHP\app\kohana\application\views\home.php(1): require_once('G:\Resources\PH...')
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 G:\Resources\PHP\app\kohana\application\classes\controller\home.php(155): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Home->after()
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#8 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-08 04:49:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tom was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-01-08 04:49:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tom was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-08 05:02:31 --- ERROR: Kohana_Exception [ 0 ]: Required route parameter not passed: username ~ SYSPATH\classes\kohana\route.php [ 518 ]
2012-01-08 05:02:31 --- STRACE: Kohana_Exception [ 0 ]: Required route parameter not passed: username ~ SYSPATH\classes\kohana\route.php [ 518 ]
--
#0 G:\Resources\PHP\app\kohana\application\views\template\header_home.php(17): Kohana_Route->uri(Array)
#1 G:\Resources\PHP\app\kohana\application\views\home.php(1): require_once('G:\Resources\PH...')
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 G:\Resources\PHP\app\kohana\application\classes\controller\home.php(125): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Home->after()
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#8 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-08 05:04:27 --- ERROR: Kohana_Exception [ 0 ]: Required route parameter not passed: username ~ SYSPATH\classes\kohana\route.php [ 518 ]
2012-01-08 05:04:27 --- STRACE: Kohana_Exception [ 0 ]: Required route parameter not passed: username ~ SYSPATH\classes\kohana\route.php [ 518 ]
--
#0 G:\Resources\PHP\app\kohana\application\views\template\header_home.php(18): Kohana_Route->uri(Array)
#1 G:\Resources\PHP\app\kohana\application\views\home.php(1): require_once('G:\Resources\PH...')
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 G:\Resources\PHP\app\kohana\application\classes\controller\home.php(125): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Home->after()
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#8 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-08 05:05:04 --- ERROR: Kohana_Exception [ 0 ]: Required route parameter not passed: username ~ SYSPATH\classes\kohana\route.php [ 518 ]
2012-01-08 05:05:04 --- STRACE: Kohana_Exception [ 0 ]: Required route parameter not passed: username ~ SYSPATH\classes\kohana\route.php [ 518 ]
--
#0 G:\Resources\PHP\app\kohana\application\views\template\header_home.php(18): Kohana_Route->uri(Array)
#1 G:\Resources\PHP\app\kohana\application\views\home.php(1): require_once('G:\Resources\PH...')
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 G:\Resources\PHP\app\kohana\application\classes\controller\home.php(125): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Home->after()
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#8 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-08 05:05:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tom was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-01-08 05:05:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tom was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-08 05:08:38 --- ERROR: ErrorException [ 2048 ]: Non-static method Kohana_Request::redirect() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\model\secure.php [ 85 ]
2012-01-08 05:08:38 --- STRACE: ErrorException [ 2048 ]: Non-static method Kohana_Request::redirect() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\model\secure.php [ 85 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\model\secure.php(85): Kohana_Core::error_handler(2048, 'Non-static meth...', 'G:\Resources\PH...', 85, Array)
#1 G:\Resources\PHP\app\kohana\application\classes\controller\index.php(71): Model_Secure->login('kohana', 'kohana')
#2 [internal function]: Controller_Index->action_login()
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-08 05:10:23 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Secure::$request ~ APPPATH\classes\model\secure.php [ 85 ]
2012-01-08 05:10:23 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Secure::$request ~ APPPATH\classes\model\secure.php [ 85 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\model\secure.php(85): Kohana_Core::error_handler(8, 'Undefined prope...', 'G:\Resources\PH...', 85, Array)
#1 G:\Resources\PHP\app\kohana\application\classes\controller\index.php(71): Model_Secure->login('kohana', 'kohana')
#2 [internal function]: Controller_Index->action_login()
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-08 05:13:43 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Secure::$request ~ APPPATH\classes\model\secure.php [ 85 ]
2012-01-08 05:13:43 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Secure::$request ~ APPPATH\classes\model\secure.php [ 85 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\model\secure.php(85): Kohana_Core::error_handler(8, 'Undefined prope...', 'G:\Resources\PH...', 85, Array)
#1 G:\Resources\PHP\app\kohana\application\classes\controller\index.php(71): Model_Secure->login('kohana', 'kohana')
#2 [internal function]: Controller_Index->action_login()
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-08 05:15:32 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\model\secure.php [ 86 ]
2012-01-08 05:15:32 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\model\secure.php [ 86 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-08 05:33:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_IS_EQUAL, expecting ')' ~ APPPATH\classes\model\secure.php [ 97 ]
2012-01-08 05:33:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_IS_EQUAL, expecting ')' ~ APPPATH\classes\model\secure.php [ 97 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-08 05:34:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_IS_EQUAL, expecting ')' ~ APPPATH\classes\model\secure.php [ 97 ]
2012-01-08 05:34:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_IS_EQUAL, expecting ')' ~ APPPATH\classes\model\secure.php [ 97 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-08 05:37:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\template\header_home.php [ 17 ]
2012-01-08 05:37:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\template\header_home.php [ 17 ]
--
#0 G:\Resources\PHP\app\kohana\application\views\template\header_home.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\Resources\PH...', 17, Array)
#1 G:\Resources\PHP\app\kohana\application\views\home.php(1): require_once('G:\Resources\PH...')
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 G:\Resources\PHP\app\kohana\application\classes\controller\home.php(135): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Home->after()
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#8 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-08 05:37:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\template\header_home.php [ 17 ]
2012-01-08 05:37:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\template\header_home.php [ 17 ]
--
#0 G:\Resources\PHP\app\kohana\application\views\template\header_home.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\Resources\PH...', 17, Array)
#1 G:\Resources\PHP\app\kohana\application\views\home.php(1): require_once('G:\Resources\PH...')
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 G:\Resources\PHP\app\kohana\application\classes\controller\home.php(135): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Home->after()
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#8 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-08 05:38:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\template\header_home.php [ 17 ]
2012-01-08 05:38:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\template\header_home.php [ 17 ]
--
#0 G:\Resources\PHP\app\kohana\application\views\template\header_home.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\Resources\PH...', 17, Array)
#1 G:\Resources\PHP\app\kohana\application\views\home.php(1): require_once('G:\Resources\PH...')
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 G:\Resources\PHP\app\kohana\application\classes\controller\home.php(135): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Home->after()
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#8 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-08 05:38:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\template\header_home.php [ 17 ]
2012-01-08 05:38:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\template\header_home.php [ 17 ]
--
#0 G:\Resources\PHP\app\kohana\application\views\template\header_home.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\Resources\PH...', 17, Array)
#1 G:\Resources\PHP\app\kohana\application\views\home.php(1): require_once('G:\Resources\PH...')
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 G:\Resources\PHP\app\kohana\application\classes\controller\home.php(135): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Home->after()
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#8 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-08 05:43:43 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\home.php [ 42 ]
2012-01-08 05:43:43 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\home.php [ 42 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\controller\home.php(42): Kohana_Core::error_handler(2, 'Attempt to assi...', 'G:\Resources\PH...', 42, Array)
#1 [internal function]: Controller_Home->before()
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-08 05:46:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\template\header_home.php [ 17 ]
2012-01-08 05:46:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\template\header_home.php [ 17 ]
--
#0 G:\Resources\PHP\app\kohana\application\views\template\header_home.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\Resources\PH...', 17, Array)
#1 G:\Resources\PHP\app\kohana\application\views\home.php(1): require_once('G:\Resources\PH...')
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 G:\Resources\PHP\app\kohana\application\classes\controller\home.php(137): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Home->after()
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#8 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-08 05:46:25 --- ERROR: Kohana_Exception [ 0 ]: Required route parameter not passed: username ~ SYSPATH\classes\kohana\route.php [ 518 ]
2012-01-08 05:46:25 --- STRACE: Kohana_Exception [ 0 ]: Required route parameter not passed: username ~ SYSPATH\classes\kohana\route.php [ 518 ]
--
#0 G:\Resources\PHP\app\kohana\application\views\template\header_home.php(17): Kohana_Route->uri(Array)
#1 G:\Resources\PHP\app\kohana\application\views\home.php(1): require_once('G:\Resources\PH...')
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 G:\Resources\PHP\app\kohana\application\classes\controller\home.php(138): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Home->after()
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#8 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-08 16:38:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL signup was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-01-08 16:38:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL signup was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-08 17:14:47 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH\views\template\header_home.php [ 17 ]
2012-01-08 17:14:47 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH\views\template\header_home.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-08 17:15:21 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\controller\index.php [ 33 ]
2012-01-08 17:15:21 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\controller\index.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-08 17:15:21 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\controller\index.php [ 33 ]
2012-01-08 17:15:21 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\controller\index.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-08 17:15:21 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\controller\index.php [ 33 ]
2012-01-08 17:15:21 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\controller\index.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-08 17:15:24 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\controller\index.php [ 33 ]
2012-01-08 17:15:24 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\controller\index.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-08 17:15:55 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\controller\index.php [ 33 ]
2012-01-08 17:15:55 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\controller\index.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-08 17:15:55 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\controller\index.php [ 33 ]
2012-01-08 17:15:55 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\controller\index.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-08 17:15:55 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\controller\index.php [ 33 ]
2012-01-08 17:15:55 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\controller\index.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-08 17:15:58 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\controller\index.php [ 33 ]
2012-01-08 17:15:58 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\controller\index.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-08 17:16:04 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\controller\index.php [ 33 ]
2012-01-08 17:16:04 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\controller\index.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-08 17:16:19 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\controller\index.php [ 33 ]
2012-01-08 17:16:19 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\controller\index.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-08 17:17:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\template\header_home.php [ 17 ]
2012-01-08 17:17:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\template\header_home.php [ 17 ]
--
#0 G:\Resources\PHP\app\kohana\application\views\template\header_home.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\Resources\PH...', 17, Array)
#1 G:\Resources\PHP\app\kohana\application\views\home.php(1): require_once('G:\Resources\PH...')
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 G:\Resources\PHP\app\kohana\application\classes\controller\home.php(133): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Home->after()
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#8 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-08 17:24:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tom/en was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-01-08 17:24:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tom/en was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-08 17:24:35 --- ERROR: ErrorException [ 1 ]: Cannot access protected property Request::$_get ~ APPPATH\classes\controller\home.php [ 33 ]
2012-01-08 17:24:35 --- STRACE: ErrorException [ 1 ]: Cannot access protected property Request::$_get ~ APPPATH\classes\controller\home.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-08 17:27:48 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH\classes\controller\home.php [ 33 ]
2012-01-08 17:27:48 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH\classes\controller\home.php [ 33 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\controller\home.php(33): Kohana_Core::error_handler(8, 'Undefined index...', 'G:\Resources\PH...', 33, Array)
#1 [internal function]: Controller_Home->before()
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-08 17:28:08 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH\classes\controller\home.php [ 33 ]
2012-01-08 17:28:08 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH\classes\controller\home.php [ 33 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\controller\home.php(33): Kohana_Core::error_handler(8, 'Undefined index...', 'G:\Resources\PH...', 33, Array)
#1 [internal function]: Controller_Home->before()
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-08 17:28:09 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH\classes\controller\home.php [ 33 ]
2012-01-08 17:28:09 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH\classes\controller\home.php [ 33 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\controller\home.php(33): Kohana_Core::error_handler(8, 'Undefined index...', 'G:\Resources\PH...', 33, Array)
#1 [internal function]: Controller_Home->before()
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-08 17:32:22 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\controller\index.php [ 33 ]
2012-01-08 17:32:22 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\controller\index.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-08 23:46:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\template\header_home.php [ 17 ]
2012-01-08 23:46:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\template\header_home.php [ 17 ]
--
#0 G:\Resources\PHP\app\kohana\application\views\template\header_home.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\Resources\PH...', 17, Array)
#1 G:\Resources\PHP\app\kohana\application\views\home.php(1): require_once('G:\Resources\PH...')
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 G:\Resources\PHP\app\kohana\application\classes\controller\home.php(146): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Home->after()
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#8 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-08 23:47:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH\views\login.php [ 1 ]
2012-01-08 23:47:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH\views\login.php [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}