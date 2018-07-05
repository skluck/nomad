<?php
/**
 * @copyright (c) 2018 Steve Kluck
 *
 * For full license information, please view the LICENSE distributed with this source code.
 */

namespace SK\Nomad\API;

use SK\Nomad\ClientInterface;

class Jobs
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
     * @see https://www.nomadproject.io/api/jobs.html#list-jobs
     *
     * @return mixed
     */
    public function list()
    {
    }

    /**
     * @see https://www.nomadproject.io/api/jobs.html#create-job
     *
     * @return mixed
     */
    public function create()
    {
    }

    /**
     * @see https://www.nomadproject.io/api/jobs.html#parse-job
     *
     * @return mixed
     */
    public function parse()
    {
    }
}
