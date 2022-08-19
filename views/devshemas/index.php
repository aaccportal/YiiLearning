<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\DevShemas;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DevShemasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dev Shemas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dev-shemas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Dev Shemas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'shema_id',
            'name',
            'description:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DevShemas $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'shema_id' => $model->shema_id]);
                 }
            ],
        ],
    ]); ?>


</div>
