<?php

/**
* 
* @author lyy
* @date 2018年4月3日下午3:00:25
*/

use yii\base\Widget;
use yii\helpers\Url;

?>

    <!-- 名医banner -->
    <div class="mingyi-slider">
        <img src="images/slider_1.png" alt="">
    </div>
    
    <!-- 热门门诊 -->
    <div class="mingyi-block hot-dep row">
        <div class="header">
            <p>热门门诊</p>
        </div>
        <div class="body">
            <div class="col-xs-3 col-md-3 hot-dep-item">
                <div class="thumbnail" style="width:100%;">
                      <a href="/index.php?r=jihua/jihua"><img src="images/icon/index_nav_icon2.png" alt="私人医生"></a>
                      <div class="caption">
                            <p>妇科</p>
                      </div>
                </div>
            </div>
            <div class="col-xs-3 col-md-3 hot-dep-item">                
                <div class="thumbnail">
                      <a href="/index.php?r=jihua/jihua"><img src="images/icon/index_nav_icon2.png" alt="私人医生"></a>
                      <div class="caption">
                            <p>儿科</p>
                      </div>
                </div></div>
            <div class="col-xs-3 col-md-3 hot-dep-item">
                <div class="thumbnail">
                    <a href="/index.php?r=jihua/jihua"><img src="images/icon/index_nav_icon2.png" alt="私人医生"></a>
                    <div class="caption">
                        <p>皮肤性病科</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-3 col-md-3 hot-dep-item">
                <div class="thumbnail">
                    <a href="/index.php?r=jihua/jihua"><img src="images/icon/index_nav_icon2.png" alt="私人医生"></a>
                    <div class="caption">
                        <p>内科</p>
                    </div>
                </div>            
            </div>
            <div class="col-xs-3 col-md-3 hot-dep-item">
                <div class="thumbnail">
                      <a href="/index.php?r=jihua/jihua"><img src="images/icon/index_nav_icon2.png" alt="私人医生"></a>
                      <div class="caption">
                            <p>男科</p>
                      </div>
                </div>
            </div>
            <div class="col-xs-3 col-md-3 hot-dep-item">                
                <div class="thumbnail">
                      <a href="/index.php?r=jihua/jihua"><img src="images/icon/index_nav_icon2.png" alt="私人医生"></a>
                      <div class="caption">
                            <p>产科</p>
                      </div>
                </div></div>
            <div class="col-xs-3 col-md-3 hot-dep-item">
                <div class="thumbnail">
                    <a href="/index.php?r=jihua/jihua"><img src="images/icon/index_nav_icon2.png" alt="私人医生"></a>
                    <div class="caption">
                        <p>外科</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-3 col-md-3 hot-dep-item">
                <div class="thumbnail">
                    <a href="/index.php?r=jihua/jihua"><img src="images/icon/index_nav_icon2.png" alt="私人医生"></a>
                    <div class="caption">
                        <p>中医科</p>
                    </div>
                </div>            
            </div>
        </div>
    </div>
    
    <!-- 名医第三块 -->
    <div class="mingyi-block mingyi-search">
        <div class="header row">
            <div class="mingyi-type mingyi-hospital">
                <select name="hosp" style="border-right:1px solid #ccc;">
                    <option>医院</option>
                    <option value="2">301医院</option>
                </select>
            </div>
            
            <div class="mingyi-type mingyi-dep">
                <select name="dep">
                    <option>科室</option>
                    <option value="2">骨科</option>
                </select>
            </div>
            <div class="clearfix"></div>
            
        </div>
        <div class="body row mingyi-post">
            
            <div class="col-xs-12 col-md-6 mingyi-post-item">
               <a href="<?= Url::toRoute(['doctor/index'])?>">
               <div class="media">
                  <div class="media-left">
                      <img class="media-object mingyi-doctor-headerimg" src="images/slider_1.png" alt="">
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Media heading</h4>
                    <p>22222222222</p>
                  </div>
                </div>
                
                <div class="post">
                    <div class="post-intro">测试标题测试标题测试标题测试标题</div>
                </div>
                </a>
             </div>
                 
                <div class="col-xs-12 col-md-6 mingyi-post-item">
                    <a href="<?= Url::toRoute(['doctor/index'])?>">
                       <div class="media">
                          <div class="media-left">
                              <img class="media-object mingyi-doctor-headerimg" src="images/slider_1.png" alt="">
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading">Media heading</h4>
                            <p>22222222222</p>
                          </div>
                        </div>
                        <div class="post">
                            <div class="post-intro">测试标题测试标题测试标题测试标题测试标题测试标题测试标题测试标题测试标题测试标题测试标题测试标题</div>
                        </div>
                    </a>
                 </div>

        </div>
    </div>
    
    
    

    
    