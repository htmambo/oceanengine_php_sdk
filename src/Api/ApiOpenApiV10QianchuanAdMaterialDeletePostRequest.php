<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_ad_material_delete_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 删除广告计划下的素材
 */
class ApiOpenApiV10QianchuanAdMaterialDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanAdMaterialDeleteV10Request $qianchuanAdMaterialDeleteV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAdMaterialDeleteV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanAdMaterialDeleteV10Request(\Oceanengine\Models\QianchuanAdMaterialDeleteV10Request $qianchuanAdMaterialDeleteV10Request): self
    {
        $this->qianchuanAdMaterialDeleteV10Request = $qianchuanAdMaterialDeleteV10Request;
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
     * 删除广告计划下的素材
     */
    public function execute(): \Oceanengine\Models\QianchuanAdMaterialDeleteV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanAdMaterialDeleteV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/ad/material/delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAdMaterialDeleteV10Response::class);

        return $result['model'];
    }
}
