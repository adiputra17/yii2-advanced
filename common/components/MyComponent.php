<?php

namespace common\components;
use yii\base\component;
use common\models\Statistic\Statistic;
use Yii;

/**
* Author : Adi Putra Utama
*/
class MyComponent extends Component
{
	// Define the Event
	const EVENT_AFTER_SOMETHING = 'after-something';

	// Create the handler
	public function myHandler(){
		//echo "<script> console.log('An Event occured') </script>";
	   	$statistic = new Statistic;
    	$statistic->access_time = date("Y-m-d H:i:s");
    	$statistic->user_ip = Yii::$app->getRequest()->getUserIP();
    	$statistic->user_host = Yii::$app->getRequest()->getUserHost();
    	$statistic->path_info = Yii::$app->getRequest()->getPathInfo();
    	$statistic->query_string = Yii::$app->getRequest()->getQueryString();
    	$statistic->save(); 
	}

	public $label1;
	private $label2;

	public function getLabel2(){
		return $this->_label2;
	}

	public function setLabel2($value){
		$this->_label2 = strtolower($value);
	}

	public function welcome(){
		echo "Hello.. Welcome to MyComponent";
	}

}

	   	// $statistic->touch('created_at');
	   	// $statistic->touch('updated_at');

?>