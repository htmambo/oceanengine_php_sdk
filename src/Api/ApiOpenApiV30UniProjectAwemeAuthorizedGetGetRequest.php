<?php

/**
 * 本文件由 go2php 生成，源: api_uni_project_aweme_authorized_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取全域创编可用抖音号
 */
class ApiOpenApiV30UniProjectAwemeAuthorizedGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $playletId = null;
    private ?int $page = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(UniProjectAwemeAuthorizedGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function playletId(int $playletId): self
    {
        $this->playletId = $playletId;
        return $this;
    }

    public function page(int $page): self
    {
        $this->page = $page;
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
     * 获取全域创编可用抖音号
     */
    public function execute(): \Oceanengine\Models\UniProjectAwemeAuthorizedGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
        }
        if ($this->playletId === null) {
            throw new \InvalidArgumentException('playletId is required and must be specified');
        }
        if ($this->playletId < 1) {
            throw new \InvalidArgumentException('playletId must be greater than 1');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['playlet_id'] = $this->playletId;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/uni_project/aweme/authorized/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\UniProjectAwemeAuthorizedGetV30Response::class);

        return $result['model'];
    }
}
