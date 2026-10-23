<?php

/**
 * 本文件由 go2php 生成，源: api_star_order_demander_cancel_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 任务取消
 */
class ApiOpenApi2StarOrderDemanderCancelPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarOrderDemanderCancelV2Request $starOrderDemanderCancelV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarOrderDemanderCancelV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starOrderDemanderCancelV2Request(\Oceanengine\Models\StarOrderDemanderCancelV2Request $starOrderDemanderCancelV2Request): self
    {
        $this->starOrderDemanderCancelV2Request = $starOrderDemanderCancelV2Request;
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
     * 任务取消
     */
    public function execute(): \Oceanengine\Models\StarOrderDemanderCancelV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starOrderDemanderCancelV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/order/demander_cancel/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarOrderDemanderCancelV2Response::class);

        return $result['model'];
    }
}
