<?php
namespace Isb\Account\Document;

use Isb\Account\ResourceAbstract;

class Document extends ResourceAbstract
{
    protected $table = 'account_document';

    protected $dates = [self::CREATED_AT, self::UPDATED_AT, 'deleted_at', 'expiration'];

    protected $guarded = [];
}
