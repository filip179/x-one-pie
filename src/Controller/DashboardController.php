<?php

namespace App\Controller;

use Cake\Chronos\Date;

/**
 * Dashboard Controller
 *
 * @property \App\Model\Table\InvoiceTable $Invoice
 *
 * @method \Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DashboardController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Invoice');
    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $invoice = $this->Invoice->query()
            ->select(['id' => 'COUNT(Invoice.id)', 'date' => 'DATE_FORMAT(Invoice.created_at, \'%Y-%m-%d\')'])
            ->where(['created_at BETWEEN CURRENT_TIMESTAMP() - INTERVAL 30 DAY AND CURRENT_TIMESTAMP()'])
            ->group(['DATE_FORMAT(Invoice.created_at, \'%Y-%m-%d\')']);
        $invoices = [];

        foreach ($invoice as $item) {
            $invoices[$item->date] = $item->id;
        }

        $now = Date::now();
        for ($i = 0; $i < 30; $i++) {
            $date = Date::now()->subDay($i)->format('Y-m-d');
            $result[$date] = $invoices[$date] ?? 0;
        }
        $this->set(['data' => $result]);
    }

}
