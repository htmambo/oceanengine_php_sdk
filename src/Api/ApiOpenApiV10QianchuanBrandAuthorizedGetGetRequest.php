<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_brand_authorized_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 在品牌新客场景下，支持广告主选择具体绑定的品牌进行新客投放
 * 投放到近365天未在该品牌下发生过成交订单的人群
 */
class ApiOpenApiV10QianchuanBrandAuthorizedGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanBrandAuthorizedGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
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
     * 在品牌新客场景下，支持广告主选择具体绑定的品牌进行新客投放
     */
    public function execute(): \Oceanengine\Models\QianchuanBrandAuthorizedGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/brand/authorized/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanBrandAuthorizedGetV10Response::class);

        return $result['model'];
    }
}
