<?php

/**
 * 本文件由 go2php 生成，源: api_dmp_custom_audience_select_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过此接口你可以查询广告主下存在的人群包列表和信息。
 */
class ApiOpenApi2DmpCustomAudienceSelectGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?\Oceanengine\Models\DmpCustomAudienceSelectV2SelectType $selectType = null;
    private ?int $offset = null;
    private ?int $limit = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DmpCustomAudienceSelectV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function selectType(\Oceanengine\Models\DmpCustomAudienceSelectV2SelectType $selectType): self
    {
        $this->selectType = $selectType;
        return $this;
    }

    public function offset(int $offset): self
    {
        $this->offset = $offset;
        return $this;
    }

    public function limit(int $limit): self
    {
        $this->limit = $limit;
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
     * 通过此接口你可以查询广告主下存在的人群包列表和信息。
     */
    public function execute(): \Oceanengine\Models\DmpCustomAudienceSelectV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->selectType !== null) {
            $__encoded0 = json_encode($this->selectType);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: selectType');
            }
            $queryParams['select_type'] = $__encoded0;
        }
        if ($this->offset !== null) {
            $queryParams['offset'] = $this->offset;
        }
        if ($this->limit !== null) {
            $queryParams['limit'] = $this->limit;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/dmp/custom_audience/select/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DmpCustomAudienceSelectV2Response::class);

        return $result['model'];
    }
}
