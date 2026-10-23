<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_contact_log_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 根据线索外呼接口获得的呼叫记录id，获取对应呼叫记录的话单。线索外呼和用户回呼都会记录到对应的话单，且话单包含AXB三个号码
 */
class ApiOpenApi2ToolsClueContactLogListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var int 线索ID */
    private ?int $clueId = null;
    /** @var \Oceanengine\Models\ToolsClueContactLogListV2Filter 过滤条件 */
    private ?\Oceanengine\Models\ToolsClueContactLogListV2Filter $filter = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsClueContactLogListV2ApiService $service)
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
     * 线索ID
     */
    public function clueId(int $clueId): self
    {
        $this->clueId = $clueId;
        return $this;
    }

    /**
     * 过滤条件
     */
    public function filter(\Oceanengine\Models\ToolsClueContactLogListV2Filter $filter): self
    {
        $this->filter = $filter;
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
     * 根据线索外呼接口获得的呼叫记录id，获取对应呼叫记录的话单。线索外呼和用户回呼都会记录到对应的话单，且话单包含AXB三个号码
     */
    public function execute(): \Oceanengine\Models\ToolsClueContactLogListV2Response
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
        if ($this->filter !== null) {
            $__encoded0 = json_encode($this->filter);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filter');
            }
            $queryParams['filter'] = $__encoded0;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/clue/contact_log/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsClueContactLogListV2Response::class);

        return $result['model'];
    }
}
