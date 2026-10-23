<?php

/**
 * 本文件由 go2php 生成，源: api_schedule_result_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询任务执行结果
 */
class ApiOpenApiV30ScheduleResultGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 主任务id */
    private ?int $schedulerId = null;
    /** @var int 广告主id */
    private ?int $advertiserId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ScheduleResultGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 主任务id
     */
    public function schedulerId(int $schedulerId): self
    {
        $this->schedulerId = $schedulerId;
        return $this;
    }

    /**
     * 广告主id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
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
     * 查询任务执行结果
     */
    public function execute(): \Oceanengine\Models\ScheduleResultGetV30Response
    {
        if ($this->schedulerId === null) {
            throw new \InvalidArgumentException('schedulerId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->advertiserId !== null) {
            $queryParams['advertiser_id'] = $this->advertiserId;
        }
        $queryParams['scheduler_id'] = $this->schedulerId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/schedule/result/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ScheduleResultGetV30Response::class);

        return $result['model'];
    }
}
