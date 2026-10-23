<?php

/**
 * 本文件由 go2php 生成，源: api_star_demand_search_word_modify_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 修改任务搜索词
 */
class ApiOpenApi2StarDemandSearchWordModifyPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarDemandSearchWordModifyV2Request $starDemandSearchWordModifyV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarDemandSearchWordModifyV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starDemandSearchWordModifyV2Request(\Oceanengine\Models\StarDemandSearchWordModifyV2Request $starDemandSearchWordModifyV2Request): self
    {
        $this->starDemandSearchWordModifyV2Request = $starDemandSearchWordModifyV2Request;
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
     * 修改任务搜索词
     */
    public function execute(): \Oceanengine\Models\StarDemandSearchWordModifyV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starDemandSearchWordModifyV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/demand/search_word/modify/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarDemandSearchWordModifyV2Response::class);

        return $result['model'];
    }
}
