<?php

/**
 * 本文件由 go2php 生成，源: api_subject_bank_info_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询主体对应的银行信息
 */
class ApiOpenApiV30SubjectBankInfoGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var int 广告主账号ID */
    private ?int $accountId = null;
    /** @var int 充值类型 1-预付 2-授信 */
    private ?int $chargeType = null;
    /** @var int 业务平台 */
    private ?int $platform = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(SubjectBankInfoGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 广告主账号ID
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 充值类型 1-预付 2-授信
     */
    public function chargeType(int $chargeType): self
    {
        $this->chargeType = $chargeType;
        return $this;
    }

    /**
     * 业务平台
     */
    public function platform(int $platform): self
    {
        $this->platform = $platform;
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
     * 查询主体对应的银行信息
     */
    public function execute(): \Oceanengine\Models\SubjectBankInfoGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->chargeType === null) {
            throw new \InvalidArgumentException('chargeType is required and must be specified');
        }
        if ($this->platform === null) {
            throw new \InvalidArgumentException('platform is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['account_id'] = $this->accountId;
        $queryParams['charge_type'] = $this->chargeType;
        $queryParams['platform'] = $this->platform;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/subject_bank_info/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\SubjectBankInfoGetV30Response::class);

        return $result['model'];
    }
}
