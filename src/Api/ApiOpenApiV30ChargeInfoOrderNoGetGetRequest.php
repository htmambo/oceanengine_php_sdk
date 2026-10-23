<?php

/**
 * 本文件由 go2php 生成，源: api_charge_info_order_no_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 按三方单号查询充值信息
 */
class ApiOpenApiV30ChargeInfoOrderNoGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var string 三方单号,（包括商户单号、商家订单号、flowId、苹果单号等） */
    private ?string $outOrderNo = null;
    /** @var int 充值账户，传入时仅返回属于该账户的查询结果 */
    private ?int $chargeTargetId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ChargeInfoOrderNoGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 三方单号,（包括商户单号、商家订单号、flowId、苹果单号等）
     */
    public function outOrderNo(string $outOrderNo): self
    {
        $this->outOrderNo = $outOrderNo;
        return $this;
    }

    /**
     * 充值账户，传入时仅返回属于该账户的查询结果
     */
    public function chargeTargetId(int $chargeTargetId): self
    {
        $this->chargeTargetId = $chargeTargetId;
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
     * 按三方单号查询充值信息
     */
    public function execute(): \Oceanengine\Models\ChargeInfoOrderNoGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->outOrderNo === null) {
            throw new \InvalidArgumentException('outOrderNo is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['out_order_no'] = $this->outOrderNo;
        if ($this->chargeTargetId !== null) {
            $queryParams['charge_target_id'] = $this->chargeTargetId;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/charge_info_order_no/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ChargeInfoOrderNoGetV30Response::class);

        return $result['model'];
    }
}
