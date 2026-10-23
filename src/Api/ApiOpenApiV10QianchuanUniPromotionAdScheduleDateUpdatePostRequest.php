<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_ad_schedule_date_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 更新全域计划投放时间
 */
class ApiOpenApiV10QianchuanUniPromotionAdScheduleDateUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanUniPromotionAdScheduleDateUpdateV10Request $qianchuanUniPromotionAdScheduleDateUpdateV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanUniPromotionAdScheduleDateUpdateV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanUniPromotionAdScheduleDateUpdateV10Request(\Oceanengine\Models\QianchuanUniPromotionAdScheduleDateUpdateV10Request $qianchuanUniPromotionAdScheduleDateUpdateV10Request): self
    {
        $this->qianchuanUniPromotionAdScheduleDateUpdateV10Request = $qianchuanUniPromotionAdScheduleDateUpdateV10Request;
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
     * 更新全域计划投放时间
     */
    public function execute(): \Oceanengine\Models\QianchuanUniPromotionAdScheduleDateUpdateV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanUniPromotionAdScheduleDateUpdateV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/uni_promotion/ad/schedule_date/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanUniPromotionAdScheduleDateUpdateV10Response::class);

        return $result['model'];
    }
}
