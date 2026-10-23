<?php

/**
 * 本文件由 go2php 生成，源: api_aic_video_mixcut_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 输入视频原料、设定配置项（如制定字体、音乐），输出含ai脚本的视频成片
 */
class ApiOpenApiV30AicVideoMixcutCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\AicVideoMixcutCreateV30Request $aicVideoMixcutCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AicVideoMixcutCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function aicVideoMixcutCreateV30Request(\Oceanengine\Models\AicVideoMixcutCreateV30Request $aicVideoMixcutCreateV30Request): self
    {
        $this->aicVideoMixcutCreateV30Request = $aicVideoMixcutCreateV30Request;
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
     * 输入视频原料、设定配置项（如制定字体、音乐），输出含ai脚本的视频成片
     */
    public function execute(): \Oceanengine\Models\AicVideoMixcutCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->aicVideoMixcutCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/aic/video_mixcut/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AicVideoMixcutCreateV30Response::class);

        return $result['model'];
    }
}
