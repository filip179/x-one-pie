<?php

namespace App\Controller\Component;

use Cake\Http\ServerRequest;
use Cake\ORM\Query;

trait Paginate
{
    public function paginate(Query $query, ServerRequest $request)
    {
        $limit = $request->getQuery('length') ?? InvoicesDataTableComponent::DEFAULT_PAGE_LENGTH;
        $query->limit((int)$limit);
        $offset = $request->getQuery('start') ?? 0;
        $query->offset((int)$offset);
    }
}
