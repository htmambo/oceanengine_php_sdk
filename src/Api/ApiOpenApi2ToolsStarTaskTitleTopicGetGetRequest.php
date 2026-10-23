<?php

/**
 * 本文件由 go2php 生成，源: api_tools_star_task_title_topic_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询星广任务标题指定话题
 */
class ApiOpenApi2ToolsStarTaskTitleTopicGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?string $titleSpecifiesTopicItem = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsStarTaskTitleTopicGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function titleSpecifiesTopicItem(string $titleSpecifiesTopicItem): self
    {
        $this->titleSpecifiesTopicItem = $titleSpecifiesTopicItem;
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
     * 查询星广任务标题指定话题
     */
    public function execute(): \Oceanengine\Models\ToolsStarTaskTitleTopicGetV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->titleSpecifiesTopicItem === null) {
            throw new \InvalidArgumentException('titleSpecifiesTopicItem is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['title_specifies_topic_item'] = $this->titleSpecifiesTopicItem;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/star_task/title_topic/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsStarTaskTitleTopicGetV2Response::class);

        return $result['model'];
    }
}
