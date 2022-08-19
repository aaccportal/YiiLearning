<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DevShemas */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Dev Shemas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="dev-shemas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'shema_id' => $model->shema_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'shema_id' => $model->shema_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'shema_id',
            'name',
            'description:ntext',
        ],
    ]) ?>

</div>
