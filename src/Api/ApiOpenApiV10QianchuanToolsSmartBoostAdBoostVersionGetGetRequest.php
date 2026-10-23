<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_tools_smart_boost_ad_boost_version_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * https://bytedance.feishu.cn/wiki/wikcnq0rDUKyzKVSPWUAt6EJD4b
 */
class ApiOpenApiV10QianchuanToolsSmartBoostAdBoostVersionGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 千川广告主账户ID */
    private ?int $advertiserId = null;
    /** @var int 广告计划ID */
    private ?int $adId = null;
    /** @var int 页码游标值 */
    private ?int $cursor = null;
    /** @var int 页面大小 */
    private ?int $count = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanToolsSmartBoostAdBoostVersionGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 千川广告主账户ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 广告计划ID
     */
    public function adId(int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * 页码游标值
     */
    public function cursor(int $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }

    /**
     * 页面大小
     */
    public function count(int $count): self
    {
        $this->count = $count;
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
     * https://bytedance.feishu.cn/wiki/wikcnq0rDUKyzKVSPWUAt6EJD4b
     */
    public function execute(): \Oceanengine\Models\QianchuanToolsSmartBoostAdBoostVersionGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->adId === null) {
            throw new \InvalidArgumentException('adId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['ad_id'] = $this->adId;
        if ($this->cursor !== null) {
            $queryParams['cursor'] = $this->cursor;
        }
        if ($this->count !== null) {
            $queryParams['count'] = $this->count;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/tools/smart_boost/ad_boost/version/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanToolsSmartBoostAdBoostVersionGetV10Response::class);

        return $result['model'];
    }
}
