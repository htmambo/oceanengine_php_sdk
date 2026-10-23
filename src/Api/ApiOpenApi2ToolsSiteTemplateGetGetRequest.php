<?php

/**
 * 本文件由 go2php 生成，源: api_tools_site_template_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过此接口，用户可以获取通过【基于站点创建模板】接口创建的落地页模板。
 * > 落地页的每个发布版本都可以创建落地页模板，一个落地页站点可以创建多个落地页模板。
 */
class ApiOpenApi2ToolsSiteTemplateGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主 */
    private ?int $advertiserId = null;
    /** @var \Oceanengine\Models\ToolsSiteTemplateGetV2Filter 过滤条件 */
    private ?\Oceanengine\Models\ToolsSiteTemplateGetV2Filter $filter = null;
    /** @var int 页码，默认值是&#x60;1&#x60;，范围page &gt;&#x3D;1 */
    private ?int $page = null;
    /** @var int 页面大小，默认值是&#x60;10&#x60;，范围&#x60;1~100&#x60; */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsSiteTemplateGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 过滤条件
     */
    public function filter(\Oceanengine\Models\ToolsSiteTemplateGetV2Filter $filter): self
    {
        $this->filter = $filter;
        return $this;
    }

    /**
     * 页码，默认值是&#x60;1&#x60;，范围page &gt;&#x3D;1
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小，默认值是&#x60;10&#x60;，范围&#x60;1~100&#x60;
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
     * 通过此接口，用户可以获取通过【基于站点创建模板】接口创建的落地页模板。
     */
    public function execute(): \Oceanengine\Models\ToolsSiteTemplateGetV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->filter !== null) {
            $__encoded0 = json_encode($this->filter);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filter');
            }
            $queryParams['filter'] = $__encoded0;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/site_template/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsSiteTemplateGetV2Response::class);

        return $result['model'];
    }
}
