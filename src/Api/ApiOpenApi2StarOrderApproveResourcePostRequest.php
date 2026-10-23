<?php

/**
 * 本文件由 go2php 生成，源: api_star_order_approve_resource_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 任务资源确认
 */
class ApiOpenApi2StarOrderApproveResourcePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarOrderApproveResourceV2Request $starOrderApproveResourceV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarOrderApproveResourceV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starOrderApproveResourceV2Request(\Oceanengine\Models\StarOrderApproveResourceV2Request $starOrderApproveResourceV2Request): self
    {
        $this->starOrderApproveResourceV2Request = $starOrderApproveResourceV2Request;
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
     * 任务资源确认
     */
    public function execute(): \Oceanengine\Models\StarOrderApproveResourceV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starOrderApproveResourceV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/order/approve_resource/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarOrderApproveResourceV2Response::class);

        return $result['model'];
    }
}
