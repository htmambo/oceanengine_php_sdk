<?php

/**
 * 本文件由 go2php 生成，源: api_tools_orange_site_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取支持对应优化目标的橙子建站站点列表
 */
class ApiOpenApiV30ToolsOrangeSiteGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $page = null;
    private ?int $pageSize = null;
    private ?\Oceanengine\Models\ToolsOrangeSiteGetV30OptimizeGoal $optimizeGoal = null;
    private ?string $status = null;
    private ?\Oceanengine\Models\ToolsOrangeSiteGetV30Filtering $filtering = null;
    private ?string $multiAssetType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsOrangeSiteGetV30ApiService $service)
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

    public function optimizeGoal(\Oceanengine\Models\ToolsOrangeSiteGetV30OptimizeGoal $optimizeGoal): self
    {
        $this->optimizeGoal = $optimizeGoal;
        return $this;
    }

    public function status(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function filtering(\Oceanengine\Models\ToolsOrangeSiteGetV30Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    public function multiAssetType(string $multiAssetType): self
    {
        $this->multiAssetType = $multiAssetType;
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
     * 获取支持对应优化目标的橙子建站站点列表
     */
    public function execute(): \Oceanengine\Models\ToolsOrangeSiteGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
        }
        if ($this->page === null) {
            throw new \InvalidArgumentException('page is required and must be specified');
        }
        if ($this->page < 1) {
            throw new \InvalidArgumentException('page must be greater than 1');
        }
        if ($this->pageSize === null) {
            throw new \InvalidArgumentException('pageSize is required and must be specified');
        }
        if ($this->pageSize < 1) {
            throw new \InvalidArgumentException('pageSize must be greater than 1');
        }
        if ($this->optimizeGoal === null) {
            throw new \InvalidArgumentException('optimizeGoal is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['page'] = $this->page;
        $queryParams['page_size'] = $this->pageSize;
        if ($this->status !== null) {
            $queryParams['status'] = $this->status;
        }
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        $__encoded1 = json_encode($this->optimizeGoal);
            if ($__encoded1 === false) {
                throw new \RuntimeException('Failed to encode parameter: optimizeGoal');
            }
            $queryParams['optimize_goal'] = $__encoded1;
        if ($this->multiAssetType !== null) {
            $queryParams['multi_asset_type'] = $this->multiAssetType;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/orange_site/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsOrangeSiteGetV30Response::class);

        return $result['model'];
    }
}
