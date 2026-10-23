<?php

/**
 * 本文件由 go2php 生成，源: api_tools_joint_bid_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创建联合出价工具
 */
class ApiOpenApiV30ToolsJointBidCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsJointBidCreateV30Request $toolsJointBidCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsJointBidCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsJointBidCreateV30Request(\Oceanengine\Models\ToolsJointBidCreateV30Request $toolsJointBidCreateV30Request): self
    {
        $this->toolsJointBidCreateV30Request = $toolsJointBidCreateV30Request;
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
     * 创建联合出价工具
     */
    public function execute(): \Oceanengine\Models\ToolsJointBidCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsJointBidCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/joint_bid/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsJointBidCreateV30Response::class);

        return $result['model'];
    }
}
