<?php

/**
 * 本文件由 go2php 生成，源: api_star_vas_get_boost_group_options_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询助推组标签定向的选项值
 */
class ApiOpenApi2StarVasGetBoostGroupOptionsGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 客户ID */
    private ?int $starId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarVasGetBoostGroupOptionsV2ApiService $service)
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
     * 查询助推组标签定向的选项值
     */
    public function execute(): \Oceanengine\Models\StarVasGetBoostGroupOptionsV2Response
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
        $url = '/open_api/2/star/vas/get_boost_group_options/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarVasGetBoostGroupOptionsV2Response::class);

        return $result['model'];
    }
}
