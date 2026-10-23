<?php

/**
 * 本文件由 go2php 生成，源: api_tools_rubeex_playable_ad_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2ToolsRubeexPlayableAdListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 试玩素材id */
    private ?int $playableId = null;
    /** @var int 广告主id */
    private ?int $advertiserId = null;
    /** @var int 页码。默认为1 */
    private ?int $page = null;
    /** @var int 页面大小。默认为20, 最大为100 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsRubeexPlayableAdListV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 试玩素材id
     */
    public function playableId(int $playableId): self
    {
        $this->playableId = $playableId;
        return $this;
    }

    /**
     * 广告主id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 页码。默认为1
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小。默认为20, 最大为100
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
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
    public function execute(): \Oceanengine\Models\ToolsRubeexPlayableAdListV2Response
    {
        if ($this->playableId === null) {
            throw new \InvalidArgumentException('playableId is required and must be specified');
        }
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['playable_id'] = $this->playableId;
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/rubeex_playable/ad_list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsRubeexPlayableAdListV2Response::class);

        return $result['model'];
    }
}
