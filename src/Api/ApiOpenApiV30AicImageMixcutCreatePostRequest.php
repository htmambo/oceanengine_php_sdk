<?php

/**
 * 本文件由 go2php 生成，源: api_aic_image_mixcut_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 可以把图片生成 AIGC 的视频并输出
 */
class ApiOpenApiV30AicImageMixcutCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\AicImageMixcutCreateV30Request $aicImageMixcutCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AicImageMixcutCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function aicImageMixcutCreateV30Request(\Oceanengine\Models\AicImageMixcutCreateV30Request $aicImageMixcutCreateV30Request): self
    {
        $this->aicImageMixcutCreateV30Request = $aicImageMixcutCreateV30Request;
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
     * 可以把图片生成 AIGC 的视频并输出
     */
    public function execute(): \Oceanengine\Models\AicImageMixcutCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->aicImageMixcutCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/aic/image_mixcut/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AicImageMixcutCreateV30Response::class);

        return $result['model'];
    }
}
