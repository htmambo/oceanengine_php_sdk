<?php

/**
 * 本文件由 go2php 生成，源: api_promotion_auto_generate_config_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 用来保存广告主自定义的策略及物料，用于创意智能生成。创建时promotion_id选填，更新时promotion_id必填，多次更新返回的configid不变
 */
class ApiOpenApiV30PromotionAutoGenerateConfigCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\PromotionAutoGenerateConfigCreateV30Request $promotionAutoGenerateConfigCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(PromotionAutoGenerateConfigCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function promotionAutoGenerateConfigCreateV30Request(\Oceanengine\Models\PromotionAutoGenerateConfigCreateV30Request $promotionAutoGenerateConfigCreateV30Request): self
    {
        $this->promotionAutoGenerateConfigCreateV30Request = $promotionAutoGenerateConfigCreateV30Request;
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
     * 用来保存广告主自定义的策略及物料，用于创意智能生成。创建时promotion_id选填，更新时promotion_id必填，多次更新返回的configid不变
     */
    public function execute(): \Oceanengine\Models\PromotionAutoGenerateConfigCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->promotionAutoGenerateConfigCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/promotion/auto_generate_config/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\PromotionAutoGenerateConfigCreateV30Response::class);

        return $result['model'];
    }
}
