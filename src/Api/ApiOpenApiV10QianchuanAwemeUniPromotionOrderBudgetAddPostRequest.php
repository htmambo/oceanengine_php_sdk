<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_uni_promotion_order_budget_add_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 追加随心推全域订单预算
 */
class ApiOpenApiV10QianchuanAwemeUniPromotionOrderBudgetAddPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderBudgetAddV10Request $qianchuanAwemeUniPromotionOrderBudgetAddV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAwemeUniPromotionOrderBudgetAddV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanAwemeUniPromotionOrderBudgetAddV10Request(\Oceanengine\Models\QianchuanAwemeUniPromotionOrderBudgetAddV10Request $qianchuanAwemeUniPromotionOrderBudgetAddV10Request): self
    {
        $this->qianchuanAwemeUniPromotionOrderBudgetAddV10Request = $qianchuanAwemeUniPromotionOrderBudgetAddV10Request;
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
     * 追加随心推全域订单预算
     */
    public function execute(): \Oceanengine\Models\QianchuanAwemeUniPromotionOrderBudgetAddV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanAwemeUniPromotionOrderBudgetAddV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/aweme/uni_promotion/order/budget/add/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAwemeUniPromotionOrderBudgetAddV10Response::class);

        return $result['model'];
    }
}
