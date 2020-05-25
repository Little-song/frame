<?php
namespace core;

use Klein\Klein;

class Route extends Klein
{
    public function route() 
    {
        $this->respond('GET', '/[:module]/[:controller]/[:method]', function($request){

            // 获取类名，用于实例化
            $class = $request->module . '\controller\\' . ucfirst($request->controller);
        
            // 实例化出一个类对象
            $object = new $class;
            
            // 获取请求参数
            $params = [];
            parse_str($_SERVER['QUERY_STRING'], $params);
        
            // 调用类方法
            call_user_func_array([$object, $request->method], $params);
        
        });
        
        $this->dispatch();
    }
}