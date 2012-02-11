<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-03 01:47:49 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index.php [ 42 ]
2012-01-03 01:47:49 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index.php [ 42 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\controller\index.php(42): Kohana_Core::error_handler(2, 'Attempt to assi...', 'G:\Resources\PH...', 42, Array)
#1 [internal function]: Controller_Index->action_index()
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-03 03:09:33 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index.php [ 134 ]
2012-01-03 03:09:33 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index.php [ 134 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\controller\index.php(134): Kohana_Core::error_handler(2, 'Attempt to assi...', 'G:\Resources\PH...', 134, Array)
#1 [internal function]: Controller_Index->after()
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-03 03:11:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 03:11:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 03:12:02 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index.php [ 134 ]
2012-01-03 03:12:02 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index.php [ 134 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\controller\index.php(134): Kohana_Core::error_handler(2, 'Attempt to assi...', 'G:\Resources\PH...', 134, Array)
#1 [internal function]: Controller_Index->after()
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-03 03:12:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 03:12:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 03:14:02 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index.php [ 85 ]
2012-01-03 03:14:02 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index.php [ 85 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\controller\index.php(85): Kohana_Core::error_handler(2, 'Attempt to assi...', 'G:\Resources\PH...', 85, Array)
#1 [internal function]: Controller_Index->action_register()
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-03 03:19:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: lang ~ APPPATH\views\index_reg.php [ 2 ]
2012-01-03 03:19:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: lang ~ APPPATH\views\index_reg.php [ 2 ]
--
#0 G:\Resources\PHP\app\kohana\application\views\index_reg.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\Resources\PH...', 2, Array)
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 G:\Resources\PHP\app\kohana\application\views\index.php(20): Kohana_View->__toString()
#5 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#6 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 G:\Resources\PHP\app\kohana\application\classes\controller\index.php(151): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Index->after()
#10 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#11 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-03 03:19:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 03:19:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 03:21:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 03:21:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 03:22:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 03:22:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 03:25:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH\views\index.php [ 4 ]
2012-01-03 03:25:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH\views\index.php [ 4 ]
--
#0 G:\Resources\PHP\app\kohana\application\views\index.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\Resources\PH...', 4, Array)
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 G:\Resources\PHP\app\kohana\application\classes\controller\index.php(154): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Index->after()
#6 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-03 03:26:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ',' or ';' ~ APPPATH\views\index.php [ 4 ]
2012-01-03 03:26:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ',' or ';' ~ APPPATH\views\index.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-03 03:26:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: lang ~ APPPATH\views\template\header_index.php [ 17 ]
2012-01-03 03:26:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: lang ~ APPPATH\views\template\header_index.php [ 17 ]
--
#0 G:\Resources\PHP\app\kohana\application\views\template\header_index.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\Resources\PH...', 17, Array)
#1 G:\Resources\PHP\app\kohana\application\views\index.php(1): require_once('G:\Resources\PH...')
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 G:\Resources\PHP\app\kohana\application\classes\controller\index.php(154): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Index->after()
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#8 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-03 03:27:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 03:27:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 03:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 03:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 03:34:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: lang ~ APPPATH\views\template\header_index.php [ 17 ]
2012-01-03 03:34:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: lang ~ APPPATH\views\template\header_index.php [ 17 ]
--
#0 G:\Resources\PHP\app\kohana\application\views\template\header_index.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\Resources\PH...', 17, Array)
#1 G:\Resources\PHP\app\kohana\application\views\index.php(1): require_once('G:\Resources\PH...')
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 G:\Resources\PHP\app\kohana\application\classes\controller\index.php(155): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Index->after()
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#8 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-03 03:47:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 03:47:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 03:54:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 03:54:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 17:26:14 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index.php [ 35 ]
2012-01-03 17:26:14 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index.php [ 35 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\controller\index.php(35): Kohana_Core::error_handler(2, 'Attempt to assi...', 'G:\Resources\PH...', 35, Array)
#1 [internal function]: Controller_Index->before()
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-03 17:35:53 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ SYSPATH\classes\kohana\i18n.php [ 120 ]
2012-01-03 17:35:53 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ SYSPATH\classes\kohana\i18n.php [ 120 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge() [...', 'G:\Resources\PH...', 120, Array)
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\i18n.php(120): array_merge(Array, 1)
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\i18n.php(81): Kohana_I18n::load('en')
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\i18n.php(161): Kohana_I18n::get('Home')
#4 G:\Resources\PHP\app\kohana\application\views\template\header_index.php(17): __('Home')
#5 G:\Resources\PHP\app\kohana\application\views\index.php(1): require_once('G:\Resources\PH...')
#6 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#8 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 G:\Resources\PHP\app\kohana\application\classes\controller\index.php(156): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Index->after()
#11 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#12 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#15 {main}
2012-01-03 17:36:12 --- ERROR: ErrorException [ 1 ]: Call to undefined function _() ~ APPPATH\views\index_login.php [ 4 ]
2012-01-03 17:36:12 --- STRACE: ErrorException [ 1 ]: Call to undefined function _() ~ APPPATH\views\index_login.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-03 17:36:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 17:36:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 17:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 17:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 17:37:49 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ SYSPATH\classes\kohana\i18n.php [ 120 ]
2012-01-03 17:37:49 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ SYSPATH\classes\kohana\i18n.php [ 120 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge() [...', 'G:\Resources\PH...', 120, Array)
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\i18n.php(120): array_merge(Array, 1)
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\i18n.php(81): Kohana_I18n::load('en')
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\i18n.php(161): Kohana_I18n::get('Home')
#4 G:\Resources\PHP\app\kohana\application\views\template\header_index.php(17): __('Home')
#5 G:\Resources\PHP\app\kohana\application\views\index.php(1): require_once('G:\Resources\PH...')
#6 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#8 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 G:\Resources\PHP\app\kohana\application\classes\controller\index.php(156): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Index->after()
#11 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#12 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#15 {main}
2012-01-03 17:38:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 17:38:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 17:41:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 17:41:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 17:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 17:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 17:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 17:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 17:41:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 17:41:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 17:42:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 17:42:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 17:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 17:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 17:44:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 17:44:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 17:44:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 17:44:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 17:45:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 17:45:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 17:45:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 17:45:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 17:46:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 17:46:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 17:47:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 17:47:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 17:48:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 17:48:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 18:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index/reg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-01-03 18:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index/reg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-03 18:43:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 18:43:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 18:43:53 --- ERROR: ErrorException [ 1 ]: Cannot access protected property Request::$_post ~ APPPATH\classes\controller\index.php [ 92 ]
2012-01-03 18:43:53 --- STRACE: ErrorException [ 1 ]: Cannot access protected property Request::$_post ~ APPPATH\classes\controller\index.php [ 92 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-03 18:45:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 18:45:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 18:45:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 18:45:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 18:45:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 18:45:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 18:45:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 18:45:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 18:46:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 18:46:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 18:46:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 18:46:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 18:47:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 18:47:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 19:10:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 19:10:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 19:10:53 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Index::$Model_Index ~ APPPATH\classes\controller\index.php [ 111 ]
2012-01-03 19:10:53 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Index::$Model_Index ~ APPPATH\classes\controller\index.php [ 111 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\controller\index.php(111): Kohana_Core::error_handler(8, 'Undefined prope...', 'G:\Resources\PH...', 111, Array)
#1 [internal function]: Controller_Index->action_register()
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-03 19:21:53 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Index::$Model_Index ~ APPPATH\classes\controller\index.php [ 111 ]
2012-01-03 19:21:53 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Index::$Model_Index ~ APPPATH\classes\controller\index.php [ 111 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\controller\index.php(111): Kohana_Core::error_handler(8, 'Undefined prope...', 'G:\Resources\PH...', 111, Array)
#1 [internal function]: Controller_Index->action_register()
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-03 19:30:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 19:30:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 19:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 19:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 19:30:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 19:30:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 19:30:48 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Index::$Model_Index ~ APPPATH\classes\controller\index.php [ 111 ]
2012-01-03 19:30:48 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Index::$Model_Index ~ APPPATH\classes\controller\index.php [ 111 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\controller\index.php(111): Kohana_Core::error_handler(8, 'Undefined prope...', 'G:\Resources\PH...', 111, Array)
#1 [internal function]: Controller_Index->action_register()
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-03 19:31:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 19:31:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 19:31:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 19:31:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 19:31:17 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Index::$Model_Index ~ APPPATH\classes\controller\index.php [ 111 ]
2012-01-03 19:31:17 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Index::$Model_Index ~ APPPATH\classes\controller\index.php [ 111 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\controller\index.php(111): Kohana_Core::error_handler(8, 'Undefined prope...', 'G:\Resources\PH...', 111, Array)
#1 [internal function]: Controller_Index->action_register()
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-03 19:31:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 19:31:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 19:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 19:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 19:32:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 19:32:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 19:32:46 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Index::$Model_Index ~ APPPATH\classes\controller\index.php [ 83 ]
2012-01-03 19:32:46 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Index::$Model_Index ~ APPPATH\classes\controller\index.php [ 83 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\controller\index.php(83): Kohana_Core::error_handler(8, 'Undefined prope...', 'G:\Resources\PH...', 83, Array)
#1 [internal function]: Controller_Index->action_login()
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-03 19:33:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 19:33:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 19:34:51 --- ERROR: ErrorException [ 2048 ]: Non-static method Model_Index::user_login() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\controller\index.php [ 83 ]
2012-01-03 19:34:51 --- STRACE: ErrorException [ 2048 ]: Non-static method Model_Index::user_login() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\controller\index.php [ 83 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\controller\index.php(83): Kohana_Core::error_handler(2048, 'Non-static meth...', 'G:\Resources\PH...', 83, Array)
#1 [internal function]: Controller_Index->action_login()
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-03 19:36:01 --- ERROR: ErrorException [ 1 ]: Class 'index' not found ~ APPPATH\classes\controller\index.php [ 83 ]
2012-01-03 19:36:01 --- STRACE: ErrorException [ 1 ]: Class 'index' not found ~ APPPATH\classes\controller\index.php [ 83 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-03 19:45:25 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\index.php [ 84 ]
2012-01-03 19:45:25 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\index.php [ 84 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-03 19:45:54 --- ERROR: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2012-01-03 19:45:54 --- STRACE: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 G:\Resources\PHP\app\kohana\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 G:\Resources\PHP\app\kohana\modules\database\classes\kohana\database\mysql.php(432): Kohana_Database_MySQL->connect()
#2 G:\Resources\PHP\app\kohana\modules\database\classes\kohana\database.php(473): Kohana_Database_MySQL->escape('kohana')
#3 [internal function]: Kohana_Database->quote('kohana')
#4 G:\Resources\PHP\app\kohana\modules\database\classes\kohana\database\query.php(189): array_map(Array, Array)
#5 G:\Resources\PHP\app\kohana\modules\database\classes\kohana\database\query.php(228): Kohana_Database_Query->compile(Object(Database_MySQL))
#6 G:\Resources\PHP\app\kohana\application\classes\model\index.php(28): Kohana_Database_Query->execute()
#7 G:\Resources\PHP\app\kohana\application\classes\controller\index.php(84): Model_Index->user_login('kohana', 'kohana')
#8 [internal function]: Controller_Index->action_login()
#9 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#10 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-01-03 19:52:10 --- ERROR: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2012-01-03 19:52:10 --- STRACE: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 G:\Resources\PHP\app\kohana\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 G:\Resources\PHP\app\kohana\modules\database\classes\kohana\database\mysql.php(432): Kohana_Database_MySQL->connect()
#2 G:\Resources\PHP\app\kohana\modules\database\classes\kohana\database.php(473): Kohana_Database_MySQL->escape('kohana')
#3 [internal function]: Kohana_Database->quote('kohana')
#4 G:\Resources\PHP\app\kohana\modules\database\classes\kohana\database\query.php(189): array_map(Array, Array)
#5 G:\Resources\PHP\app\kohana\modules\database\classes\kohana\database\query.php(228): Kohana_Database_Query->compile(Object(Database_MySQL))
#6 G:\Resources\PHP\app\kohana\application\classes\model\index.php(28): Kohana_Database_Query->execute()
#7 G:\Resources\PHP\app\kohana\application\classes\controller\index.php(84): Model_Index->user_login('kohana', 'kohana')
#8 [internal function]: Controller_Index->action_login()
#9 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#10 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-01-03 19:52:16 --- ERROR: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2012-01-03 19:52:16 --- STRACE: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 G:\Resources\PHP\app\kohana\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 G:\Resources\PHP\app\kohana\modules\database\classes\kohana\database\mysql.php(432): Kohana_Database_MySQL->connect()
#2 G:\Resources\PHP\app\kohana\modules\database\classes\kohana\database.php(473): Kohana_Database_MySQL->escape('kohana')
#3 [internal function]: Kohana_Database->quote('kohana')
#4 G:\Resources\PHP\app\kohana\modules\database\classes\kohana\database\query.php(189): array_map(Array, Array)
#5 G:\Resources\PHP\app\kohana\modules\database\classes\kohana\database\query.php(228): Kohana_Database_Query->compile(Object(Database_MySQL))
#6 G:\Resources\PHP\app\kohana\application\classes\model\index.php(28): Kohana_Database_Query->execute()
#7 G:\Resources\PHP\app\kohana\application\classes\controller\index.php(84): Model_Index->user_login('kohana', 'kohana')
#8 [internal function]: Controller_Index->action_login()
#9 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#10 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-01-03 19:52:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\classes\controller\index.php [ 86 ]
2012-01-03 19:52:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\classes\controller\index.php [ 86 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\controller\index.php(86): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\Resources\PH...', 86, Array)
#1 [internal function]: Controller_Index->action_login()
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-03 19:53:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 19:53:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 19:53:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 19:53:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 19:53:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 19:53:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 19:55:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\index.php [ 106 ]
2012-01-03 19:55:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\index.php [ 106 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-03 19:55:48 --- ERROR: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\model\index.php [ 11 ]
2012-01-03 19:55:48 --- STRACE: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\model\index.php [ 11 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\model\index.php(11): Kohana_Core::error_handler(2048, 'Only variables ...', 'G:\Resources\PH...', 11, Array)
#1 G:\Resources\PHP\app\kohana\application\classes\controller\index.php(114): Model_Index->user_register('admin', 'admin', 'admin@qq.com')
#2 [internal function]: Controller_Index->action_register()
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-03 19:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 19:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 19:56:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 19:56:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 19:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 19:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 19:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 19:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 19:58:29 --- ERROR: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\model\index.php [ 11 ]
2012-01-03 19:58:29 --- STRACE: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\model\index.php [ 11 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\model\index.php(11): Kohana_Core::error_handler(2048, 'Only variables ...', 'G:\Resources\PH...', 11, Array)
#1 G:\Resources\PHP\app\kohana\application\classes\controller\index.php(113): Model_Index->user_register('tom', 'tom', 'tom@qq.com')
#2 [internal function]: Controller_Index->action_register()
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-03 19:59:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 19:59:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 19:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 19:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 19:59:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 19:59:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 20:07:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 20:07:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 20:07:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 20:07:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 20:29:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 20:29:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 20:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 20:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 20:29:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 20:29:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 20:29:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 20:29:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-03 20:56:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zh/index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-03 20:56:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zh/index/index/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}