<?php

/**
 * 本文件由 go2php 生成，源: api_tools_creative_word_select_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 提供动态创意词包查询功能
 */
class ApiOpenApi2ToolsCreativeWordSelectGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var int[] 创意词包id列表，如不填默认返回所有创意词包 */
    private ?array $creativeWordIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsCreativeWordSelectV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 创意词包id列表，如不填默认返回所有创意词包
     */
    public function creativeWordIds(array $creativeWordIds): self
    {
        $this->creativeWordIds = $creativeWordIds;
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
     * 提供动态创意词包查询功能
     */
    public function execute(): \Oceanengine\Models\ToolsCreativeWordSelectV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->creativeWordIds !== null) {
            $queryParams['creative_word_ids'] = $this->creativeWordIds;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/creative_word/select/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsCreativeWordSelectV2Response::class);

        return $result['model'];
    }
}
