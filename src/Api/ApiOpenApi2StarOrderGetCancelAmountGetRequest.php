<?php

/**
 * 本文件由 go2php 生成，源: api_star_order_get_cancel_amount_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取任务取消赔付金额
 */
class ApiOpenApi2StarOrderGetCancelAmountGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 星图客户ID */
    private ?int $starId = null;
    /** @var int 任务ID */
    private ?int $orderId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarOrderGetCancelAmountV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 星图客户ID
     */
    public function starId(int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * 任务ID
     */
    public function orderId(int $orderId): self
    {
        $this->orderId = $orderId;
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
     * 获取任务取消赔付金额
     */
    public function execute(): \Oceanengine\Models\StarOrderGetCancelAmountV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        if ($this->orderId === null) {
            throw new \InvalidArgumentException('orderId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        $queryParams['order_id'] = $this->orderId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/order/get_cancel_amount/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarOrderGetCancelAmountV2Response::class);

        return $result['model'];
    }
}
