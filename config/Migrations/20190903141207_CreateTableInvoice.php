<?php

use Migrations\AbstractMigration;

class CreateTableInvoice extends AbstractMigration
{
    public function up()
    {
        $this->table('invoice')
            ->addColumn('code', 'string', ['null' => false])
            ->addColumn('total', 'decimal', [
                'precision' => 20,
                'scale' => 2,
                'null' => false
            ])
            ->addColumn('company', 'string', ['null' => false])
            ->addColumn('address', 'text', ['null' => false])
            ->addColumn('email', 'string', ['null' => false])
            ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'] )
            ->create();
    }

    public function down()
    {
        $this->table('invoice')->drop()->update();
    }
}
