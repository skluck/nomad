<?php
/**
 * @copyright (c) 2018 Steve Kluck
 *
 * For full license information, please view the LICENSE distributed with this source code.
 */

namespace SK\Nomad\Client;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface as GuzzleClientInterface;
use SK\Nomad\ClientInterface;
use SK\Nomad\NomadException;

class GuzzleClient implements ClientInterface
{
    private const DEFAULT_TIMEOUT = 2;
    private const ERR_INVALID_ENDPOINT = 'Invalid endpoint provided. Please provide a complete HTTP or HTTPS URL endpoint.';

    /**
     * @var GuzzleClientInterface
     */
    private $guzzle;

    /**
     * @var string
     */
    private $endpoint;

    /**
     * @param string $endpoint
     * @param GuzzleClientInterface|null $guzzle
     *
     * @throws NomadException
     */
    public function __construct($endpoint, ?GuzzleClientInterface $guzzle = null)
    {
        $this->guzzle = $guzzle ?: $this->buildDefaultGuzzle();
        $this->endpoint = $endpoint;

        $this->validateEndpoint($endpoint);
    }

    /**
     * @param string $endpoint
     *
     * @throws NomadException
     *
     * @return void
     */
    private function validateEndpoint($endpoint)
    {
        $isValid = filter_var($endpoint, FILTER_VALIDATE_URL, FILTER_FLAG_SCHEME_REQUIRED | FILTER_FLAG_HOST_REQUIRED);

        if ($isValid) {
            $scheme = strtolower(parse_url($endpoint, PHP_URL_SCHEME));
            if (in_array($scheme, ['http', 'https'], true)) {
                return;
            }
        }

        throw new Exception(self::ERR_INVALID_ENDPOINT);
    }

    /**
     * @return GuzzleClientInterface
     */
    protected function buildDefaultGuzzle(): GuzzleClientInterface
    {
        return new Client([
            'timeout' => self::DEFAULT_TIMEOUT,
            'connect_timeout' => self::DEFAULT_TIMEOUT
        ]);
    }
}
