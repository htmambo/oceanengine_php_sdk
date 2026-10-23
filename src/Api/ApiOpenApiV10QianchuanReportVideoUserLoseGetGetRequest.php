<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_report_video_user_lose_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 视频互动流失数据
 */
class ApiOpenApiV10QianchuanReportVideoUserLoseGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?array $fields = null;
    private ?string $startDate = null;
    private ?string $endDate = null;
    private ?\Oceanengine\Models\QianchuanReportVideoUserLoseGetV10Filtering $filtering = null;
    private ?int $advertiserId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanReportVideoUserLoseGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function fields(array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    public function startDate(string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    public function endDate(string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    public function filtering(\Oceanengine\Models\QianchuanReportVideoUserLoseGetV10Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

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
     * 视频互动流失数据
     */
    public function execute(): \Oceanengine\Models\QianchuanReportVideoUserLoseGetV10Response
    {
        if ($this->fields === null) {
            throw new \InvalidArgumentException('fields is required and must be specified');
        }
        if ($this->startDate === null) {
            throw new \InvalidArgumentException('startDate is required and must be specified');
        }
        if ($this->endDate === null) {
            throw new \InvalidArgumentException('endDate is required and must be specified');
        }
        if ($this->filtering === null) {
            throw new \InvalidArgumentException('filtering is required and must be specified');
        }
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['fields'] = $this->fields;
        $queryParams['start_date'] = $this->startDate;
        $queryParams['end_date'] = $this->endDate;
        $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        $queryParams['advertiser_id'] = $this->advertiserId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/report/video_user_lose/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanReportVideoUserLoseGetV10Response::class);

        return $result['model'];
    }
}
