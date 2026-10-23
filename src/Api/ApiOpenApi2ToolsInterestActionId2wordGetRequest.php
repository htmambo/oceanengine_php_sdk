<?php

/**
 * 本文件由 go2php 生成，源: api_tools_interest_action_id2word_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 兴趣行为类目关键词id转词
 */
class ApiOpenApi2ToolsInterestActionId2wordGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsInterestActionId2wordV2ActionDays $actionDays = null;
    private ?int $advertiserId = null;
    private ?array $ids = null;
    private ?string $tagType = null;
    private ?string $targetingType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsInterestActionId2wordV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function actionDays(\Oceanengine\Models\ToolsInterestActionId2wordV2ActionDays $actionDays): self
    {
        $this->actionDays = $actionDays;
        return $this;
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function ids(array $ids): self
    {
        $this->ids = $ids;
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
     * 兴趣行为类目关键词id转词
     */
    public function execute(): \Oceanengine\Models\ToolsInterestActionId2wordV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->actionDays !== null) {
            $__encoded0 = json_encode($this->actionDays);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: actionDays');
            }
            $queryParams['action_days'] = $__encoded0;
        }
        if ($this->advertiserId !== null) {
            $queryParams['advertiser_id'] = $this->advertiserId;
        }
        if ($this->ids !== null) {
            $queryParams['ids'] = $this->ids;
        }
        if ($this->tagType !== null) {
            $queryParams['tag_type'] = $this->tagType;
        }
        if ($this->targetingType !== null) {
            $queryParams['targeting_type'] = $this->targetingType;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/interest_action/id2word/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsInterestActionId2wordV2Response::class);

        return $result['model'];
    }
}
