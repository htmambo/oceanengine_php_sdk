<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_ad_budget_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 更新全域计划预算
 */
class ApiOpenApiV10QianchuanUniPromotionAdBudgetUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanUniPromotionAdBudgetUpdateV10Request $qianchuanUniPromotionAdBudgetUpdateV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanUniPromotionAdBudgetUpdateV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanUniPromotionAdBudgetUpdateV10Request(\Oceanengine\Models\QianchuanUniPromotionAdBudgetUpdateV10Request $qianchuanUniPromotionAdBudgetUpdateV10Request): self
    {
        $this->qianchuanUniPromotionAdBudgetUpdateV10Request = $qianchuanUniPromotionAdBudgetUpdateV10Request;
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
     * 更新全域计划预算
     */
    public function execute(): \Oceanengine\Models\QianchuanUniPromotionAdBudgetUpdateV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanUniPromotionAdBudgetUpdateV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/uni_promotion/ad/budget/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanUniPromotionAdBudgetUpdateV10Response::class);

        return $result['model'];
    }
}
