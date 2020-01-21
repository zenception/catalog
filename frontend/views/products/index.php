<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'แคตตาล็อก';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <?php
        $query = (new \yii\db\Query())
            ->select(['*'])
            ->from('products')->all();

        foreach ($query as $row) {
        ?>
            <div class="col-sm-6 col-md-3">

                <div class="thumbnail">
                    <center><b><?= $row["name"]; ?></b></center>
                    <img src="../../backend/web/uploads/photo/<?= $row['image']; ?>" alt="..." style="width:100%; height:250px;" />
                    <div class="caption">
                        <p><?= $row["detail"]; ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
