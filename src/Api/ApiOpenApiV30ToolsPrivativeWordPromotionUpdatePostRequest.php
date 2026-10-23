<?php

/**
 * 本文件由 go2php 生成，源: api_tools_privative_word_promotion_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 批量更新广告否定词
 */
class ApiOpenApiV30ToolsPrivativeWordPromotionUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsPrivativeWordPromotionUpdateV30Request $toolsPrivativeWordPromotionUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsPrivativeWordPromotionUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsPrivativeWordPromotionUpdateV30Request(\Oceanengine\Models\ToolsPrivativeWordPromotionUpdateV30Request $toolsPrivativeWordPromotionUpdateV30Request): self
    {
        $this->toolsPrivativeWordPromotionUpdateV30Request = $toolsPrivativeWordPromotionUpdateV30Request;
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
     * 批量更新广告否定词
     */
    public function execute(): \Oceanengine\Models\ToolsPrivativeWordPromotionUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsPrivativeWordPromotionUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/privative_word/promotion/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsPrivativeWordPromotionUpdateV30Response::class);

        return $result['model'];
    }
}
