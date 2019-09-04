<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Invoice $invoice
 */
?>
<div class="invoice view large-9 medium-8 columns content">
    <h3><?= h($invoice->code) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($invoice->id) ?></td>
        </tr>
        <tr>
            <th scope="row">Kod</th>
            <td><?= h($invoice->code) ?></td>
        </tr>
        <tr>
            <th scope="row">Firma</th>
            <td><?= h($invoice->company) ?></td>
        </tr>
        <tr>
            <th scope="row">E-mail</th>
            <td><?= h($invoice->email) ?></td>
        </tr>
        <tr>
            <th scope="row">Kwota</th>
            <td><?= $this->Number->format($invoice->total) ?></td>
        </tr>
        <tr>
            <th scope="row">Adres</th>
            <td><?= h($invoice->address) ?></td>
        </tr>
    </table>
</div>
