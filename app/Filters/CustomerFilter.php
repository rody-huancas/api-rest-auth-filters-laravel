<?php

namespace App\Filters;

use App\Filters\ApiFilter;

class CustomerFilter extends ApiFilter
{
    protected $safeParams  = [
        "name"       => ["eq"],
        "type"       => ["eq"],
        "email"      => ["eq"],
        "address"    => ["eq"],
        "city"       => ["eq"],
        "state"      => ["eq"],
        "postalCode" => ["eq", "gt", "lt"],
    ];

    protected $columnMap   = [
        "postalCode" => "postal_code"
    ];

    protected $operatorMap = [
        "eq"  => "=",
        "lt"  => "<",
        "lte" => "<=",
        "gt"  => ">",
        "gte" => ">="
    ];
}
