<?php

/**
 * 本文件由 go2php 生成，源: api_promotion_easy_keep_delivery_switch_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 更新项目为续投或者停止续投
 */
class ApiOpenApiV30PromotionEasyKeepDeliverySwitchUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\PromotionEasyKeepDeliverySwitchUpdateV30Request $promotionEasyKeepDeliverySwitchUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(PromotionEasyKeepDeliverySwitchUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function promotionEasyKeepDeliverySwitchUpdateV30Request(\Oceanengine\Models\PromotionEasyKeepDeliverySwitchUpdateV30Request $promotionEasyKeepDeliverySwitchUpdateV30Request): self
    {
        $this->promotionEasyKeepDeliverySwitchUpdateV30Request = $promotionEasyKeepDeliverySwitchUpdateV30Request;
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
     * 更新项目为续投或者停止续投
     */
    public function execute(): \Oceanengine\Models\PromotionEasyKeepDeliverySwitchUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->promotionEasyKeepDeliverySwitchUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/promotion_easy/keep_delivery_switch/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\PromotionEasyKeepDeliverySwitchUpdateV30Response::class);

        return $result['model'];
    }
}
