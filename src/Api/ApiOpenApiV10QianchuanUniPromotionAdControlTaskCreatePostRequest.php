<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_ad_control_task_create_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创建调控任务
 */
class ApiOpenApiV10QianchuanUniPromotionAdControlTaskCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10Request $qianchuanUniPromotionAdControlTaskCreateV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanUniPromotionAdControlTaskCreateV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanUniPromotionAdControlTaskCreateV10Request(\Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10Request $qianchuanUniPromotionAdControlTaskCreateV10Request): self
    {
        $this->qianchuanUniPromotionAdControlTaskCreateV10Request = $qianchuanUniPromotionAdControlTaskCreateV10Request;
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
     * 创建调控任务
     */
    public function execute(): \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanUniPromotionAdControlTaskCreateV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/uni_promotion/ad/control_task/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanUniPromotionAdControlTaskCreateV10Response::class);

        return $result['model'];
    }
}
