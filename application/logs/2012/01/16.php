<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-16 23:38:35 --- ERROR: ErrorException [ 2048 ]: Non-static method Model_Secure::set_lang() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\controller\index.php [ 34 ]
2012-01-16 23:38:35 --- STRACE: ErrorException [ 2048 ]: Non-static method Model_Secure::set_lang() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\controller\index.php [ 34 ]
--
#0 G:\Resources\PHP\app\kohana\application\classes\controller\index.php(34): Kohana_Core::error_handler(2048, 'Non-static meth...', 'G:\Resources\PH...', 34, Array)
#1 [internal function]: Controller_Index->before()
#2 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#3 G:\Resources\PHP\app\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 G:\Resources\PHP\app\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 G:\Resources\PHP\app\kohana\index.php(109): Kohana_Request->execute()
#6 {main}