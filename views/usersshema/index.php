<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\UsersShema;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersShemaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users Shemas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-shema-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Users Shema', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <p>
        <?= Html::a('custominsert', ['custominsert'], ['class' => 'btn btn-success']) ?>
    </p>
  
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_name',
            'shema_name',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, UsersShema $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
