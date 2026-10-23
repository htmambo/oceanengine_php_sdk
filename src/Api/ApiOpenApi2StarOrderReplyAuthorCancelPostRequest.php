<?php

/**
 * 本文件由 go2php 生成，源: api_star_order_reply_author_cancel_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 达人取消任务应答
 */
class ApiOpenApi2StarOrderReplyAuthorCancelPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarOrderReplyAuthorCancelV2Request $starOrderReplyAuthorCancelV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarOrderReplyAuthorCancelV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starOrderReplyAuthorCancelV2Request(\Oceanengine\Models\StarOrderReplyAuthorCancelV2Request $starOrderReplyAuthorCancelV2Request): self
    {
        $this->starOrderReplyAuthorCancelV2Request = $starOrderReplyAuthorCancelV2Request;
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
     * 达人取消任务应答
     */
    public function execute(): \Oceanengine\Models\StarOrderReplyAuthorCancelV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starOrderReplyAuthorCancelV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/order/reply_author_cancel/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarOrderReplyAuthorCancelV2Response::class);

        return $result['model'];
    }
}
