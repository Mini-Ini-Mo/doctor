<?php 

    use mdm\admin\components\MenuHelper;
?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?php /*dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Some tools',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    [
                        'label' => '菜单管理',
                        'icon' => 'fa fa-circle-o',
                        'url' => 'javascript:;',
                        'items' => [
                            ['label' => '医院管理', 'icon' => '', 'url' => ''],
                            ['label' => '科室管理', 'icon' => '', 'url' => ''],
                            ['label' => '巡诊管理', 'icon' => '', 'url' => ''],
                            ['label' => '医生管理', 'icon' => '', 'url' => ''],
                        ],
                    ],
                ],
            ]
        ) */?>
        
        
        <?php 
        
			$callback = function($menu){
				$data = json_decode($menu['data'], true);
				$items = $menu['children'];
				$return = [
						'label' => $menu['name'],
						'url' => [$menu['route']],
				];
				//处理我们的配置
				if ($data) {
					//visible
					isset($data['visible']) && $return['visible'] = $data['visible'];
					//icon
					isset($data['icon']) && $data['icon'] && $return['icon'] = $data['icon'];
					//other attribute e.g. class...
					$return['options'] = $data;
				}
				//没配置图标的显示默认图标，默认图标大家可以自己随便修改
				(!isset($return['icon']) || !$return['icon']) && $return['icon'] = 'circle-o';
				$items && $return['items'] = $items;
			
				return $return;
			};
		
		  ?>  
		
		<?= dmstr\widgets\Menu::widget([
		    'options' => ['class' => 'sidebar-menu tree','data-widget'=> 'tree'],
		    'items' => MenuHelper::getAssignedMenu(Yii::$app->user->id,null,$callback),
		]); ?>

    </section>

</aside>
