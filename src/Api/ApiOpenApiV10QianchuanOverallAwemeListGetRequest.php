<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_overall_aweme_list_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 商品乘方创编时，选完商品后的抖音号选择列表
 */
class ApiOpenApiV10QianchuanOverallAwemeListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?\Oceanengine\Models\QianchuanOverallAwemeListV10PageParams $pageParams = null;
    private ?\Oceanengine\Models\QianchuanOverallAwemeListV10Filter $filter = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanOverallAwemeListV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function pageParams(\Oceanengine\Models\QianchuanOverallAwemeListV10PageParams $pageParams): self
    {
        $this->pageParams = $pageParams;
        return $this;
    }

    public function filter(\Oceanengine\Models\QianchuanOverallAwemeListV10Filter $filter): self
    {
        $this->filter = $filter;
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
     * 商品乘方创编时，选完商品后的抖音号选择列表
     */
    public function execute(): \Oceanengine\Models\QianchuanOverallAwemeListV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->pageParams === null) {
            throw new \InvalidArgumentException('pageParams is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->filter !== null) {
            $__encoded0 = json_encode($this->filter);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filter');
            }
            $queryParams['filter'] = $__encoded0;
        }
        $__encoded1 = json_encode($this->pageParams);
            if ($__encoded1 === false) {
                throw new \RuntimeException('Failed to encode parameter: pageParams');
            }
            $queryParams['page_params'] = $__encoded1;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/overall_aweme/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanOverallAwemeListV10Response::class);

        return $result['model'];
    }
}
