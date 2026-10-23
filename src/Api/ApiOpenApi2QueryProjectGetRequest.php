<?php

/**
 * 本文件由 go2php 生成，源: api_query_project_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 结算-查询项目信息
 */
class ApiOpenApi2QueryProjectGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 代理商ID */
    private ?int $agentId = null;
    /** @var int 页码游标值（单页限制，最大1000，必填） */
    private ?int $count = null;
    /** @var int 页码游标值（根据cursor进行滚动查询，第一次传-1，后续传前一次返回列表中的最小值） */
    private ?int $cursor = null;
    /** @var \Oceanengine\Models\QueryProjectV2Filtering 过滤器 */
    private ?\Oceanengine\Models\QueryProjectV2Filtering $filtering = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QueryProjectV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 代理商ID
     */
    public function agentId(int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * 页码游标值（单页限制，最大1000，必填）
     */
    public function count(int $count): self
    {
        $this->count = $count;
        return $this;
    }

    /**
     * 页码游标值（根据cursor进行滚动查询，第一次传-1，后续传前一次返回列表中的最小值）
     */
    public function cursor(int $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\QueryProjectV2Filtering $filtering): self
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
     * 结算-查询项目信息
     */
    public function execute(): \Oceanengine\Models\QueryProjectV2Response
    {
        if ($this->agentId === null) {
            throw new \InvalidArgumentException('agentId is required and must be specified');
        }
        if ($this->count === null) {
            throw new \InvalidArgumentException('count is required and must be specified');
        }
        if ($this->cursor === null) {
            throw new \InvalidArgumentException('cursor is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['agent_id'] = $this->agentId;
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        $queryParams['count'] = $this->count;
        $queryParams['cursor'] = $this->cursor;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/query/project/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QueryProjectV2Response::class);

        return $result['model'];
    }
}
