<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel callmez\wechat\models\WechatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '公众号管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wechat-index">

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加公众号', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'layout' => "{summary}\n<div class='table-responsive'>\n{items}\n</div>\n{pager}",
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                'attribute' => 'id',
                'options' => [
                    'width' => 30
                ]
            ],
            'name',
            [
                'attribute' => 'hash',
                'options' => [
                    'width' => 50
                ]
            ],
            [
                'attribute' => 'created_at',
                'format' => 'datetime',
                'options' => [
                    'width' => 160
                ]
            ],
            [
                'attribute' => 'updated_at',
                'format' => 'datetime',
                'options' => [
                    'width' => 160
                ]
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{manage} {update} {delete}',
                'buttons' => [
                    'manage' => function ($url, $model) {
                        return Html::a('<span class="text-danger glyphicon glyphicon glyphicon-cog"></span>', $url, [
                            'title' => '管理公众号'
                        ]);
                    }
                ],
                'options' => [
                    'width' => 70
                ]
            ],
        ],
    ]); ?>

</div>
