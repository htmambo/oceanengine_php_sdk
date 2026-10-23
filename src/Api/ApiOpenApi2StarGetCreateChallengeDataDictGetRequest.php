<?php

/**
 * 本文件由 go2php 生成，源: api_star_get_create_challenge_data_dict_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取投稿任务创建数据字典
 */
class ApiOpenApi2StarGetCreateChallengeDataDictGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 客户星图ID */
    private ?int $starId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarGetCreateChallengeDataDictV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 客户星图ID
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
     * 获取投稿任务创建数据字典
     */
    public function execute(): \Oceanengine\Models\StarGetCreateChallengeDataDictV2Response
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
        $url = '/open_api/2/star/get_create_challenge_data_dict/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarGetCreateChallengeDataDictV2Response::class);

        return $result['model'];
    }
}
