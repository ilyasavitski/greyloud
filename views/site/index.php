<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use app\components\CrudAsset;
use app\components\BulkButtonWidget;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

CrudAsset::register($this);
?>
<div class="user-index">
    <div id="ajaxCrudDatatable">
        <?=
        GridView::widget([
            'id' => 'crud-datatable',
            'dataProvider' => $dataProvider,
            'pjax' => true,
            'columns' => require(__DIR__ . '/_columns.php'),
            'toolbar' => [
                ['content' =>
                    Html::a('<i class="glyphicon glyphicon-plus"></i> Add', ['create'], ['role' => 'modal-remote', 'title' => 'Create new Users', 'class' => 'btn btn-default'])
                ],
            ],
            'striped' => true,
            'condensed' => true,
            'responsive' => true,
            'panel' => [
                'type' => 'primary',
                'after' => '<div class="clearfix"></div>',
            ]
        ])
        ?>
    </div>
</div>
<?php
Modal::begin([
    "id" => "crudModal",
    "footer" => "",
])
?>
<?php Modal::end(); ?>
