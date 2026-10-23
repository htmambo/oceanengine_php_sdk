<?php

/**
 * 本文件由 go2php 生成，源: api_tools_comment_terms_banned_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * PM2
 */
class ApiOpenApiV30ToolsCommentTermsBannedGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主id */
    private ?int $advertiserId = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var int 页面大小 */
    private ?int $pageSize = null;
    /** @var string 抖音号，当is_apply_to_adv不传或为false时，aweme_id生效 */
    private ?string $awemeId = null;
    /** @var bool 是否应用于当前账户，当is_apply_to_adv不传或为false时，aweme_id生效 */
    private ?bool $isApplyToAdv = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsCommentTermsBannedGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
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
     * 页码
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * 抖音号，当is_apply_to_adv不传或为false时，aweme_id生效
     */
    public function awemeId(string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 是否应用于当前账户，当is_apply_to_adv不传或为false时，aweme_id生效
     */
    public function isApplyToAdv(bool $isApplyToAdv): self
    {
        $this->isApplyToAdv = $isApplyToAdv;
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
     * PM2
     */
    public function execute(): \Oceanengine\Models\ToolsCommentTermsBannedGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        if ($this->awemeId !== null) {
            $queryParams['aweme_id'] = $this->awemeId;
        }
        if ($this->isApplyToAdv !== null) {
            $queryParams['is_apply_to_adv'] = $this->isApplyToAdv;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/comment/terms_banned/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsCommentTermsBannedGetV30Response::class);

        return $result['model'];
    }
}
