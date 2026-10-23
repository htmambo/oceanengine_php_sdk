<?php

/**
 * 本文件由 go2php 生成，源: api_file_rebate_data_product_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * OpenAPI离线数据就绪消息，订阅及取消订阅
 */
class ApiOpenApi2FileRebateDataProductCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\FileRebateDataProductCreateV2Request $fileRebateDataProductCreateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(FileRebateDataProductCreateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function fileRebateDataProductCreateV2Request(\Oceanengine\Models\FileRebateDataProductCreateV2Request $fileRebateDataProductCreateV2Request): self
    {
        $this->fileRebateDataProductCreateV2Request = $fileRebateDataProductCreateV2Request;
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
     * OpenAPI离线数据就绪消息，订阅及取消订阅
     */
    public function execute(): \Oceanengine\Models\FileRebateDataProductCreateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->fileRebateDataProductCreateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/file/rebate/data_product/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\FileRebateDataProductCreateV2Response::class);

        return $result['model'];
    }
}
