<?php

/**
 * 本文件由 go2php 生成，源: api_charge_tag_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询客户是否为非入海直投客户
 */
class ApiOpenApiV30ChargeTagGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var string ChargeTagTypeEnum 英文字符串 code */
    private ?string $tagType = null;
    /** @var int 广告主账户 ID */
    private ?int $advId = null;
    /** @var int 钱包 ID */
    private ?int $walletId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ChargeTagGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * ChargeTagTypeEnum 英文字符串 code
     */
    public function tagType(string $tagType): self
    {
        $this->tagType = $tagType;
        return $this;
    }

    /**
     * 广告主账户 ID
     */
    public function advId(int $advId): self
    {
        $this->advId = $advId;
        return $this;
    }

    /**
     * 钱包 ID
     */
    public function walletId(int $walletId): self
    {
        $this->walletId = $walletId;
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
     * 查询客户是否为非入海直投客户
     */
    public function execute(): \Oceanengine\Models\ChargeTagGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->tagType === null) {
            throw new \InvalidArgumentException('tagType is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->advId !== null) {
            $queryParams['adv_id'] = $this->advId;
        }
        if ($this->walletId !== null) {
            $queryParams['wallet_id'] = $this->walletId;
        }
        $queryParams['tag_type'] = $this->tagType;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/charge_tag/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ChargeTagGetV30Response::class);

        return $result['model'];
    }
}
