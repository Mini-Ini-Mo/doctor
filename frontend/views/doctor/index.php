<?php

use yii\helpers\Url;
/**
* 
* @author lyy
* @date 2018年4月4日上午11:15:14
*/


$this->registerCssFile("static/swiper/dist/css/swiper.min.css", [
    'depends' => [\yii\web\JqueryAsset::className()],
], 'css-print-theme');
$this->registerJsFile('static/swiper/dist/js/swiper.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);

$js = <<<JS
    $(function(){
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            spaceBetween: 10,
        });
    });
  
JS;

$this->registerJs($js, \yii\web\View::POS_END, 'doctor-swiper-js');


?>

<!-- 医生简介 -->
<div class="doctor-info">
    <div class="base-info row">
        <div class="col-xs-8">
            <div class="header">
                <div class="row_1"><h4 class="name"><?= $doctor->name?></h4><span class="tags"><?= $doctor->dep->name?></span></div>
                <p class="row_2"><?= $doctor->hospital->name?></p>
            </div>
            <div class="body">
            <?= $doctor->intro?>
            </div>
        </div>
        <div class="col-xs-4 ">
            <img class="headerimg" src="<?= $doctor->img?>" style="width:100%;">
        </div>
    </div>
    
    <div class="doctor-base-tj">
        <div class="row">
            <div class="col-xs-4 col-md-4">
                <div class="thumbnail">
                      <p><span>1635<span>&nbsp;次</p>
                      <div class="caption">
                            <p>询问人数</p>
                      </div>
                </div>
            </div>
            
            <div class="col-xs-4 col-md-4">
                <div class="thumbnail">
                      <p><span>1635<span>%</p>
                      <div class="caption">
                            <p>好评率</p>
                      </div>
                </div>
            </div>
            
            <div class="col-xs-4 col-md-4">
                <div class="thumbnail">
                      <p><span>100<span>&nbsp;个</p>
                      <div class="caption">
                            <p>问诊人次</p>
                      </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- 专家讲堂 -->
<div class="doctor-base-info-block">
    <div class="header">
        <h4 class="title">专家讲堂</h4>
        <div class="title-bg"></div>
        <div class="clearfix"></div>
    </div>
    <div class="body">
        
        <?php 
            $artile = $doctor->article;
            if (!empty($artile)) {  
                foreach($artile as $item) {
        ?>
        
        <div class="post">
            <div class="post-header"><h4 class="title"><?= $item->title?></h4></div>
            <div class="post-body"><?= $item->content?></div>
            <div class="post-footer">
                <span class="tags">阅读&nbsp;20</span><span class="tags">赞&nbsp;0</span>
            </div>
        </div>
        <?php                     
                }
            }
        ?>
    </div>
</div>

<!-- 专家讲堂 -->
<div class="doctor-base-info-block less-live">
    <div class="header">
        <h4 class="title">讲座直播</h4>
        <div class="title-bg"></div>
        <div class="clearfix"></div>
    </div>
    <div class="body">
        
        <div class="swiper-container">
                <div class="swiper-wrapper">
               
                  <div class="swiper-slide video-one">
                    <a class="video-one-a" href="javascript:void(0);" data-src="">不孕不育讲座2018-01-03<br/>100次播放</a>
                  </div>
                  
                  <div class="swiper-slide video-one">
                    <a class="video-one-a" href="javascript:void(0);" data-src="">讲座直播2<br/>33分钟</a>
                  </div>
                  
                  <div class="swiper-slide video-one">
                    <a class="video-one-a" href="javascript:void(0);" data-src="">讲座直播22<br/>3分钟</a>
                  </div>
                  
                  <div class="swiper-slide video-one">
                    <a class="video-one-a" href="javascript:void(0);" data-src="">讲座直播2222<br/>33分钟</a>
                  </div>
                  
                  <div class="swiper-slide video-one">
                    <a class="video-one-a" href="javascript:void(0);" data-src="">讲座直播2<br/>3分钟</a>
                  </div>
                  
                  <div class="swiper-slide video-one" >
                    <a class="video-one-a" href="javascript:void(0);" data-src="">讲座直播22<br/>3分钟</a>
                  </div>
                
                 </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
          </div>
        
    </div>
</div>


<div class="doctor-base-info-footer row">
    <a class="func online-wechat">在线咨询</a>
    <a class="func order-doctor" href="<?= Url::toRoute(['order'])?>">预约就诊</a>
    <div class="clearfix"></div>
</div>















