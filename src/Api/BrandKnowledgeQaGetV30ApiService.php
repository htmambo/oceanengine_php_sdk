<?php

/**
 * 本文件由 go2php 生成，源: api_brand_knowledge_qa_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandKnowledgeQaGetV30ApiService
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
     * 品牌知识问答
     */
    public function get(): ApiOpenApiV30BrandKnowledgeQaGetGetRequest
    {
        return new ApiOpenApiV30BrandKnowledgeQaGetGetRequest($this);
    }
}
