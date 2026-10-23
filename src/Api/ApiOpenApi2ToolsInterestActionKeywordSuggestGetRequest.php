<?php

/**
 * 本文件由 go2php 生成，源: api_tools_interest_action_keyword_suggest_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取行为兴趣推荐关键词
 */
class ApiOpenApi2ToolsInterestActionKeywordSuggestGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $id = null;
    private ?string $tagType = null;
    private ?string $targetingType = null;
    private ?\Oceanengine\Models\ToolsInterestActionKeywordSuggestV2ActionDays $actionDays = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsInterestActionKeywordSuggestV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function id(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function tagType(string $tagType): self
    {
        $this->tagType = $tagType;
        return $this;
    }

    public function targetingType(string $targetingType): self
    {
        $this->targetingType = $targetingType;
        return $this;
    }

    public function actionDays(\Oceanengine\Models\ToolsInterestActionKeywordSuggestV2ActionDays $actionDays): self
    {
        $this->actionDays = $actionDays;
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
     * 获取行为兴趣推荐关键词
     */
    public function execute(): \Oceanengine\Models\ToolsInterestActionKeywordSuggestV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->id === null) {
            throw new \InvalidArgumentException('id is required and must be specified');
        }
        if ($this->tagType === null) {
            throw new \InvalidArgumentException('tagType is required and must be specified');
        }
        if ($this->targetingType === null) {
            throw new \InvalidArgumentException('targetingType is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['id'] = $this->id;
        $queryParams['tag_type'] = $this->tagType;
        $queryParams['targeting_type'] = $this->targetingType;
        if ($this->actionDays !== null) {
            $__encoded0 = json_encode($this->actionDays);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: actionDays');
            }
            $queryParams['action_days'] = $__encoded0;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/interest_action/keyword/suggest/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsInterestActionKeywordSuggestV2Response::class);

        return $result['model'];
    }
}
