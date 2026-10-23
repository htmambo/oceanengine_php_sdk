<?php

/**
 * 本文件由 go2php 生成，源: api_star_attribute_user_event_feedback_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 用户事件回传接口
 */
class ApiOpenApi2StarAttributeUserEventFeedbackPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarAttributeUserEventFeedbackV2Request $starAttributeUserEventFeedbackV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarAttributeUserEventFeedbackV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starAttributeUserEventFeedbackV2Request(\Oceanengine\Models\StarAttributeUserEventFeedbackV2Request $starAttributeUserEventFeedbackV2Request): self
    {
        $this->starAttributeUserEventFeedbackV2Request = $starAttributeUserEventFeedbackV2Request;
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
     * 用户事件回传接口
     */
    public function execute(): \Oceanengine\Models\StarAttributeUserEventFeedbackV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starAttributeUserEventFeedbackV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/attribute/user_event_feedback/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarAttributeUserEventFeedbackV2Response::class);

        return $result['model'];
    }
}
