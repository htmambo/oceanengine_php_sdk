<?php

/**
 * 本文件由 go2php 生成，源: api_tools_playable_grant_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 本接口用于试玩素材推送，推送仅可推送至同主体下已开通试玩素材白名单的广告主。
 * 一次最多推送50个，由于推送是异步的，不会马上推送成功，从而会返回task_id，可根据task_id查询推送状态。
 */
class ApiOpenApi2ToolsPlayableGrantPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsPlayableGrantV2Request $toolsPlayableGrantV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsPlayableGrantV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsPlayableGrantV2Request(\Oceanengine\Models\ToolsPlayableGrantV2Request $toolsPlayableGrantV2Request): self
    {
        $this->toolsPlayableGrantV2Request = $toolsPlayableGrantV2Request;
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
     * 本接口用于试玩素材推送，推送仅可推送至同主体下已开通试玩素材白名单的广告主。
     */
    public function execute(): \Oceanengine\Models\ToolsPlayableGrantV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsPlayableGrantV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/playable/grant/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsPlayableGrantV2Response::class);

        return $result['model'];
    }
}
