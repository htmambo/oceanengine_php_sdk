<?php

/**
 * 本文件由 go2php 生成，源: api_tools_promotion_raise_set_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 开启/更新一键起量(传空代表删除)
 */
class ApiOpenApiV30ToolsPromotionRaiseSetPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsPromotionRaiseSetV30Request $toolsPromotionRaiseSetV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsPromotionRaiseSetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsPromotionRaiseSetV30Request(\Oceanengine\Models\ToolsPromotionRaiseSetV30Request $toolsPromotionRaiseSetV30Request): self
    {
        $this->toolsPromotionRaiseSetV30Request = $toolsPromotionRaiseSetV30Request;
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
     * 开启/更新一键起量(传空代表删除)
     */
    public function execute(): \Oceanengine\Models\ToolsPromotionRaiseSetV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsPromotionRaiseSetV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/promotion_raise/set/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsPromotionRaiseSetV30Response::class);

        return $result['model'];
    }
}
