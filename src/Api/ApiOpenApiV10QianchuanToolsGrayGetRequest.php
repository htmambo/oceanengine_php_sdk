<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_tools_gray_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * - 需求文档：https://bytedance.feishu.cn/wiki/wikcnzdnNkJC4qmlmA3SuU4v05d - 开发：邓博 - PM：包宏权
 */
class ApiOpenApiV10QianchuanToolsGrayGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?array $grayKeys = null;
    private ?array $awemeIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanToolsGrayV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function grayKeys(array $grayKeys): self
    {
        $this->grayKeys = $grayKeys;
        return $this;
    }

    public function awemeIds(array $awemeIds): self
    {
        $this->awemeIds = $awemeIds;
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
     * - 需求文档：https://bytedance.feishu.cn/wiki/wikcnzdnNkJC4qmlmA3SuU4v05d - 开发：邓博 - PM：包宏权
     */
    public function execute(): \Oceanengine\Models\QianchuanToolsGrayV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->grayKeys === null) {
            throw new \InvalidArgumentException('grayKeys is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['gray_keys'] = $this->grayKeys;
        if ($this->awemeIds !== null) {
            $queryParams['aweme_ids'] = $this->awemeIds;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/tools/gray/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanToolsGrayV10Response::class);

        return $result['model'];
    }
}
