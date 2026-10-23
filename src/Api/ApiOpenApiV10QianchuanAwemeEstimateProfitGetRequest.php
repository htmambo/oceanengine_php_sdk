<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_estimate_profit_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 小店获取投放效果预估
 */
class ApiOpenApiV10QianchuanAwemeEstimateProfitGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?string $marketingGoal = null;
    /** @var \Oceanengine\Models\QianchuanAwemeEstimateProfitV10DeliverySetting 投放设置 */
    private ?\Oceanengine\Models\QianchuanAwemeEstimateProfitV10DeliverySetting $deliverySetting = null;
    private ?\Oceanengine\Models\QianchuanAwemeEstimateProfitV10Audience $audience = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAwemeEstimateProfitV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function marketingGoal(string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * 投放设置
     */
    public function deliverySetting(\Oceanengine\Models\QianchuanAwemeEstimateProfitV10DeliverySetting $deliverySetting): self
    {
        $this->deliverySetting = $deliverySetting;
        return $this;
    }

    public function audience(\Oceanengine\Models\QianchuanAwemeEstimateProfitV10Audience $audience): self
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
     * 小店获取投放效果预估
     */
    public function execute(): \Oceanengine\Models\QianchuanAwemeEstimateProfitV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->marketingGoal === null) {
            throw new \InvalidArgumentException('marketingGoal is required and must be specified');
        }
        if ($this->deliverySetting === null) {
            throw new \InvalidArgumentException('deliverySetting is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['marketing_goal'] = $this->marketingGoal;
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
        $url = '/open_api/v1.0/qianchuan/aweme/estimate_profit/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAwemeEstimateProfitV10Response::class);

        return $result['model'];
    }
}
