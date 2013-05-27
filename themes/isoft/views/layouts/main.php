<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <!-- blueprint CSS framework -->
        <!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/screen.css" media="screen, projection" /> -->
        <!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" media="print" /> -->
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>
        <div class="row-fluid" id="page">
            <div class="span12">
                <div class="row-fluid">
                    <header class="span12 text-left">
                        <h1><?php echo Yii::app()->name; ?></h1>                        
                    </header><!-- header -->                     
                </div>


                <div class="row-fluid">                    
                    <div id="mainmenu" class="span2">
                        <?php
                        $this->widget('bootstrap.widgets.TbMenu', array(
                            'type' => 'list',
                            'items' => array(
                                array('label' => 'Menu', 'itemOptions' => array('class' => 'nav-header')),
                                array('label' => 'Profile', 'url' => array('/profile/admin')),
                                '',
                                array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                                array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
                            )
                        ));
                        ?>
                    </div><!-- mainmenu -->

                    <div id="breadcrumbs" class="span10">
                        <?php if (isset($this->breadcrumbs)): ?>    
                            <?php
                            $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
                                'links' => $this->breadcrumbs,
                            ));
                            ?>
                        <?php endif ?>

                        <?php
                        $this->widget('bootstrap.widgets.TbButtonGroup', array(
                            'buttons' => $this->menu,
                        ));
                        ?>     
                    </div><!-- breadcrumbs -->


                    <div id="content" class="span9">
                        <?php echo $content; ?>
                    </div>                                        
                </div>


                <div class="clear"></div>

                <div class="row-fluid">
                    <footer class="span12 text-center">
                        Copyright &copy; <?php echo date('Y'); ?> by My Company. All Rights Reserved.<br/>
                        <?php echo Yii::powered(); ?>
                    </footer><!-- footer -->            
                </div>
            </div><!-- page -->
        </div>
    </body>
</html>
