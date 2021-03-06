<?php
/**
 * @author akiraz@bk.ru
 * @link https://github.com/akiraz2/yii2-ticket-support
 * @copyright 2018 akiraz2
 * @license MIT
 */

/* @var $this yii\web\View */
/* @var $model akiraz2\support\models\Ticket */


/* breadcrumbs */
$this->params['breadcrumbs'][] = ['label' => \akiraz2\support\Module::t('support', 'Tickets'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

\akiraz2\support\assets\TicketAsset::register($this);

?>
<div class="ticket-create">
    <div class="box box-success">
        <div class="box-body">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>
</div>
