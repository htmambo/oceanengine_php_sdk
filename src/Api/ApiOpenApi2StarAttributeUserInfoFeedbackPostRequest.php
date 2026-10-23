<?php

/**
 * 本文件由 go2php 生成，源: api_star_attribute_user_info_feedback_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 用户信息回传接口
 */
class ApiOpenApi2StarAttributeUserInfoFeedbackPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarAttributeUserInfoFeedbackV2Request $starAttributeUserInfoFeedbackV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarAttributeUserInfoFeedbackV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starAttributeUserInfoFeedbackV2Request(\Oceanengine\Models\StarAttributeUserInfoFeedbackV2Request $starAttributeUserInfoFeedbackV2Request): self
    {
        $this->starAttributeUserInfoFeedbackV2Request = $starAttributeUserInfoFeedbackV2Request;
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
     * 用户信息回传接口
     */
    public function execute(): \Oceanengine\Models\StarAttributeUserInfoFeedbackV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starAttributeUserInfoFeedbackV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/attribute/user_info_feedback/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarAttributeUserInfoFeedbackV2Response::class);

        return $result['model'];
    }
}
