<?php

/**
* 
* @author lyy
* @date 2018年4月3日下午3:00:25
*/

use yii\base\Widget;
use yii\helpers\Url;
use app\components\HospitalWidget;
use yii\web\Request;

$request = new Request();

?>

    <!-- 名医banner -->
    <div class="mingyi-slider">
        <img src="images/mingyi_banner.jpg" alt="">
    </div>
    
    <!-- 热门门诊 -->
    <div class="mingyi-block hot-dep row">
        <div class="header">
            <p>热门门诊</p>
        </div>
        <div class="body">
            <div class="col-xs-3 col-md-3 hot-dep-item">
                <div class="thumbnail" style="width:100%;">
                      <a href="#"><img src="images/icon/dep_1.jpg" alt="妇科"></a>
                      <div class="caption">
                            <p>妇科</p>
                      </div>
                </div>
                <div class="hot-dep-icon"><img src="images/icon/hot_dep.png"></div>
            </div>
            <div class="col-xs-3 col-md-3 hot-dep-item">                
                <div class="thumbnail">
                      <a href="#"><img src="images/icon/dep_2.jpg" alt="儿科"></a>
                      <div class="caption">
                            <p>儿科</p>
                      </div>
                </div>
                <div class="hot-dep-icon"><img src="images/icon/hot_dep.png"></div>
            </div>
            <div class="col-xs-3 col-md-3 hot-dep-item">
                <div class="thumbnail">
                    <a href="#"><img src="images/icon/dep_3.jpg" alt="皮肤性病科"></a>
                    <div class="caption">
                        <p>皮肤性病科</p>
                    </div>
                </div>
                <div class="hot-dep-icon"><img src="images/icon/hot_dep.png"></div>
            </div>
            <div class="col-xs-3 col-md-3 hot-dep-item">
                <div class="thumbnail">
                    <a href="#"><img src="images/icon/dep_4.jpg" alt="内科"></a>
                    <div class="caption">
                        <p>内科</p>
                    </div>
                </div>
                <div class="hot-dep-icon"><img src="images/icon/hot_dep.png"></div>           
            </div>
            <div class="col-xs-3 col-md-3 hot-dep-item">
                <div class="thumbnail">
                      <a href="#"><img src="images/icon/dep_5.jpg" alt="男科"></a>
                      <div class="caption">
                            <p>男科</p>
                      </div>
                </div>
                <div class="hot-dep-icon"><img src="images/icon/hot_dep.png"></div>
            </div>
            <div class="col-xs-3 col-md-3 hot-dep-item">                
                <div class="thumbnail">
                      <a href="#"><img src="images/icon/dep_6.jpg" alt="产科"></a>
                      <div class="caption">
                            <p>产科</p>
                      </div>
                </div>
                <div class="hot-dep-icon"><img src="images/icon/hot_dep.png"></div>
            </div>
            <div class="col-xs-3 col-md-3 hot-dep-item">
                <div class="thumbnail">
                    <a href="#"><img src="images/icon/dep_7.jpg" alt="外科"></a>
                    <div class="caption">
                        <p>外科</p>
                    </div>
                </div>
                <div class="hot-dep-icon"><img src="images/icon/hot_dep.png"></div>
            </div>
            <div class="col-xs-3 col-md-3 hot-dep-item">
                <div class="thumbnail">
                    <a href="#"><img src="images/icon/dep_8.jpg" alt="中医科"></a>
                    <div class="caption">
                        <p>中医科</p>
                    </div>
                </div>
                <div class="hot-dep-icon"><img src="images/icon/hot_dep.png"></div>           
            </div>
        </div>
    </div>
    

    <!-- 名医第三块 -->
    <div class="mingyi-block mingyi-search">

        <div class="header row">
            <?= HospitalWidget::widget(['hosp'=>$request->get('hosp'),'dep_id'=>$request->get('dep_id')])?> 
        </div>
        
        <div class="body row mingyi-post">
            
            <?php 
                if (!empty($list)) {
                    foreach ($list as $item) {
            ?>
            <div class="col-xs-12 col-md-6 mingyi-post-item">
               <a href="<?= Url::toRoute(['doctor/index','id'=>$item->id])?>">
               <div class="media">
                  <div class="media-left">
                      <img class="media-object mingyi-doctor-headerimg" src="<?= $item->img?>" alt="">
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading"><?= $item->name?></h4>
                    <p><?= $item->hospital->name?>&nbsp;&nbsp;<?= $item->dep->name?></p>
                  </div>
                </div>
                
                <div class="post">
                    <div class="post-intro"><?= $item->intro?></div>
                </div>
                </a>
             </div>
             <?php                          
                    }
                }
             ?>
        </div>
    </div>
    
    
    

    
    