<div id='sub-nav' class='row-fluid'>
    <div class='page3'>
        <div class='title_ab span6 marl_20'>
            <span class="row-fluid span12 title_small"><?php echo $root_cat->name ?></span>
            <span class="row-fluid span12 title_big"><?php echo $cat->title ?></span>           
        </div>
        <div id='' class='span6 page3_2'>
            <?php echo $cat->desc ?>
        </div>
    </div>
</div><!-- end #sub-nav -->
<div id='wrap-en' class='row-fluid'>

    <div class="span9">         
        <div id="page-wrapper" class="re_span9">
            <div id="page-obj">
                <div id="en-left" class="page-wrapper-top">
                    <div class=" row-fluid relative">
                        <div class="span10">
                            <span class="title"><?php echo $item->title ?></span>  							
                            <p><span class="vip"><?php
if ($item->premium == 1) {
    echo 'Bài học vip';
}
?></span></p>
                        </div>
                        <div class="span3 iconx-container">
                            <div class="iconx-cmt"><?php echo count($comment_model)?></div><div class="iconx-view"><?php echo ($item->view + 1)?></div>
                        </div>
                        <div class="row-fluid line"></div>       
                    </div><!-- end .row-fluid -->    
                </div><!-- end .page-wrapper-top-->    		
                <div class="page-wrapper-main">
                    <?php if ($item->video != '' & $item->content != '') { ?>
                        <div class='row_fluid '>
                            <div class='span7 video_div'>
                                <?php echo $item->video ?>
                            </div>
                            <div class='span5 stranslate_div'>
                                <center><button class='enab_tip btn'>Bật lời dịch</button></center>
                                <?php echo $item->translate ?>
                            </div>
                            <div class="clear" style="clear:both"></div>
                        </div>

                        <?php
                    }
                    ?>
                    <?php
                    echo $item->content;
                    ?>
                </div><!-- end .page-wrapper-main -->
                <div class="clearfix"></div>
            </div><!-- end page-obj -->
            <div id="page-obj">
                <div class="row-fluid">
                    <div class="center">
                        <form>
                            <label class="checkbox inline">
                                <input type="checkbox" id="inlineCheckbox1" class="check_blue" value="option1"> Ghi nhớ bài học
                            </label>                    
                            <label class="checkbox inline">
                                <button class="icon-heart"></button>Bài học yêu thích
                            </label>                    
                        </form>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div><!-- end page-obj -->
        </div> <!-- end #page-wrapper-->
        <div class="row-fluid margin_topbot10"></div>
        <?php //$this->widget('more_listen', array('p_id' => $item->id, 'c_id' => $item->category_id,'r_slug' => 'bai-hoc')); -->?> 
        <?php $this->widget('comments',array('c_id' => $item->id)) ?>
        
        </div><!-- end span9 -->
    <div id='en-right' class='span3'>
        <?php $this->widget('search'); ?>
        <?php $this->widget('login'); ?>
        <?php $this->widget('support'); ?>
        <?php $this->widget('support2'); ?>
        <?php $this->widget('adv'); ?>
        <?php $this->widget('statistics'); ?>                    
    </div><!-- end #end-right -->
</div><!-- end #wrap-en -->

