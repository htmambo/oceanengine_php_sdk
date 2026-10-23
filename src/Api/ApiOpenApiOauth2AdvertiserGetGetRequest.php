<?php

/**
 * 本文件由 go2php 生成，源: api_oauth2_advertiser_get.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取账号下已授权的管理/业务账户，如果是管理账户可再通过相关管理账户接口查询管理账户下的具体业务账户。例如工作台和代理商为管理账户，可通过工作台下业务账户列表/代理商下业务账户列表查询具体管理业务账户。
 */
class ApiOpenApiOauth2AdvertiserGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var string 根据授权auth_code获取生成的AccessToken 授权页面使用相同账号授权对应同一个AccessToken，如使用多个不同的账号授权，则需要区分维护多个不同的AccessToken */
    private ?string $accessTokenParam = null;

    private bool $logEnabled = false;

    public function __construct(Oauth2AdvertiserGetApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 根据授权auth_code获取生成的AccessToken 授权页面使用相同账号授权对应同一个AccessToken，如使用多个不同的账号授权，则需要区分维护多个不同的AccessToken
     */
    public function accessToken(string $accessTokenParam): self
    {
        $this->accessTokenParam = $accessTokenParam;
        return $this;
    }

    public function withLog(bool $enable): self
    {
        $this->logEnabled = $enable;
        return $this;
    }

    /**
     * @throws \InvalidArgumentException
     * 获取账号下已授权的管理/业务账户，如果是管理账户可再通过相关管理账户接口查询管理账户下的具体业务账户。例如工作台和代理商为管理账户，可通过工作台下业务账户列表/代理商下业务账户列表查询具体管理业务账户。
     */
    public function execute(): \Oceanengine\Models\Oauth2AdvertiserGetResponse
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->accessTokenParam !== null) {
            $queryParams['access_token'] = $this->accessTokenParam;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/oauth2/advertiser/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        // 本接口的 accessToken 为 query 参数（与 Go 一致），不注入 Access-Token 头
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\Oauth2AdvertiserGetResponse::class);

        return $result['model'];
    }
}
