<div id='sub-nav' class='row-fluid'>
    <div class='page3'>
        <div class='title_ab span4'>
            <span class="row-fluid span12 title_small">Danh mục</span>
            <span class="row-fluid span12 title_big"><?php echo $sroot->name ?>-<?php echo $root->title ?></span>           
        </div>
        
    </div>
</div><!-- end #sub-nav -->
<div id='wrap-en' class='row-fluid'>

    <div class="span9" id='wrap-body'>
        <div class='row-fluid header-at'>
            <div class="row-fluid"><h2 style="text-transform: uppercase"><?php echo $root->title ?></h2></div>
            <div class="line2 row-fluid"></div>
            <div class="row-fluid content margin_topbot10">
                <?php echo $root->desc ?>
            </div><!-- end content -->
        </div><!-- end header-at-->
        <div class='row-fluid body-at container'>	
            <?php
                $total_item = count($items);
                echo "<div id='en-left' class='span6 pag7 pag2'>";
                $i = 0;
                foreach($items as $k=>$v){
                    
                    if($i == count($total_item/2) + 1){
                        echo '</div>';
                        echo '<div id="en-mid" class="span6 pag7 pag2">';
                    }
                    $i++;
                    ?>
                    <div class="en-box row-fluid">
                    <div class="row-fluid en-box-title">
                       <a class='title-listen' href="<?php echo Yii::app()->getBaseUrl(true)."/".$this->root_slug."/".$root->slug."-".$root->id."/lop/".$v->slug."-".$v->id.".html"?>" title="<?php echo $v->title ?>"><?php echo $v->title ?></a>
                    </div>
                    <div class="row-fluid en-box-feature "><!-- .en-box-feature -->
                        <div class="row-fluid">
                            <div class="span8 offset2" >
                                <a href="<?php echo Yii::app()->getBaseUrl(true)."/".$this->root_slug."/".$root->slug."-".$root->id."/lop/".$v->slug."-".$v->id.".html"?>" class="thumbnail" title="<?php echo $v->title ?>" ><img class="" src="<?php echo Libraries::getImage('a') ?>" /></a>
                            </div>
                        </div>
                        <div class="row-fluid box-feature">
                            <?php echo $v->desc ?>
                        </div> 
                    </div><!-- end .en-box-feature -->
                </div><!-- end .en-box //ngu phap -->
                <?php 
                }
            ?>
        </div>
<!--            <div class="row-fluid center  " >               
                <div class="pagination" style="padding:20px;">

                    <ul class="yiiPager mt_10">
                        <li class="previous disabled"><a href="/yii/card/index.php/sysadmin/categorycard/index.html">←</a></li>
                        <li class=" active"><a href="/yii/card/index.php/sysadmin/categorycard/index.html">1</a></li>
                        <li class=""><a href="/yii/card/index.php/sysadmin/categorycard/index.html?CategoryCard_page=2">2</a></li>
                        <li class=""><a href="/yii/card/index.php/sysadmin/categorycard/index.html?CategoryCard_page=3">3</a></li>
                        <li class=""><a href="/yii/card/index.php/sysadmin/categorycard/index.html?CategoryCard_page=4">4</a></li>
                        <li class=""><a href="/yii/card/index.php/sysadmin/categorycard/index.html?CategoryCard_page=4">5</a></li>
                        <li class=""><a href="/yii/card/index.php/sysadmin/categorycard/index.html?CategoryCard_page=4">6</a></li>
                        <li class="next"><a href="/yii/card/index.php/sysadmin/categorycard/index.html?CategoryCard_page=2">→</a></li>
                    </ul>
                </div>
            </div>                            -->

        </div>







    </div><!-- end span 9 -->
    <div id='en-right' class='span3'>
        <?php $this->widget('search'); ?>
        <?php $this->widget('login'); ?>
        <?php $this->widget('support'); ?>
        <?php $this->widget('support2'); ?>
        <?php $this->widget('adv'); ?>
        <?php $this->widget('statistics'); ?>                    
    </div><!-- end #end-right -->
</div><!-- end #wrap-en -->