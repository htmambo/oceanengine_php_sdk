<?php

/**
 * 本文件由 go2php 生成，源: api_star_order_publish_resource_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 任务资源发布
 */
class ApiOpenApi2StarOrderPublishResourcePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarOrderPublishResourceV2Request $starOrderPublishResourceV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarOrderPublishResourceV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starOrderPublishResourceV2Request(\Oceanengine\Models\StarOrderPublishResourceV2Request $starOrderPublishResourceV2Request): self
    {
        $this->starOrderPublishResourceV2Request = $starOrderPublishResourceV2Request;
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
     * 任务资源发布
     */
    public function execute(): \Oceanengine\Models\StarOrderPublishResourceV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starOrderPublishResourceV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/order/publish_resource/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarOrderPublishResourceV2Response::class);

        return $result['model'];
    }
}
