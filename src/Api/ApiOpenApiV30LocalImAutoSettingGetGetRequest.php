<?php

/**
 * 本文件由 go2php 生成，源: api_local_im_auto_setting_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询线索私信功能开关
 */
class ApiOpenApiV30LocalImAutoSettingGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $localAccountId = null;
    /** @var string 请求来源 */
    private ?string $sourceName = null;
    /** @var int[] 账户id列表 */
    private ?array $lifeAccountIdList = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalImAutoSettingGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localAccountId(int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * 请求来源
     */
    public function sourceName(string $sourceName): self
    {
        $this->sourceName = $sourceName;
        return $this;
    }

    /**
     * 账户id列表
     */
    public function lifeAccountIdList(array $lifeAccountIdList): self
    {
        $this->lifeAccountIdList = $lifeAccountIdList;
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
     * 查询线索私信功能开关
     */
    public function execute(): \Oceanengine\Models\LocalImAutoSettingGetV30Response
    {
        if ($this->localAccountId === null) {
            throw new \InvalidArgumentException('localAccountId is required and must be specified');
        }
        if ($this->sourceName === null) {
            throw new \InvalidArgumentException('sourceName is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['local_account_id'] = $this->localAccountId;
        if ($this->lifeAccountIdList !== null) {
            $queryParams['life_account_id_list'] = $this->lifeAccountIdList;
        }
        $queryParams['source_name'] = $this->sourceName;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/im_auto_setting/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalImAutoSettingGetV30Response::class);

        return $result['model'];
    }
}
