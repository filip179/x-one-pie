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
    use Paginate;

    public const  DEFAULT_PAGE_LENGTH = 10;

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function search(Query $query, ServerRequest $request)
    {
        $searchExpr = $request->getQuery('search')['value'] ?? null;

        if ($searchExpr === null) {
            return;
        }

        $query->where(['OR' => [
            'code LIKE' => "%$searchExpr%",
            'company LIKE' => "%$searchExpr%",
            'address LIKE' => "%$searchExpr%",
            'email LIKE' => "%$searchExpr%"
        ]]);
    }

    public function filter(Query $query, ServerRequest $request)
    {
        $orderColumn = $request->getQuery('order')[0]['column'] ?? 0;
        $orderDir = $request->getQuery('order')[0]['dir'] ?? 'asc';

        $query->order($orderColumn+1 . ' ' . $orderDir);
    }
}
