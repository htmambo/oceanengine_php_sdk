<?php

/**
 * 本文件由 go2php 生成，源: api_aic_material_push_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 推送素材到广告主账号下，素材限制:任务生成的视频或者保存到即创视频库的素材
 */
class ApiOpenApiV30AicMaterialPushPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\AicMaterialPushV30Request $aicMaterialPushV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AicMaterialPushV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function aicMaterialPushV30Request(\Oceanengine\Models\AicMaterialPushV30Request $aicMaterialPushV30Request): self
    {
        $this->aicMaterialPushV30Request = $aicMaterialPushV30Request;
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
     * 推送素材到广告主账号下，素材限制:任务生成的视频或者保存到即创视频库的素材
     */
    public function execute(): \Oceanengine\Models\AicMaterialPushV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->aicMaterialPushV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/aic/material/push/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AicMaterialPushV30Response::class);

        return $result['model'];
    }
}
