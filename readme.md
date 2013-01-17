Zend Framework 2 Event Logger
====

Zend Framework 2 module that logs all events to the error_log.

Requirements
----
[Zend Framework 2](http://www.github.com/zendframework/zf2)


Installation
----

1. Put the module in your the /vendor folder of your application
2. Add Zf2EventLogger to the modules in your application.config.php

What does it do ?
----

This module logs every event that is triggered to the standard php log using the error_log command.

Sample output in error log
----

	Event "render" was triggered on target "Zend\\Mvc\\Application", with parameters {"application":{},"request":{},"response":{},"router":{},"route-match":{},"__RESULT__":{}}
	Event "renderer" was triggered on target "Zend\\View\\View", with parameters {"model":{},"renderer":null,"request":{},"response":{},"result":null}
	

	


