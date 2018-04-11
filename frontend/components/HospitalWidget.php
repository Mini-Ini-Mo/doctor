<?php

namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

class HospitalWidget extends Widget
{
    public $hosp = null;
    public $dep_id = null;
    
    public $hospital = [];
    public $dep = [];

    public function init()
    {
        parent::init();
        $this->hospital = $this->getHospital($this->dep_id);
        $this->dep = $this->getDep($this->hosp);
    }

    public function run()
    {
        $this->registerClientScript();
        $this->renderHospital();
        $this->renderDep();
        echo Html::tag('div', '' ,['class'=>'clearfix']);

    }
   
    /**
     * 获取医院
     */
    public function getHospital($dep_id = null)
    {
        if ($dep_id) {  //
            
            $data = (new \yii\db\Query())
            ->select(['h.id', 'h.name'])
            ->from('dymy_hospital_dep as hd')
            ->where('hd.did = '.$dep_id)
            ->leftJoin('dymy_hospital as h','h.id = hd.hid')
            ->all();
 
        } else {
            $data = (new \yii\db\Query())
            ->select(['id', 'name'])
            ->from('dymy_hospital')
            ->all(); 
        }
        
        return $data;
    }
    
    /**
     * 获取科室
     */
    public function getDep($hosp = null)
    {
       
        if ($hosp) {
            $data = (new \yii\db\Query())
            ->select(['d.id', 'd.name','d.pid'])
            ->from('dymy_hospital_dep as hd')
            ->where('hd.hid = '.$hosp)
            ->leftJoin('dymy_department as d','d.id = hd.did')
            ->all();
        } else {
            $data = (new \yii\db\Query())
            ->select(['id', 'name','pid'])
            ->from('dymy_department')
            ->all();
        }
        
        return $data;  
    }
    
    /**
     * 显示医院
     */
    public function renderHospital()
    {
        echo Html::beginTag('div', ['class'=>'mingyi-type mingyi-hospital']);
        echo Html::beginTag('select', ['name'=>"hosp",'class'=>'hospital','style'=>"border-right:1px solid #ccc;"]);
        echo Html::tag('option', '请选择医院' ,['value'=>'']);
        foreach ($this->hospital as $val) {
            
            if (!empty($this->hosp) && $this->hosp == $val['id']) {
                echo Html::tag('option', $val['name'] ,['value'=>$val['id'],'selected'=>'selected']);
            } else {
                echo Html::tag('option', $val['name'] ,['value'=>$val['id']]);
            }
            
        }

        echo Html::endTag('select');
        echo Html::endTag('div'); 
    }
    
    /**
     * 显示科室
     */
    public function renderDep()
    {
        echo Html::beginTag('div', ['class'=>'mingyi-type mingyi-dep']);
        echo Html::beginTag('select', ['name'=>"dep_id",'class'=>'department']);
        echo Html::tag('option', '请选择科室' ,['value'=>'']);
        
        foreach ($this->dep as $val) {
        
            if (!empty($this->dep_id) && $this->dep_id == $val['id']) {
                echo Html::tag('option', $val['name'] ,['value'=>$val['id'],'selected'=>'selected']);
            } else {
                echo Html::tag('option', $val['name'] ,['value'=>$val['id']]);
            }
        
        }
        
        echo Html::endTag('select');
        echo Html::endTag('div');
    }
    
    /**
     * 注册js
     */
    public function registerClientScript()
    {
        $view = $this->getView();
        $view->registerJsFile('/js/hospital.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
    }
    

}