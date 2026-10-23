<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_attachment_upload_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AdvertiserAttachmentUploadV30ApiService
{
    private \Oceanengine\ApiClient $apiClient;

    public function __construct(\Oceanengine\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    public function getApiClient(): \Oceanengine\ApiClient
    {
        return $this->apiClient;
    }

    /**
     * 附件上传接口，在通过【投放资质提交】接口提交资质前，需要将资质附件从本接口上传至认证中心，获取附件id，将附件id作为入参传入投放资质提交接口
     */
    public function post(): ApiOpenApiV30AdvertiserAttachmentUploadPostRequest
    {
        return new ApiOpenApiV30AdvertiserAttachmentUploadPostRequest($this);
    }
}
