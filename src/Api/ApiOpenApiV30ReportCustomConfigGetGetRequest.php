<?php

/**
 * 本文件由 go2php 生成，源: api_report_custom_config_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取自定义报表可用指标和维度
 */
class ApiOpenApiV30ReportCustomConfigGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var string[] 数据主题查询列表 */
    private ?array $dataTopics = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ReportCustomConfigGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 数据主题查询列表
     */
    public function dataTopics(array $dataTopics): self
    {
        $this->dataTopics = $dataTopics;
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
     * 获取自定义报表可用指标和维度
     */
    public function execute(): \Oceanengine\Models\ReportCustomConfigGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->dataTopics === null) {
            throw new \InvalidArgumentException('dataTopics is required and must be specified');
        }
        if (count($this->dataTopics) < 1) {
            throw new \InvalidArgumentException('dataTopics must have at least 1 elements');
        }
        if (count($this->dataTopics) > 10) {
            throw new \InvalidArgumentException('dataTopics must have less than 10 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['data_topics'] = $this->dataTopics;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/report/custom/config/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ReportCustomConfigGetV30Response::class);

        return $result['model'];
    }
}
