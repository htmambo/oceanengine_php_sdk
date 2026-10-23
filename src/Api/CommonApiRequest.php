<?php

/**
 * 本文件由 go2php 生成，源: api_common.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CommonApiRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private string $httpMethod;

    private string $path;

    private string $contentType;

    /** @var mixed */
    private $requestBody;

    /** @var array|null */
    private ?array $requestQuery = null;

    /** @var array|null */
    private ?array $requestFile = null;

    /** @var array|null */
    private ?array $requestForm = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(CommonApiService $service, string $httpMethod, string $path, string $contentType)
    {
        if ($path === '' || $path[0] !== '/') {
            throw new \InvalidArgumentException('CommonApi path must start with "/" (relative path only, got: ' . $path . ')');
        }
        $this->apiClient = $service->getApiClient();
        $this->httpMethod = $httpMethod;
        $this->path = $path;
        $this->contentType = $contentType;
    }

    /** @param mixed $requestBody */
    public function requestBody($requestBody): self
    {
        $this->requestBody = $requestBody;
        return $this;
    }

    public function requestQuery(array $requestQuery): self
    {
        $this->requestQuery = $requestQuery;
        return $this;
    }

    /** @param array<string, \Oceanengine\FormFileInfo> $requestFile */
    public function requestFile(array $requestFile): self
    {
        $this->requestFile = $requestFile;
        return $this;
    }

    public function requestForm(array $requestForm): self
    {
        $this->requestForm = $requestForm;
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

    public function execute(): \Oceanengine\Models\CommonResponse
    {
        $headers = [];
        if ($this->contentType !== '' && $this->contentType !== 'multipart/form-data') {
            $headers['Content-Type'] = $this->contentType;
        }

        $queryParams = $this->serializeMap($this->requestQuery);
        $formParams = $this->serializeMap($this->requestForm);

        $body = $this->requestBody;
        if ($body !== null && !is_string($body)) {
            $body = json_encode($body);
        }
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }
        if ($body === null && $this->contentType === 'multipart/form-data' && $formParams !== []) {
            // the transport expands a JSON body into multipart form fields
            $body = json_encode($formParams);
            if ($body === false) {
                throw new \RuntimeException('Failed to encode request body');
            }
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = $this->path . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest($this->httpMethod, $url, $headers, $body, $this->requestFile ?? []);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;

        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\CommonResponse::class);

        return $result['model'];
    }

    /**
     * @param array|null $map
     * @return array
     */
    private function serializeMap(?array $map): array
    {
        $out = [];
        if ($map === null) {
            return $out;
        }
        foreach ($map as $k => $v) {
            if (is_scalar($v) || $v === null) {
                $out[$k] = $v;
            } else {
                $encoded = json_encode($v);
                $out[$k] = $encoded === false ? $v : $encoded;
            }
        }
        return $out;
    }
}
