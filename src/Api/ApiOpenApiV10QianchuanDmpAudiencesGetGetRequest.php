<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_dmp_audiences_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 本接口，仅用来获取在PC端创建/更新广告计划，定向设置下选择“更多人群”时，所展示的人群包列表信息。
 */
class ApiOpenApiV10QianchuanDmpAudiencesGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $retargetingTagsType = null;
    private ?int $offset = null;
    private ?int $limit = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanDmpAudiencesGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function retargetingTagsType(int $retargetingTagsType): self
    {
        $this->retargetingTagsType = $retargetingTagsType;
        return $this;
    }

    public function offset(int $offset): self
    {
        $this->offset = $offset;
        return $this;
    }

    public function limit(int $limit): self
    {
        $this->limit = $limit;
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
     * 本接口，仅用来获取在PC端创建/更新广告计划，定向设置下选择“更多人群”时，所展示的人群包列表信息。
     */
    public function execute(): \Oceanengine\Models\QianchuanDmpAudiencesGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
        }
        if ($this->retargetingTagsType === null) {
            throw new \InvalidArgumentException('retargetingTagsType is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['retargeting_tags_type'] = $this->retargetingTagsType;
        if ($this->offset !== null) {
            $queryParams['offset'] = $this->offset;
        }
        if ($this->limit !== null) {
            $queryParams['limit'] = $this->limit;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/dmp/audiences/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanDmpAudiencesGetV10Response::class);

        return $result['model'];
    }
}
