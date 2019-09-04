<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Invoice[]|\Cake\Collection\CollectionInterface $invoice
 */

?>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Faktury</h4>
                <a href="/invoice/create"><i class="material-icons" style="color:white;">add</i></a>
            </div>
            <div class="card-body table-responsive">
                <table id="invoice-table" class="table">
                    <thead class="text-warning">
                    <tr>
                        <th width="5%">#</th>
                        <th>Kod</th>
                        <th>Total</th>
                        <th>Company</th>
                        <th>Address</th>
                        <th>E-mail</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
