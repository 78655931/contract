<?php
// 用户模型
class DriverModel extends CommonModel {
	public $_validate	=	array(
		
		array('nickname','require','昵称必须'),
		
		);

	public $_auto		=	array(
		
		array('create_time','time',self::MODEL_INSERT,'function'),
		array('update_time','time',self::MODEL_UPDATE,'function'),
		);

	protected function pwdHash() {
		if(isset($_POST['password'])) {
			return pwdHash($_POST['password']);
		}else{
			return false;
		}
	}
}
?>