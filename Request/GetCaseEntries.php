<?php

namespace Spliced\Signifyd\Request;

use Spliced\Signifyd\Client;

class GetCaseEntries extends AbstractRequest
{
    /**
     * Constructor
     *
     * @param $id - The Case ID
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * setId
     *
     * @param $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @{inheritDoc}
     */
    public function getUri()
    {
        return sprintf('cases/%s/entries', $this->getId());
    }
}