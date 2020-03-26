<?php
namespace Isb\Account\Auth;

class AuthLogin extends Auth
{
    public function newQuery()
    {
        $query = parent::newQuery();
        $query->with(['account']);
        return $query;
    }
}
