<?php

/**
 * 本文件由 go2php 生成，源: api_report_site_page_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2ReportSitePageGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?string $inventoryType = null;
    private ?string $siteId = null;
    private ?string $timeDuration = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ReportSitePageV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function inventoryType(string $inventoryType): self
    {
        $this->inventoryType = $inventoryType;
        return $this;
    }

    public function siteId(string $siteId): self
    {
        $this->siteId = $siteId;
        return $this;
    }

    public function timeDuration(string $timeDuration): self
    {
        $this->timeDuration = $timeDuration;
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
     * API Description
     */
    public function execute(): \Oceanengine\Models\ReportSitePageV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->advertiserId !== null) {
            $queryParams['advertiser_id'] = $this->advertiserId;
        }
        if ($this->inventoryType !== null) {
            $queryParams['inventory_type'] = $this->inventoryType;
        }
        if ($this->siteId !== null) {
            $queryParams['site_id'] = $this->siteId;
        }
        if ($this->timeDuration !== null) {
            $queryParams['time_duration'] = $this->timeDuration;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/report/site/page/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ReportSitePageV2Response::class);

        return $result['model'];
    }
}
