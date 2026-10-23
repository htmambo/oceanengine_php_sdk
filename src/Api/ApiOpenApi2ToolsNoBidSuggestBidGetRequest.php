<?php

/**
 * 本文件由 go2php 生成，源: api_tools_no_bid_suggest_bid_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2ToolsNoBidSuggestBidGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $budget = null;
    private ?string $budgetMode = null;
    private ?string $externalAction = null;
    private ?\Oceanengine\Models\ToolsNoBidSuggestBidV2Filtering $filtering = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsNoBidSuggestBidV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function budget(int $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    public function budgetMode(string $budgetMode): self
    {
        $this->budgetMode = $budgetMode;
        return $this;
    }

    public function externalAction(string $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    public function filtering(\Oceanengine\Models\ToolsNoBidSuggestBidV2Filtering $filtering): self
    {
        $this->filtering = $filtering;
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
    public function execute(): \Oceanengine\Models\ToolsNoBidSuggestBidV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->advertiserId !== null) {
            $queryParams['advertiser_id'] = $this->advertiserId;
        }
        if ($this->budget !== null) {
            $queryParams['budget'] = $this->budget;
        }
        if ($this->budgetMode !== null) {
            $queryParams['budget_mode'] = $this->budgetMode;
        }
        if ($this->externalAction !== null) {
            $queryParams['external_action'] = $this->externalAction;
        }
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/no_bid/suggest_bid/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsNoBidSuggestBidV2Response::class);

        return $result['model'];
    }
}
