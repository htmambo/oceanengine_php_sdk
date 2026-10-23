<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_ad_compensate_status_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取计划成本保障状态，依赖pmc
 */
class ApiOpenApiV10QianchuanAdCompensateStatusGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var int[] 计划id列表 */
    private ?array $adIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAdCompensateStatusGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 计划id列表
     */
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
     * 获取计划成本保障状态，依赖pmc
     */
    public function execute(): \Oceanengine\Models\QianchuanAdCompensateStatusGetV10Response
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
        $url = '/open_api/v1.0/qianchuan/ad/compensate_status/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAdCompensateStatusGetV10Response::class);

        return $result['model'];
    }
}
