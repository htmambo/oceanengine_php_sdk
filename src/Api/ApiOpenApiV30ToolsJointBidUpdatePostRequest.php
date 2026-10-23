<?php

/**
 * 本文件由 go2php 生成，源: api_tools_joint_bid_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 更新联合出价范围及RTA_ID
 */
class ApiOpenApiV30ToolsJointBidUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsJointBidUpdateV30Request $toolsJointBidUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsJointBidUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsJointBidUpdateV30Request(\Oceanengine\Models\ToolsJointBidUpdateV30Request $toolsJointBidUpdateV30Request): self
    {
        $this->toolsJointBidUpdateV30Request = $toolsJointBidUpdateV30Request;
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
     * 更新联合出价范围及RTA_ID
     */
    public function execute(): \Oceanengine\Models\ToolsJointBidUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsJointBidUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/joint_bid/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsJointBidUpdateV30Response::class);

        return $result['model'];
    }
}
