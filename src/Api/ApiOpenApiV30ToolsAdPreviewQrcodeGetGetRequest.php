<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ad_preview_qrcode_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取广告预览二维码、素材预览二维码
 */
class ApiOpenApiV30ToolsAdPreviewQrcodeGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var string 查询条件，可选值:\&quot;ID_TYPE_PROJECT\&quot;,\&quot;ID_TYPE_PROMOTION\&quot;,\&quot;ID_TYPE_MATERIAL\&quot; */
    private ?string $idType = null;
    /** @var int 广告ID */
    private ?int $promotionId = null;
    /** @var int 素材ID，查询素材预览时使用 */
    private ?int $materialId = null;
    /** @var int 项目ID */
    private ?int $projectId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAdPreviewQrcodeGetV30ApiService $service)
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
     * 查询条件，可选值:\&quot;ID_TYPE_PROJECT\&quot;,\&quot;ID_TYPE_PROMOTION\&quot;,\&quot;ID_TYPE_MATERIAL\&quot;
     */
    public function idType(string $idType): self
    {
        $this->idType = $idType;
        return $this;
    }

    /**
     * 广告ID
     */
    public function promotionId(int $promotionId): self
    {
        $this->promotionId = $promotionId;
        return $this;
    }

    /**
     * 素材ID，查询素材预览时使用
     */
    public function materialId(int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * 项目ID
     */
    public function projectId(int $projectId): self
    {
        $this->projectId = $projectId;
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
     * 获取广告预览二维码、素材预览二维码
     */
    public function execute(): \Oceanengine\Models\ToolsAdPreviewQrcodeGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->idType === null) {
            throw new \InvalidArgumentException('idType is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['id_type'] = $this->idType;
        if ($this->promotionId !== null) {
            $queryParams['promotion_id'] = $this->promotionId;
        }
        if ($this->materialId !== null) {
            $queryParams['material_id'] = $this->materialId;
        }
        if ($this->projectId !== null) {
            $queryParams['project_id'] = $this->projectId;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/ad_preview/qrcode_get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAdPreviewQrcodeGetV30Response::class);

        return $result['model'];
    }
}
