<?php

/**
 * 本文件由 go2php 生成，源: api_tools_country_info_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询国家/区域信息
 */
class ApiOpenApi2ToolsCountryInfoGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主id */
    private ?int $advertiserId = null;
    /** @var string 语言类型&lt;br&gt;&#x60;ZH_CN&#x60;表示常用名，如“北京”&lt;br&gt;&#x60;ZH_CN_GOV&#x60;表示官方全称，如“北京市” */
    private ?string $language = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsCountryInfoV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 语言类型&lt;br&gt;&#x60;ZH_CN&#x60;表示常用名，如“北京”&lt;br&gt;&#x60;ZH_CN_GOV&#x60;表示官方全称，如“北京市”
     */
    public function language(string $language): self
    {
        $this->language = $language;
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
     * 查询国家/区域信息
     */
    public function execute(): \Oceanengine\Models\ToolsCountryInfoV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
        }
        if ($this->language === null) {
            throw new \InvalidArgumentException('language is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['language'] = $this->language;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/country/info/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsCountryInfoV2Response::class);

        return $result['model'];
    }
}
