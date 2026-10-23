<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_order_budget_add_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 可以使用该接口进行投放中订单的续费和续期操作
 */
class ApiOpenApiV10QianchuanAwemeOrderBudgetAddPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanAwemeOrderBudgetAddV10Request $qianchuanAwemeOrderBudgetAddV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAwemeOrderBudgetAddV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanAwemeOrderBudgetAddV10Request(\Oceanengine\Models\QianchuanAwemeOrderBudgetAddV10Request $qianchuanAwemeOrderBudgetAddV10Request): self
    {
        $this->qianchuanAwemeOrderBudgetAddV10Request = $qianchuanAwemeOrderBudgetAddV10Request;
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
     * 可以使用该接口进行投放中订单的续费和续期操作
     */
    public function execute(): \Oceanengine\Models\QianchuanAwemeOrderBudgetAddV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanAwemeOrderBudgetAddV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/aweme/order/budget/add/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAwemeOrderBudgetAddV10Response::class);

        return $result['model'];
    }
}
