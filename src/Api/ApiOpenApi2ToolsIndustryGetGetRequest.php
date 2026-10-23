<?php

/**
 * 本文件由 go2php 生成，源: api_tools_industry_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2ToolsIndustryGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsIndustryGetV2Level $level = null;
    private ?string $type = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsIndustryGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function level(\Oceanengine\Models\ToolsIndustryGetV2Level $level): self
    {
        $this->level = $level;
        return $this;
    }

    public function type(string $type): self
    {
        $this->type = $type;
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
     * API Description
     */
    public function execute(): \Oceanengine\Models\ToolsIndustryGetV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->level !== null) {
            $__encoded0 = json_encode($this->level);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: level');
            }
            $queryParams['level'] = $__encoded0;
        }
        if ($this->type !== null) {
            $queryParams['type'] = $this->type;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/industry/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsIndustryGetV2Response::class);

        return $result['model'];
    }
}
