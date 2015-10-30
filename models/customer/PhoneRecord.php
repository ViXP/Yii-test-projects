<?php 

namespace app\models\customer;
use yii\db\ActiveRecord;

class PhoneRecord extends ActiveRecord 
{
	public function rules() 
	{
		return [
			['customer_id', 'number'],
			[['number', 'string'],'required'],
			[['customer_id','number'], 'required']
		];
	}

	public static function tableName()
	{
		return 'phone';
	}
}
?>