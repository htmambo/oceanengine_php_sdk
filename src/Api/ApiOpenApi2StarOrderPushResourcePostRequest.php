<?php

/**
 * 本文件由 go2php 生成，源: api_star_order_push_resource_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 任务资源推送
 */
class ApiOpenApi2StarOrderPushResourcePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarOrderPushResourceV2Request $starOrderPushResourceV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarOrderPushResourceV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starOrderPushResourceV2Request(\Oceanengine\Models\StarOrderPushResourceV2Request $starOrderPushResourceV2Request): self
    {
        $this->starOrderPushResourceV2Request = $starOrderPushResourceV2Request;
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
     * 任务资源推送
     */
    public function execute(): \Oceanengine\Models\StarOrderPushResourceV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starOrderPushResourceV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/order/push_resource/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarOrderPushResourceV2Response::class);

        return $result['model'];
    }
}
