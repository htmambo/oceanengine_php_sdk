<?php

/**
 * 本文件由 go2php 生成，源: api_tools_pre_audit_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过此接口，用户可以获取到前置预审审核的结果。
 * > 需要注意的是前置预审的结果和最终的素材的审核结果可能存在出入，前置预审结果仅供参考。
 */
class ApiOpenApi2ToolsPreAuditGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var \Oceanengine\Models\ToolsPreAuditGetV2Filter 过滤条件 */
    private ?\Oceanengine\Models\ToolsPreAuditGetV2Filter $filter = null;
    /** @var int 页码，默认值&#x60;1&#x60;，范围：page &gt;&#x3D; 1 */
    private ?int $page = null;
    /** @var int 页面大小，默认值 &#x60;20&#x60;，范围：&#x60;1-50&#x60; */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsPreAuditGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 过滤条件
     */
    public function filter(\Oceanengine\Models\ToolsPreAuditGetV2Filter $filter): self
    {
        $this->filter = $filter;
        return $this;
    }

    /**
     * 页码，默认值&#x60;1&#x60;，范围：page &gt;&#x3D; 1
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小，默认值 &#x60;20&#x60;，范围：&#x60;1-50&#x60;
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
     * 通过此接口，用户可以获取到前置预审审核的结果。
     */
    public function execute(): \Oceanengine\Models\ToolsPreAuditGetV2Response
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
        $url = '/open_api/2/tools/pre_audit/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsPreAuditGetV2Response::class);

        return $result['model'];
    }
}
