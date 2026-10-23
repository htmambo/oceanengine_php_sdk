<?php

/**
 * 本文件由 go2php 生成，源: api_tools_promotion_raise_stop_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 关停正在起量的方案
 */
class ApiOpenApiV30ToolsPromotionRaiseStopPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsPromotionRaiseStopV30Request $toolsPromotionRaiseStopV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsPromotionRaiseStopV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsPromotionRaiseStopV30Request(\Oceanengine\Models\ToolsPromotionRaiseStopV30Request $toolsPromotionRaiseStopV30Request): self
    {
        $this->toolsPromotionRaiseStopV30Request = $toolsPromotionRaiseStopV30Request;
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
     * 关停正在起量的方案
     */
    public function execute(): \Oceanengine\Models\ToolsPromotionRaiseStopV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsPromotionRaiseStopV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/promotion_raise/stop/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsPromotionRaiseStopV30Response::class);

        return $result['model'];
    }
}
