<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_authorized_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询千川广告主（对应账户类型为`QIANCHUAN`）下已授权抖音号相关投放权限范围。
 */
class ApiOpenApiV10QianchuanAwemeAuthorizedGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 千川业务账户ID，对应账户类型为&#x60;QIANCHUAN&#x60; */
    private ?int $advertiserId = null;
    /** @var \Oceanengine\Models\QianchuanAwemeAuthorizedGetV10Filtering 过滤器 */
    private ?\Oceanengine\Models\QianchuanAwemeAuthorizedGetV10Filtering $filtering = null;
    /** @var int 页码，默认值&#x60;1&#x60; */
    private ?int $page = null;
    /** @var int 页面大小，默认为&#x60;10&#x60;，数值范围[1-100] */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAwemeAuthorizedGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 千川业务账户ID，对应账户类型为&#x60;QIANCHUAN&#x60;
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\QianchuanAwemeAuthorizedGetV10Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 页码，默认值&#x60;1&#x60;
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小，默认为&#x60;10&#x60;，数值范围[1-100]
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
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
     * 查询千川广告主（对应账户类型为`QIANCHUAN`）下已授权抖音号相关投放权限范围。
     */
    public function execute(): \Oceanengine\Models\QianchuanAwemeAuthorizedGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/aweme/authorized/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAwemeAuthorizedGetV10Response::class);

        return $result['model'];
    }
}
