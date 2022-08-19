<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\DevShemas;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DevShemasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Безопасный доступ к схемам';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dev-shemas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php     
    echo  $abc;
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'shema_id',
            'name',
            'description:ntext',
          
        ],
    ]); ?>


</div>
