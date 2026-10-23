<?php

/**
 * 本文件由 go2php 生成，源: api_tools_admin_info_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取行政信息
 */
class ApiOpenApi2ToolsAdminInfoGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主id */
    private ?int $advertiserId = null;
    /** @var string[] 行政区域编码列表 */
    private ?array $codes = null;
    /** @var string 语言类型&lt;br&gt;&#x60;ZH_CN&#x60;表示常用名，如“北京”&lt;br&gt;&#x60;ZH_CN_GOV&#x60;表示官方全称，如“北京市” */
    private ?string $language = null;
    /** @var string 行政区域层级。&lt;br&gt;&#x60;NONE&#x60; 当前层级&lt;br&gt;&#x60;ONE_LEVEL&#x60;下一级区域&lt;br&gt;&#x60;TWO_LEVEL&#x60;下二级区域&lt;br&gt;&#x60;THREE_LEVEL&#x60;下三级区域&lt;br&gt;&#x60;FOUR_LEVEL&#x60;下四级区域 */
    private ?string $subDistrict = null;
    /** @var string 行政区划版本 */
    private ?string $version = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAdminInfoV2ApiService $service)
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
     * 行政区域编码列表
     */
    public function codes(array $codes): self
    {
        $this->codes = $codes;
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

    /**
     * 行政区域层级。&lt;br&gt;&#x60;NONE&#x60; 当前层级&lt;br&gt;&#x60;ONE_LEVEL&#x60;下一级区域&lt;br&gt;&#x60;TWO_LEVEL&#x60;下二级区域&lt;br&gt;&#x60;THREE_LEVEL&#x60;下三级区域&lt;br&gt;&#x60;FOUR_LEVEL&#x60;下四级区域
     */
    public function subDistrict(string $subDistrict): self
    {
        $this->subDistrict = $subDistrict;
        return $this;
    }

    /**
     * 行政区划版本
     */
    public function version(string $version): self
    {
        $this->version = $version;
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
     * 获取行政信息
     */
    public function execute(): \Oceanengine\Models\ToolsAdminInfoV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->codes === null) {
            throw new \InvalidArgumentException('codes is required and must be specified');
        }
        if (count($this->codes) < 1) {
            throw new \InvalidArgumentException('codes must have at least 1 elements');
        }
        if ($this->language === null) {
            throw new \InvalidArgumentException('language is required and must be specified');
        }
        if ($this->subDistrict === null) {
            throw new \InvalidArgumentException('subDistrict is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['codes'] = $this->codes;
        $queryParams['language'] = $this->language;
        $queryParams['sub_district'] = $this->subDistrict;
        if ($this->version !== null) {
            $queryParams['version'] = $this->version;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/admin/info/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAdminInfoV2Response::class);

        return $result['model'];
    }
}
