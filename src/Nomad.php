<?php
/**
 * @copyright (c) 2018 Steve Kluck
 *
 * For full license information, please view the LICENSE distributed with this source code.
 */

namespace SK\Nomad;

use SK\Nomad\API\Job;
use SK\Nomad\API\Jobs;

class Nomad
{
    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * @param ClientInterface $client
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @return Jobs
     */
    public function jobs(): Jobs
    {
        return new Jobs($this->client);
    }

    /**
     * @return Job
     */
    public function job(): Job
    {
        return new Job($this->client);
    }
}
