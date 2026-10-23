<?php

/**
 * 本文件由 go2php 生成，源: api_tools_playable_list_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2ToolsPlayableListGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $page = null;
    private ?int $pageSize = null;
    private ?string $playableSource = null;
    private ?string $playableUrl = null;
    private ?string $status = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsPlayableListGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    public function playableSource(string $playableSource): self
    {
        $this->playableSource = $playableSource;
        return $this;
    }

    public function playableUrl(string $playableUrl): self
    {
        $this->playableUrl = $playableUrl;
        return $this;
    }

    public function status(string $status): self
    {
        $this->status = $status;
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
     * API Description
     */
    public function execute(): \Oceanengine\Models\ToolsPlayableListGetV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->advertiserId !== null) {
            $queryParams['advertiser_id'] = $this->advertiserId;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        if ($this->playableSource !== null) {
            $queryParams['playable_source'] = $this->playableSource;
        }
        if ($this->playableUrl !== null) {
            $queryParams['playable_url'] = $this->playableUrl;
        }
        if ($this->status !== null) {
            $queryParams['status'] = $this->status;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/playable_list/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsPlayableListGetV2Response::class);

        return $result['model'];
    }
}
