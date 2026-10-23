<?php

/**
 * 本文件由 go2php 生成，源: api_star_demand_om_get_challenge_items_data_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 小程序投稿任务结算数据
 */
class ApiOpenApi2StarDemandOmGetChallengeItemsDataGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 客户星图ID */
    private ?int $starId = null;
    /** @var int 任务ID */
    private ?int $challengeTaskId = null;
    /** @var int page */
    private ?int $page = null;
    /** @var int limit  小于30 */
    private ?int $limit = null;
    private ?int $developerId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarDemandOmGetChallengeItemsDataV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 客户星图ID
     */
    public function starId(int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * 任务ID
     */
    public function challengeTaskId(int $challengeTaskId): self
    {
        $this->challengeTaskId = $challengeTaskId;
        return $this;
    }

    /**
     * page
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * limit  小于30
     */
    public function limit(int $limit): self
    {
        $this->limit = $limit;
        return $this;
    }

    public function developerId(int $developerId): self
    {
        $this->developerId = $developerId;
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
     * 小程序投稿任务结算数据
     */
    public function execute(): \Oceanengine\Models\StarDemandOmGetChallengeItemsDataV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        if ($this->challengeTaskId === null) {
            throw new \InvalidArgumentException('challengeTaskId is required and must be specified');
        }
        if ($this->page === null) {
            throw new \InvalidArgumentException('page is required and must be specified');
        }
        if ($this->limit === null) {
            throw new \InvalidArgumentException('limit is required and must be specified');
        }
        if ($this->limit < 0) {
            throw new \InvalidArgumentException('limit must be greater than 0');
        }
        if ($this->limit > 30) {
            throw new \InvalidArgumentException('limit must be less than 30');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        $queryParams['challenge_task_id'] = $this->challengeTaskId;
        $queryParams['page'] = $this->page;
        $queryParams['limit'] = $this->limit;
        if ($this->developerId !== null) {
            $queryParams['developer_id'] = $this->developerId;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/demand/om_get_challenge_items_data/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarDemandOmGetChallengeItemsDataV2Response::class);

        return $result['model'];
    }
}
