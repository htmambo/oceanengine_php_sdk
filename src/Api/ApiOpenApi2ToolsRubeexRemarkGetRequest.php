<?php

/**
 * 本文件由 go2php 生成，源: api_tools_rubeex_remark_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * > 获取作品场景信息
 */
class ApiOpenApi2ToolsRubeexRemarkGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var float 广告主ID */
    private ?float $advertiserId = null;
    /** @var float 作品id即试玩素材id，属于试玩素材唯一标识 */
    private ?float $projectId = null;
    /** @var \Oceanengine\Models\ToolsRubeexRemarkV2Scene &#x60;1&#x60;：分场景&lt;br&gt;&#x60;2&#x60;：分场景并且分区域 */
    private ?\Oceanengine\Models\ToolsRubeexRemarkV2Scene $scene = null;
    /** @var \Oceanengine\Models\ToolsRubeexRemarkV2Filtering 过滤条件 */
    private ?\Oceanengine\Models\ToolsRubeexRemarkV2Filtering $filtering = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsRubeexRemarkV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主ID
     */
    public function advertiserId(float $advertiserId): self
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

    /**
     * &#x60;1&#x60;：分场景&lt;br&gt;&#x60;2&#x60;：分场景并且分区域
     */
    public function scene(\Oceanengine\Models\ToolsRubeexRemarkV2Scene $scene): self
    {
        $this->scene = $scene;
        return $this;
    }

    /**
     * 过滤条件
     */
    public function filtering(\Oceanengine\Models\ToolsRubeexRemarkV2Filtering $filtering): self
    {
        $this->filtering = $filtering;
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
     * > 获取作品场景信息
     */
    public function execute(): \Oceanengine\Models\ToolsRubeexRemarkV2Response
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
        if ($this->scene === null) {
            throw new \InvalidArgumentException('scene is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['project_id'] = $this->projectId;
        $__encoded0 = json_encode($this->scene);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: scene');
            }
            $queryParams['scene'] = $__encoded0;
        if ($this->filtering !== null) {
            $__encoded1 = json_encode($this->filtering);
            if ($__encoded1 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded1;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/rubeex/remark/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsRubeexRemarkV2Response::class);

        return $result['model'];
    }
}
