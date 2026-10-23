<?php

/**
 * 本文件由 go2php 生成，源: api_local_im_auto_setting_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 更新线索私信功能开关
 */
class ApiOpenApiV30LocalImAutoSettingUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\LocalImAutoSettingUpdateV30Request $localImAutoSettingUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalImAutoSettingUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localImAutoSettingUpdateV30Request(\Oceanengine\Models\LocalImAutoSettingUpdateV30Request $localImAutoSettingUpdateV30Request): self
    {
        $this->localImAutoSettingUpdateV30Request = $localImAutoSettingUpdateV30Request;
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
     * 更新线索私信功能开关
     */
    public function execute(): \Oceanengine\Models\LocalImAutoSettingUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->localImAutoSettingUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/im_auto_setting/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalImAutoSettingUpdateV30Response::class);

        return $result['model'];
    }
}
