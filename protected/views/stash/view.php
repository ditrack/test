<?php
/* @var $this StashController */
/* @var $model Stash */

$this->breadcrumbs = array(
    'Stashes' => array('index'),
    $model->stash_name,
);
?>



<?php $this->pageTitle = $model->stash_name; ?>

<?php $this->renderPartial('_view', array(
    'data' => $model,
)); ?>

<?php $this->beginClip('infoBox'); ?>
    <?php $this->renderPartial('_viewInfoBox', array(
        'data' => $model,
    )); ?>
<?php $this->endClip(); ?>




<?php
$this->widget('zii.widgets.jui.CJuiAccordion', array(
    'panels' => array(
        'Photos' => $this->renderPartial('_gallery', array('model' => $model), true),
        'NotePad' => $this->renderPartial('_comments', array(
            'model' => $model,
            'notepad' => $notepad,
            'comments' => $model->comments), true),
        'Actions' => $this->renderPartial('_actions', array('model' => $model), true),
    ),
// additional javascript options for the accordion plugin
    'options' => array(
        'collapsible' => true,
        'animated' => 'bounceslide',
        //'active' => 1, //number active panel
        'autoHeight' => false,
        'clearStyle' => true,

    ),
));
?>
