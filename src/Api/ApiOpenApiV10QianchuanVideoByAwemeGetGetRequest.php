<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_video_by_aweme_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过抖音主页视频 ID/URL 查询对应的本地上传视频信息，包含已隐藏视频
 */
class ApiOpenApiV10QianchuanVideoByAwemeGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 千川广告主ID */
    private ?int $advertiserId = null;
    /** @var int 抖音号id */
    private ?int $awemeId = null;
    /** @var string 抖音主页视频url */
    private ?string $awemeItemUrl = null;
    /** @var int 抖音主页视频id */
    private ?int $awemeItemId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanVideoByAwemeGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 千川广告主ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 抖音号id
     */
    public function awemeId(int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 抖音主页视频url
     */
    public function awemeItemUrl(string $awemeItemUrl): self
    {
        $this->awemeItemUrl = $awemeItemUrl;
        return $this;
    }

    /**
     * 抖音主页视频id
     */
    public function awemeItemId(int $awemeItemId): self
    {
        $this->awemeItemId = $awemeItemId;
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
     * 通过抖音主页视频 ID/URL 查询对应的本地上传视频信息，包含已隐藏视频
     */
    public function execute(): \Oceanengine\Models\QianchuanVideoByAwemeGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->awemeId === null) {
            throw new \InvalidArgumentException('awemeId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['aweme_id'] = $this->awemeId;
        if ($this->awemeItemUrl !== null) {
            $queryParams['aweme_item_url'] = $this->awemeItemUrl;
        }
        if ($this->awemeItemId !== null) {
            $queryParams['aweme_item_id'] = $this->awemeItemId;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/video/by_aweme/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanVideoByAwemeGetV10Response::class);

        return $result['model'];
    }
}
