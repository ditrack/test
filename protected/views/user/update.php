<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs = array(
    'Users' => array('index'),
    $model->username => array('profile/index', 'id' => $model->id),
    'Update',
);

?>

    <h1>Update User <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>