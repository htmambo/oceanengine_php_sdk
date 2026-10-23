<?php

/**
 * 本文件由 go2php 生成，源: api_local_im_query_msg_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 根据msgId查询已经推送出去的原始消息
 */
class ApiOpenApiV30LocalImQueryMsgGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $localAccountId = null;
    private ?string $msgId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalImQueryMsgV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localAccountId(int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    public function msgId(string $msgId): self
    {
        $this->msgId = $msgId;
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
     * 根据msgId查询已经推送出去的原始消息
     */
    public function execute(): \Oceanengine\Models\LocalImQueryMsgV30Response
    {
        if ($this->localAccountId === null) {
            throw new \InvalidArgumentException('localAccountId is required and must be specified');
        }
        if ($this->msgId === null) {
            throw new \InvalidArgumentException('msgId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['local_account_id'] = $this->localAccountId;
        $queryParams['msg_id'] = $this->msgId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/im/query/msg/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalImQueryMsgV30Response::class);

        return $result['model'];
    }
}
