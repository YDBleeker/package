<?php

namespace Yonidebleeker\QuoteGen\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $table = 'quotes';
    protected $fillable = ['content', 'author'];

    // Add any additional methods or relationships here
}
