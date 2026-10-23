<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_contact_log_record_url_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2ToolsClueContactLogRecordUrlGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主id */
    private ?int $advertiserId = null;
    /** @var int 线索id */
    private ?int $clueId = null;
    /** @var \Oceanengine\Models\ToolsClueContactLogRecordUrlGetV2Filter 过滤条件 */
    private ?\Oceanengine\Models\ToolsClueContactLogRecordUrlGetV2Filter $filter = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsClueContactLogRecordUrlGetV2ApiService $service)
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

    /**
     * 过滤条件
     */
    public function filter(\Oceanengine\Models\ToolsClueContactLogRecordUrlGetV2Filter $filter): self
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
     * API Description
     */
    public function execute(): \Oceanengine\Models\ToolsClueContactLogRecordUrlGetV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->clueId === null) {
            throw new \InvalidArgumentException('clueId is required and must be specified');
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
        $url = '/open_api/2/tools/clue/contact_log/record_url/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsClueContactLogRecordUrlGetV2Response::class);

        return $result['model'];
    }
}
