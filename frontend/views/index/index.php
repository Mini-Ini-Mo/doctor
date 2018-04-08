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
                <a href="" class="slider-a"><img src="images/slider_1.png"></a>
            </div>
            <div class="swiper-slide">
                <a href="" class="slider-a"><img src="images/slider_2.jpg"></a>
            </div>
            <div class="swiper-slide">
                <a href="" class="slider-a"><img src="images/slider_1.png"></a>
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
                  <a href="/index.php?r=jihua/jihua"><img src="images/icon/index_nav_icon2.png" alt="私人医生"></a>
                  <div class="caption">
                        <p>私人医生</p>
                  </div>
            </div>
         </div>
         <div class="col-xs-4">
            <div class="thumbnail">
                <a href="/index.php?r=jihua/jihua"><img src="images/icon/index_nav_icon3.png" alt="快速咨询"></a>
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
                      <img src="images/slider_1.png" alt="...">
                    </a>
                  </div>
                  
                  <div class="col-xs-12 col-md-6">
                    <a href="#" class="thumbnail">
                      <img src="images/slider_1.png" alt="...">
                    </a>
                  </div>
                  
                  <div class="col-xs-12 col-md-6">
                    <a href="#" class="thumbnail">
                      <img src="images/slider_1.png" alt="...">
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
                <div class="col-xs-12 col-md-6 doctor-post">
                   <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object doctor-headerimg" src="images/slider_1.png" alt="">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">Media heading</h4>
                        <p>22222222222</p>
                      </div>
                    </div>
                    
                    <div class="post">
                        <h4 class="post-title">测试标题测试标题测试标题测试标题</h4>
                        <div class="post-intro">测试标题测试标题测试标题测试标题</div>
                        <div class="post-footer">
                            <span>阅读&nbsp;20</span>&nbsp;&nbsp;&nbsp;&nbsp;<span>点赞&nbsp;20</span>
                        </div>
                    </div>
                 </div>
                 
                <div class="col-xs-12 col-md-6 doctor-post">
                   <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object doctor-headerimg" src="images/slider_1.png" alt="">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">Media heading</h4>
                        <p>22222222222</p>
                      </div>
                    </div>
                    <div class="post">
                        <h4 class="post-title">测试标题测试标题测试标题测试标题</h4>
                        <div class="post-intro">测试标题测试标题测试标题测试标题</div>
                        <div class="post-footer">
                            <span>阅读&nbsp;20</span>&nbsp;&nbsp;&nbsp;&nbsp;<span>点赞&nbsp;20</span>
                        </div>
                    </div>
                 </div>
                
                <div class="col-xs-12 col-md-6 doctor-post">
                   <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object doctor-headerimg" src="images/slider_1.png" alt="">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">Media heading</h4>
                        <p>22222222222</p>
                      </div>
                    </div>
                    <div class="post">
                        <h4 class="post-title">测试标题测试标题测试标题测试标题</h4>
                        <div class="post-intro">测试标题测试标题测试标题测试标题</div>
                        <div class="post-footer">
                            <span>阅读&nbsp;20</span>&nbsp;&nbsp;&nbsp;&nbsp;<span>点赞&nbsp;20</span>
                        </div>
                    </div>
                 </div>
            </div>
        
        
        </div>
    </div>
    
    