<?php

/**
* 
* @author lyy
* @date 2018年4月3日下午3:00:25
*/
use yii\base\Widget;
use yii\helpers\Url;

$this->registerCssFile("static/swiper/dist/css/swiper.min.css", [
    'depends' => [\yii\web\JqueryAsset::className()],
], 'css-print-theme');
$this->registerJsFile('static/swiper/dist/js/swiper.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);

$js = <<<JS
    $(function(){
        var swiper = new Swiper('.swiper-container', {
            pagination: {
                el: '.swiper-pagination',
            },  
        });
    });
   
JS;

$this->registerJs($js, \yii\web\View::POS_END, 'index-swiper-js');

?>

    <!-- 幻灯片 -->
    <div class="swiper-container index-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="" class="slider-a"><img src="images/index_banner_1.jpg"></a>
            </div>
            <div class="swiper-slide">
                <a href="" class="slider-a"><img src="images/index_banner_2.jpg"></a>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    
    <!-- 导航 -->
    <div class="index-nav row text-center">
         <div class="col-xs-4">
            <div class="thumbnail">
                  <a href="<?= Url::toRoute(['mingyi'])?>"><img src="images/icon/index_nav_icon1.png" alt="名医问诊"></a>
                  <div class="caption">
                        <p>名医问诊</p>
                  </div>
            </div>
         </div>
         <div class="col-xs-4">
            
            <div class="thumbnail">
                  <a href="#"><img src="images/icon/index_nav_icon2.png" alt="私人医生"></a>
                  <div class="caption">
                        <p>私人医生</p>
                  </div>
            </div>
         </div>
         <div class="col-xs-4">
            <div class="thumbnail">
                <a href="#"><img src="images/icon/index_nav_icon3.png" alt="快速咨询"></a>
                <div class="caption">
                    <p>快速咨询</p>
                </div>
            </div>
         </div>
    </div>
    
    <!-- 名医工作室 -->
    <div class="index-block">
        <div class="header">
            <span class="header-title pull-left">名医工作室</span>
            <a href="#" class="pull-right">查看更多</a>
            <div class="clearfix"></div>
        </div>
        <div class="body">
            <div class="my-show">
                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <a href="#" class="thumbnail">
                      <img src="images/mingyi_video_1.jpg" alt="...">
                    </a>
                  </div>
                  
                  <div class="col-xs-12 col-md-6">
                    <a href="#" class="thumbnail">
                      <img src="images/mingyi_video_2.jpg" alt="...">
                    </a>
                  </div>
                  
                  <div class="col-xs-12 col-md-6">
                    <a href="#" class="thumbnail">
                      <img src="images/mingyi_video_3.jpg" alt="...">
                    </a>
                  </div>
                 
                </div>
            </div>
        
        </div>
    </div>
    
    <!-- 名医讲堂 -->
    <div class="index-block">
        <div class="header">
            <span class="header-title pull-left">名医讲堂</span>
            <a href="#" class="pull-right">查看更多</a>
            <div class="clearfix"></div>
        </div>
        <div class="body">
            
            <div class="row">

            <?php 
            
                $article = \common\models\Article::find();
                $article->select(['id', 'title','author','content']);
                $article->groupBy('author');
                $list = $article->with('doctor')->limit(3)->all();
                if (!empty($list)) {
                    foreach ($list as $item) {
            ?>
                <div class="col-xs-12 col-md-6 doctor-post">
                   <div class="media">
                      <div class="media-left">
                        <a href="<?= Url::toRoute(['doctor/index','id'=>$item->id])?>">
                          <img class="media-object doctor-headerimg" src="<?= $item->doctor->img?>" alt="">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading"><?= $item->doctor->name?></h4>
                        <p><?= $item->doctor->hospital->name?></p>
                      </div>
                    </div>
                    
                    <div class="post">
                        <h4 class="post-title"><?= $item->title?></h4>
                        <div class="post-intro"><?= $item->content?></div>
                        <div class="post-footer">
                            <span>阅读&nbsp;20</span>&nbsp;&nbsp;&nbsp;&nbsp;<span>点赞&nbsp;20</span>
                        </div>
                    </div>
                 </div>
                 
                 <?php 
                        }
                    }
                 ?>

            </div>

        </div>
    </div>
    
    