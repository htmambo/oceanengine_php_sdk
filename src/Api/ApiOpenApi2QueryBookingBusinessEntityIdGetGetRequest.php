<?php

/**
 * 本文件由 go2php 生成，源: api_query_booking_business_entity_id_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 排期-查询业务实体ID
 */
class ApiOpenApi2QueryBookingBusinessEntityIdGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 代理商账户ID */
    private ?int $agentId = null;
    /** @var int[] 主订单ID */
    private ?array $orderIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QueryBookingBusinessEntityIdGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 代理商账户ID
     */
    public function agentId(int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * 主订单ID
     */
    public function orderIds(array $orderIds): self
    {
        $this->orderIds = $orderIds;
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
     * 排期-查询业务实体ID
     */
    public function execute(): \Oceanengine\Models\QueryBookingBusinessEntityIdGetV2Response
    {
        if ($this->agentId === null) {
            throw new \InvalidArgumentException('agentId is required and must be specified');
        }
        if ($this->orderIds === null) {
            throw new \InvalidArgumentException('orderIds is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['agent_id'] = $this->agentId;
        $queryParams['order_ids'] = $this->orderIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/query/booking/business_entity_id/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QueryBookingBusinessEntityIdGetV2Response::class);

        return $result['model'];
    }
}
