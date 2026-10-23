<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_report_uni_promotion_config_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取全域数据-可用维度和指标
 */
class ApiOpenApiV10QianchuanReportUniPromotionConfigGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?array $dataTopics = null;
    /** @var string 3. 数据周期，允许值：   - OVER_ALL_DATA 乘方期间数据   - UNI_DATA 全域期间数据       - ALL_DATA 整体数据 （默认值） */
    private ?string $dataPeriod = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanReportUniPromotionConfigGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function dataTopics(array $dataTopics): self
    {
        $this->dataTopics = $dataTopics;
        return $this;
    }

    /**
     * 3. 数据周期，允许值：   - OVER_ALL_DATA 乘方期间数据   - UNI_DATA 全域期间数据       - ALL_DATA 整体数据 （默认值）
     */
    public function dataPeriod(string $dataPeriod): self
    {
        $this->dataPeriod = $dataPeriod;
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
     * 获取全域数据-可用维度和指标
     */
    public function execute(): \Oceanengine\Models\QianchuanReportUniPromotionConfigGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->dataTopics === null) {
            throw new \InvalidArgumentException('dataTopics is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['data_topics'] = $this->dataTopics;
        if ($this->dataPeriod !== null) {
            $queryParams['data_period'] = $this->dataPeriod;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/report/uni_promotion/config/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanReportUniPromotionConfigGetV10Response::class);

        return $result['model'];
    }
}
