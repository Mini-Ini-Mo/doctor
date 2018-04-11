<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Request;
use common\models\Doctor;


/**
 * Site controller
 */
class IndexController extends Controller
{
    
    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    /**
     * 名医
     */
    public function actionMingyi()
    {
        $request = new Request();
        $host = $request->get('hosp');
        $dep_id = $request->get('dep_id');
        
        
        $doctor = Doctor::find();

        $doctor->select(['id', 'img','name','intro','hid','did']);
        
        
        if (!empty($host)) {
            $doctor->where(['hid' => $host]);
        }
        
        if (!empty($dep_id)) {
            $doctor->where(['did' => $dep_id]);
        }

        $list = $doctor->with('hospital','dep')->limit(5)->all();
        return $this->render('mingyi',['list'=>$list]);
    }
    
    /**
     * 获取医院
     */
    public function actionGethospital($id = null)
    {
        $data = (new \yii\db\Query())
        ->select(['id', 'name'])
        ->from('dymy_hospital')
        ->all();
        
        return ['code'=>200,'result'=>$data];
        
    }
    
    /**
     * 获取科室
     */
    public function actionGetdep($id = null)
    {
        
    }
    
    
    
    
    
    
    


    
}
