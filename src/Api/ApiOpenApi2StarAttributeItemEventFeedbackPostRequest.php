<?php

/**
 * 本文件由 go2php 生成，源: api_star_attribute_item_event_feedback_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 精品游戏-视频信息回传
 */
class ApiOpenApi2StarAttributeItemEventFeedbackPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarAttributeItemEventFeedbackV2Request $starAttributeItemEventFeedbackV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarAttributeItemEventFeedbackV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starAttributeItemEventFeedbackV2Request(\Oceanengine\Models\StarAttributeItemEventFeedbackV2Request $starAttributeItemEventFeedbackV2Request): self
    {
        $this->starAttributeItemEventFeedbackV2Request = $starAttributeItemEventFeedbackV2Request;
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
     * 精品游戏-视频信息回传
     */
    public function execute(): \Oceanengine\Models\StarAttributeItemEventFeedbackV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starAttributeItemEventFeedbackV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/attribute/item_event_feedback/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarAttributeItemEventFeedbackV2Response::class);

        return $result['model'];
    }
}
