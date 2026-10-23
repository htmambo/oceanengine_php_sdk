<?php

/**
 * 本文件由 go2php 生成，源: api_tools_rubeex_version_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * > 获取互动广告作品对应的版本信息
 */
class ApiOpenApi2ToolsRubeexVersionGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var float 作品id即试玩素材id，属于试玩素材唯一标识 */
    private ?float $projectId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsRubeexVersionGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 作品id即试玩素材id，属于试玩素材唯一标识
     */
    public function projectId(float $projectId): self
    {
        $this->projectId = $projectId;
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
     * > 获取互动广告作品对应的版本信息
     */
    public function execute(): \Oceanengine\Models\ToolsRubeexVersionGetV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->projectId === null) {
            throw new \InvalidArgumentException('projectId is required and must be specified');
        }
        if ($this->projectId > 2147483647) {
            throw new \InvalidArgumentException('projectId must be less than 2147483647');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['project_id'] = $this->projectId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/rubeex/version/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsRubeexVersionGetV2Response::class);

        return $result['model'];
    }
}
