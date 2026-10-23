<?php

/**
 * 本文件由 go2php 生成，源: api_dmp_custom_audience_copy_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过此接口，将DMP人群包复制一个，并推送至对应的云图账号内，可在人群模块自定义分析查看和应用（该人群不支持再次推送）
 */
class ApiOpenApi2DmpCustomAudienceCopyPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\DmpCustomAudienceCopyV2Request $dmpCustomAudienceCopyV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DmpCustomAudienceCopyV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function dmpCustomAudienceCopyV2Request(\Oceanengine\Models\DmpCustomAudienceCopyV2Request $dmpCustomAudienceCopyV2Request): self
    {
        $this->dmpCustomAudienceCopyV2Request = $dmpCustomAudienceCopyV2Request;
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
     * 通过此接口，将DMP人群包复制一个，并推送至对应的云图账号内，可在人群模块自定义分析查看和应用（该人群不支持再次推送）
     */
    public function execute(): \Oceanengine\Models\DmpCustomAudienceCopyV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->dmpCustomAudienceCopyV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/dmp/custom_audience/copy/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DmpCustomAudienceCopyV2Response::class);

        return $result['model'];
    }
}
