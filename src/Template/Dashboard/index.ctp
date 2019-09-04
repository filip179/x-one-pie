<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Invoice[]|\Cake\Collection\CollectionInterface $invoice
 */

?>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <legend>Faktur /dzień </legend>
        <div class="card">

            <div class="ct-chart ct-perfect-fourth"></div>
            <script>
                var data = {
                    labels: <?= json_encode(array_keys($data))?>,
                    series: [<?= json_encode(array_values($data)) ?>]
                };
            </script>
        </div>
    </div>
</div>
