<?php

/**
 * 本文件由 go2php 生成，源: api_qual_account_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 资质编号查询账户列表
 */
class ApiOpenApi2QualAccountListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var string 资质编号 */
    private ?string $qualCode = null;
    /** @var string 资质类型，BUSINESS_LICENSE/ID_CARD */
    private ?string $qualType = null;
    /** @var int 查询平台，AD-0；千川-80；本地推-10168 */
    private ?int $appKey = null;
    /** @var int 商业化uid */
    private ?int $userId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QualAccountListV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 资质编号
     */
    public function qualCode(string $qualCode): self
    {
        $this->qualCode = $qualCode;
        return $this;
    }

    /**
     * 资质类型，BUSINESS_LICENSE/ID_CARD
     */
    public function qualType(string $qualType): self
    {
        $this->qualType = $qualType;
        return $this;
    }

    /**
     * 查询平台，AD-0；千川-80；本地推-10168
     */
    public function appKey(int $appKey): self
    {
        $this->appKey = $appKey;
        return $this;
    }

    /**
     * 商业化uid
     */
    public function userId(int $userId): self
    {
        $this->userId = $userId;
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
     * 资质编号查询账户列表
     */
    public function execute(): \Oceanengine\Models\QualAccountListV2Response
    {
        if ($this->qualCode === null) {
            throw new \InvalidArgumentException('qualCode is required and must be specified');
        }
        if ($this->qualType === null) {
            throw new \InvalidArgumentException('qualType is required and must be specified');
        }
        if ($this->appKey === null) {
            throw new \InvalidArgumentException('appKey is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['qual_code'] = $this->qualCode;
        $queryParams['qual_type'] = $this->qualType;
        $queryParams['app_key'] = $this->appKey;
        if ($this->userId !== null) {
            $queryParams['user_id'] = $this->userId;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/qual/account/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QualAccountListV2Response::class);

        return $result['model'];
    }
}
