<?php

/**
 * 本文件由 go2php 生成，源: api_aic_mixcut_task_save_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 保存任务生成的视频到即创的视频库（即组织或者是代理账号下面的视频库）。可以使用同组织账号登录即创，进到即创素材库，进行成片审核。
 */
class ApiOpenApiV30AicMixcutTaskSavePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\AicMixcutTaskSaveV30Request $aicMixcutTaskSaveV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AicMixcutTaskSaveV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function aicMixcutTaskSaveV30Request(\Oceanengine\Models\AicMixcutTaskSaveV30Request $aicMixcutTaskSaveV30Request): self
    {
        $this->aicMixcutTaskSaveV30Request = $aicMixcutTaskSaveV30Request;
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
     * 保存任务生成的视频到即创的视频库（即组织或者是代理账号下面的视频库）。可以使用同组织账号登录即创，进到即创素材库，进行成片审核。
     */
    public function execute(): \Oceanengine\Models\AicMixcutTaskSaveV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->aicMixcutTaskSaveV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/aic/mixcut_task/save/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AicMixcutTaskSaveV30Response::class);

        return $result['model'];
    }
}
