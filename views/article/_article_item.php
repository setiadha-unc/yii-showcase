<?php
/** @var $model \app\models\Article */

use yii\helpers\Html;
use yii\helpers\StringHelper;
use yii\helpers\Url;

?>
<div>
    <h3><a href="<?php echo Url::to(['/article/view', 'id' => $model->id]); ?>"><?php echo Html::encode($model->title); ?><a></h3>
    <div>
        <?php echo StringHelper::truncateWords(Html::encode($model->body), 30); ?>
    </div>
</div>
