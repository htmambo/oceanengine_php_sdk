<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_file_video_aweme_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取抖音号下已有的视频素材，支持传入商品id，过滤拉取包含待推广商品的视频
 */
class ApiOpenApiV10QianchuanFileVideoAwemeGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $awemeId = null;
    private ?int $adBindAwemeId = null;
    private ?bool $pullAwemeExcellentVideo = null;
    private ?\Oceanengine\Models\QianchuanFileVideoAwemeGetV10Filtering $filtering = null;
    private ?int $cursor = null;
    private ?int $count = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanFileVideoAwemeGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function awemeId(int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    public function adBindAwemeId(int $adBindAwemeId): self
    {
        $this->adBindAwemeId = $adBindAwemeId;
        return $this;
    }

    public function pullAwemeExcellentVideo(bool $pullAwemeExcellentVideo): self
    {
        $this->pullAwemeExcellentVideo = $pullAwemeExcellentVideo;
        return $this;
    }

    public function filtering(\Oceanengine\Models\QianchuanFileVideoAwemeGetV10Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    public function cursor(int $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }

    public function count(int $count): self
    {
        $this->count = $count;
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
     * 获取抖音号下已有的视频素材，支持传入商品id，过滤拉取包含待推广商品的视频
     */
    public function execute(): \Oceanengine\Models\QianchuanFileVideoAwemeGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->awemeId !== null) {
            $queryParams['aweme_id'] = $this->awemeId;
        }
        if ($this->adBindAwemeId !== null) {
            $queryParams['ad_bind_aweme_id'] = $this->adBindAwemeId;
        }
        if ($this->pullAwemeExcellentVideo !== null) {
            $queryParams['pull_aweme_excellent_video'] = $this->pullAwemeExcellentVideo;
        }
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        if ($this->cursor !== null) {
            $queryParams['cursor'] = $this->cursor;
        }
        if ($this->count !== null) {
            $queryParams['count'] = $this->count;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/file/video/aweme/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanFileVideoAwemeGetV10Response::class);

        return $result['model'];
    }
}
