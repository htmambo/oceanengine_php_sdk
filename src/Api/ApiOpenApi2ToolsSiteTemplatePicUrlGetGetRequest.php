<?php

/**
 * 本文件由 go2php 生成，源: api_tools_site_template_pic_url_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过 site_id / template_id 获取站点/模板下的图片加签URL
 */
class ApiOpenApi2ToolsSiteTemplatePicUrlGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主 */
    private ?int $advertiserId = null;
    /** @var int 站点id */
    private ?int $siteId = null;
    /** @var int 模板id */
    private ?int $templateId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsSiteTemplatePicUrlGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 站点id
     */
    public function siteId(int $siteId): self
    {
        $this->siteId = $siteId;
        return $this;
    }

    /**
     * 模板id
     */
    public function templateId(int $templateId): self
    {
        $this->templateId = $templateId;
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
     * 通过 site_id / template_id 获取站点/模板下的图片加签URL
     */
    public function execute(): \Oceanengine\Models\ToolsSiteTemplatePicUrlGetV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->siteId !== null) {
            $queryParams['site_id'] = $this->siteId;
        }
        if ($this->templateId !== null) {
            $queryParams['template_id'] = $this->templateId;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/site_template/pic_url/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsSiteTemplatePicUrlGetV2Response::class);

        return $result['model'];
    }
}
