<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;


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
        return $this->render('mingyi');
    }
    
    
    
    
    


    
}
