<?php

/**
 * 本文件由 go2php 生成，源: api_tools_site_template_preview_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过此接口，用户可以预览通过【基于站点创建模板】接口创建的落地页模板。
 * > 需要注意的是，落地页模板的预览链接有效时间为20分钟。
 */
class ApiOpenApi2ToolsSiteTemplatePreviewGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var int 模板ID */
    private ?int $templateId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsSiteTemplatePreviewV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 模板ID
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
     * 通过此接口，用户可以预览通过【基于站点创建模板】接口创建的落地页模板。
     */
    public function execute(): \Oceanengine\Models\ToolsSiteTemplatePreviewV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->templateId === null) {
            throw new \InvalidArgumentException('templateId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['template_id'] = $this->templateId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/site_template/preview/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsSiteTemplatePreviewV2Response::class);

        return $result['model'];
    }
}
