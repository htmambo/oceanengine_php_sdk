<?php

/**
 * 本文件由 go2php 生成，源: api_star_order_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 任务修改
 */
class ApiOpenApi2StarOrderUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarOrderUpdateV2Request $starOrderUpdateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarOrderUpdateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starOrderUpdateV2Request(\Oceanengine\Models\StarOrderUpdateV2Request $starOrderUpdateV2Request): self
    {
        $this->starOrderUpdateV2Request = $starOrderUpdateV2Request;
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
     * 任务修改
     */
    public function execute(): \Oceanengine\Models\StarOrderUpdateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starOrderUpdateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/order/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarOrderUpdateV2Response::class);

        return $result['model'];
    }
}
