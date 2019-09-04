<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Http\ServerRequest;
use Cake\ORM\Query;

/**
 * InvoicesDataTable component
 */
class InvoicesDataTableComponent extends Component implements Filterable, Searchable
{
    use DataTableFetch;

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function search(Query $query, ServerRequest $request)
    {
        // TODO: Implement search() method.
    }

    public function apply(Query $query, ServerRequest $request)
    {
        // TODO: Implement apply() method.
    }
}
