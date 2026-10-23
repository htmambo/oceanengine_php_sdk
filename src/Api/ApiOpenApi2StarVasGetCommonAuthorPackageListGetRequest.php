<?php

/**
 * 本文件由 go2php 生成，源: api_star_vas_get_common_author_package_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取八大人群包
 */
class ApiOpenApi2StarVasGetCommonAuthorPackageListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 客户ID */
    private ?int $starId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarVasGetCommonAuthorPackageListV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 客户ID
     */
    public function starId(int $starId): self
    {
        $this->starId = $starId;
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
     * 获取八大人群包
     */
    public function execute(): \Oceanengine\Models\StarVasGetCommonAuthorPackageListV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/vas/get_common_author_package_list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarVasGetCommonAuthorPackageListV2Response::class);

        return $result['model'];
    }
}
