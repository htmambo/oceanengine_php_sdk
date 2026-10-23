<?php

/**
 * 本文件由 go2php 生成，源: api_tools_aweme_banned_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * PM2
 */
class ApiOpenApiV30ToolsAwemeBannedListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主id */
    private ?int $advertiserId = null;
    /** @var string 屏蔽类型， 允许值： CUSTOM_TYPE：自定义规则，根据昵称关键词屏蔽；AWEME_TYPE：根据抖音id屏蔽。 */
    private ?string $bannedType = null;
    /** @var string 抖音号，当is_apply_to_adv不传或为false时，aweme_id生效 */
    private ?string $awemeId = null;
    /** @var bool 是否应用于当前账户，当is_apply_to_adv不传或为false时，aweme_id生效 */
    private ?bool $isApplyToAdv = null;
    /** @var string 昵称关键词，最大不超过20字 */
    private ?string $nicknameKeyword = null;
    /** @var string 抖音用户id */
    private ?string $awemeUserId = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var int 页面大小 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAwemeBannedListV30ApiService $service)
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
     * 屏蔽类型， 允许值： CUSTOM_TYPE：自定义规则，根据昵称关键词屏蔽；AWEME_TYPE：根据抖音id屏蔽。
     */
    public function bannedType(string $bannedType): self
    {
        $this->bannedType = $bannedType;
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

    /**
     * 昵称关键词，最大不超过20字
     */
    public function nicknameKeyword(string $nicknameKeyword): self
    {
        $this->nicknameKeyword = $nicknameKeyword;
        return $this;
    }

    /**
     * 抖音用户id
     */
    public function awemeUserId(string $awemeUserId): self
    {
        $this->awemeUserId = $awemeUserId;
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
    public function execute(): \Oceanengine\Models\ToolsAwemeBannedListV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->bannedType !== null) {
            $queryParams['banned_type'] = $this->bannedType;
        }
        if ($this->awemeId !== null) {
            $queryParams['aweme_id'] = $this->awemeId;
        }
        if ($this->isApplyToAdv !== null) {
            $queryParams['is_apply_to_adv'] = $this->isApplyToAdv;
        }
        if ($this->nicknameKeyword !== null) {
            $queryParams['nickname_keyword'] = $this->nicknameKeyword;
        }
        if ($this->awemeUserId !== null) {
            $queryParams['aweme_user_id'] = $this->awemeUserId;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/aweme_banned/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAwemeBannedListV30Response::class);

        return $result['model'];
    }
}
