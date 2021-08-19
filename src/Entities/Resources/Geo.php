<?php

namespace Lyal\Checkr\Entities\Resources;

use Lyal\Checkr\Client;
use Lyal\Checkr\Traits\Creatable;
use Lyal\Checkr\Traits\Deleteable;

class Geo extends AbstractResource
{
    use Creatable;
    use Deleteable;

    /**
     * Geo constructor.
     *
     * @param null|string|array $values
     * @param null|Client $client
     */
    public function __construct($values = null, Client $client = null)
    {
        $this->setHidden([
            'candidate_id',
            'report_id',
        ]);

        parent::__construct($values, $client);
    }
}
