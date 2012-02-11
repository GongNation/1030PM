<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-31 00:36:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/home/js/html5.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 00:36:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/home/js/html5.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 00:36:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/home/css/default.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 00:36:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/home/css/default.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 00:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 00:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 02:46:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 02:46:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 02:46:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 02:46:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 02:46:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 02:46:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 02:46:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 02:46:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 02:48:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 02:48:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 02:56:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index.php [ 5 ]
2011-12-31 02:56:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index.php [ 5 ]
--
#0 G:\Resources\PHP\app\kohana\application\views\index.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\Resources\PH...', 5, Array)
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#6 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-31 02:56:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index.php [ 5 ]
2011-12-31 02:56:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index.php [ 5 ]
--
#0 G:\Resources\PHP\app\kohana\application\views\index.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'G:\Resources\PH...', 5, Array)
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#6 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-31 02:56:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 02:56:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 03:16:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 03:16:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 03:20:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 03:20:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 03:20:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 03:20:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 03:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 03:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 10:38:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 10:38:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 10:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 10:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 10:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 10:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 10:43:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 10:43:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 10:43:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 10:43:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 10:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 10:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 10:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 10:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 10:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 10:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 10:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 10:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 10:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 10:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 10:44:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 10:44:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 10:44:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 10:44:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 10:44:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 10:44:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 10:44:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 10:44:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 10:44:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 10:44:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 10:45:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 10:45:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 10:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 10:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 10:45:55 --- ERROR: Kohana_Exception [ 0 ]: Required route parameter not passed: controller ~ SYSPATH\classes\kohana\route.php [ 518 ]
2011-12-31 10:45:55 --- STRACE: Kohana_Exception [ 0 ]: Required route parameter not passed: controller ~ SYSPATH\classes\kohana\route.php [ 518 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\controller\home.php(78): Kohana_Route->uri(Array)
#1 [internal function]: Controller_Home->after()
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-31 10:46:38 --- ERROR: Kohana_Exception [ 0 ]: Required route parameter not passed: controller ~ SYSPATH\classes\kohana\route.php [ 518 ]
2011-12-31 10:46:38 --- STRACE: Kohana_Exception [ 0 ]: Required route parameter not passed: controller ~ SYSPATH\classes\kohana\route.php [ 518 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\controller\home.php(78): Kohana_Route->uri(Array)
#1 [internal function]: Controller_Home->after()
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-31 10:46:40 --- ERROR: Kohana_Exception [ 0 ]: Required route parameter not passed: controller ~ SYSPATH\classes\kohana\route.php [ 518 ]
2011-12-31 10:46:40 --- STRACE: Kohana_Exception [ 0 ]: Required route parameter not passed: controller ~ SYSPATH\classes\kohana\route.php [ 518 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\controller\home.php(78): Kohana_Route->uri(Array)
#1 [internal function]: Controller_Home->after()
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-31 10:46:40 --- ERROR: Kohana_Exception [ 0 ]: Required route parameter not passed: controller ~ SYSPATH\classes\kohana\route.php [ 518 ]
2011-12-31 10:46:40 --- STRACE: Kohana_Exception [ 0 ]: Required route parameter not passed: controller ~ SYSPATH\classes\kohana\route.php [ 518 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\controller\home.php(78): Kohana_Route->uri(Array)
#1 [internal function]: Controller_Home->after()
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-31 10:46:41 --- ERROR: Kohana_Exception [ 0 ]: Required route parameter not passed: controller ~ SYSPATH\classes\kohana\route.php [ 518 ]
2011-12-31 10:46:41 --- STRACE: Kohana_Exception [ 0 ]: Required route parameter not passed: controller ~ SYSPATH\classes\kohana\route.php [ 518 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\controller\home.php(78): Kohana_Route->uri(Array)
#1 [internal function]: Controller_Home->after()
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-31 10:46:42 --- ERROR: Kohana_Exception [ 0 ]: Required route parameter not passed: controller ~ SYSPATH\classes\kohana\route.php [ 518 ]
2011-12-31 10:46:42 --- STRACE: Kohana_Exception [ 0 ]: Required route parameter not passed: controller ~ SYSPATH\classes\kohana\route.php [ 518 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\controller\home.php(78): Kohana_Route->uri(Array)
#1 [internal function]: Controller_Home->after()
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-31 10:47:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 10:47:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 13:25:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 13:25:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 13:50:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 13:50:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 13:51:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 13:51:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 13:53:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 13:53:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 13:54:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 13:54:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 13:54:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 13:54:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 13:54:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 13:54:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 13:59:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 13:59:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 17:53:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\controller\home.php [ 38 ]
2011-12-31 17:53:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\controller\home.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-31 17:53:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\controller\home.php [ 38 ]
2011-12-31 17:53:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\controller\home.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-31 17:57:13 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\controller\home.php [ 38 ]
2011-12-31 17:57:13 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\controller\home.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-31 17:59:25 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\controller\home.php [ 38 ]
2011-12-31 17:59:25 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\controller\home.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-31 18:03:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\controller\home.php [ 38 ]
2011-12-31 18:03:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\controller\home.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-31 18:05:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\controller\home.php [ 38 ]
2011-12-31 18:05:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\controller\home.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-31 18:14:15 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\controller\home.php [ 38 ]
2011-12-31 18:14:15 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\controller\home.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-31 18:14:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\controller\home.php [ 38 ]
2011-12-31 18:14:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\controller\home.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-31 18:14:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\controller\home.php [ 38 ]
2011-12-31 18:14:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\controller\home.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-31 18:15:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\controller\home.php [ 38 ]
2011-12-31 18:15:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\controller\home.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-31 18:15:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\controller\home.php [ 38 ]
2011-12-31 18:15:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\controller\home.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-31 18:29:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL en/home was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-12-31 18:29:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL en/home was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-31 18:30:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL zh/home was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-12-31 18:30:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL zh/home was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-31 18:34:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/index/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 18:34:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/index/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 18:34:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/index/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 18:34:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/index/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 18:34:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/index/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 18:34:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/index/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 18:35:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/index/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 18:35:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/index/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 18:37:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/index/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 18:37:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/index/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 18:37:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/index/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 18:37:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/index/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 18:37:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 18:37:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 18:40:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/en was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-12-31 18:40:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/en was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-31 21:08:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/en was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-12-31 21:08:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/en was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-31 21:08:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/zh was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-12-31 21:08:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/zh was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-31 22:31:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/en was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-12-31 22:31:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/en was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-31 22:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 22:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 22:33:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 22:33:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 22:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 22:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 22:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/home/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 22:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/home/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 22:34:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zh/home/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 22:34:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zh/home/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 22:34:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/home/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 22:34:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/home/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 22:34:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zh/home/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 22:34:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zh/home/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 22:34:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/home/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 22:34:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/home/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-31 23:50:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-31 23:50:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}