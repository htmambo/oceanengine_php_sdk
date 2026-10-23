<?php

/**
 * 本文件由 go2php 生成，源: api_star_order_reject_resource_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 任务资源驳回
 */
class ApiOpenApi2StarOrderRejectResourcePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarOrderRejectResourceV2Request $starOrderRejectResourceV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarOrderRejectResourceV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starOrderRejectResourceV2Request(\Oceanengine\Models\StarOrderRejectResourceV2Request $starOrderRejectResourceV2Request): self
    {
        $this->starOrderRejectResourceV2Request = $starOrderRejectResourceV2Request;
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
     * 任务资源驳回
     */
    public function execute(): \Oceanengine\Models\StarOrderRejectResourceV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starOrderRejectResourceV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/order/reject_resource/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarOrderRejectResourceV2Response::class);

        return $result['model'];
    }
}
