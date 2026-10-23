<?php

/**
 * 本文件由 go2php 生成，源: api_oc_project_tools_keyword_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取关键词调控任务列表
 */
class ApiOpenApiV30OcProjectToolsKeywordListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 投放账户ID */
    private ?int $advertiserId = null;
    /** @var \Oceanengine\Models\OcProjectToolsKeywordListV30PageInfo 分页信息 */
    private ?\Oceanengine\Models\OcProjectToolsKeywordListV30PageInfo $pageInfo = null;
    /** @var \Oceanengine\Models\OcProjectToolsKeywordListV30Filtering 过滤条件（不过滤则返回全部） */
    private ?\Oceanengine\Models\OcProjectToolsKeywordListV30Filtering $filtering = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(OcProjectToolsKeywordListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 投放账户ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 分页信息
     */
    public function pageInfo(\Oceanengine\Models\OcProjectToolsKeywordListV30PageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * 过滤条件（不过滤则返回全部）
     */
    public function filtering(\Oceanengine\Models\OcProjectToolsKeywordListV30Filtering $filtering): self
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
     * 获取关键词调控任务列表
     */
    public function execute(): \Oceanengine\Models\OcProjectToolsKeywordListV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
        }
        if ($this->pageInfo === null) {
            throw new \InvalidArgumentException('pageInfo is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        $__encoded1 = json_encode($this->pageInfo);
            if ($__encoded1 === false) {
                throw new \RuntimeException('Failed to encode parameter: pageInfo');
            }
            $queryParams['page_info'] = $__encoded1;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/oc_project/tools_keyword/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\OcProjectToolsKeywordListV30Response::class);

        return $result['model'];
    }
}
