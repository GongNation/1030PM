<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-02 01:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-02 01:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-02 01:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/home/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-01-02 01:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/home/home/media/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-02 05:47:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '.', expecting T_FUNCTION ~ APPPATH\classes\controller\home.php [ 16 ]
2012-01-02 05:47:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '.', expecting T_FUNCTION ~ APPPATH\classes\controller\home.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-02 15:19:43 --- ERROR: ErrorException [ 8 ]: Use of undefined constant kohana - assumed 'kohana' ~ APPPATH\views\index.php [ 31 ]
2012-01-02 15:19:43 --- STRACE: ErrorException [ 8 ]: Use of undefined constant kohana - assumed 'kohana' ~ APPPATH\views\index.php [ 31 ]
--
#0 G:\Resources\PHP\app\kohana\application\views\index.php(31): Kohana_Core::error_handler(8, 'Use of undefine...', 'G:\Resources\PH...', 31, Array)
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 G:\Resources\PHP\app\kohana\application\classes\controller\home.php(129): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Home->after()
#6 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-02 15:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-01-02 15:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-02 15:39:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-01-02 15:39:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-02 15:40:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-01-02 15:40:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-02 15:41:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-01-02 15:41:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-02 15:41:23 --- ERROR: Kohana_Exception [ 0 ]: The requested route does not exist: home ~ SYSPATH\classes\kohana\route.php [ 106 ]
2012-01-02 15:41:23 --- STRACE: Kohana_Exception [ 0 ]: The requested route does not exist: home ~ SYSPATH\classes\kohana\route.php [ 106 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\controller\index.php(29): Kohana_Route::get('home')
#1 [internal function]: Controller_Index->before()
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-02 15:45:10 --- ERROR: Kohana_Exception [ 0 ]: The requested route does not exist: home ~ SYSPATH\classes\kohana\route.php [ 106 ]
2012-01-02 15:45:10 --- STRACE: Kohana_Exception [ 0 ]: The requested route does not exist: home ~ SYSPATH\classes\kohana\route.php [ 106 ]
--
#0 G:\Resources\PHP\app\kohana\application\views\index.php(4): Kohana_Route::get('home')
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 G:\Resources\PHP\app\kohana\application\classes\controller\index.php(129): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Index->after()
#6 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-02 15:45:22 --- ERROR: Kohana_Exception [ 0 ]: The requested route does not exist: home ~ SYSPATH\classes\kohana\route.php [ 106 ]
2012-01-02 15:45:22 --- STRACE: Kohana_Exception [ 0 ]: The requested route does not exist: home ~ SYSPATH\classes\kohana\route.php [ 106 ]
--
#0 G:\Resources\PHP\app\kohana\application\views\index.php(4): Kohana_Route::get('home')
#1 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(61): include('G:\Resources\PH...')
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('G:\Resources\PH...', Array)
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 G:\Resources\PHP\app\kohana\application\classes\controller\index.php(129): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Index->after()
#6 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#7 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#10 {main}