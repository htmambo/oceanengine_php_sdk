<?php

/**
 * 本文件由 go2php 生成，源: api_dmp_custom_audience_read_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 用户可以通过调用此接口，查询广告主下的指定人群包信息。支持查询已删除的人群包信息，具体包含的信息内容请查看应答参数。
 */
class ApiOpenApi2DmpCustomAudienceReadGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?array $customAudienceIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DmpCustomAudienceReadV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function customAudienceIds(array $customAudienceIds): self
    {
        $this->customAudienceIds = $customAudienceIds;
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
     * 用户可以通过调用此接口，查询广告主下的指定人群包信息。支持查询已删除的人群包信息，具体包含的信息内容请查看应答参数。
     */
    public function execute(): \Oceanengine\Models\DmpCustomAudienceReadV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->customAudienceIds === null) {
            throw new \InvalidArgumentException('customAudienceIds is required and must be specified');
        }
        if (count($this->customAudienceIds) > 100) {
            throw new \InvalidArgumentException('customAudienceIds must have less than 100 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['custom_audience_ids'] = $this->customAudienceIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/dmp/custom_audience/read/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DmpCustomAudienceReadV2Response::class);

        return $result['model'];
    }
}
