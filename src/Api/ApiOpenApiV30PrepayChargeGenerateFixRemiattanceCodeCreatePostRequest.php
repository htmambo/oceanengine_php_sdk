<?php

/**
 * 本文件由 go2php 生成，源: api_prepay_charge_generate_fix_remiattance_code_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 广告主对公充值生成固定码
 */
class ApiOpenApiV30PrepayChargeGenerateFixRemiattanceCodeCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\PrepayChargeGenerateFixRemiattanceCodeCreateV30Request $prepayChargeGenerateFixRemiattanceCodeCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(PrepayChargeGenerateFixRemiattanceCodeCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function prepayChargeGenerateFixRemiattanceCodeCreateV30Request(\Oceanengine\Models\PrepayChargeGenerateFixRemiattanceCodeCreateV30Request $prepayChargeGenerateFixRemiattanceCodeCreateV30Request): self
    {
        $this->prepayChargeGenerateFixRemiattanceCodeCreateV30Request = $prepayChargeGenerateFixRemiattanceCodeCreateV30Request;
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
     * 广告主对公充值生成固定码
     */
    public function execute(): \Oceanengine\Models\PrepayChargeGenerateFixRemiattanceCodeCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->prepayChargeGenerateFixRemiattanceCodeCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/prepay_charge/generate_fix_remiattance_code/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\PrepayChargeGenerateFixRemiattanceCodeCreateV30Response::class);

        return $result['model'];
    }
}
