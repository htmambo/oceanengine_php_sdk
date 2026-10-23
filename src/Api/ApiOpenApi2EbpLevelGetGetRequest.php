<?php

/**
 * 本文件由 go2php 生成，源: api_ebp_level_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 拉取EBP/团队层级关系
 */
class ApiOpenApi2EbpLevelGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $enterpriseOrganizationId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(EbpLevelGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function enterpriseOrganizationId(int $enterpriseOrganizationId): self
    {
        $this->enterpriseOrganizationId = $enterpriseOrganizationId;
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
     * 拉取EBP/团队层级关系
     */
    public function execute(): \Oceanengine\Models\EbpLevelGetV2Response
    {
        if ($this->enterpriseOrganizationId === null) {
            throw new \InvalidArgumentException('enterpriseOrganizationId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['enterprise_organization_id'] = $this->enterpriseOrganizationId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/ebp/level/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\EbpLevelGetV2Response::class);

        return $result['model'];
    }
}
