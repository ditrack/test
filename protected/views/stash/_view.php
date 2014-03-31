<?php
/* @var $this StashController */
/* @var $data Stash */
?>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <h2 class="text-center">
                <?php echo CHtml::encode($data->stash_name); ?>
            </h2>

            <div class="row-fluid">

                <address>
                    Создан
                    <strong> <?php echo $data->user->username . '</strong><br>' . $data->create_date; ?><br>
                        Обнавлён (<?php echo $data->update_date ?>)
                </address>
            </div>
            <div class="row-fluid">

                <?php // $this->beginWidget('CMarkdown', array('purifyOutput' => true)); ?>

                <h5 class="text-center"> Описание местности </h5>

                <div><?php echo $data->place_description; ?></div>

                <h5 class="text-center"> Описание тайника </h5>

                <div><?php echo $data->stash_description; ?></div>

                <h5 class="text-center"> Содержимое тайника </h5>

                <div><?php echo $data->content; ?></div>

                <h5 class="text-center"> Контрольный вопрос </h5>

                <div><?php echo $data->question; ?></div>

                <?php // $this->endWidget(); ?>
            </div>
        </div>
    </div>

    <div class="nav">


    </div>

</div>






