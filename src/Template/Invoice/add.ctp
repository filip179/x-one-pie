<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Invoice $invoice
 */
?>
<div class="invoice form large-9 medium-8 columns content">
    <?= $this->Form->create($invoice) ?>
    <fieldset>
        <legend>Dodaj nową fakturę</legend>
        <div class="form-group">
            <?= $this->Form->control('code', ['class' => 'form-control', 'label'=>'Kod']) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->control('total', ['class' => 'form-control', 'label'=>'Kwota']) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->control('company', ['class' => 'form-control', 'label'=>'Firma']) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->control('address', ['class' => 'form-control', 'label'=>'Adres']) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->control('email', ['class' => 'form-control', 'label'=>'E-mail']) ?>
        </div>

    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-lg btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
