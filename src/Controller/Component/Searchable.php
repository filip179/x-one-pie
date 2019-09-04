<?php

namespace App\Controller\Component;

use Cake\Http\ServerRequest;
use Cake\ORM\Query;

interface Searchable
{
    public function search(Query $query, ServerRequest $request);
}
