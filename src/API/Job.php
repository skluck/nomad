<?php
/**
 * @copyright (c) 2018 Steve Kluck
 *
 * For full license information, please view the LICENSE distributed with this source code.
 */

namespace SK\Nomad\API;

use SK\Nomad\ClientInterface;

class Job
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
     * @see https://www.nomadproject.io/api/jobs.html#read-job
     *
     * @return mixed
     */
    public function read()
    {
    }

    /**
     * @see https://www.nomadproject.io/api/jobs.html#list-job-versions
     *
     * @return mixed
     */
    public function versions()
    {
    }

    /**
     * @see https://www.nomadproject.io/api/jobs.html#list-job-allocations
     *
     * @return mixed
     */
    public function allocations()
    {
    }

    /**
     * @see https://www.nomadproject.io/api/jobs.html#list-job-evaluations
     *
     * @return mixed
     */
    public function evaluations()
    {
    }

    /**
     * @see https://www.nomadproject.io/api/jobs.html#list-job-deployments
     *
     * @return mixed
     */
    public function deployments()
    {
    }

    /**
     * @see https://www.nomadproject.io/api/jobs.html#read-job-39-s-most-recent-deployment
     *
     * @return mixed
     */
    public function mostRecentDeployment()
    {
    }

    /**
     * @see https://www.nomadproject.io/api/jobs.html#read-job-summary
     *
     * @return mixed
     */
    public function summary()
    {
    }

    /**
     * @see https://www.nomadproject.io/api/jobs.html#update-existing-job
     *
     * @return mixed
     */
    public function update()
    {
    }

    /**
     * @see https://www.nomadproject.io/api/jobs.html#dispatch-job
     *
     * @return mixed
     */
    public function dispatch()
    {
    }

    /**
     * @see https://www.nomadproject.io/api/jobs.html#revert-to-older-job-version
     *
     * @return mixed
     */
    public function revert()
    {
    }

    /**
     * @see https://www.nomadproject.io/api/jobs.html#set-job-stability
     *
     * @return mixed
     */
    public function setStability()
    {
    }

    /**
     * @see https://www.nomadproject.io/api/jobs.html#create-job-evaluation
     *
     * @return mixed
     */
    public function createEvaluation()
    {
    }

    /**
     * @see https://www.nomadproject.io/api/jobs.html#create-job-plan
     *
     * @return mixed
     */
    public function createPlan()
    {
    }

    /**
     * @see https://www.nomadproject.io/api/jobs.html#force-new-periodic-instance
     *
     * @return mixed
     */
    public function forceNewPeriodicInstance()
    {
    }

    /**
     * @see https://www.nomadproject.io/api/jobs.html#stop-a-job
     *
     * @return mixed
     */
    public function stop()
    {
    }
}
