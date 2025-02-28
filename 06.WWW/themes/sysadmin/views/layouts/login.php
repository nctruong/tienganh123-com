<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="administrator" />
        <meta name="author" content="HMinh.IT" />
        <link href="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/css/styles.css" rel="stylesheet">
            <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
            <!--[if lt IE 9]>
              <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->

            <!-- Le fav and touch icons -->
            <link rel="shortcut icon" href="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/ico/favicon.ico"/>
            <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/ico/apple-touch-icon-144-precomposed.png"/>
            <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/ico/apple-touch-icon-114-precomposed.png"/>
            <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/ico/apple-touch-icon-72-precomposed.png"/>
            <link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/ico/apple-touch-icon-57-precomposed.png"/>
    </head>
    <body>
        <div class="container">
            <?php echo $content; ?>
        </div> <!-- /container -->
        <!-- Le javascript -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
        <script src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/js/jquery.js"></script>
        <script src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/js/application.js"></script>
    </body>
</html>
