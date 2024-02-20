<?php

namespace Yonidebleeker\QuoteGen;

use Yonidebleeker\QuoteGen\Models\Quote as QuoteModel;

class Quote
{
    public function getQuote()
    {
        return QuoteModel::all();
    }
}
