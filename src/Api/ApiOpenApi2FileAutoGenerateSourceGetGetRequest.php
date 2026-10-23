<?php

/**
 * 本文件由 go2php 生成，源: api_file_auto_generate_source_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取派生素材的原始素材
 */
class ApiOpenApi2FileAutoGenerateSourceGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?array $materials = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(FileAutoGenerateSourceGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function materials(array $materials): self
    {
        $this->materials = $materials;
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
     * 获取派生素材的原始素材
     */
    public function execute(): \Oceanengine\Models\FileAutoGenerateSourceGetV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->advertiserId !== null) {
            $queryParams['advertiser_id'] = $this->advertiserId;
        }
        if ($this->materials !== null) {
            $__encoded0 = json_encode($this->materials);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: materials');
            }
            $queryParams['materials'] = $__encoded0;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/file/auto_generate_source/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\FileAutoGenerateSourceGetV2Response::class);

        return $result['model'];
    }
}
