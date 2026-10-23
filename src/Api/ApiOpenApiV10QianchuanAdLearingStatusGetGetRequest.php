<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_ad_learing_status_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取计划学习期状态，PRD：https://bytedance.feishu.cn/wiki/wikcnYND8yM4rlghMS4NXDGMq4i
 */
class ApiOpenApiV10QianchuanAdLearingStatusGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?array $adIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAdLearingStatusGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function adIds(array $adIds): self
    {
        $this->adIds = $adIds;
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
     * 获取计划学习期状态，PRD：https://bytedance.feishu.cn/wiki/wikcnYND8yM4rlghMS4NXDGMq4i
     */
    public function execute(): \Oceanengine\Models\QianchuanAdLearingStatusGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->adIds === null) {
            throw new \InvalidArgumentException('adIds is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['ad_ids'] = $this->adIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/ad/learing_status/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAdLearingStatusGetV10Response::class);

        return $result['model'];
    }
}
