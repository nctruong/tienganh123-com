<?php
$arrParams = array(
    'modules' => Yii::app()->controller->module->id,
    'controller' => Yii::app()->controller->id,
    'action' => Yii::app()->controller->action->id
);
?>
<form name="adminForm" id="adminForm" action="<?php echo Yii::app()->createUrl(MiisHelper::url($arrParams)); ?>" method="post">
    <?php
$this->widget('bootstrap.widgets.TbGridView', array(
        'id' => 'Danhhieu-grid',
        'type' => 'striped bordered condensed',
        'filter' => $model,
        'dataProvider' => $model->search(),
        'selectableRows' => 2, // multiple rows can be selected
        'template' => "{items}{summary}{pager}",
        'columns' => array(
            array(
                'class' => 'CCheckBoxColumn',
                'id' => 'cid',
                'value' => '$data->id',
                'headerHtmlOptions' => array(
                    'style' => 'width:25px;',
		),
            ),
            		 array('name' => 'id', 'header' => 'id'),
		 array('name' => 'name', 'header' => 'name'),
		 array('name' => 'point', 'header' => 'point'),
                 array('name' => 'type', 'header' => 'type',
                'value' => Libraries::getTendanhhieu(@$data->type),
                'filter' => CHtml::activeDropDownList($model, 'type', array(1 => 'Điểm danh hiệu', 2 => 'Điểm học bạ', 3 => 'Điểm thành tích'), array('empty' => 'None', 'class' => 'span2')),
                ),
                
                

        ),
    ));
?>
</form>