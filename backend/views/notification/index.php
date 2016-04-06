<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\VarDumper;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\NotificationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Notifications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notification-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Notification', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'description:ntext',
            'deleted',
            'created_at',
             'created_by',
             'updated_at',
             'updated_by',
            [
                'attribute'=>'created_by',
                'value'=>function($data){
//                    echo '<pre>';
//                    print_r($data->createdBy['username']);
//                    echo '</pre>';

//                    VarDumper::dump($data->createdBy,10,true);

                    return $data->createdBy['username'];
                }
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
