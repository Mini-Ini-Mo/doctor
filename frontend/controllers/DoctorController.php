<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Request;
use common\models\Doctor;


/**
 * Site controller
 */
class DoctorController extends Controller{
    
    public function actionIndex($id)
    {
        $doctor = Doctor::findOne($id);
        
        if (empty($doctor)) {
            $this->redirect(['index/mingyi']);
        }

        return $this->render('index',['doctor'=>$doctor]);
    }
    
    /**
     * 预约
     */
    public function actionOrder()
    {
        return $this->render('order');
    }
    
}