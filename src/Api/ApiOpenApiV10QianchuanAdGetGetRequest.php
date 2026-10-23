<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_ad_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 用于获取千川广告账户下创建的计划列表（不含创意部分） 默认可以拉取全部计划详情，可以通过过滤拉取部分计划
 */
class ApiOpenApiV10QianchuanAdGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?\Oceanengine\Models\QianchuanAdGetV10Filtering $filtering = null;
    private ?int $requestAwemeInfo = null;
    private ?int $page = null;
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAdGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function filtering(\Oceanengine\Models\QianchuanAdGetV10Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    public function requestAwemeInfo(int $requestAwemeInfo): self
    {
        $this->requestAwemeInfo = $requestAwemeInfo;
        return $this;
    }

    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

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
     * 用于获取千川广告账户下创建的计划列表（不含创意部分） 默认可以拉取全部计划详情，可以通过过滤拉取部分计划
     */
    public function execute(): \Oceanengine\Models\QianchuanAdGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
        }
        if ($this->filtering === null) {
            throw new \InvalidArgumentException('filtering is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->requestAwemeInfo !== null) {
            $queryParams['request_aweme_info'] = $this->requestAwemeInfo;
        }
        $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/ad/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAdGetV10Response::class);

        return $result['model'];
    }
}
