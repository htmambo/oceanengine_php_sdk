<?php

/**
 * 本文件由 go2php 生成，源: api_star_demander_demander_get_author_bind_info_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询客户阵地达人绑定的星图账号信息
 */
class ApiOpenApi2StarDemanderDemanderGetAuthorBindInfoGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $starId = null;
    /** @var string[] 查询指定达人信息 */
    private ?array $bizUid = null;
    /** @var int 根据绑定时间范围查询，不传biz_uid时，必传 */
    private ?int $startTime = null;
    /** @var int 根据绑定时间范围查询，不传biz_uid时，必传 */
    private ?int $endTime = null;
    /** @var int 根据绑定时间范围查询，不传biz_uid时，必传 */
    private ?int $page = null;
    /** @var int 根据绑定时间范围查询，不传biz_uid时，必传 */
    private ?int $limit = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarDemanderDemanderGetAuthorBindInfoV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starId(int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * 查询指定达人信息
     */
    public function bizUid(array $bizUid): self
    {
        $this->bizUid = $bizUid;
        return $this;
    }

    /**
     * 根据绑定时间范围查询，不传biz_uid时，必传
     */
    public function startTime(int $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 根据绑定时间范围查询，不传biz_uid时，必传
     */
    public function endTime(int $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 根据绑定时间范围查询，不传biz_uid时，必传
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 根据绑定时间范围查询，不传biz_uid时，必传
     */
    public function limit(int $limit): self
    {
        $this->limit = $limit;
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
     * 查询客户阵地达人绑定的星图账号信息
     */
    public function execute(): \Oceanengine\Models\StarDemanderDemanderGetAuthorBindInfoV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        if ($this->bizUid !== null) {
            $queryParams['biz_uid'] = $this->bizUid;
        }
        if ($this->startTime !== null) {
            $queryParams['start_time'] = $this->startTime;
        }
        if ($this->endTime !== null) {
            $queryParams['end_time'] = $this->endTime;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->limit !== null) {
            $queryParams['limit'] = $this->limit;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/demander/demander_get_author_bind_info/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarDemanderDemanderGetAuthorBindInfoV2Response::class);

        return $result['model'];
    }
}
