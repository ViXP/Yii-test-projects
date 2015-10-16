<?php
namespace app\controllers;
use yii\web\controller;

class CustomersController extends Controller {
	public function actionIndex {
		$records = $this->findRecordsByQuery();
		return $this->render('index', compact('records');
	}
}
?>
