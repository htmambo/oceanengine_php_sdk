<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_ad_status_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 更改全域推广计划状态
 */
class ApiOpenApiV10QianchuanUniPromotionAdStatusUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanUniPromotionAdStatusUpdateV10Request $qianchuanUniPromotionAdStatusUpdateV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanUniPromotionAdStatusUpdateV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanUniPromotionAdStatusUpdateV10Request(\Oceanengine\Models\QianchuanUniPromotionAdStatusUpdateV10Request $qianchuanUniPromotionAdStatusUpdateV10Request): self
    {
        $this->qianchuanUniPromotionAdStatusUpdateV10Request = $qianchuanUniPromotionAdStatusUpdateV10Request;
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
     * 更改全域推广计划状态
     */
    public function execute(): \Oceanengine\Models\QianchuanUniPromotionAdStatusUpdateV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanUniPromotionAdStatusUpdateV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/uni_promotion/ad/status/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanUniPromotionAdStatusUpdateV10Response::class);

        return $result['model'];
    }
}
