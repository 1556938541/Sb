<?php
header("content-type:text/html;charset=utf8");
// class person{
// 	public $name;
// 	public $gender;
// 	public function say(){
// 		echo $this->name,"\tis",$this->gender,"\r\n";
// 	}
// 	public function __set($name,$value){
// 		echo "Setting $name to $value \r\n";
// 		$this->$name = $value;
// 	}
// 	public function __get($name){
// 		if (!isset($this->$name)) {
// 			echo "未设置";
// 			$this->$name = "正在为你设置默认值";
// 		}
// 		return $this->$name;
// 	}
// }
// $student = new person();
// $student -> name = '张三';
// $student -> gender = '男';
// $student -> age = '19';
// $student -> address = '无籍贯';
// var_dump(get_object_vars($student));
// var_dump(get_class_vars(get_class($student)));
// echo get_class($student);

// $obj = new ReflectionClass('person');
// $className = $obj -> getName();
// $Methods = $Properties = array();
// foreach($obj -> getProperties() as $v){
// 	$Properties[$v -> getName()] = $v;
// }
// foreach($obj -> getMethods() as $v){
// 	$Methods[$v -> getName()] = $v;
// }
// echo "class{$className}\n{\n";
// is_array($Properties) && ksort($Properties);

// foreach($Properties as $k => $v){
// 	echo "\t";
// 	echo $v->isPublic() ? 'public' :'',
// 	$v -> isPrivate() ? 'private' : '',
// 	$v -> isProtected()?'protected':'',
// 	$v -> isStatic() ? 'static' : '';
// 	echo "\t{$k}\n";
// }

// echo "\n";
// if(is_array($Methods)) ksort($Methods);
// 	foreach ($Methods as $k => $v) {
// 		echo "\tfunction{$k}(){}\n";
// 	}
// echo "}\n";

// $a = null;
// try{
// 	$a = 5/1;
// 	echo $a,PHP_EOL;
// }catch(exception $e){
// 	$e->getMessage();
// 	$a = -1;
// }
// echo $a;

// // 定义两个异常类，它们需要继承自系统的 exception

// class emailException extends exception{

// }
// class pwdException extends exception{
// 	function __toString(){
// 		return "<div class=\"error\">Exception{$this->getCode()}:
// 		{$this->getMessage()}
// 		in File:{$this->getFile()} on line:{$this->getLine()}
// 		</div>";
// 		// 改写抛出异常结果
// 	}
// }
// function reg($reginfo = null){
// 	if (empty($reginfo) || !isset($reginfo)) {
// 		throw new Exception("非法参数");
// 	}
// 	if (empty($reginfo['emial'])) {
// 		throw new emailException("邮件为空");
// 	}
// 	if (empty($reginfo['pwd'] != $reginfo['regpwd'])) {
// 		throw new pwdException("两次密码不一致");
// 	}
// 	echo "注册成功";
// }
// try{
// 	reg(array('email'=>'18801148197@163.com','pwd'=>'123456','repwd'=>'123123'));
// }catch(emailException $ee){
// 	echo $ee -> getMessage();
// }catch(pwdException $ep){
// 	echo $ep;
// 	echo PHP_EOL,'特殊处理';
// }catch(Exception $e){
// 	echo $e -> getTraceAsString();
// 	echo PHP_EOL,'其他情况，统一处理';
// }

// class my_class{
// 	var $my_var;
// 	function _my_class($value){
// 		$this->my_var = $value;
// 	}
// }
// $a = new my_class(10);
// echo $a->my_var;
$array = array('1','1');
foreach($array as $k=>$v){
	$v = 2;
}
print_r($array);