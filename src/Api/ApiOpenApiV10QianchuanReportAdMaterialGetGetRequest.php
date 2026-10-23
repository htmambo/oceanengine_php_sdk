<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_report_ad_material_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取计划下素材的指标信息
 */
class ApiOpenApiV10QianchuanReportAdMaterialGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $adId = null;
    /** @var string 查询起始日期 格式 yyyy-mm-dd */
    private ?string $startDate = null;
    /** @var string 查询结束日期 格式 yyyy-mm-dd */
    private ?string $endDate = null;
    /** @var string[] 必填 需要查询的消耗指标 */
    private ?array $fields = null;
    private ?\Oceanengine\Models\QianchuanReportAdMaterialGetV10Filtering $filtering = null;
    /** @var string 排序方式 */
    private ?string $orderType = null;
    /** @var string 排序字段 */
    private ?string $orderField = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanReportAdMaterialGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function adId(int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * 查询起始日期 格式 yyyy-mm-dd
     */
    public function startDate(string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * 查询结束日期 格式 yyyy-mm-dd
     */
    public function endDate(string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * 必填 需要查询的消耗指标
     */
    public function fields(array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    public function filtering(\Oceanengine\Models\QianchuanReportAdMaterialGetV10Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 排序方式
     */
    public function orderType(string $orderType): self
    {
        $this->orderType = $orderType;
        return $this;
    }

    /**
     * 排序字段
     */
    public function orderField(string $orderField): self
    {
        $this->orderField = $orderField;
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
     * 获取计划下素材的指标信息
     */
    public function execute(): \Oceanengine\Models\QianchuanReportAdMaterialGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->adId === null) {
            throw new \InvalidArgumentException('adId is required and must be specified');
        }
        if ($this->startDate === null) {
            throw new \InvalidArgumentException('startDate is required and must be specified');
        }
        if ($this->endDate === null) {
            throw new \InvalidArgumentException('endDate is required and must be specified');
        }
        if ($this->fields === null) {
            throw new \InvalidArgumentException('fields is required and must be specified');
        }
        if (count($this->fields) < 1) {
            throw new \InvalidArgumentException('fields must have at least 1 elements');
        }
        if (count($this->fields) > 150) {
            throw new \InvalidArgumentException('fields must have less than 150 elements');
        }
        if ($this->filtering === null) {
            throw new \InvalidArgumentException('filtering is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['ad_id'] = $this->adId;
        if ($this->orderType !== null) {
            $queryParams['order_type'] = $this->orderType;
        }
        if ($this->orderField !== null) {
            $queryParams['order_field'] = $this->orderField;
        }
        $queryParams['start_date'] = $this->startDate;
        $queryParams['end_date'] = $this->endDate;
        $queryParams['fields'] = $this->fields;
        $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/report/ad/material/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanReportAdMaterialGetV10Response::class);

        return $result['model'];
    }
}
