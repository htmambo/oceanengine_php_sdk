<?php

/**
 * 本文件由 go2php 生成，源: api_tools_privative_word_promotion_add_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 批量新增广告否定词
 */
class ApiOpenApiV30ToolsPrivativeWordPromotionAddPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsPrivativeWordPromotionAddV30Request $toolsPrivativeWordPromotionAddV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsPrivativeWordPromotionAddV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsPrivativeWordPromotionAddV30Request(\Oceanengine\Models\ToolsPrivativeWordPromotionAddV30Request $toolsPrivativeWordPromotionAddV30Request): self
    {
        $this->toolsPrivativeWordPromotionAddV30Request = $toolsPrivativeWordPromotionAddV30Request;
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
     * 批量新增广告否定词
     */
    public function execute(): \Oceanengine\Models\ToolsPrivativeWordPromotionAddV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsPrivativeWordPromotionAddV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/privative_word/promotion/add/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsPrivativeWordPromotionAddV30Response::class);

        return $result['model'];
    }
}
