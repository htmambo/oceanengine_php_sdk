<?php

/**
 * 本文件由 go2php 生成，源: api_star_order_finish_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 任务验收
 */
class ApiOpenApi2StarOrderFinishPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarOrderFinishV2Request $starOrderFinishV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarOrderFinishV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starOrderFinishV2Request(\Oceanengine\Models\StarOrderFinishV2Request $starOrderFinishV2Request): self
    {
        $this->starOrderFinishV2Request = $starOrderFinishV2Request;
        return $this;
    }

    public function accessToken(string $accessToken): self
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    public function withLog(bool $enable): self
    {
        $this->logEnabled = $enable;
        return $this;
    }

    /**
     * @throws \InvalidArgumentException
     * 任务验收
     */
    public function execute(): \Oceanengine\Models\StarOrderFinishV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starOrderFinishV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/order/finish/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarOrderFinishV2Response::class);

        return $result['model'];
    }
}
