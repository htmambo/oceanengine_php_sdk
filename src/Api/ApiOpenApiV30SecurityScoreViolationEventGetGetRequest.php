<?php

/**
 * 本文件由 go2php 生成，源: api_security_score_violation_event_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 违规积分明细查询
 */
class ApiOpenApiV30SecurityScoreViolationEventGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主id */
    private ?int $advertiserId = null;
    /** @var string 业务线 */
    private ?string $businessLine = null;
    /** @var \Oceanengine\Models\SecurityScoreViolationEventGetV30Filtering 过滤器 */
    private ?\Oceanengine\Models\SecurityScoreViolationEventGetV30Filtering $filtering = null;
    /** @var int 第几页 */
    private ?int $page = null;
    /** @var int 每页的数目 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(SecurityScoreViolationEventGetV30ApiService $service)
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
     * 业务线
     */
    public function businessLine(string $businessLine): self
    {
        $this->businessLine = $businessLine;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\SecurityScoreViolationEventGetV30Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 第几页
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 每页的数目
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
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
     * 违规积分明细查询
     */
    public function execute(): \Oceanengine\Models\SecurityScoreViolationEventGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->businessLine === null) {
            throw new \InvalidArgumentException('businessLine is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['business_line'] = $this->businessLine;
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/security/score_violation_event/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\SecurityScoreViolationEventGetV30Response::class);

        return $result['model'];
    }
}
