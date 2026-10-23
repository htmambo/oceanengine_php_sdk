<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_info_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过线索id更新线索基础信息，更新后的信息会在飞鱼平台展示。
 * 目前只针对白名单用户开放，有下面两个限制：
 * 1. 有 develop_id 的白名单
 * 2. 支持更新的线索key有限制
 */
class ApiOpenApi2ToolsClueInfoUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsClueInfoUpdateV2Request $toolsClueInfoUpdateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsClueInfoUpdateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsClueInfoUpdateV2Request(\Oceanengine\Models\ToolsClueInfoUpdateV2Request $toolsClueInfoUpdateV2Request): self
    {
        $this->toolsClueInfoUpdateV2Request = $toolsClueInfoUpdateV2Request;
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
     * 通过线索id更新线索基础信息，更新后的信息会在飞鱼平台展示。
     */
    public function execute(): \Oceanengine\Models\ToolsClueInfoUpdateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsClueInfoUpdateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/clue/info/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsClueInfoUpdateV2Response::class);

        return $result['model'];
    }
}
