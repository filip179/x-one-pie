<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Invoice $invoice
 */
?>

<div class="invoice form large-9 medium-8 columns content">
    <?= $this->Form->create($invoice) ?>
    <fieldset>
        <legend>Edycja faktury</legend>
        <div class="form-group">
            <?= $this->Form->control('code', ['class' => 'form-control']) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->control('total', ['class' => 'form-control']) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->control('company', ['class' => 'form-control']) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->control('address', ['class' => 'form-control']) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->control('email', ['class' => 'form-control']) ?>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-lg btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
