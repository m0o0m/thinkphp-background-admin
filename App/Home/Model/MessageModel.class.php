<?php 
namespace Home\Model;

/**
* 
*/
class MessageModel extends CommonModel
{
	protected $_auto = array(
		array('addtime',NOW_TIME,self::MODEL_INSERT),
		array('uid',UID,self::MODEL_INSERT)
	);
}

 ?>