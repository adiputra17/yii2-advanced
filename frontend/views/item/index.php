<?php

/**
* Author : Adi Putra Utama
*/

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\Item\ItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <!-- <?php //Yii::$app->myComponent->trigger(\common\components\MyComponent::EVENT_AFTER_SOMETHING); ?> -->

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'price',
            'category_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
