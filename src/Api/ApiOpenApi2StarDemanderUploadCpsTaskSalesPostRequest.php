<?php

/**
 * 本文件由 go2php 生成，源: api_star_demander_upload_cps_task_sales_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 客户回传cps流水
 */
class ApiOpenApi2StarDemanderUploadCpsTaskSalesPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarDemanderUploadCpsTaskSalesV2Request $starDemanderUploadCpsTaskSalesV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarDemanderUploadCpsTaskSalesV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starDemanderUploadCpsTaskSalesV2Request(\Oceanengine\Models\StarDemanderUploadCpsTaskSalesV2Request $starDemanderUploadCpsTaskSalesV2Request): self
    {
        $this->starDemanderUploadCpsTaskSalesV2Request = $starDemanderUploadCpsTaskSalesV2Request;
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
     * 客户回传cps流水
     */
    public function execute(): \Oceanengine\Models\StarDemanderUploadCpsTaskSalesV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starDemanderUploadCpsTaskSalesV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/demander_upload_cps_task_sales/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarDemanderUploadCpsTaskSalesV2Response::class);

        return $result['model'];
    }
}
