<?php

namespace machbarmacher\GdprDump\ColumnTransformer\Plugins;

use machbarmacher\GdprDump\ColumnTransformer\ColumnTransformer;

class FixedStringColumnTransformer extends ColumnTransformer
{

    protected function getSupportedFormatters()
    {
        return ['fixedString'];
    }

    public function getValue($expression)
    {
        return $expression['newString'];
    }
}
