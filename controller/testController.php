<?php 
/** 
 * 测试控制器 
 * @copyright   Copyright(c) 2011 
 * @author      yuansir <yuansir@live.cn/yuansir-web.com> 
 * @version     1.0 
 */ 
class testController extends Controller { 
        
        public function __construct() { 
                parent::__construct(); 
        } 

        public function index() { 
                echo "test"; 
        } 
        
        public function testDb() { 
                $modTest = $this->model('test');        //示例化test模型        
                $databases = $modTest->testDatebases(); //调用test模型中 testDatebases()方法 
                var_dump($databases); 
        } 
} 