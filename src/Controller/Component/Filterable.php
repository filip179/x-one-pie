<?php

namespace App\Controller\Component;

use Cake\Http\ServerRequest;
use Cake\ORM\Query;

interface Filterable
{
    public function filter(Query $query, ServerRequest $request);
}
