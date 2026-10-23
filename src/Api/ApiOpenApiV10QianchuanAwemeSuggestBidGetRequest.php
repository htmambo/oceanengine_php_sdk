<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_suggest_bid_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 小店获取短视频建议出价
 */
class ApiOpenApiV10QianchuanAwemeSuggestBidGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var \Oceanengine\Models\QianchuanAwemeSuggestBidV10DeliverySetting 投放设置 */
    private ?\Oceanengine\Models\QianchuanAwemeSuggestBidV10DeliverySetting $deliverySetting = null;
    private ?\Oceanengine\Models\QianchuanAwemeSuggestBidV10Audience $audience = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAwemeSuggestBidV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 投放设置
     */
    public function deliverySetting(\Oceanengine\Models\QianchuanAwemeSuggestBidV10DeliverySetting $deliverySetting): self
    {
        $this->deliverySetting = $deliverySetting;
        return $this;
    }

    public function audience(\Oceanengine\Models\QianchuanAwemeSuggestBidV10Audience $audience): self
    {
        $this->audience = $audience;
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
     * 小店获取短视频建议出价
     */
    public function execute(): \Oceanengine\Models\QianchuanAwemeSuggestBidV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->deliverySetting === null) {
            throw new \InvalidArgumentException('deliverySetting is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $__encoded0 = json_encode($this->deliverySetting);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: deliverySetting');
            }
            $queryParams['delivery_setting'] = $__encoded0;
        if ($this->audience !== null) {
            $__encoded1 = json_encode($this->audience);
            if ($__encoded1 === false) {
                throw new \RuntimeException('Failed to encode parameter: audience');
            }
            $queryParams['audience'] = $__encoded1;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/aweme/suggest_bid/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAwemeSuggestBidV10Response::class);

        return $result['model'];
    }
}
