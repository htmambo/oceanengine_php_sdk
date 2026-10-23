<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_lite_contact_record_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 轻量化api，获取录音文件接口
 */
class ApiOpenApi2ToolsClueLiteContactRecordPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsClueLiteContactRecordV2Request $toolsClueLiteContactRecordV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsClueLiteContactRecordV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsClueLiteContactRecordV2Request(\Oceanengine\Models\ToolsClueLiteContactRecordV2Request $toolsClueLiteContactRecordV2Request): self
    {
        $this->toolsClueLiteContactRecordV2Request = $toolsClueLiteContactRecordV2Request;
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
     * 轻量化api，获取录音文件接口
     */
    public function execute(): \Oceanengine\Models\ToolsClueLiteContactRecordV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsClueLiteContactRecordV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/clue/lite/contact/record/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsClueLiteContactRecordV2Response::class);

        return $result['model'];
    }
}
