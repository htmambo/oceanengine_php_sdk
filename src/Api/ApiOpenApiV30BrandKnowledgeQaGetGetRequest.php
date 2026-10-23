<?php

/**
 * 本文件由 go2php 生成，源: api_brand_knowledge_qa_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 品牌知识问答
 */
class ApiOpenApiV30BrandKnowledgeQaGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var string 用户提问 */
    private ?string $userQuery = null;
    /** @var int 用户ID */
    private ?int $accountId = null;
    /** @var string 业务线类型 */
    private ?string $businessType = null;
    /** @var string 会话ID */
    private ?string $sessionId = null;
    /** @var string 对话历史 */
    private ?string $chatHistoryStr = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandKnowledgeQaGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 用户提问
     */
    public function userQuery(string $userQuery): self
    {
        $this->userQuery = $userQuery;
        return $this;
    }

    /**
     * 用户ID
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 业务线类型
     */
    public function businessType(string $businessType): self
    {
        $this->businessType = $businessType;
        return $this;
    }

    /**
     * 会话ID
     */
    public function sessionId(string $sessionId): self
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    /**
     * 对话历史
     */
    public function chatHistoryStr(string $chatHistoryStr): self
    {
        $this->chatHistoryStr = $chatHistoryStr;
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
     * 品牌知识问答
     */
    public function execute(): \Oceanengine\Models\BrandKnowledgeQaGetV30Response
    {
        if ($this->userQuery === null) {
            throw new \InvalidArgumentException('userQuery is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->accountId !== null) {
            $queryParams['account_id'] = $this->accountId;
        }
        $queryParams['user_query'] = $this->userQuery;
        if ($this->businessType !== null) {
            $queryParams['business_type'] = $this->businessType;
        }
        if ($this->sessionId !== null) {
            $queryParams['session_id'] = $this->sessionId;
        }
        if ($this->chatHistoryStr !== null) {
            $queryParams['chat_history_str'] = $this->chatHistoryStr;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/brand/knowledge_qa/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandKnowledgeQaGetV30Response::class);

        return $result['model'];
    }
}
