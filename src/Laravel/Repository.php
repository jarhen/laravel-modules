<?php

namespace jaimeramos\Modules\Laravel;

use jaimeramos\Modules\Json;
use jaimeramos\Modules\Repository as BaseRepository;

class Repository extends BaseRepository
{
    /**
     * {@inheritdoc}
     */
    protected function createModule(...$args)
    {
        return new Module(...$args);
    }
}
