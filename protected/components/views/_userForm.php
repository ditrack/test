<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form TbActiveForm */
?>
<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'horizontalForm',
    'type' => 'horizontal',
    'enableClientValidation' => true,
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

    <p class="note">Поля с <span class="required">*</span> являются обезательными для заполнения.</p>

<?php echo $form->errorSummary($model); ?>

<?php $this->widget('ext.imageAttachment.ImageAttachmentWidget', array(
    'model' => $model,
    'behaviorName' => 'preview',
    'apiRoute' => 'user/saveImageAttachment',
)); ?>

<?php echo $form->textFieldRow($model, 'username'); ?>

<?php echo $form->textFieldRow($model, 'e_mail', array('prepend' => '@', 'class'=>'span-input')); ?>

<?php echo $form->textFieldRow($model, 'name', array('size' => 60, 'maxlength' => 60)); ?>

<?php echo $form->textFieldRow($model, 'first_name', array('size' => 60, 'maxlength' => 60)); ?>

<?php echo $form->textFieldRow($model, 'last_name', array('size' => 60, 'maxlength' => 60)); ?>

<?php echo $form->dropDownListRow($model, 'sex', $model->genderOptions, array('empty' => 'Выберите пол')); ?>

<?php /*$this->widget('WidgetProvider', array('model' => $model)); */?>

<?php /*echo $form->datepickerRow($model, 'birthday', array(
    'class'=>'span-input',
    'prepend' => '<i class="icon-calendar"></i>',
    'options' => array(
        'format' => 'dd.mm.yyyy',
        'language' => 'ru',
        'autoclose' => 'true',
        'startDate' => '1,1,1930',
        'endDate' => 'now()',
        'startView' => 2,
    ),

));
*/?>

<?php echo $form->textFieldRow($model, 'phone', array('size' => 18, 'maxlength' => 18)); ?>

<?php echo $form->textAreaRow($model, 'other_information', array('rows' => 6, 'cols' => 50)); ?>

<?php echo TbHtml::formActions(array(
    TbHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', array('color' => TbHtml::BUTTON_COLOR_PRIMARY)),
    TbHtml::resetButton('Сбросить'),
)); ?>

<?php $this->endWidget(); ?>