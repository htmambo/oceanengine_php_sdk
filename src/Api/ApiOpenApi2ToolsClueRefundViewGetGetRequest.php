<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_refund_view_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 飞鱼提供前端SDK帮助开发者接入返款视图，开发者可通过该接口获取对应线索id的返款视图相关内容，并将全量数据传入飞鱼提供的SDK做渲染
 */
class ApiOpenApi2ToolsClueRefundViewGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主id */
    private ?int $advertiserId = null;
    /** @var int 线索id */
    private ?int $clueId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsClueRefundViewGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 线索id
     */
    public function clueId(int $clueId): self
    {
        $this->clueId = $clueId;
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
     * 飞鱼提供前端SDK帮助开发者接入返款视图，开发者可通过该接口获取对应线索id的返款视图相关内容，并将全量数据传入飞鱼提供的SDK做渲染
     */
    public function execute(): \Oceanengine\Models\ToolsClueRefundViewGetV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
        }
        if ($this->clueId === null) {
            throw new \InvalidArgumentException('clueId is required and must be specified');
        }
        if ($this->clueId < 1) {
            throw new \InvalidArgumentException('clueId must be greater than 1');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['clue_id'] = $this->clueId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/clue/refund_view/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsClueRefundViewGetV2Response::class);

        return $result['model'];
    }
}
