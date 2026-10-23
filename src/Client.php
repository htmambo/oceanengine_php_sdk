<?php

/**
 * 本文件由 go2php 生成，源: client.go
 */

declare(strict_types=1);

namespace Oceanengine;

class Client
{
    private \Oceanengine\ApiClient $apiClient;

    private \Oceanengine\Configuration $configuration;

    /** @var array<string, object> */
    private array $services = [];

    private function __construct(\Oceanengine\Configuration $configuration)
    {
        $this->configuration = $configuration;
        $this->apiClient = new \Oceanengine\ApiClient($configuration);
    }

    /**
     * 创建客户端并注册默认中间件。
     *
     * 生成的 Api 层传入相对 URL（如 /open_api/...），此处注册的中间件负责
     * 拼接 Configuration::getBasePath() 并将全局 logEnable 合并进请求上下文。
     */
    public static function init(?\Oceanengine\Configuration $configuration = null): self
    {
        $client = new self($configuration ?? new \Oceanengine\Configuration());
        $client->apiClient->addMiddleware(new \Oceanengine\Middleware\AuthMiddleware());
        $client->apiClient->addMiddleware(new \Oceanengine\Middleware\HeaderMiddleware($client->configuration));
        if ($client->configuration->useLogMw) {
            $client->apiClient->addMiddleware(new \Oceanengine\Middleware\LogMiddleware());
        }
        $configuration = $client->configuration;
        $client->apiClient->addMiddleware(static function (callable $next) use ($configuration): callable {
            return static function (array $requestContext) use ($next, $configuration): array {
                $url = (string)($requestContext['url'] ?? '');
                if ($url !== '' && $url[0] === '/') {
                    $requestContext['url'] = $configuration->getBasePath() . $url;
                }
                if ($configuration->logEnable) {
                    $requestContext['enableLog'] = true;
                }
                $response = $next($requestContext);
                // 二进制下载接口：核心层 call() 只回传 fromArray 解码结果，
                // 这里把原始响应体 base64 包装后交给 BinaryResponse::fromArray 还原
                if (($requestContext['responseType'] ?? null) === 'binary' && array_key_exists('body', $response)) {
                    $response['body'] = json_encode(['_b' => base64_encode((string)$response['body'])]);
                }
                return $response;
            };
        });
        return $client;
    }

    public function getApiClient(): \Oceanengine\ApiClient
    {
        return $this->apiClient;
    }

    public function getConfig(): \Oceanengine\Configuration
    {
        return $this->configuration;
    }

    public function addDefaultHeader(string $key, string $value): self
    {
        $this->configuration->defaultHeader[$key] = $value;
        return $this;
    }

    public function setLogEnable(bool $enable): self
    {
        $this->configuration->logEnable = $enable;
        return $this;
    }

    public function use(callable ...$middlewares): self
    {
        foreach ($middlewares as $middleware) {
            $this->apiClient->addMiddleware($middleware);
        }
        return $this;
    }

    /**
     * @template T of object
     * @param class-string<T> $class
     * @return T
     */
    private function getService(string $name, string $class)
    {
        if (!isset($this->services[$name])) {
            $this->services[$name] = new $class($this->apiClient);
        }
        return $this->services[$name];
    }

    public function accountFundGetV30Api(): \Oceanengine\Api\AccountFundGetV30ApiService
    {
        return $this->getService('AccountFundGetV30Api', \Oceanengine\Api\AccountFundGetV30ApiService::class);
    }

    public function accountUpdateV30Api(): \Oceanengine\Api\AccountUpdateV30ApiService
    {
        return $this->getService('AccountUpdateV30Api', \Oceanengine\Api\AccountUpdateV30ApiService::class);
    }

    public function adBillingUniqueIdGetV30Api(): \Oceanengine\Api\AdBillingUniqueIdGetV30ApiService
    {
        return $this->getService('AdBillingUniqueIdGetV30Api', \Oceanengine\Api\AdBillingUniqueIdGetV30ApiService::class);
    }

    public function adConvertAttributionQueryCreateV2Api(): \Oceanengine\Api\AdConvertAttributionQueryCreateV2ApiService
    {
        return $this->getService('AdConvertAttributionQueryCreateV2Api', \Oceanengine\Api\AdConvertAttributionQueryCreateV2ApiService::class);
    }

    public function adConvertSignalV2Api(): \Oceanengine\Api\AdConvertSignalV2ApiService
    {
        return $this->getService('AdConvertSignalV2Api', \Oceanengine\Api\AdConvertSignalV2ApiService::class);
    }

    public function adCostProtectStatusGetV2Api(): \Oceanengine\Api\AdCostProtectStatusGetV2ApiService
    {
        return $this->getService('AdCostProtectStatusGetV2Api', \Oceanengine\Api\AdCostProtectStatusGetV2ApiService::class);
    }

    public function adGetV2Api(): \Oceanengine\Api\AdGetV2ApiService
    {
        return $this->getService('AdGetV2Api', \Oceanengine\Api\AdGetV2ApiService::class);
    }

    public function adRejectReasonV2Api(): \Oceanengine\Api\AdRejectReasonV2ApiService
    {
        return $this->getService('AdRejectReasonV2Api', \Oceanengine\Api\AdRejectReasonV2ApiService::class);
    }

    public function adShopInfoUpdateV30Api(): \Oceanengine\Api\AdShopInfoUpdateV30ApiService
    {
        return $this->getService('AdShopInfoUpdateV30Api', \Oceanengine\Api\AdShopInfoUpdateV30ApiService::class);
    }

    public function adUdUpdateV2Api(): \Oceanengine\Api\AdUdUpdateV2ApiService
    {
        return $this->getService('AdUdUpdateV2Api', \Oceanengine\Api\AdUdUpdateV2ApiService::class);
    }

    public function adUpdateBidV2Api(): \Oceanengine\Api\AdUpdateBidV2ApiService
    {
        return $this->getService('AdUpdateBidV2Api', \Oceanengine\Api\AdUpdateBidV2ApiService::class);
    }

    public function adUpdateBudgetV2Api(): \Oceanengine\Api\AdUpdateBudgetV2ApiService
    {
        return $this->getService('AdUpdateBudgetV2Api', \Oceanengine\Api\AdUpdateBudgetV2ApiService::class);
    }

    public function advConvertOleConvertV2Api(): \Oceanengine\Api\AdvConvertOleConvertV2ApiService
    {
        return $this->getService('AdvConvertOleConvertV2Api', \Oceanengine\Api\AdvConvertOleConvertV2ApiService::class);
    }

    public function advertiserAttachmentUploadV30Api(): \Oceanengine\Api\AdvertiserAttachmentUploadV30ApiService
    {
        return $this->getService('AdvertiserAttachmentUploadV30Api', \Oceanengine\Api\AdvertiserAttachmentUploadV30ApiService::class);
    }

    public function advertiserAvatarGetV2Api(): \Oceanengine\Api\AdvertiserAvatarGetV2ApiService
    {
        return $this->getService('AdvertiserAvatarGetV2Api', \Oceanengine\Api\AdvertiserAvatarGetV2ApiService::class);
    }

    public function advertiserAvatarSubmitV2Api(): \Oceanengine\Api\AdvertiserAvatarSubmitV2ApiService
    {
        return $this->getService('AdvertiserAvatarSubmitV2Api', \Oceanengine\Api\AdvertiserAvatarSubmitV2ApiService::class);
    }

    public function advertiserAvatarUploadV2Api(): \Oceanengine\Api\AdvertiserAvatarUploadV2ApiService
    {
        return $this->getService('AdvertiserAvatarUploadV2Api', \Oceanengine\Api\AdvertiserAvatarUploadV2ApiService::class);
    }

    public function advertiserBudgetGetV2Api(): \Oceanengine\Api\AdvertiserBudgetGetV2ApiService
    {
        return $this->getService('AdvertiserBudgetGetV2Api', \Oceanengine\Api\AdvertiserBudgetGetV2ApiService::class);
    }

    public function advertiserCancelableGetV2Api(): \Oceanengine\Api\AdvertiserCancelableGetV2ApiService
    {
        return $this->getService('AdvertiserCancelableGetV2Api', \Oceanengine\Api\AdvertiserCancelableGetV2ApiService::class);
    }

    public function advertiserDeliveryPkgConfigV30Api(): \Oceanengine\Api\AdvertiserDeliveryPkgConfigV30ApiService
    {
        return $this->getService('AdvertiserDeliveryPkgConfigV30Api', \Oceanengine\Api\AdvertiserDeliveryPkgConfigV30ApiService::class);
    }

    public function advertiserDeliveryPkgDeleteV30Api(): \Oceanengine\Api\AdvertiserDeliveryPkgDeleteV30ApiService
    {
        return $this->getService('AdvertiserDeliveryPkgDeleteV30Api', \Oceanengine\Api\AdvertiserDeliveryPkgDeleteV30ApiService::class);
    }

    public function advertiserDeliveryPkgGetV30Api(): \Oceanengine\Api\AdvertiserDeliveryPkgGetV30ApiService
    {
        return $this->getService('AdvertiserDeliveryPkgGetV30Api', \Oceanengine\Api\AdvertiserDeliveryPkgGetV30ApiService::class);
    }

    public function advertiserDeliveryPkgSubmitV30Api(): \Oceanengine\Api\AdvertiserDeliveryPkgSubmitV30ApiService
    {
        return $this->getService('AdvertiserDeliveryPkgSubmitV30Api', \Oceanengine\Api\AdvertiserDeliveryPkgSubmitV30ApiService::class);
    }

    public function advertiserDeliveryQualificationDeleteV30Api(): \Oceanengine\Api\AdvertiserDeliveryQualificationDeleteV30ApiService
    {
        return $this->getService('AdvertiserDeliveryQualificationDeleteV30Api', \Oceanengine\Api\AdvertiserDeliveryQualificationDeleteV30ApiService::class);
    }

    public function advertiserDeliveryQualificationListV30Api(): \Oceanengine\Api\AdvertiserDeliveryQualificationListV30ApiService
    {
        return $this->getService('AdvertiserDeliveryQualificationListV30Api', \Oceanengine\Api\AdvertiserDeliveryQualificationListV30ApiService::class);
    }

    public function advertiserDeliveryQualificationSubmitV30Api(): \Oceanengine\Api\AdvertiserDeliveryQualificationSubmitV30ApiService
    {
        return $this->getService('AdvertiserDeliveryQualificationSubmitV30Api', \Oceanengine\Api\AdvertiserDeliveryQualificationSubmitV30ApiService::class);
    }

    public function advertiserFundDailyStatV2Api(): \Oceanengine\Api\AdvertiserFundDailyStatV2ApiService
    {
        return $this->getService('AdvertiserFundDailyStatV2Api', \Oceanengine\Api\AdvertiserFundDailyStatV2ApiService::class);
    }

    public function advertiserFundDetailGrantV2Api(): \Oceanengine\Api\AdvertiserFundDetailGrantV2ApiService
    {
        return $this->getService('AdvertiserFundDetailGrantV2Api', \Oceanengine\Api\AdvertiserFundDetailGrantV2ApiService::class);
    }

    public function advertiserFundGetV2Api(): \Oceanengine\Api\AdvertiserFundGetV2ApiService
    {
        return $this->getService('AdvertiserFundGetV2Api', \Oceanengine\Api\AdvertiserFundGetV2ApiService::class);
    }

    public function advertiserFundGrantTransactionGetV2Api(): \Oceanengine\Api\AdvertiserFundGrantTransactionGetV2ApiService
    {
        return $this->getService('AdvertiserFundGrantTransactionGetV2Api', \Oceanengine\Api\AdvertiserFundGrantTransactionGetV2ApiService::class);
    }

    public function advertiserFundTransactionGetV2Api(): \Oceanengine\Api\AdvertiserFundTransactionGetV2ApiService
    {
        return $this->getService('AdvertiserFundTransactionGetV2Api', \Oceanengine\Api\AdvertiserFundTransactionGetV2ApiService::class);
    }

    public function advertiserGoingGlobalBudgetGetV2Api(): \Oceanengine\Api\AdvertiserGoingGlobalBudgetGetV2ApiService
    {
        return $this->getService('AdvertiserGoingGlobalBudgetGetV2Api', \Oceanengine\Api\AdvertiserGoingGlobalBudgetGetV2ApiService::class);
    }

    public function advertiserGoingGlobalBudgetUpdateV2Api(): \Oceanengine\Api\AdvertiserGoingGlobalBudgetUpdateV2ApiService
    {
        return $this->getService('AdvertiserGoingGlobalBudgetUpdateV2Api', \Oceanengine\Api\AdvertiserGoingGlobalBudgetUpdateV2ApiService::class);
    }

    public function advertiserInfoV2Api(): \Oceanengine\Api\AdvertiserInfoV2ApiService
    {
        return $this->getService('AdvertiserInfoV2Api', \Oceanengine\Api\AdvertiserInfoV2ApiService::class);
    }

    public function advertiserPublicInfoV2Api(): \Oceanengine\Api\AdvertiserPublicInfoV2ApiService
    {
        return $this->getService('AdvertiserPublicInfoV2Api', \Oceanengine\Api\AdvertiserPublicInfoV2ApiService::class);
    }

    public function advertiserQualificationCreateV2V2Api(): \Oceanengine\Api\AdvertiserQualificationCreateV2V2ApiService
    {
        return $this->getService('AdvertiserQualificationCreateV2V2Api', \Oceanengine\Api\AdvertiserQualificationCreateV2V2ApiService::class);
    }

    public function advertiserQualificationGetV30Api(): \Oceanengine\Api\AdvertiserQualificationGetV30ApiService
    {
        return $this->getService('AdvertiserQualificationGetV30Api', \Oceanengine\Api\AdvertiserQualificationGetV30ApiService::class);
    }

    public function advertiserQualificationSelectV2V2Api(): \Oceanengine\Api\AdvertiserQualificationSelectV2V2ApiService
    {
        return $this->getService('AdvertiserQualificationSelectV2V2Api', \Oceanengine\Api\AdvertiserQualificationSelectV2V2ApiService::class);
    }

    public function advertiserQualificationSubmitV30Api(): \Oceanengine\Api\AdvertiserQualificationSubmitV30ApiService
    {
        return $this->getService('AdvertiserQualificationSubmitV30Api', \Oceanengine\Api\AdvertiserQualificationSubmitV30ApiService::class);
    }

    public function advertiserTransferableFundGetV2Api(): \Oceanengine\Api\AdvertiserTransferableFundGetV2ApiService
    {
        return $this->getService('AdvertiserTransferableFundGetV2Api', \Oceanengine\Api\AdvertiserTransferableFundGetV2ApiService::class);
    }

    public function advertiserUpdateBudgetV2Api(): \Oceanengine\Api\AdvertiserUpdateBudgetV2ApiService
    {
        return $this->getService('AdvertiserUpdateBudgetV2Api', \Oceanengine\Api\AdvertiserUpdateBudgetV2ApiService::class);
    }

    public function advertiserVerifyInfoGetV30Api(): \Oceanengine\Api\AdvertiserVerifyInfoGetV30ApiService
    {
        return $this->getService('AdvertiserVerifyInfoGetV30Api', \Oceanengine\Api\AdvertiserVerifyInfoGetV30ApiService::class);
    }

    public function agentAdvAdvertiserUpdateSaleV2Api(): \Oceanengine\Api\AgentAdvAdvertiserUpdateSaleV2ApiService
    {
        return $this->getService('AgentAdvAdvertiserUpdateSaleV2Api', \Oceanengine\Api\AgentAdvAdvertiserUpdateSaleV2ApiService::class);
    }

    public function agentAdvBiddingListQueryV2Api(): \Oceanengine\Api\AgentAdvBiddingListQueryV2ApiService
    {
        return $this->getService('AgentAdvBiddingListQueryV2Api', \Oceanengine\Api\AgentAdvBiddingListQueryV2ApiService::class);
    }

    public function agentAdvBrandListQueryV2Api(): \Oceanengine\Api\AgentAdvBrandListQueryV2ApiService
    {
        return $this->getService('AgentAdvBrandListQueryV2Api', \Oceanengine\Api\AgentAdvBrandListQueryV2ApiService::class);
    }

    public function agentAdvCostReportListQueryV2Api(): \Oceanengine\Api\AgentAdvCostReportListQueryV2ApiService
    {
        return $this->getService('AgentAdvCostReportListQueryV2Api', \Oceanengine\Api\AgentAdvCostReportListQueryV2ApiService::class);
    }

    public function agentAdvPerenniallyPunishHistoryQueryV2Api(): \Oceanengine\Api\AgentAdvPerenniallyPunishHistoryQueryV2ApiService
    {
        return $this->getService('AgentAdvPerenniallyPunishHistoryQueryV2Api', \Oceanengine\Api\AgentAdvPerenniallyPunishHistoryQueryV2ApiService::class);
    }

    public function agentAdvPerenniallyPunishV2Api(): \Oceanengine\Api\AgentAdvPerenniallyPunishV2ApiService
    {
        return $this->getService('AgentAdvPerenniallyPunishV2Api', \Oceanengine\Api\AgentAdvPerenniallyPunishV2ApiService::class);
    }

    public function agentAdvRechargeRechargeRecordV2Api(): \Oceanengine\Api\AgentAdvRechargeRechargeRecordV2ApiService
    {
        return $this->getService('AgentAdvRechargeRechargeRecordV2Api', \Oceanengine\Api\AgentAdvRechargeRechargeRecordV2ApiService::class);
    }

    public function agentAdvTemporaryPunishV2Api(): \Oceanengine\Api\AgentAdvTemporaryPunishV2ApiService
    {
        return $this->getService('AgentAdvTemporaryPunishV2Api', \Oceanengine\Api\AgentAdvTemporaryPunishV2ApiService::class);
    }

    public function agentAdvertiserAssignV2Api(): \Oceanengine\Api\AgentAdvertiserAssignV2ApiService
    {
        return $this->getService('AgentAdvertiserAssignV2Api', \Oceanengine\Api\AgentAdvertiserAssignV2ApiService::class);
    }

    public function agentAdvertiserCopyV2Api(): \Oceanengine\Api\AgentAdvertiserCopyV2ApiService
    {
        return $this->getService('AgentAdvertiserCopyV2Api', \Oceanengine\Api\AgentAdvertiserCopyV2ApiService::class);
    }

    public function agentAdvertiserInfoQueryV2Api(): \Oceanengine\Api\AgentAdvertiserInfoQueryV2ApiService
    {
        return $this->getService('AgentAdvertiserInfoQueryV2Api', \Oceanengine\Api\AgentAdvertiserInfoQueryV2ApiService::class);
    }

    public function agentAdvertiserSelectV2Api(): \Oceanengine\Api\AgentAdvertiserSelectV2ApiService
    {
        return $this->getService('AgentAdvertiserSelectV2Api', \Oceanengine\Api\AgentAdvertiserSelectV2ApiService::class);
    }

    public function agentAdvertiserUnassignV2Api(): \Oceanengine\Api\AgentAdvertiserUnassignV2ApiService
    {
        return $this->getService('AgentAdvertiserUnassignV2Api', \Oceanengine\Api\AgentAdvertiserUnassignV2ApiService::class);
    }

    public function agentAdvertiserUpdateV2Api(): \Oceanengine\Api\AgentAdvertiserUpdateV2ApiService
    {
        return $this->getService('AgentAdvertiserUpdateV2Api', \Oceanengine\Api\AgentAdvertiserUpdateV2ApiService::class);
    }

    public function agentChargeVerifyV2Api(): \Oceanengine\Api\AgentChargeVerifyV2ApiService
    {
        return $this->getService('AgentChargeVerifyV2Api', \Oceanengine\Api\AgentChargeVerifyV2ApiService::class);
    }

    public function agentChildAgentSelectV2Api(): \Oceanengine\Api\AgentChildAgentSelectV2ApiService
    {
        return $this->getService('AgentChildAgentSelectV2Api', \Oceanengine\Api\AgentChildAgentSelectV2ApiService::class);
    }

    public function agentCompanyBiddingListQueryV2Api(): \Oceanengine\Api\AgentCompanyBiddingListQueryV2ApiService
    {
        return $this->getService('AgentCompanyBiddingListQueryV2Api', \Oceanengine\Api\AgentCompanyBiddingListQueryV2ApiService::class);
    }

    public function agentCompanyBrandListQueryV2Api(): \Oceanengine\Api\AgentCompanyBrandListQueryV2ApiService
    {
        return $this->getService('AgentCompanyBrandListQueryV2Api', \Oceanengine\Api\AgentCompanyBrandListQueryV2ApiService::class);
    }

    public function agentCreditChargeSubmitV2Api(): \Oceanengine\Api\AgentCreditChargeSubmitV2ApiService
    {
        return $this->getService('AgentCreditChargeSubmitV2Api', \Oceanengine\Api\AgentCreditChargeSubmitV2ApiService::class);
    }

    public function agentInfoV2Api(): \Oceanengine\Api\AgentInfoV2ApiService
    {
        return $this->getService('AgentInfoV2Api', \Oceanengine\Api\AgentInfoV2ApiService::class);
    }

    public function agentPrepayChargeGenerateRemittanceCodeV2Api(): \Oceanengine\Api\AgentPrepayChargeGenerateRemittanceCodeV2ApiService
    {
        return $this->getService('AgentPrepayChargeGenerateRemittanceCodeV2Api', \Oceanengine\Api\AgentPrepayChargeGenerateRemittanceCodeV2ApiService::class);
    }

    public function agentQueryRiskPromotionListV2Api(): \Oceanengine\Api\AgentQueryRiskPromotionListV2ApiService
    {
        return $this->getService('AgentQueryRiskPromotionListV2Api', \Oceanengine\Api\AgentQueryRiskPromotionListV2ApiService::class);
    }

    public function agentTransferTransactionRecordV2Api(): \Oceanengine\Api\AgentTransferTransactionRecordV2ApiService
    {
        return $this->getService('AgentTransferTransactionRecordV2Api', \Oceanengine\Api\AgentTransferTransactionRecordV2ApiService::class);
    }

    public function aicElementDeleteV30Api(): \Oceanengine\Api\AicElementDeleteV30ApiService
    {
        return $this->getService('AicElementDeleteV30Api', \Oceanengine\Api\AicElementDeleteV30ApiService::class);
    }

    public function aicElementGetV30Api(): \Oceanengine\Api\AicElementGetV30ApiService
    {
        return $this->getService('AicElementGetV30Api', \Oceanengine\Api\AicElementGetV30ApiService::class);
    }

    public function aicElementUpdateV30Api(): \Oceanengine\Api\AicElementUpdateV30ApiService
    {
        return $this->getService('AicElementUpdateV30Api', \Oceanengine\Api\AicElementUpdateV30ApiService::class);
    }

    public function aicElementUploadV30Api(): \Oceanengine\Api\AicElementUploadV30ApiService
    {
        return $this->getService('AicElementUploadV30Api', \Oceanengine\Api\AicElementUploadV30ApiService::class);
    }

    public function aicImageMixcutCreateV30Api(): \Oceanengine\Api\AicImageMixcutCreateV30ApiService
    {
        return $this->getService('AicImageMixcutCreateV30Api', \Oceanengine\Api\AicImageMixcutCreateV30ApiService::class);
    }

    public function aicMaterialGetV30Api(): \Oceanengine\Api\AicMaterialGetV30ApiService
    {
        return $this->getService('AicMaterialGetV30Api', \Oceanengine\Api\AicMaterialGetV30ApiService::class);
    }

    public function aicMaterialPushV30Api(): \Oceanengine\Api\AicMaterialPushV30ApiService
    {
        return $this->getService('AicMaterialPushV30Api', \Oceanengine\Api\AicMaterialPushV30ApiService::class);
    }

    public function aicMixcutTaskResultGetV30Api(): \Oceanengine\Api\AicMixcutTaskResultGetV30ApiService
    {
        return $this->getService('AicMixcutTaskResultGetV30Api', \Oceanengine\Api\AicMixcutTaskResultGetV30ApiService::class);
    }

    public function aicMixcutTaskSaveV30Api(): \Oceanengine\Api\AicMixcutTaskSaveV30ApiService
    {
        return $this->getService('AicMixcutTaskSaveV30Api', \Oceanengine\Api\AicMixcutTaskSaveV30ApiService::class);
    }

    public function aicVideoMixcutCreateV30Api(): \Oceanengine\Api\AicVideoMixcutCreateV30ApiService
    {
        return $this->getService('AicVideoMixcutCreateV30Api', \Oceanengine\Api\AicVideoMixcutCreateV30ApiService::class);
    }

    public function analyticsAttributionV30Api(): \Oceanengine\Api\AnalyticsAttributionV30ApiService
    {
        return $this->getService('AnalyticsAttributionV30Api', \Oceanengine\Api\AnalyticsAttributionV30ApiService::class);
    }

    public function assetsCreativeComponentCreateV2Api(): \Oceanengine\Api\AssetsCreativeComponentCreateV2ApiService
    {
        return $this->getService('AssetsCreativeComponentCreateV2Api', \Oceanengine\Api\AssetsCreativeComponentCreateV2ApiService::class);
    }

    public function assetsCreativeComponentGetV2Api(): \Oceanengine\Api\AssetsCreativeComponentGetV2ApiService
    {
        return $this->getService('AssetsCreativeComponentGetV2Api', \Oceanengine\Api\AssetsCreativeComponentGetV2ApiService::class);
    }

    public function assetsCreativeComponentUpdateV2Api(): \Oceanengine\Api\AssetsCreativeComponentUpdateV2ApiService
    {
        return $this->getService('AssetsCreativeComponentUpdateV2Api', \Oceanengine\Api\AssetsCreativeComponentUpdateV2ApiService::class);
    }

    public function asyncTaskCreateV2Api(): \Oceanengine\Api\AsyncTaskCreateV2ApiService
    {
        return $this->getService('AsyncTaskCreateV2Api', \Oceanengine\Api\AsyncTaskCreateV2ApiService::class);
    }

    public function asyncTaskDownloadV2Api(): \Oceanengine\Api\AsyncTaskDownloadV2ApiService
    {
        return $this->getService('AsyncTaskDownloadV2Api', \Oceanengine\Api\AsyncTaskDownloadV2ApiService::class);
    }

    public function asyncTaskGetV2Api(): \Oceanengine\Api\AsyncTaskGetV2ApiService
    {
        return $this->getService('AsyncTaskGetV2Api', \Oceanengine\Api\AsyncTaskGetV2ApiService::class);
    }

    public function audiencePackageBindinfoGetV30Api(): \Oceanengine\Api\AudiencePackageBindinfoGetV30ApiService
    {
        return $this->getService('AudiencePackageBindinfoGetV30Api', \Oceanengine\Api\AudiencePackageBindinfoGetV30ApiService::class);
    }

    public function audiencePackageCreateV2Api(): \Oceanengine\Api\AudiencePackageCreateV2ApiService
    {
        return $this->getService('AudiencePackageCreateV2Api', \Oceanengine\Api\AudiencePackageCreateV2ApiService::class);
    }

    public function audiencePackageDeleteV2Api(): \Oceanengine\Api\AudiencePackageDeleteV2ApiService
    {
        return $this->getService('AudiencePackageDeleteV2Api', \Oceanengine\Api\AudiencePackageDeleteV2ApiService::class);
    }

    public function audiencePackageGetV30Api(): \Oceanengine\Api\AudiencePackageGetV30ApiService
    {
        return $this->getService('AudiencePackageGetV30Api', \Oceanengine\Api\AudiencePackageGetV30ApiService::class);
    }

    public function audiencePackageUpdateV2Api(): \Oceanengine\Api\AudiencePackageUpdateV2ApiService
    {
        return $this->getService('AudiencePackageUpdateV2Api', \Oceanengine\Api\AudiencePackageUpdateV2ApiService::class);
    }

    public function availablePaymentsListV30Api(): \Oceanengine\Api\AvailablePaymentsListV30ApiService
    {
        return $this->getService('AvailablePaymentsListV30Api', \Oceanengine\Api\AvailablePaymentsListV30ApiService::class);
    }

    public function brandActionCategoryV30Api(): \Oceanengine\Api\BrandActionCategoryV30ApiService
    {
        return $this->getService('BrandActionCategoryV30Api', \Oceanengine\Api\BrandActionCategoryV30ApiService::class);
    }

    public function brandAdCancelDeleteV30Api(): \Oceanengine\Api\BrandAdCancelDeleteV30ApiService
    {
        return $this->getService('BrandAdCancelDeleteV30Api', \Oceanengine\Api\BrandAdCancelDeleteV30ApiService::class);
    }

    public function brandAdDeleteV30Api(): \Oceanengine\Api\BrandAdDeleteV30ApiService
    {
        return $this->getService('BrandAdDeleteV30Api', \Oceanengine\Api\BrandAdDeleteV30ApiService::class);
    }

    public function brandAdGetV30Api(): \Oceanengine\Api\BrandAdGetV30ApiService
    {
        return $this->getService('BrandAdGetV30Api', \Oceanengine\Api\BrandAdGetV30ApiService::class);
    }

    public function brandAdUpdateBaseInfoV30Api(): \Oceanengine\Api\BrandAdUpdateBaseInfoV30ApiService
    {
        return $this->getService('BrandAdUpdateBaseInfoV30Api', \Oceanengine\Api\BrandAdUpdateBaseInfoV30ApiService::class);
    }

    public function brandAdUpdateDeliveryInfoV30Api(): \Oceanengine\Api\BrandAdUpdateDeliveryInfoV30ApiService
    {
        return $this->getService('BrandAdUpdateDeliveryInfoV30Api', \Oceanengine\Api\BrandAdUpdateDeliveryInfoV30ApiService::class);
    }

    public function brandAnchorListV30Api(): \Oceanengine\Api\BrandAnchorListV30ApiService
    {
        return $this->getService('BrandAnchorListV30Api', \Oceanengine\Api\BrandAnchorListV30ApiService::class);
    }

    public function brandAwemeListV30Api(): \Oceanengine\Api\BrandAwemeListV30ApiService
    {
        return $this->getService('BrandAwemeListV30Api', \Oceanengine\Api\BrandAwemeListV30ApiService::class);
    }

    public function brandCampaignAddV30Api(): \Oceanengine\Api\BrandCampaignAddV30ApiService
    {
        return $this->getService('BrandCampaignAddV30Api', \Oceanengine\Api\BrandCampaignAddV30ApiService::class);
    }

    public function brandCampaignDeleteV30Api(): \Oceanengine\Api\BrandCampaignDeleteV30ApiService
    {
        return $this->getService('BrandCampaignDeleteV30Api', \Oceanengine\Api\BrandCampaignDeleteV30ApiService::class);
    }

    public function brandCampaignEditV30Api(): \Oceanengine\Api\BrandCampaignEditV30ApiService
    {
        return $this->getService('BrandCampaignEditV30Api', \Oceanengine\Api\BrandCampaignEditV30ApiService::class);
    }

    public function brandCampaignGetV30Api(): \Oceanengine\Api\BrandCampaignGetV30ApiService
    {
        return $this->getService('BrandCampaignGetV30Api', \Oceanengine\Api\BrandCampaignGetV30ApiService::class);
    }

    public function brandCampaignListV30Api(): \Oceanengine\Api\BrandCampaignListV30ApiService
    {
        return $this->getService('BrandCampaignListV30Api', \Oceanengine\Api\BrandCampaignListV30ApiService::class);
    }

    public function brandCampaignModifyV30Api(): \Oceanengine\Api\BrandCampaignModifyV30ApiService
    {
        return $this->getService('BrandCampaignModifyV30Api', \Oceanengine\Api\BrandCampaignModifyV30ApiService::class);
    }

    public function brandCampaignOperateV30Api(): \Oceanengine\Api\BrandCampaignOperateV30ApiService
    {
        return $this->getService('BrandCampaignOperateV30Api', \Oceanengine\Api\BrandCampaignOperateV30ApiService::class);
    }

    public function brandCampaignRemoveV30Api(): \Oceanengine\Api\BrandCampaignRemoveV30ApiService
    {
        return $this->getService('BrandCampaignRemoveV30Api', \Oceanengine\Api\BrandCampaignRemoveV30ApiService::class);
    }

    public function brandCampaignRevokeModifyV30Api(): \Oceanengine\Api\BrandCampaignRevokeModifyV30ApiService
    {
        return $this->getService('BrandCampaignRevokeModifyV30Api', \Oceanengine\Api\BrandCampaignRevokeModifyV30ApiService::class);
    }

    public function brandCampaignSubmitV30Api(): \Oceanengine\Api\BrandCampaignSubmitV30ApiService
    {
        return $this->getService('BrandCampaignSubmitV30Api', \Oceanengine\Api\BrandCampaignSubmitV30ApiService::class);
    }

    public function brandCampaignUpdateV30Api(): \Oceanengine\Api\BrandCampaignUpdateV30ApiService
    {
        return $this->getService('BrandCampaignUpdateV30Api', \Oceanengine\Api\BrandCampaignUpdateV30ApiService::class);
    }

    public function brandContractGetV30Api(): \Oceanengine\Api\BrandContractGetV30ApiService
    {
        return $this->getService('BrandContractGetV30Api', \Oceanengine\Api\BrandContractGetV30ApiService::class);
    }

    public function brandCreativeCreateV30Api(): \Oceanengine\Api\BrandCreativeCreateV30ApiService
    {
        return $this->getService('BrandCreativeCreateV30Api', \Oceanengine\Api\BrandCreativeCreateV30ApiService::class);
    }

    public function brandCreativeDeleteV30Api(): \Oceanengine\Api\BrandCreativeDeleteV30ApiService
    {
        return $this->getService('BrandCreativeDeleteV30Api', \Oceanengine\Api\BrandCreativeDeleteV30ApiService::class);
    }

    public function brandCreativeGetV30Api(): \Oceanengine\Api\BrandCreativeGetV30ApiService
    {
        return $this->getService('BrandCreativeGetV30Api', \Oceanengine\Api\BrandCreativeGetV30ApiService::class);
    }

    public function brandCreativeUpdateV30Api(): \Oceanengine\Api\BrandCreativeUpdateV30ApiService
    {
        return $this->getService('BrandCreativeUpdateV30Api', \Oceanengine\Api\BrandCreativeUpdateV30ApiService::class);
    }

    public function brandCustomAudienceListV30Api(): \Oceanengine\Api\BrandCustomAudienceListV30ApiService
    {
        return $this->getService('BrandCustomAudienceListV30Api', \Oceanengine\Api\BrandCustomAudienceListV30ApiService::class);
    }

    public function brandFileVideoUploadV30Api(): \Oceanengine\Api\BrandFileVideoUploadV30ApiService
    {
        return $this->getService('BrandFileVideoUploadV30Api', \Oceanengine\Api\BrandFileVideoUploadV30ApiService::class);
    }

    public function brandKnowledgeQaGetV30Api(): \Oceanengine\Api\BrandKnowledgeQaGetV30ApiService
    {
        return $this->getService('BrandKnowledgeQaGetV30Api', \Oceanengine\Api\BrandKnowledgeQaGetV30ApiService::class);
    }

    public function brandMaAccountListV30Api(): \Oceanengine\Api\BrandMaAccountListV30ApiService
    {
        return $this->getService('BrandMaAccountListV30Api', \Oceanengine\Api\BrandMaAccountListV30ApiService::class);
    }

    public function brandMaMaterialListV30Api(): \Oceanengine\Api\BrandMaMaterialListV30ApiService
    {
        return $this->getService('BrandMaMaterialListV30Api', \Oceanengine\Api\BrandMaMaterialListV30ApiService::class);
    }

    public function brandMaOrderListV30Api(): \Oceanengine\Api\BrandMaOrderListV30ApiService
    {
        return $this->getService('BrandMaOrderListV30Api', \Oceanengine\Api\BrandMaOrderListV30ApiService::class);
    }

    public function brandMaWarningOrderListV30Api(): \Oceanengine\Api\BrandMaWarningOrderListV30ApiService
    {
        return $this->getService('BrandMaWarningOrderListV30Api', \Oceanengine\Api\BrandMaWarningOrderListV30ApiService::class);
    }

    public function brandMaterialCreateV30Api(): \Oceanengine\Api\BrandMaterialCreateV30ApiService
    {
        return $this->getService('BrandMaterialCreateV30Api', \Oceanengine\Api\BrandMaterialCreateV30ApiService::class);
    }

    public function brandMaterialListV30Api(): \Oceanengine\Api\BrandMaterialListV30ApiService
    {
        return $this->getService('BrandMaterialListV30Api', \Oceanengine\Api\BrandMaterialListV30ApiService::class);
    }

    public function brandMaterialUpdateV30Api(): \Oceanengine\Api\BrandMaterialUpdateV30ApiService
    {
        return $this->getService('BrandMaterialUpdateV30Api', \Oceanengine\Api\BrandMaterialUpdateV30ApiService::class);
    }

    public function brandOperationLogQueryV30Api(): \Oceanengine\Api\BrandOperationLogQueryV30ApiService
    {
        return $this->getService('BrandOperationLogQueryV30Api', \Oceanengine\Api\BrandOperationLogQueryV30ApiService::class);
    }

    public function brandOrderCancelDeleteV30Api(): \Oceanengine\Api\BrandOrderCancelDeleteV30ApiService
    {
        return $this->getService('BrandOrderCancelDeleteV30Api', \Oceanengine\Api\BrandOrderCancelDeleteV30ApiService::class);
    }

    public function brandOrderCreateV30Api(): \Oceanengine\Api\BrandOrderCreateV30ApiService
    {
        return $this->getService('BrandOrderCreateV30Api', \Oceanengine\Api\BrandOrderCreateV30ApiService::class);
    }

    public function brandOrderDeleteV30Api(): \Oceanengine\Api\BrandOrderDeleteV30ApiService
    {
        return $this->getService('BrandOrderDeleteV30Api', \Oceanengine\Api\BrandOrderDeleteV30ApiService::class);
    }

    public function brandOrderListV30Api(): \Oceanengine\Api\BrandOrderListV30ApiService
    {
        return $this->getService('BrandOrderListV30Api', \Oceanengine\Api\BrandOrderListV30ApiService::class);
    }

    public function brandOrderUpdateV30Api(): \Oceanengine\Api\BrandOrderUpdateV30ApiService
    {
        return $this->getService('BrandOrderUpdateV30Api', \Oceanengine\Api\BrandOrderUpdateV30ApiService::class);
    }

    public function brandPolicyListV30Api(): \Oceanengine\Api\BrandPolicyListV30ApiService
    {
        return $this->getService('BrandPolicyListV30Api', \Oceanengine\Api\BrandPolicyListV30ApiService::class);
    }

    public function brandQueryStockV30Api(): \Oceanengine\Api\BrandQueryStockV30ApiService
    {
        return $this->getService('BrandQueryStockV30Api', \Oceanengine\Api\BrandQueryStockV30ApiService::class);
    }

    public function brandQueryYuntu5aBrandCategoryV30Api(): \Oceanengine\Api\BrandQueryYuntu5aBrandCategoryV30ApiService
    {
        return $this->getService('BrandQueryYuntu5aBrandCategoryV30Api', \Oceanengine\Api\BrandQueryYuntu5aBrandCategoryV30ApiService::class);
    }

    public function brandRegionGetV30Api(): \Oceanengine\Api\BrandRegionGetV30ApiService
    {
        return $this->getService('BrandRegionGetV30Api', \Oceanengine\Api\BrandRegionGetV30ApiService::class);
    }

    public function brandToolCreativePreviewV30Api(): \Oceanengine\Api\BrandToolCreativePreviewV30ApiService
    {
        return $this->getService('BrandToolCreativePreviewV30Api', \Oceanengine\Api\BrandToolCreativePreviewV30ApiService::class);
    }

    public function brandToolMaterialPreviewV30Api(): \Oceanengine\Api\BrandToolMaterialPreviewV30ApiService
    {
        return $this->getService('BrandToolMaterialPreviewV30Api', \Oceanengine\Api\BrandToolMaterialPreviewV30ApiService::class);
    }

    public function brandToolQueryPublishPriceV30Api(): \Oceanengine\Api\BrandToolQueryPublishPriceV30ApiService
    {
        return $this->getService('BrandToolQueryPublishPriceV30Api', \Oceanengine\Api\BrandToolQueryPublishPriceV30ApiService::class);
    }

    public function brandToolQueryStockBalanceV30Api(): \Oceanengine\Api\BrandToolQueryStockBalanceV30ApiService
    {
        return $this->getService('BrandToolQueryStockBalanceV30Api', \Oceanengine\Api\BrandToolQueryStockBalanceV30ApiService::class);
    }

    public function brandUploadImageV30Api(): \Oceanengine\Api\BrandUploadImageV30ApiService
    {
        return $this->getService('BrandUploadImageV30Api', \Oceanengine\Api\BrandUploadImageV30ApiService::class);
    }

    public function budgetGroupCreateV30Api(): \Oceanengine\Api\BudgetGroupCreateV30ApiService
    {
        return $this->getService('BudgetGroupCreateV30Api', \Oceanengine\Api\BudgetGroupCreateV30ApiService::class);
    }

    public function budgetGroupDeleteV30Api(): \Oceanengine\Api\BudgetGroupDeleteV30ApiService
    {
        return $this->getService('BudgetGroupDeleteV30Api', \Oceanengine\Api\BudgetGroupDeleteV30ApiService::class);
    }

    public function budgetGroupListV30Api(): \Oceanengine\Api\BudgetGroupListV30ApiService
    {
        return $this->getService('BudgetGroupListV30Api', \Oceanengine\Api\BudgetGroupListV30ApiService::class);
    }

    public function budgetGroupUpdateV30Api(): \Oceanengine\Api\BudgetGroupUpdateV30ApiService
    {
        return $this->getService('BudgetGroupUpdateV30Api', \Oceanengine\Api\BudgetGroupUpdateV30ApiService::class);
    }

    public function businessPlatformCompanyAccountGetV30Api(): \Oceanengine\Api\BusinessPlatformCompanyAccountGetV30ApiService
    {
        return $this->getService('BusinessPlatformCompanyAccountGetV30Api', \Oceanengine\Api\BusinessPlatformCompanyAccountGetV30ApiService::class);
    }

    public function businessPlatformCompanyInfoGetV30Api(): \Oceanengine\Api\BusinessPlatformCompanyInfoGetV30ApiService
    {
        return $this->getService('BusinessPlatformCompanyInfoGetV30Api', \Oceanengine\Api\BusinessPlatformCompanyInfoGetV30ApiService::class);
    }

    public function businessPlatformPartnerOrganizationListV2Api(): \Oceanengine\Api\BusinessPlatformPartnerOrganizationListV2ApiService
    {
        return $this->getService('BusinessPlatformPartnerOrganizationListV2Api', \Oceanengine\Api\BusinessPlatformPartnerOrganizationListV2ApiService::class);
    }

    public function campaignCreateV2Api(): \Oceanengine\Api\CampaignCreateV2ApiService
    {
        return $this->getService('CampaignCreateV2Api', \Oceanengine\Api\CampaignCreateV2ApiService::class);
    }

    public function campaignGetV2Api(): \Oceanengine\Api\CampaignGetV2ApiService
    {
        return $this->getService('CampaignGetV2Api', \Oceanengine\Api\CampaignGetV2ApiService::class);
    }

    public function campaignUpdateStatusV2Api(): \Oceanengine\Api\CampaignUpdateStatusV2ApiService
    {
        return $this->getService('CampaignUpdateStatusV2Api', \Oceanengine\Api\CampaignUpdateStatusV2ApiService::class);
    }

    public function campaignUpdateV2Api(): \Oceanengine\Api\CampaignUpdateV2ApiService
    {
        return $this->getService('CampaignUpdateV2Api', \Oceanengine\Api\CampaignUpdateV2ApiService::class);
    }

    public function carouselAdGetV2Api(): \Oceanengine\Api\CarouselAdGetV2ApiService
    {
        return $this->getService('CarouselAdGetV2Api', \Oceanengine\Api\CarouselAdGetV2ApiService::class);
    }

    public function carouselCreateV2Api(): \Oceanengine\Api\CarouselCreateV2ApiService
    {
        return $this->getService('CarouselCreateV2Api', \Oceanengine\Api\CarouselCreateV2ApiService::class);
    }

    public function carouselDeleteV2Api(): \Oceanengine\Api\CarouselDeleteV2ApiService
    {
        return $this->getService('CarouselDeleteV2Api', \Oceanengine\Api\CarouselDeleteV2ApiService::class);
    }

    public function carouselListV2Api(): \Oceanengine\Api\CarouselListV2ApiService
    {
        return $this->getService('CarouselListV2Api', \Oceanengine\Api\CarouselListV2ApiService::class);
    }

    public function carouselUpdateV2Api(): \Oceanengine\Api\CarouselUpdateV2ApiService
    {
        return $this->getService('CarouselUpdateV2Api', \Oceanengine\Api\CarouselUpdateV2ApiService::class);
    }

    public function cdpBrandGetV30Api(): \Oceanengine\Api\CdpBrandGetV30ApiService
    {
        return $this->getService('CdpBrandGetV30Api', \Oceanengine\Api\CdpBrandGetV30ApiService::class);
    }

    public function cgTransferCanTransferBalanceGetV30Api(): \Oceanengine\Api\CgTransferCanTransferBalanceGetV30ApiService
    {
        return $this->getService('CgTransferCanTransferBalanceGetV30Api', \Oceanengine\Api\CgTransferCanTransferBalanceGetV30ApiService::class);
    }

    public function cgTransferCanTransferTargetListV30Api(): \Oceanengine\Api\CgTransferCanTransferTargetListV30ApiService
    {
        return $this->getService('CgTransferCanTransferTargetListV30Api', \Oceanengine\Api\CgTransferCanTransferTargetListV30ApiService::class);
    }

    public function cgTransferCreateTransferV30Api(): \Oceanengine\Api\CgTransferCreateTransferV30ApiService
    {
        return $this->getService('CgTransferCreateTransferV30Api', \Oceanengine\Api\CgTransferCreateTransferV30ApiService::class);
    }

    public function cgTransferQueryCanTransferBalanceV30Api(): \Oceanengine\Api\CgTransferQueryCanTransferBalanceV30ApiService
    {
        return $this->getService('CgTransferQueryCanTransferBalanceV30Api', \Oceanengine\Api\CgTransferQueryCanTransferBalanceV30ApiService::class);
    }

    public function cgTransferQueryTransferBalanceV30Api(): \Oceanengine\Api\CgTransferQueryTransferBalanceV30ApiService
    {
        return $this->getService('CgTransferQueryTransferBalanceV30Api', \Oceanengine\Api\CgTransferQueryTransferBalanceV30ApiService::class);
    }

    public function cgTransferQueryTransferDetailV30Api(): \Oceanengine\Api\CgTransferQueryTransferDetailV30ApiService
    {
        return $this->getService('CgTransferQueryTransferDetailV30Api', \Oceanengine\Api\CgTransferQueryTransferDetailV30ApiService::class);
    }

    public function cgTransferTransferBalanceGetV30Api(): \Oceanengine\Api\CgTransferTransferBalanceGetV30ApiService
    {
        return $this->getService('CgTransferTransferBalanceGetV30Api', \Oceanengine\Api\CgTransferTransferBalanceGetV30ApiService::class);
    }

    public function cgTransferTransferCreateV30Api(): \Oceanengine\Api\CgTransferTransferCreateV30ApiService
    {
        return $this->getService('CgTransferTransferCreateV30Api', \Oceanengine\Api\CgTransferTransferCreateV30ApiService::class);
    }

    public function cgTransferTransferDetailGetV30Api(): \Oceanengine\Api\CgTransferTransferDetailGetV30ApiService
    {
        return $this->getService('CgTransferTransferDetailGetV30Api', \Oceanengine\Api\CgTransferTransferDetailGetV30ApiService::class);
    }

    public function cgTransferV2BpCanTransferBalanceBetweenAccountGetV30Api(): \Oceanengine\Api\CgTransferV2BpCanTransferBalanceBetweenAccountGetV30ApiService
    {
        return $this->getService('CgTransferV2BpCanTransferBalanceBetweenAccountGetV30Api', \Oceanengine\Api\CgTransferV2BpCanTransferBalanceBetweenAccountGetV30ApiService::class);
    }

    public function cgTransferV2BpTransferCreateV30Api(): \Oceanengine\Api\CgTransferV2BpTransferCreateV30ApiService
    {
        return $this->getService('CgTransferV2BpTransferCreateV30Api', \Oceanengine\Api\CgTransferV2BpTransferCreateV30ApiService::class);
    }

    public function cgTransferV2BpTransferDetailGetV30Api(): \Oceanengine\Api\CgTransferV2BpTransferDetailGetV30ApiService
    {
        return $this->getService('CgTransferV2BpTransferDetailGetV30Api', \Oceanengine\Api\CgTransferV2BpTransferDetailGetV30ApiService::class);
    }

    public function cgTransferV2WalletCanTransferBalanceBetweenAccountGetV30Api(): \Oceanengine\Api\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30ApiService
    {
        return $this->getService('CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30Api', \Oceanengine\Api\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30ApiService::class);
    }

    public function cgTransferV2WalletTransferCreateV30Api(): \Oceanengine\Api\CgTransferV2WalletTransferCreateV30ApiService
    {
        return $this->getService('CgTransferV2WalletTransferCreateV30Api', \Oceanengine\Api\CgTransferV2WalletTransferCreateV30ApiService::class);
    }

    public function cgTransferV2WalletTransferDetailGetV30Api(): \Oceanengine\Api\CgTransferV2WalletTransferDetailGetV30ApiService
    {
        return $this->getService('CgTransferV2WalletTransferDetailGetV30Api', \Oceanengine\Api\CgTransferV2WalletTransferDetailGetV30ApiService::class);
    }

    public function cgTransferV3WalletCanTransferBalanceBetweenAccountGetV30Api(): \Oceanengine\Api\CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30ApiService
    {
        return $this->getService('CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30Api', \Oceanengine\Api\CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30ApiService::class);
    }

    public function cgTransferV3WalletTransferCreateV30Api(): \Oceanengine\Api\CgTransferV3WalletTransferCreateV30ApiService
    {
        return $this->getService('CgTransferV3WalletTransferCreateV30Api', \Oceanengine\Api\CgTransferV3WalletTransferCreateV30ApiService::class);
    }

    public function cgTransferV3WalletTransferDetailGetV30Api(): \Oceanengine\Api\CgTransferV3WalletTransferDetailGetV30ApiService
    {
        return $this->getService('CgTransferV3WalletTransferDetailGetV30Api', \Oceanengine\Api\CgTransferV3WalletTransferDetailGetV30ApiService::class);
    }

    public function cgTransferWalletTransferCanTransferBalanceV30Api(): \Oceanengine\Api\CgTransferWalletTransferCanTransferBalanceV30ApiService
    {
        return $this->getService('CgTransferWalletTransferCanTransferBalanceV30Api', \Oceanengine\Api\CgTransferWalletTransferCanTransferBalanceV30ApiService::class);
    }

    public function cgTransferWalletTransferCreateV30Api(): \Oceanengine\Api\CgTransferWalletTransferCreateV30ApiService
    {
        return $this->getService('CgTransferWalletTransferCreateV30Api', \Oceanengine\Api\CgTransferWalletTransferCreateV30ApiService::class);
    }

    public function cgTransferWalletTransferDetailV30Api(): \Oceanengine\Api\CgTransferWalletTransferDetailV30ApiService
    {
        return $this->getService('CgTransferWalletTransferDetailV30Api', \Oceanengine\Api\CgTransferWalletTransferDetailV30ApiService::class);
    }

    public function cgTransferWalletTransferListV30Api(): \Oceanengine\Api\CgTransferWalletTransferListV30ApiService
    {
        return $this->getService('CgTransferWalletTransferListV30Api', \Oceanengine\Api\CgTransferWalletTransferListV30ApiService::class);
    }

    public function chargeInfoOrderNoGetV30Api(): \Oceanengine\Api\ChargeInfoOrderNoGetV30ApiService
    {
        return $this->getService('ChargeInfoOrderNoGetV30Api', \Oceanengine\Api\ChargeInfoOrderNoGetV30ApiService::class);
    }

    public function chargeInfoPaymentVoucherGetV30Api(): \Oceanengine\Api\ChargeInfoPaymentVoucherGetV30ApiService
    {
        return $this->getService('ChargeInfoPaymentVoucherGetV30Api', \Oceanengine\Api\ChargeInfoPaymentVoucherGetV30ApiService::class);
    }

    public function chargeListV30Api(): \Oceanengine\Api\ChargeListV30ApiService
    {
        return $this->getService('ChargeListV30Api', \Oceanengine\Api\ChargeListV30ApiService::class);
    }

    public function chargeResultV30Api(): \Oceanengine\Api\ChargeResultV30ApiService
    {
        return $this->getService('ChargeResultV30Api', \Oceanengine\Api\ChargeResultV30ApiService::class);
    }

    public function chargeTagGetV30Api(): \Oceanengine\Api\ChargeTagGetV30ApiService
    {
        return $this->getService('ChargeTagGetV30Api', \Oceanengine\Api\ChargeTagGetV30ApiService::class);
    }

    public function chargeVerifyGetV30Api(): \Oceanengine\Api\ChargeVerifyGetV30ApiService
    {
        return $this->getService('ChargeVerifyGetV30Api', \Oceanengine\Api\ChargeVerifyGetV30ApiService::class);
    }

    public function clueCaCreateV2Api(): \Oceanengine\Api\ClueCaCreateV2ApiService
    {
        return $this->getService('ClueCaCreateV2Api', \Oceanengine\Api\ClueCaCreateV2ApiService::class);
    }

    public function clueCaInterfaceCreateV2Api(): \Oceanengine\Api\ClueCaInterfaceCreateV2ApiService
    {
        return $this->getService('ClueCaInterfaceCreateV2Api', \Oceanengine\Api\ClueCaInterfaceCreateV2ApiService::class);
    }

    public function clueCaInterfaceUpdateV2Api(): \Oceanengine\Api\ClueCaInterfaceUpdateV2ApiService
    {
        return $this->getService('ClueCaInterfaceUpdateV2Api', \Oceanengine\Api\ClueCaInterfaceUpdateV2ApiService::class);
    }

    public function clueCaUpdateV2Api(): \Oceanengine\Api\ClueCaUpdateV2ApiService
    {
        return $this->getService('ClueCaUpdateV2Api', \Oceanengine\Api\ClueCaUpdateV2ApiService::class);
    }

    public function clueCouponCodeConsumeV2Api(): \Oceanengine\Api\ClueCouponCodeConsumeV2ApiService
    {
        return $this->getService('ClueCouponCodeConsumeV2Api', \Oceanengine\Api\ClueCouponCodeConsumeV2ApiService::class);
    }

    public function clueCouponCodeGetV2Api(): \Oceanengine\Api\ClueCouponCodeGetV2ApiService
    {
        return $this->getService('ClueCouponCodeGetV2Api', \Oceanengine\Api\ClueCouponCodeGetV2ApiService::class);
    }

    public function clueCouponCreateV2Api(): \Oceanengine\Api\ClueCouponCreateV2ApiService
    {
        return $this->getService('ClueCouponCreateV2Api', \Oceanengine\Api\ClueCouponCreateV2ApiService::class);
    }

    public function clueCouponDetailV2Api(): \Oceanengine\Api\ClueCouponDetailV2ApiService
    {
        return $this->getService('ClueCouponDetailV2Api', \Oceanengine\Api\ClueCouponDetailV2ApiService::class);
    }

    public function clueCouponEmployeeCreateV2Api(): \Oceanengine\Api\ClueCouponEmployeeCreateV2ApiService
    {
        return $this->getService('ClueCouponEmployeeCreateV2Api', \Oceanengine\Api\ClueCouponEmployeeCreateV2ApiService::class);
    }

    public function clueCouponEmployeeDeleteV2Api(): \Oceanengine\Api\ClueCouponEmployeeDeleteV2ApiService
    {
        return $this->getService('ClueCouponEmployeeDeleteV2Api', \Oceanengine\Api\ClueCouponEmployeeDeleteV2ApiService::class);
    }

    public function clueCouponEmployeeGetV2Api(): \Oceanengine\Api\ClueCouponEmployeeGetV2ApiService
    {
        return $this->getService('ClueCouponEmployeeGetV2Api', \Oceanengine\Api\ClueCouponEmployeeGetV2ApiService::class);
    }

    public function clueCouponGetV2Api(): \Oceanengine\Api\ClueCouponGetV2ApiService
    {
        return $this->getService('ClueCouponGetV2Api', \Oceanengine\Api\ClueCouponGetV2ApiService::class);
    }

    public function clueCouponUpdateV2Api(): \Oceanengine\Api\ClueCouponUpdateV2ApiService
    {
        return $this->getService('ClueCouponUpdateV2Api', \Oceanengine\Api\ClueCouponUpdateV2ApiService::class);
    }

    public function clueFormCreateV2Api(): \Oceanengine\Api\ClueFormCreateV2ApiService
    {
        return $this->getService('ClueFormCreateV2Api', \Oceanengine\Api\ClueFormCreateV2ApiService::class);
    }

    public function clueFormDeleteV2Api(): \Oceanengine\Api\ClueFormDeleteV2ApiService
    {
        return $this->getService('ClueFormDeleteV2Api', \Oceanengine\Api\ClueFormDeleteV2ApiService::class);
    }

    public function clueFormDetailV2Api(): \Oceanengine\Api\ClueFormDetailV2ApiService
    {
        return $this->getService('ClueFormDetailV2Api', \Oceanengine\Api\ClueFormDetailV2ApiService::class);
    }

    public function clueFormListV2Api(): \Oceanengine\Api\ClueFormListV2ApiService
    {
        return $this->getService('ClueFormListV2Api', \Oceanengine\Api\ClueFormListV2ApiService::class);
    }

    public function clueFormUpdateV2Api(): \Oceanengine\Api\ClueFormUpdateV2ApiService
    {
        return $this->getService('ClueFormUpdateV2Api', \Oceanengine\Api\ClueFormUpdateV2ApiService::class);
    }

    public function clueSmartphoneCreateV2Api(): \Oceanengine\Api\ClueSmartphoneCreateV2ApiService
    {
        return $this->getService('ClueSmartphoneCreateV2Api', \Oceanengine\Api\ClueSmartphoneCreateV2ApiService::class);
    }

    public function clueSmartphoneDeleteV2Api(): \Oceanengine\Api\ClueSmartphoneDeleteV2ApiService
    {
        return $this->getService('ClueSmartphoneDeleteV2Api', \Oceanengine\Api\ClueSmartphoneDeleteV2ApiService::class);
    }

    public function clueSmartphoneGetV2Api(): \Oceanengine\Api\ClueSmartphoneGetV2ApiService
    {
        return $this->getService('ClueSmartphoneGetV2Api', \Oceanengine\Api\ClueSmartphoneGetV2ApiService::class);
    }

    public function clueSmartphoneRecordV2Api(): \Oceanengine\Api\ClueSmartphoneRecordV2ApiService
    {
        return $this->getService('ClueSmartphoneRecordV2Api', \Oceanengine\Api\ClueSmartphoneRecordV2ApiService::class);
    }

    public function clueWechatDataGetV2Api(): \Oceanengine\Api\ClueWechatDataGetV2ApiService
    {
        return $this->getService('ClueWechatDataGetV2Api', \Oceanengine\Api\ClueWechatDataGetV2ApiService::class);
    }

    public function clueWechatInstanceDetailV2Api(): \Oceanengine\Api\ClueWechatInstanceDetailV2ApiService
    {
        return $this->getService('ClueWechatInstanceDetailV2Api', \Oceanengine\Api\ClueWechatInstanceDetailV2ApiService::class);
    }

    public function clueWechatInstanceListV2Api(): \Oceanengine\Api\ClueWechatInstanceListV2ApiService
    {
        return $this->getService('ClueWechatInstanceListV2Api', \Oceanengine\Api\ClueWechatInstanceListV2ApiService::class);
    }

    public function clueWechatInstanceUpdateV2Api(): \Oceanengine\Api\ClueWechatInstanceUpdateV2ApiService
    {
        return $this->getService('ClueWechatInstanceUpdateV2Api', \Oceanengine\Api\ClueWechatInstanceUpdateV2ApiService::class);
    }

    public function clueWechatPoolListV2Api(): \Oceanengine\Api\ClueWechatPoolListV2ApiService
    {
        return $this->getService('ClueWechatPoolListV2Api', \Oceanengine\Api\ClueWechatPoolListV2ApiService::class);
    }

    public function createProjectInvoiceV2Api(): \Oceanengine\Api\CreateProjectInvoiceV2ApiService
    {
        return $this->getService('CreateProjectInvoiceV2Api', \Oceanengine\Api\CreateProjectInvoiceV2ApiService::class);
    }

    public function createStatementInvoiceV2Api(): \Oceanengine\Api\CreateStatementInvoiceV2ApiService
    {
        return $this->getService('CreateStatementInvoiceV2Api', \Oceanengine\Api\CreateStatementInvoiceV2ApiService::class);
    }

    public function createStatementV2Api(): \Oceanengine\Api\CreateStatementV2ApiService
    {
        return $this->getService('CreateStatementV2Api', \Oceanengine\Api\CreateStatementV2ApiService::class);
    }

    public function creativeCustomCreativeCreateV2Api(): \Oceanengine\Api\CreativeCustomCreativeCreateV2ApiService
    {
        return $this->getService('CreativeCustomCreativeCreateV2Api', \Oceanengine\Api\CreativeCustomCreativeCreateV2ApiService::class);
    }

    public function creativeCustomCreativeUpdateV2Api(): \Oceanengine\Api\CreativeCustomCreativeUpdateV2ApiService
    {
        return $this->getService('CreativeCustomCreativeUpdateV2Api', \Oceanengine\Api\CreativeCustomCreativeUpdateV2ApiService::class);
    }

    public function creativeDetailGetV30Api(): \Oceanengine\Api\CreativeDetailGetV30ApiService
    {
        return $this->getService('CreativeDetailGetV30Api', \Oceanengine\Api\CreativeDetailGetV30ApiService::class);
    }

    public function creativeGetV2Api(): \Oceanengine\Api\CreativeGetV2ApiService
    {
        return $this->getService('CreativeGetV2Api', \Oceanengine\Api\CreativeGetV2ApiService::class);
    }

    public function creativeProceduralCreativeCreateV2Api(): \Oceanengine\Api\CreativeProceduralCreativeCreateV2ApiService
    {
        return $this->getService('CreativeProceduralCreativeCreateV2Api', \Oceanengine\Api\CreativeProceduralCreativeCreateV2ApiService::class);
    }

    public function creativeProceduralCreativeUpdateV2Api(): \Oceanengine\Api\CreativeProceduralCreativeUpdateV2ApiService
    {
        return $this->getService('CreativeProceduralCreativeUpdateV2Api', \Oceanengine\Api\CreativeProceduralCreativeUpdateV2ApiService::class);
    }

    public function creativeRejectReasonV2Api(): \Oceanengine\Api\CreativeRejectReasonV2ApiService
    {
        return $this->getService('CreativeRejectReasonV2Api', \Oceanengine\Api\CreativeRejectReasonV2ApiService::class);
    }

    public function creativeStrategyListV2Api(): \Oceanengine\Api\CreativeStrategyListV2ApiService
    {
        return $this->getService('CreativeStrategyListV2Api', \Oceanengine\Api\CreativeStrategyListV2ApiService::class);
    }

    public function customerCenterAccountListV30Api(): \Oceanengine\Api\CustomerCenterAccountListV30ApiService
    {
        return $this->getService('CustomerCenterAccountListV30Api', \Oceanengine\Api\CustomerCenterAccountListV30ApiService::class);
    }

    public function customerCenterAccountOfflineListV30Api(): \Oceanengine\Api\CustomerCenterAccountOfflineListV30ApiService
    {
        return $this->getService('CustomerCenterAccountOfflineListV30Api', \Oceanengine\Api\CustomerCenterAccountOfflineListV30ApiService::class);
    }

    public function customerCenterAdvertiserCopyV2Api(): \Oceanengine\Api\CustomerCenterAdvertiserCopyV2ApiService
    {
        return $this->getService('CustomerCenterAdvertiserCopyV2Api', \Oceanengine\Api\CustomerCenterAdvertiserCopyV2ApiService::class);
    }

    public function customerCenterAdvertiserListV2Api(): \Oceanengine\Api\CustomerCenterAdvertiserListV2ApiService
    {
        return $this->getService('CustomerCenterAdvertiserListV2Api', \Oceanengine\Api\CustomerCenterAdvertiserListV2ApiService::class);
    }

    public function customerCenterAdvertiserTransferableListV2Api(): \Oceanengine\Api\CustomerCenterAdvertiserTransferableListV2ApiService
    {
        return $this->getService('CustomerCenterAdvertiserTransferableListV2Api', \Oceanengine\Api\CustomerCenterAdvertiserTransferableListV2ApiService::class);
    }

    public function customerCenterFundTransferSeqCommitV2Api(): \Oceanengine\Api\CustomerCenterFundTransferSeqCommitV2ApiService
    {
        return $this->getService('CustomerCenterFundTransferSeqCommitV2Api', \Oceanengine\Api\CustomerCenterFundTransferSeqCommitV2ApiService::class);
    }

    public function customerCenterFundTransferSeqCreateV2Api(): \Oceanengine\Api\CustomerCenterFundTransferSeqCreateV2ApiService
    {
        return $this->getService('CustomerCenterFundTransferSeqCreateV2Api', \Oceanengine\Api\CustomerCenterFundTransferSeqCreateV2ApiService::class);
    }

    public function dcdChargeSubmitV30Api(): \Oceanengine\Api\DcdChargeSubmitV30ApiService
    {
        return $this->getService('DcdChargeSubmitV30Api', \Oceanengine\Api\DcdChargeSubmitV30ApiService::class);
    }

    public function decorationCouponGetV30Api(): \Oceanengine\Api\DecorationCouponGetV30ApiService
    {
        return $this->getService('DecorationCouponGetV30Api', \Oceanengine\Api\DecorationCouponGetV30ApiService::class);
    }

    public function diagnosisTaskAdvCreateV2Api(): \Oceanengine\Api\DiagnosisTaskAdvCreateV2ApiService
    {
        return $this->getService('DiagnosisTaskAdvCreateV2Api', \Oceanengine\Api\DiagnosisTaskAdvCreateV2ApiService::class);
    }

    public function diagnosisTaskAdvGetV2Api(): \Oceanengine\Api\DiagnosisTaskAdvGetV2ApiService
    {
        return $this->getService('DiagnosisTaskAdvGetV2Api', \Oceanengine\Api\DiagnosisTaskAdvGetV2ApiService::class);
    }

    public function diagnosisTaskAdvListV2Api(): \Oceanengine\Api\DiagnosisTaskAdvListV2ApiService
    {
        return $this->getService('DiagnosisTaskAdvListV2Api', \Oceanengine\Api\DiagnosisTaskAdvListV2ApiService::class);
    }

    public function diagnosisTaskAgentCreateV2Api(): \Oceanengine\Api\DiagnosisTaskAgentCreateV2ApiService
    {
        return $this->getService('DiagnosisTaskAgentCreateV2Api', \Oceanengine\Api\DiagnosisTaskAgentCreateV2ApiService::class);
    }

    public function diagnosisTaskAgentGetV2Api(): \Oceanengine\Api\DiagnosisTaskAgentGetV2ApiService
    {
        return $this->getService('DiagnosisTaskAgentGetV2Api', \Oceanengine\Api\DiagnosisTaskAgentGetV2ApiService::class);
    }

    public function diagnosisTaskAgentListV2Api(): \Oceanengine\Api\DiagnosisTaskAgentListV2ApiService
    {
        return $this->getService('DiagnosisTaskAgentListV2Api', \Oceanengine\Api\DiagnosisTaskAgentListV2ApiService::class);
    }

    public function dmpBrandGetV2Api(): \Oceanengine\Api\DmpBrandGetV2ApiService
    {
        return $this->getService('DmpBrandGetV2Api', \Oceanengine\Api\DmpBrandGetV2ApiService::class);
    }

    public function dmpCustomAudienceCopyV2Api(): \Oceanengine\Api\DmpCustomAudienceCopyV2ApiService
    {
        return $this->getService('DmpCustomAudienceCopyV2Api', \Oceanengine\Api\DmpCustomAudienceCopyV2ApiService::class);
    }

    public function dmpCustomAudienceDeleteV2Api(): \Oceanengine\Api\DmpCustomAudienceDeleteV2ApiService
    {
        return $this->getService('DmpCustomAudienceDeleteV2Api', \Oceanengine\Api\DmpCustomAudienceDeleteV2ApiService::class);
    }

    public function dmpCustomAudiencePublishV2Api(): \Oceanengine\Api\DmpCustomAudiencePublishV2ApiService
    {
        return $this->getService('DmpCustomAudiencePublishV2Api', \Oceanengine\Api\DmpCustomAudiencePublishV2ApiService::class);
    }

    public function dmpCustomAudiencePushV2V2Api(): \Oceanengine\Api\DmpCustomAudiencePushV2V2ApiService
    {
        return $this->getService('DmpCustomAudiencePushV2V2Api', \Oceanengine\Api\DmpCustomAudiencePushV2V2ApiService::class);
    }

    public function dmpCustomAudienceReadV2Api(): \Oceanengine\Api\DmpCustomAudienceReadV2ApiService
    {
        return $this->getService('DmpCustomAudienceReadV2Api', \Oceanengine\Api\DmpCustomAudienceReadV2ApiService::class);
    }

    public function dmpCustomAudienceSelectV2Api(): \Oceanengine\Api\DmpCustomAudienceSelectV2ApiService
    {
        return $this->getService('DmpCustomAudienceSelectV2Api', \Oceanengine\Api\DmpCustomAudienceSelectV2ApiService::class);
    }

    public function dmpDataSourceCreateV2Api(): \Oceanengine\Api\DmpDataSourceCreateV2ApiService
    {
        return $this->getService('DmpDataSourceCreateV2Api', \Oceanengine\Api\DmpDataSourceCreateV2ApiService::class);
    }

    public function dmpDataSourceFileUploadV2Api(): \Oceanengine\Api\DmpDataSourceFileUploadV2ApiService
    {
        return $this->getService('DmpDataSourceFileUploadV2Api', \Oceanengine\Api\DmpDataSourceFileUploadV2ApiService::class);
    }

    public function dmpDataSourceReadV2Api(): \Oceanengine\Api\DmpDataSourceReadV2ApiService
    {
        return $this->getService('DmpDataSourceReadV2Api', \Oceanengine\Api\DmpDataSourceReadV2ApiService::class);
    }

    public function dmpDataSourceUpdateV2Api(): \Oceanengine\Api\DmpDataSourceUpdateV2ApiService
    {
        return $this->getService('DmpDataSourceUpdateV2Api', \Oceanengine\Api\DmpDataSourceUpdateV2ApiService::class);
    }

    public function douplusOptionalItemsListV30Api(): \Oceanengine\Api\DouplusOptionalItemsListV30ApiService
    {
        return $this->getService('DouplusOptionalItemsListV30Api', \Oceanengine\Api\DouplusOptionalItemsListV30ApiService::class);
    }

    public function douplusOptionalTargetsListV30Api(): \Oceanengine\Api\DouplusOptionalTargetsListV30ApiService
    {
        return $this->getService('DouplusOptionalTargetsListV30Api', \Oceanengine\Api\DouplusOptionalTargetsListV30ApiService::class);
    }

    public function douplusOrderCloseV30Api(): \Oceanengine\Api\DouplusOrderCloseV30ApiService
    {
        return $this->getService('DouplusOrderCloseV30Api', \Oceanengine\Api\DouplusOrderCloseV30ApiService::class);
    }

    public function douplusOrderCreateV30Api(): \Oceanengine\Api\DouplusOrderCreateV30ApiService
    {
        return $this->getService('DouplusOrderCreateV30Api', \Oceanengine\Api\DouplusOrderCreateV30ApiService::class);
    }

    public function douplusOrderListV30Api(): \Oceanengine\Api\DouplusOrderListV30ApiService
    {
        return $this->getService('DouplusOrderListV30Api', \Oceanengine\Api\DouplusOrderListV30ApiService::class);
    }

    public function douplusOrderRenewV30Api(): \Oceanengine\Api\DouplusOrderRenewV30ApiService
    {
        return $this->getService('DouplusOrderRenewV30Api', \Oceanengine\Api\DouplusOrderRenewV30ApiService::class);
    }

    public function douplusOrderReportV30Api(): \Oceanengine\Api\DouplusOrderReportV30ApiService
    {
        return $this->getService('DouplusOrderReportV30Api', \Oceanengine\Api\DouplusOrderReportV30ApiService::class);
    }

    public function douplusRtaGetInfoV30Api(): \Oceanengine\Api\DouplusRtaGetInfoV30ApiService
    {
        return $this->getService('DouplusRtaGetInfoV30Api', \Oceanengine\Api\DouplusRtaGetInfoV30ApiService::class);
    }

    public function douplusRtaSetScopeV30Api(): \Oceanengine\Api\DouplusRtaSetScopeV30ApiService
    {
        return $this->getService('DouplusRtaSetScopeV30Api', \Oceanengine\Api\DouplusRtaSetScopeV30ApiService::class);
    }

    public function downloadStatementEsignFileV2Api(): \Oceanengine\Api\DownloadStatementEsignFileV2ApiService
    {
        return $this->getService('DownloadStatementEsignFileV2Api', \Oceanengine\Api\DownloadStatementEsignFileV2ApiService::class);
    }

    public function downloadStatementV2Api(): \Oceanengine\Api\DownloadStatementV2ApiService
    {
        return $this->getService('DownloadStatementV2Api', \Oceanengine\Api\DownloadStatementV2ApiService::class);
    }

    public function dpaAlbumCreateV30Api(): \Oceanengine\Api\DpaAlbumCreateV30ApiService
    {
        return $this->getService('DpaAlbumCreateV30Api', \Oceanengine\Api\DpaAlbumCreateV30ApiService::class);
    }

    public function dpaAlbumStatusGetV30Api(): \Oceanengine\Api\DpaAlbumStatusGetV30ApiService
    {
        return $this->getService('DpaAlbumStatusGetV30Api', \Oceanengine\Api\DpaAlbumStatusGetV30ApiService::class);
    }

    public function dpaAssetV2DetailReadV2Api(): \Oceanengine\Api\DpaAssetV2DetailReadV2ApiService
    {
        return $this->getService('DpaAssetV2DetailReadV2Api', \Oceanengine\Api\DpaAssetV2DetailReadV2ApiService::class);
    }

    public function dpaAssetV2ListV2Api(): \Oceanengine\Api\DpaAssetV2ListV2ApiService
    {
        return $this->getService('DpaAssetV2ListV2Api', \Oceanengine\Api\DpaAssetV2ListV2ApiService::class);
    }

    public function dpaAssetsDetailReadV2Api(): \Oceanengine\Api\DpaAssetsDetailReadV2ApiService
    {
        return $this->getService('DpaAssetsDetailReadV2Api', \Oceanengine\Api\DpaAssetsDetailReadV2ApiService::class);
    }

    public function dpaBrandAdvAuthFuzzyGetV30Api(): \Oceanengine\Api\DpaBrandAdvAuthFuzzyGetV30ApiService
    {
        return $this->getService('DpaBrandAdvAuthFuzzyGetV30Api', \Oceanengine\Api\DpaBrandAdvAuthFuzzyGetV30ApiService::class);
    }

    public function dpaBrandAdvAuthIndustryGetV30Api(): \Oceanengine\Api\DpaBrandAdvAuthIndustryGetV30ApiService
    {
        return $this->getService('DpaBrandAdvAuthIndustryGetV30Api', \Oceanengine\Api\DpaBrandAdvAuthIndustryGetV30ApiService::class);
    }

    public function dpaBrandFuzzyGetV30Api(): \Oceanengine\Api\DpaBrandFuzzyGetV30ApiService
    {
        return $this->getService('DpaBrandFuzzyGetV30Api', \Oceanengine\Api\DpaBrandFuzzyGetV30ApiService::class);
    }

    public function dpaCategoryGetV2Api(): \Oceanengine\Api\DpaCategoryGetV2ApiService
    {
        return $this->getService('DpaCategoryGetV2Api', \Oceanengine\Api\DpaCategoryGetV2ApiService::class);
    }

    public function dpaCheckIndexEntryProgressV2Api(): \Oceanengine\Api\DpaCheckIndexEntryProgressV2ApiService
    {
        return $this->getService('DpaCheckIndexEntryProgressV2Api', \Oceanengine\Api\DpaCheckIndexEntryProgressV2ApiService::class);
    }

    public function dpaClueProductDeleteV2Api(): \Oceanengine\Api\DpaClueProductDeleteV2ApiService
    {
        return $this->getService('DpaClueProductDeleteV2Api', \Oceanengine\Api\DpaClueProductDeleteV2ApiService::class);
    }

    public function dpaClueProductDetailV2Api(): \Oceanengine\Api\DpaClueProductDetailV2ApiService
    {
        return $this->getService('DpaClueProductDetailV2Api', \Oceanengine\Api\DpaClueProductDetailV2ApiService::class);
    }

    public function dpaClueProductListV2Api(): \Oceanengine\Api\DpaClueProductListV2ApiService
    {
        return $this->getService('DpaClueProductListV2Api', \Oceanengine\Api\DpaClueProductListV2ApiService::class);
    }

    public function dpaClueProductSaveV2Api(): \Oceanengine\Api\DpaClueProductSaveV2ApiService
    {
        return $this->getService('DpaClueProductSaveV2Api', \Oceanengine\Api\DpaClueProductSaveV2ApiService::class);
    }

    public function dpaDetailGetV2Api(): \Oceanengine\Api\DpaDetailGetV2ApiService
    {
        return $this->getService('DpaDetailGetV2Api', \Oceanengine\Api\DpaDetailGetV2ApiService::class);
    }

    public function dpaDictGetV2Api(): \Oceanengine\Api\DpaDictGetV2ApiService
    {
        return $this->getService('DpaDictGetV2Api', \Oceanengine\Api\DpaDictGetV2ApiService::class);
    }

    public function dpaEbpCategoryGetV30Api(): \Oceanengine\Api\DpaEbpCategoryGetV30ApiService
    {
        return $this->getService('DpaEbpCategoryGetV30Api', \Oceanengine\Api\DpaEbpCategoryGetV30ApiService::class);
    }

    public function dpaEbpClueProductDeleteV30Api(): \Oceanengine\Api\DpaEbpClueProductDeleteV30ApiService
    {
        return $this->getService('DpaEbpClueProductDeleteV30Api', \Oceanengine\Api\DpaEbpClueProductDeleteV30ApiService::class);
    }

    public function dpaEbpClueProductGetV30Api(): \Oceanengine\Api\DpaEbpClueProductGetV30ApiService
    {
        return $this->getService('DpaEbpClueProductGetV30Api', \Oceanengine\Api\DpaEbpClueProductGetV30ApiService::class);
    }

    public function dpaEbpClueProductListV30Api(): \Oceanengine\Api\DpaEbpClueProductListV30ApiService
    {
        return $this->getService('DpaEbpClueProductListV30Api', \Oceanengine\Api\DpaEbpClueProductListV30ApiService::class);
    }

    public function dpaEbpClueProductSaveV30Api(): \Oceanengine\Api\DpaEbpClueProductSaveV30ApiService
    {
        return $this->getService('DpaEbpClueProductSaveV30Api', \Oceanengine\Api\DpaEbpClueProductSaveV30ApiService::class);
    }

    public function dpaEbpDictGetV30Api(): \Oceanengine\Api\DpaEbpDictGetV30ApiService
    {
        return $this->getService('DpaEbpDictGetV30Api', \Oceanengine\Api\DpaEbpDictGetV30ApiService::class);
    }

    public function dpaEbpLibraryListV30Api(): \Oceanengine\Api\DpaEbpLibraryListV30ApiService
    {
        return $this->getService('DpaEbpLibraryListV30Api', \Oceanengine\Api\DpaEbpLibraryListV30ApiService::class);
    }

    public function dpaEbpMetaGetV30Api(): \Oceanengine\Api\DpaEbpMetaGetV30ApiService
    {
        return $this->getService('DpaEbpMetaGetV30Api', \Oceanengine\Api\DpaEbpMetaGetV30ApiService::class);
    }

    public function dpaEbpPlayletAuthGetV30Api(): \Oceanengine\Api\DpaEbpPlayletAuthGetV30ApiService
    {
        return $this->getService('DpaEbpPlayletAuthGetV30Api', \Oceanengine\Api\DpaEbpPlayletAuthGetV30ApiService::class);
    }

    public function dpaEbpProductCreateV30Api(): \Oceanengine\Api\DpaEbpProductCreateV30ApiService
    {
        return $this->getService('DpaEbpProductCreateV30Api', \Oceanengine\Api\DpaEbpProductCreateV30ApiService::class);
    }

    public function dpaEbpProductDeleteV30Api(): \Oceanengine\Api\DpaEbpProductDeleteV30ApiService
    {
        return $this->getService('DpaEbpProductDeleteV30Api', \Oceanengine\Api\DpaEbpProductDeleteV30ApiService::class);
    }

    public function dpaEbpProductDetailGetV30Api(): \Oceanengine\Api\DpaEbpProductDetailGetV30ApiService
    {
        return $this->getService('DpaEbpProductDetailGetV30Api', \Oceanengine\Api\DpaEbpProductDetailGetV30ApiService::class);
    }

    public function dpaEbpProductListV30Api(): \Oceanengine\Api\DpaEbpProductListV30ApiService
    {
        return $this->getService('DpaEbpProductListV30Api', \Oceanengine\Api\DpaEbpProductListV30ApiService::class);
    }

    public function dpaEbpProductStatusBatchUpdateV30Api(): \Oceanengine\Api\DpaEbpProductStatusBatchUpdateV30ApiService
    {
        return $this->getService('DpaEbpProductStatusBatchUpdateV30Api', \Oceanengine\Api\DpaEbpProductStatusBatchUpdateV30ApiService::class);
    }

    public function dpaEbpProductUpdateV30Api(): \Oceanengine\Api\DpaEbpProductUpdateV30ApiService
    {
        return $this->getService('DpaEbpProductUpdateV30Api', \Oceanengine\Api\DpaEbpProductUpdateV30ApiService::class);
    }

    public function dpaMetaGetV2Api(): \Oceanengine\Api\DpaMetaGetV2ApiService
    {
        return $this->getService('DpaMetaGetV2Api', \Oceanengine\Api\DpaMetaGetV2ApiService::class);
    }

    public function dpaOfflineProductBatchDeleteV30Api(): \Oceanengine\Api\DpaOfflineProductBatchDeleteV30ApiService
    {
        return $this->getService('DpaOfflineProductBatchDeleteV30Api', \Oceanengine\Api\DpaOfflineProductBatchDeleteV30ApiService::class);
    }

    public function dpaPlayletAuthGetV2Api(): \Oceanengine\Api\DpaPlayletAuthGetV2ApiService
    {
        return $this->getService('DpaPlayletAuthGetV2Api', \Oceanengine\Api\DpaPlayletAuthGetV2ApiService::class);
    }

    public function dpaProductAvailablesV2Api(): \Oceanengine\Api\DpaProductAvailablesV2ApiService
    {
        return $this->getService('DpaProductAvailablesV2Api', \Oceanengine\Api\DpaProductAvailablesV2ApiService::class);
    }

    public function dpaProductCreateV2Api(): \Oceanengine\Api\DpaProductCreateV2ApiService
    {
        return $this->getService('DpaProductCreateV2Api', \Oceanengine\Api\DpaProductCreateV2ApiService::class);
    }

    public function dpaProductDeleteV2Api(): \Oceanengine\Api\DpaProductDeleteV2ApiService
    {
        return $this->getService('DpaProductDeleteV2Api', \Oceanengine\Api\DpaProductDeleteV2ApiService::class);
    }

    public function dpaProductDetailGetV2Api(): \Oceanengine\Api\DpaProductDetailGetV2ApiService
    {
        return $this->getService('DpaProductDetailGetV2Api', \Oceanengine\Api\DpaProductDetailGetV2ApiService::class);
    }

    public function dpaProductStatusBatchUpdateV2Api(): \Oceanengine\Api\DpaProductStatusBatchUpdateV2ApiService
    {
        return $this->getService('DpaProductStatusBatchUpdateV2Api', \Oceanengine\Api\DpaProductStatusBatchUpdateV2ApiService::class);
    }

    public function dpaProductUpdateV2Api(): \Oceanengine\Api\DpaProductUpdateV2ApiService
    {
        return $this->getService('DpaProductUpdateV2Api', \Oceanengine\Api\DpaProductUpdateV2ApiService::class);
    }

    public function dpaTemplateGetV2Api(): \Oceanengine\Api\DpaTemplateGetV2ApiService
    {
        return $this->getService('DpaTemplateGetV2Api', \Oceanengine\Api\DpaTemplateGetV2ApiService::class);
    }

    public function dpaVideoGetV2Api(): \Oceanengine\Api\DpaVideoGetV2ApiService
    {
        return $this->getService('DpaVideoGetV2Api', \Oceanengine\Api\DpaVideoGetV2ApiService::class);
    }

    public function ebpAccountCreateV30Api(): \Oceanengine\Api\EbpAccountCreateV30ApiService
    {
        return $this->getService('EbpAccountCreateV30Api', \Oceanengine\Api\EbpAccountCreateV30ApiService::class);
    }

    public function ebpAdvBindGroupGetV30Api(): \Oceanengine\Api\EbpAdvBindGroupGetV30ApiService
    {
        return $this->getService('EbpAdvBindGroupGetV30Api', \Oceanengine\Api\EbpAdvBindGroupGetV30ApiService::class);
    }

    public function ebpAdvertiserAllListV30Api(): \Oceanengine\Api\EbpAdvertiserAllListV30ApiService
    {
        return $this->getService('EbpAdvertiserAllListV30Api', \Oceanengine\Api\EbpAdvertiserAllListV30ApiService::class);
    }

    public function ebpAdvertiserListV2Api(): \Oceanengine\Api\EbpAdvertiserListV2ApiService
    {
        return $this->getService('EbpAdvertiserListV2Api', \Oceanengine\Api\EbpAdvertiserListV2ApiService::class);
    }

    public function ebpAdvertiserTaskCreateV2Api(): \Oceanengine\Api\EbpAdvertiserTaskCreateV2ApiService
    {
        return $this->getService('EbpAdvertiserTaskCreateV2Api', \Oceanengine\Api\EbpAdvertiserTaskCreateV2ApiService::class);
    }

    public function ebpAdvertiserTaskDownloadV2Api(): \Oceanengine\Api\EbpAdvertiserTaskDownloadV2ApiService
    {
        return $this->getService('EbpAdvertiserTaskDownloadV2Api', \Oceanengine\Api\EbpAdvertiserTaskDownloadV2ApiService::class);
    }

    public function ebpAdvertiserTaskListV2Api(): \Oceanengine\Api\EbpAdvertiserTaskListV2ApiService
    {
        return $this->getService('EbpAdvertiserTaskListV2Api', \Oceanengine\Api\EbpAdvertiserTaskListV2ApiService::class);
    }

    public function ebpGroupBindAccountCreateV30Api(): \Oceanengine\Api\EbpGroupBindAccountCreateV30ApiService
    {
        return $this->getService('EbpGroupBindAccountCreateV30Api', \Oceanengine\Api\EbpGroupBindAccountCreateV30ApiService::class);
    }

    public function ebpGroupBindAccountDeleteV30Api(): \Oceanengine\Api\EbpGroupBindAccountDeleteV30ApiService
    {
        return $this->getService('EbpGroupBindAccountDeleteV30Api', \Oceanengine\Api\EbpGroupBindAccountDeleteV30ApiService::class);
    }

    public function ebpGroupBindAccountUpdateV30Api(): \Oceanengine\Api\EbpGroupBindAccountUpdateV30ApiService
    {
        return $this->getService('EbpGroupBindAccountUpdateV30Api', \Oceanengine\Api\EbpGroupBindAccountUpdateV30ApiService::class);
    }

    public function ebpLevelGetV2Api(): \Oceanengine\Api\EbpLevelGetV2ApiService
    {
        return $this->getService('EbpLevelGetV2Api', \Oceanengine\Api\EbpLevelGetV2ApiService::class);
    }

    public function ebpRolePermissionGetV2Api(): \Oceanengine\Api\EbpRolePermissionGetV2ApiService
    {
        return $this->getService('EbpRolePermissionGetV2Api', \Oceanengine\Api\EbpRolePermissionGetV2ApiService::class);
    }

    public function ebpSubGroupCreateV30Api(): \Oceanengine\Api\EbpSubGroupCreateV30ApiService
    {
        return $this->getService('EbpSubGroupCreateV30Api', \Oceanengine\Api\EbpSubGroupCreateV30ApiService::class);
    }

    public function ebpTaskInfoGetV30Api(): \Oceanengine\Api\EbpTaskInfoGetV30ApiService
    {
        return $this->getService('EbpTaskInfoGetV30Api', \Oceanengine\Api\EbpTaskInfoGetV30ApiService::class);
    }

    public function eventManagerAbnormalAssetsGetV30Api(): \Oceanengine\Api\EventManagerAbnormalAssetsGetV30ApiService
    {
        return $this->getService('EventManagerAbnormalAssetsGetV30Api', \Oceanengine\Api\EventManagerAbnormalAssetsGetV30ApiService::class);
    }

    public function eventManagerAssetsCreateV2Api(): \Oceanengine\Api\EventManagerAssetsCreateV2ApiService
    {
        return $this->getService('EventManagerAssetsCreateV2Api', \Oceanengine\Api\EventManagerAssetsCreateV2ApiService::class);
    }

    public function eventManagerAuthAddPublicKeyV2Api(): \Oceanengine\Api\EventManagerAuthAddPublicKeyV2ApiService
    {
        return $this->getService('EventManagerAuthAddPublicKeyV2Api', \Oceanengine\Api\EventManagerAuthAddPublicKeyV2ApiService::class);
    }

    public function eventManagerAuthDelPublicKeyV2Api(): \Oceanengine\Api\EventManagerAuthDelPublicKeyV2ApiService
    {
        return $this->getService('EventManagerAuthDelPublicKeyV2Api', \Oceanengine\Api\EventManagerAuthDelPublicKeyV2ApiService::class);
    }

    public function eventManagerAuthDisableV2Api(): \Oceanengine\Api\EventManagerAuthDisableV2ApiService
    {
        return $this->getService('EventManagerAuthDisableV2Api', \Oceanengine\Api\EventManagerAuthDisableV2ApiService::class);
    }

    public function eventManagerAuthEnableV2Api(): \Oceanengine\Api\EventManagerAuthEnableV2ApiService
    {
        return $this->getService('EventManagerAuthEnableV2Api', \Oceanengine\Api\EventManagerAuthEnableV2ApiService::class);
    }

    public function eventManagerAuthGetAllPublicKeysV2Api(): \Oceanengine\Api\EventManagerAuthGetAllPublicKeysV2ApiService
    {
        return $this->getService('EventManagerAuthGetAllPublicKeysV2Api', \Oceanengine\Api\EventManagerAuthGetAllPublicKeysV2ApiService::class);
    }

    public function eventManagerAuthGetAuthStatusV2Api(): \Oceanengine\Api\EventManagerAuthGetAuthStatusV2ApiService
    {
        return $this->getService('EventManagerAuthGetAuthStatusV2Api', \Oceanengine\Api\EventManagerAuthGetAuthStatusV2ApiService::class);
    }

    public function eventManagerAuthGetPublicKeyV2Api(): \Oceanengine\Api\EventManagerAuthGetPublicKeyV2ApiService
    {
        return $this->getService('EventManagerAuthGetPublicKeyV2Api', \Oceanengine\Api\EventManagerAuthGetPublicKeyV2ApiService::class);
    }

    public function eventManagerAvailableEventsGetV2Api(): \Oceanengine\Api\EventManagerAvailableEventsGetV2ApiService
    {
        return $this->getService('EventManagerAvailableEventsGetV2Api', \Oceanengine\Api\EventManagerAvailableEventsGetV2ApiService::class);
    }

    public function eventManagerDbtGetV30Api(): \Oceanengine\Api\EventManagerDbtGetV30ApiService
    {
        return $this->getService('EventManagerDbtGetV30Api', \Oceanengine\Api\EventManagerDbtGetV30ApiService::class);
    }

    public function eventManagerDeepBidTypeGetV30Api(): \Oceanengine\Api\EventManagerDeepBidTypeGetV30ApiService
    {
        return $this->getService('EventManagerDeepBidTypeGetV30Api', \Oceanengine\Api\EventManagerDeepBidTypeGetV30ApiService::class);
    }

    public function eventManagerEventConfigsGetV2Api(): \Oceanengine\Api\EventManagerEventConfigsGetV2ApiService
    {
        return $this->getService('EventManagerEventConfigsGetV2Api', \Oceanengine\Api\EventManagerEventConfigsGetV2ApiService::class);
    }

    public function eventManagerEventsCreateV2Api(): \Oceanengine\Api\EventManagerEventsCreateV2ApiService
    {
        return $this->getService('EventManagerEventsCreateV2Api', \Oceanengine\Api\EventManagerEventsCreateV2ApiService::class);
    }

    public function eventManagerOptimizedGoalGetV2V30Api(): \Oceanengine\Api\EventManagerOptimizedGoalGetV2V30ApiService
    {
        return $this->getService('EventManagerOptimizedGoalGetV2V30Api', \Oceanengine\Api\EventManagerOptimizedGoalGetV2V30ApiService::class);
    }

    public function eventManagerOptimizedGoalGetV30Api(): \Oceanengine\Api\EventManagerOptimizedGoalGetV30ApiService
    {
        return $this->getService('EventManagerOptimizedGoalGetV30Api', \Oceanengine\Api\EventManagerOptimizedGoalGetV30ApiService::class);
    }

    public function eventManagerShareCancelV30Api(): \Oceanengine\Api\EventManagerShareCancelV30ApiService
    {
        return $this->getService('EventManagerShareCancelV30Api', \Oceanengine\Api\EventManagerShareCancelV30ApiService::class);
    }

    public function eventManagerShareGetV30Api(): \Oceanengine\Api\EventManagerShareGetV30ApiService
    {
        return $this->getService('EventManagerShareGetV30Api', \Oceanengine\Api\EventManagerShareGetV30ApiService::class);
    }

    public function eventManagerShareV30Api(): \Oceanengine\Api\EventManagerShareV30ApiService
    {
        return $this->getService('EventManagerShareV30Api', \Oceanengine\Api\EventManagerShareV30ApiService::class);
    }

    public function eventManagerTrackUrlCreateV2Api(): \Oceanengine\Api\EventManagerTrackUrlCreateV2ApiService
    {
        return $this->getService('EventManagerTrackUrlCreateV2Api', \Oceanengine\Api\EventManagerTrackUrlCreateV2ApiService::class);
    }

    public function eventManagerTrackUrlGetV2Api(): \Oceanengine\Api\EventManagerTrackUrlGetV2ApiService
    {
        return $this->getService('EventManagerTrackUrlGetV2Api', \Oceanengine\Api\EventManagerTrackUrlGetV2ApiService::class);
    }

    public function eventManagerTrackUrlUpdateV2Api(): \Oceanengine\Api\EventManagerTrackUrlUpdateV2ApiService
    {
        return $this->getService('EventManagerTrackUrlUpdateV2Api', \Oceanengine\Api\EventManagerTrackUrlUpdateV2ApiService::class);
    }

    public function fileAudioAdV2Api(): \Oceanengine\Api\FileAudioAdV2ApiService
    {
        return $this->getService('FileAudioAdV2Api', \Oceanengine\Api\FileAudioAdV2ApiService::class);
    }

    public function fileAudioGetV2Api(): \Oceanengine\Api\FileAudioGetV2ApiService
    {
        return $this->getService('FileAudioGetV2Api', \Oceanengine\Api\FileAudioGetV2ApiService::class);
    }

    public function fileAutoGenerateSourceGetV2Api(): \Oceanengine\Api\FileAutoGenerateSourceGetV2ApiService
    {
        return $this->getService('FileAutoGenerateSourceGetV2Api', \Oceanengine\Api\FileAutoGenerateSourceGetV2ApiService::class);
    }

    public function fileCarouselAwemeGetV30Api(): \Oceanengine\Api\FileCarouselAwemeGetV30ApiService
    {
        return $this->getService('FileCarouselAwemeGetV30Api', \Oceanengine\Api\FileCarouselAwemeGetV30ApiService::class);
    }

    public function fileEbpVideoGetV30Api(): \Oceanengine\Api\FileEbpVideoGetV30ApiService
    {
        return $this->getService('FileEbpVideoGetV30Api', \Oceanengine\Api\FileEbpVideoGetV30ApiService::class);
    }

    public function fileImageAdGetV2Api(): \Oceanengine\Api\FileImageAdGetV2ApiService
    {
        return $this->getService('FileImageAdGetV2Api', \Oceanengine\Api\FileImageAdGetV2ApiService::class);
    }

    public function fileImageAdV2Api(): \Oceanengine\Api\FileImageAdV2ApiService
    {
        return $this->getService('FileImageAdV2Api', \Oceanengine\Api\FileImageAdV2ApiService::class);
    }

    public function fileImageAdvertiserV2Api(): \Oceanengine\Api\FileImageAdvertiserV2ApiService
    {
        return $this->getService('FileImageAdvertiserV2Api', \Oceanengine\Api\FileImageAdvertiserV2ApiService::class);
    }

    public function fileImageDeleteV30Api(): \Oceanengine\Api\FileImageDeleteV30ApiService
    {
        return $this->getService('FileImageDeleteV30Api', \Oceanengine\Api\FileImageDeleteV30ApiService::class);
    }

    public function fileImageGetV2Api(): \Oceanengine\Api\FileImageGetV2ApiService
    {
        return $this->getService('FileImageGetV2Api', \Oceanengine\Api\FileImageGetV2ApiService::class);
    }

    public function fileIncentivePolicyBaseInfoGetV2Api(): \Oceanengine\Api\FileIncentivePolicyBaseInfoGetV2ApiService
    {
        return $this->getService('FileIncentivePolicyBaseInfoGetV2Api', \Oceanengine\Api\FileIncentivePolicyBaseInfoGetV2ApiService::class);
    }

    public function fileMaterialAttributesListV2Api(): \Oceanengine\Api\FileMaterialAttributesListV2ApiService
    {
        return $this->getService('FileMaterialAttributesListV2Api', \Oceanengine\Api\FileMaterialAttributesListV2ApiService::class);
    }

    public function fileMaterialBindV2Api(): \Oceanengine\Api\FileMaterialBindV2ApiService
    {
        return $this->getService('FileMaterialBindV2Api', \Oceanengine\Api\FileMaterialBindV2ApiService::class);
    }

    public function fileMaterialDetailV2Api(): \Oceanengine\Api\FileMaterialDetailV2ApiService
    {
        return $this->getService('FileMaterialDetailV2Api', \Oceanengine\Api\FileMaterialDetailV2ApiService::class);
    }

    public function fileMaterialListV2Api(): \Oceanengine\Api\FileMaterialListV2ApiService
    {
        return $this->getService('FileMaterialListV2Api', \Oceanengine\Api\FileMaterialListV2ApiService::class);
    }

    public function filePlayableCreateV30Api(): \Oceanengine\Api\FilePlayableCreateV30ApiService
    {
        return $this->getService('FilePlayableCreateV30Api', \Oceanengine\Api\FilePlayableCreateV30ApiService::class);
    }

    public function filePlayableListV30Api(): \Oceanengine\Api\FilePlayableListV30ApiService
    {
        return $this->getService('FilePlayableListV30Api', \Oceanengine\Api\FilePlayableListV30ApiService::class);
    }

    public function filePreauditGetV30Api(): \Oceanengine\Api\FilePreauditGetV30ApiService
    {
        return $this->getService('FilePreauditGetV30Api', \Oceanengine\Api\FilePreauditGetV30ApiService::class);
    }

    public function filePreauditSubmitV30Api(): \Oceanengine\Api\FilePreauditSubmitV30ApiService
    {
        return $this->getService('FilePreauditSubmitV30Api', \Oceanengine\Api\FilePreauditSubmitV30ApiService::class);
    }

    public function fileQualityGetV30Api(): \Oceanengine\Api\FileQualityGetV30ApiService
    {
        return $this->getService('FileQualityGetV30Api', \Oceanengine\Api\FileQualityGetV30ApiService::class);
    }

    public function fileQualitySubmitV30Api(): \Oceanengine\Api\FileQualitySubmitV30ApiService
    {
        return $this->getService('FileQualitySubmitV30Api', \Oceanengine\Api\FileQualitySubmitV30ApiService::class);
    }

    public function fileRebateCommonDownloadCreateTaskV2Api(): \Oceanengine\Api\FileRebateCommonDownloadCreateTaskV2ApiService
    {
        return $this->getService('FileRebateCommonDownloadCreateTaskV2Api', \Oceanengine\Api\FileRebateCommonDownloadCreateTaskV2ApiService::class);
    }

    public function fileRebateCommonDownloadDownloadFileV2Api(): \Oceanengine\Api\FileRebateCommonDownloadDownloadFileV2ApiService
    {
        return $this->getService('FileRebateCommonDownloadDownloadFileV2Api', \Oceanengine\Api\FileRebateCommonDownloadDownloadFileV2ApiService::class);
    }

    public function fileRebateCommonDownloadGetDownloadTaskListV2Api(): \Oceanengine\Api\FileRebateCommonDownloadGetDownloadTaskListV2ApiService
    {
        return $this->getService('FileRebateCommonDownloadGetDownloadTaskListV2Api', \Oceanengine\Api\FileRebateCommonDownloadGetDownloadTaskListV2ApiService::class);
    }

    public function fileRebateDataProductCreateV2Api(): \Oceanengine\Api\FileRebateDataProductCreateV2ApiService
    {
        return $this->getService('FileRebateDataProductCreateV2Api', \Oceanengine\Api\FileRebateDataProductCreateV2ApiService::class);
    }

    public function fileRebateRebateDownloadCreateTaskV2Api(): \Oceanengine\Api\FileRebateRebateDownloadCreateTaskV2ApiService
    {
        return $this->getService('FileRebateRebateDownloadCreateTaskV2Api', \Oceanengine\Api\FileRebateRebateDownloadCreateTaskV2ApiService::class);
    }

    public function fileUploadTaskCreateV2Api(): \Oceanengine\Api\FileUploadTaskCreateV2ApiService
    {
        return $this->getService('FileUploadTaskCreateV2Api', \Oceanengine\Api\FileUploadTaskCreateV2ApiService::class);
    }

    public function fileVideoAdGetV2Api(): \Oceanengine\Api\FileVideoAdGetV2ApiService
    {
        return $this->getService('FileVideoAdGetV2Api', \Oceanengine\Api\FileVideoAdGetV2ApiService::class);
    }

    public function fileVideoAdV2Api(): \Oceanengine\Api\FileVideoAdV2ApiService
    {
        return $this->getService('FileVideoAdV2Api', \Oceanengine\Api\FileVideoAdV2ApiService::class);
    }

    public function fileVideoAgentGetV2Api(): \Oceanengine\Api\FileVideoAgentGetV2ApiService
    {
        return $this->getService('FileVideoAgentGetV2Api', \Oceanengine\Api\FileVideoAgentGetV2ApiService::class);
    }

    public function fileVideoAgentV2Api(): \Oceanengine\Api\FileVideoAgentV2ApiService
    {
        return $this->getService('FileVideoAgentV2Api', \Oceanengine\Api\FileVideoAgentV2ApiService::class);
    }

    public function fileVideoAwemeGetV2Api(): \Oceanengine\Api\FileVideoAwemeGetV2ApiService
    {
        return $this->getService('FileVideoAwemeGetV2Api', \Oceanengine\Api\FileVideoAwemeGetV2ApiService::class);
    }

    public function fileVideoDeleteV2Api(): \Oceanengine\Api\FileVideoDeleteV2ApiService
    {
        return $this->getService('FileVideoDeleteV2Api', \Oceanengine\Api\FileVideoDeleteV2ApiService::class);
    }

    public function fileVideoEfficiencyGetV2Api(): \Oceanengine\Api\FileVideoEfficiencyGetV2ApiService
    {
        return $this->getService('FileVideoEfficiencyGetV2Api', \Oceanengine\Api\FileVideoEfficiencyGetV2ApiService::class);
    }

    public function fileVideoGetV2Api(): \Oceanengine\Api\FileVideoGetV2ApiService
    {
        return $this->getService('FileVideoGetV2Api', \Oceanengine\Api\FileVideoGetV2ApiService::class);
    }

    public function fileVideoMaterialClearTaskCreateV2Api(): \Oceanengine\Api\FileVideoMaterialClearTaskCreateV2ApiService
    {
        return $this->getService('FileVideoMaterialClearTaskCreateV2Api', \Oceanengine\Api\FileVideoMaterialClearTaskCreateV2ApiService::class);
    }

    public function fileVideoMaterialClearTaskGetV2Api(): \Oceanengine\Api\FileVideoMaterialClearTaskGetV2ApiService
    {
        return $this->getService('FileVideoMaterialClearTaskGetV2Api', \Oceanengine\Api\FileVideoMaterialClearTaskGetV2ApiService::class);
    }

    public function fileVideoMaterialClearTaskResultGetV2Api(): \Oceanengine\Api\FileVideoMaterialClearTaskResultGetV2ApiService
    {
        return $this->getService('FileVideoMaterialClearTaskResultGetV2Api', \Oceanengine\Api\FileVideoMaterialClearTaskResultGetV2ApiService::class);
    }

    public function fileVideoPauseV2Api(): \Oceanengine\Api\FileVideoPauseV2ApiService
    {
        return $this->getService('FileVideoPauseV2Api', \Oceanengine\Api\FileVideoPauseV2ApiService::class);
    }

    public function fileVideoUpdateV2Api(): \Oceanengine\Api\FileVideoUpdateV2ApiService
    {
        return $this->getService('FileVideoUpdateV2Api', \Oceanengine\Api\FileVideoUpdateV2ApiService::class);
    }

    public function fileVideoUploadTaskListV2Api(): \Oceanengine\Api\FileVideoUploadTaskListV2ApiService
    {
        return $this->getService('FileVideoUploadTaskListV2Api', \Oceanengine\Api\FileVideoUploadTaskListV2ApiService::class);
    }

    public function fixRemittanceCodeListGetV30Api(): \Oceanengine\Api\FixRemittanceCodeListGetV30ApiService
    {
        return $this->getService('FixRemittanceCodeListGetV30Api', \Oceanengine\Api\FixRemittanceCodeListGetV30ApiService::class);
    }

    public function fundSharedWalletBalanceGetV2Api(): \Oceanengine\Api\FundSharedWalletBalanceGetV2ApiService
    {
        return $this->getService('FundSharedWalletBalanceGetV2Api', \Oceanengine\Api\FundSharedWalletBalanceGetV2ApiService::class);
    }

    public function gameAddictionIdGetV30Api(): \Oceanengine\Api\GameAddictionIdGetV30ApiService
    {
        return $this->getService('GameAddictionIdGetV30Api', \Oceanengine\Api\GameAddictionIdGetV30ApiService::class);
    }

    public function gameplayListV30Api(): \Oceanengine\Api\GameplayListV30ApiService
    {
        return $this->getService('GameplayListV30Api', \Oceanengine\Api\GameplayListV30ApiService::class);
    }

    public function goingGlobalRoiSuggestGetV30Api(): \Oceanengine\Api\GoingGlobalRoiSuggestGetV30ApiService
    {
        return $this->getService('GoingGlobalRoiSuggestGetV30Api', \Oceanengine\Api\GoingGlobalRoiSuggestGetV30ApiService::class);
    }

    public function goingGlobalUpdateV30Api(): \Oceanengine\Api\GoingGlobalUpdateV30ApiService
    {
        return $this->getService('GoingGlobalUpdateV30Api', \Oceanengine\Api\GoingGlobalUpdateV30ApiService::class);
    }

    public function idTypeGetV10Api(): \Oceanengine\Api\IdTypeGetV10ApiService
    {
        return $this->getService('IdTypeGetV10Api', \Oceanengine\Api\IdTypeGetV10ApiService::class);
    }

    public function invoiceApplyOrderCreateV30Api(): \Oceanengine\Api\InvoiceApplyOrderCreateV30ApiService
    {
        return $this->getService('InvoiceApplyOrderCreateV30Api', \Oceanengine\Api\InvoiceApplyOrderCreateV30ApiService::class);
    }

    public function invoiceApplyOrderListV30Api(): \Oceanengine\Api\InvoiceApplyOrderListV30ApiService
    {
        return $this->getService('InvoiceApplyOrderListV30Api', \Oceanengine\Api\InvoiceApplyOrderListV30ApiService::class);
    }

    public function invoiceApplyResultGetV30Api(): \Oceanengine\Api\InvoiceApplyResultGetV30ApiService
    {
        return $this->getService('InvoiceApplyResultGetV30Api', \Oceanengine\Api\InvoiceApplyResultGetV30ApiService::class);
    }

    public function invoiceDownloadUrlListV30Api(): \Oceanengine\Api\InvoiceDownloadUrlListV30ApiService
    {
        return $this->getService('InvoiceDownloadUrlListV30Api', \Oceanengine\Api\InvoiceDownloadUrlListV30ApiService::class);
    }

    public function invoiceTicketListV30Api(): \Oceanengine\Api\InvoiceTicketListV30ApiService
    {
        return $this->getService('InvoiceTicketListV30Api', \Oceanengine\Api\InvoiceTicketListV30ApiService::class);
    }

    public function iosAppListV30Api(): \Oceanengine\Api\IosAppListV30ApiService
    {
        return $this->getService('IosAppListV30Api', \Oceanengine\Api\IosAppListV30ApiService::class);
    }

    public function keywordCreateV2V2Api(): \Oceanengine\Api\KeywordCreateV2V2ApiService
    {
        return $this->getService('KeywordCreateV2V2Api', \Oceanengine\Api\KeywordCreateV2V2ApiService::class);
    }

    public function keywordCreateV30Api(): \Oceanengine\Api\KeywordCreateV30ApiService
    {
        return $this->getService('KeywordCreateV30Api', \Oceanengine\Api\KeywordCreateV30ApiService::class);
    }

    public function keywordDeleteV2V2Api(): \Oceanengine\Api\KeywordDeleteV2V2ApiService
    {
        return $this->getService('KeywordDeleteV2V2Api', \Oceanengine\Api\KeywordDeleteV2V2ApiService::class);
    }

    public function keywordDeleteV30Api(): \Oceanengine\Api\KeywordDeleteV30ApiService
    {
        return $this->getService('KeywordDeleteV30Api', \Oceanengine\Api\KeywordDeleteV30ApiService::class);
    }

    public function keywordFeedadsSuggestV2Api(): \Oceanengine\Api\KeywordFeedadsSuggestV2ApiService
    {
        return $this->getService('KeywordFeedadsSuggestV2Api', \Oceanengine\Api\KeywordFeedadsSuggestV2ApiService::class);
    }

    public function keywordGetV2Api(): \Oceanengine\Api\KeywordGetV2ApiService
    {
        return $this->getService('KeywordGetV2Api', \Oceanengine\Api\KeywordGetV2ApiService::class);
    }

    public function keywordListV30Api(): \Oceanengine\Api\KeywordListV30ApiService
    {
        return $this->getService('KeywordListV30Api', \Oceanengine\Api\KeywordListV30ApiService::class);
    }

    public function keywordUpdateV2V2Api(): \Oceanengine\Api\KeywordUpdateV2V2ApiService
    {
        return $this->getService('KeywordUpdateV2V2Api', \Oceanengine\Api\KeywordUpdateV2V2ApiService::class);
    }

    public function keywordUpdateV30Api(): \Oceanengine\Api\KeywordUpdateV30ApiService
    {
        return $this->getService('KeywordUpdateV30Api', \Oceanengine\Api\KeywordUpdateV30ApiService::class);
    }

    public function localActionCategoryV30Api(): \Oceanengine\Api\LocalActionCategoryV30ApiService
    {
        return $this->getService('LocalActionCategoryV30Api', \Oceanengine\Api\LocalActionCategoryV30ApiService::class);
    }

    public function localActionKeywordV30Api(): \Oceanengine\Api\LocalActionKeywordV30ApiService
    {
        return $this->getService('LocalActionKeywordV30Api', \Oceanengine\Api\LocalActionKeywordV30ApiService::class);
    }

    public function localAdvertiserBudgetGetV30Api(): \Oceanengine\Api\LocalAdvertiserBudgetGetV30ApiService
    {
        return $this->getService('LocalAdvertiserBudgetGetV30Api', \Oceanengine\Api\LocalAdvertiserBudgetGetV30ApiService::class);
    }

    public function localAudiencePackageGetV30Api(): \Oceanengine\Api\LocalAudiencePackageGetV30ApiService
    {
        return $this->getService('LocalAudiencePackageGetV30Api', \Oceanengine\Api\LocalAudiencePackageGetV30ApiService::class);
    }

    public function localAudiencePackageUpdateV30Api(): \Oceanengine\Api\LocalAudiencePackageUpdateV30ApiService
    {
        return $this->getService('LocalAudiencePackageUpdateV30Api', \Oceanengine\Api\LocalAudiencePackageUpdateV30ApiService::class);
    }

    public function localAwemeAuthCancelUpdateV30Api(): \Oceanengine\Api\LocalAwemeAuthCancelUpdateV30ApiService
    {
        return $this->getService('LocalAwemeAuthCancelUpdateV30Api', \Oceanengine\Api\LocalAwemeAuthCancelUpdateV30ApiService::class);
    }

    public function localAwemeAuthCreateV30Api(): \Oceanengine\Api\LocalAwemeAuthCreateV30ApiService
    {
        return $this->getService('LocalAwemeAuthCreateV30Api', \Oceanengine\Api\LocalAwemeAuthCreateV30ApiService::class);
    }

    public function localAwemeAuthListV30Api(): \Oceanengine\Api\LocalAwemeAuthListV30ApiService
    {
        return $this->getService('LocalAwemeAuthListV30Api', \Oceanengine\Api\LocalAwemeAuthListV30ApiService::class);
    }

    public function localAwemeAuthRenewCreateV30Api(): \Oceanengine\Api\LocalAwemeAuthRenewCreateV30ApiService
    {
        return $this->getService('LocalAwemeAuthRenewCreateV30Api', \Oceanengine\Api\LocalAwemeAuthRenewCreateV30ApiService::class);
    }

    public function localAwemeAuthorizedGetV30Api(): \Oceanengine\Api\LocalAwemeAuthorizedGetV30ApiService
    {
        return $this->getService('LocalAwemeAuthorizedGetV30Api', \Oceanengine\Api\LocalAwemeAuthorizedGetV30ApiService::class);
    }

    public function localBudgetUpdateV30Api(): \Oceanengine\Api\LocalBudgetUpdateV30ApiService
    {
        return $this->getService('LocalBudgetUpdateV30Api', \Oceanengine\Api\LocalBudgetUpdateV30ApiService::class);
    }

    public function localChargeListV30Api(): \Oceanengine\Api\LocalChargeListV30ApiService
    {
        return $this->getService('LocalChargeListV30Api', \Oceanengine\Api\LocalChargeListV30ApiService::class);
    }

    public function localChargeResultV30Api(): \Oceanengine\Api\LocalChargeResultV30ApiService
    {
        return $this->getService('LocalChargeResultV30Api', \Oceanengine\Api\LocalChargeResultV30ApiService::class);
    }

    public function localChargeSubmitV30Api(): \Oceanengine\Api\LocalChargeSubmitV30ApiService
    {
        return $this->getService('LocalChargeSubmitV30Api', \Oceanengine\Api\LocalChargeSubmitV30ApiService::class);
    }

    public function localConsultAwameListGetV30Api(): \Oceanengine\Api\LocalConsultAwameListGetV30ApiService
    {
        return $this->getService('LocalConsultAwameListGetV30Api', \Oceanengine\Api\LocalConsultAwameListGetV30ApiService::class);
    }

    public function localCustomAudienceGetV30Api(): \Oceanengine\Api\LocalCustomAudienceGetV30ApiService
    {
        return $this->getService('LocalCustomAudienceGetV30Api', \Oceanengine\Api\LocalCustomAudienceGetV30ApiService::class);
    }

    public function localDeliveryQualificationListV30Api(): \Oceanengine\Api\LocalDeliveryQualificationListV30ApiService
    {
        return $this->getService('LocalDeliveryQualificationListV30Api', \Oceanengine\Api\LocalDeliveryQualificationListV30ApiService::class);
    }

    public function localDiagnosisResultGetV30Api(): \Oceanengine\Api\LocalDiagnosisResultGetV30ApiService
    {
        return $this->getService('LocalDiagnosisResultGetV30Api', \Oceanengine\Api\LocalDiagnosisResultGetV30ApiService::class);
    }

    public function localFileCarouselListV30Api(): \Oceanengine\Api\LocalFileCarouselListV30ApiService
    {
        return $this->getService('LocalFileCarouselListV30Api', \Oceanengine\Api\LocalFileCarouselListV30ApiService::class);
    }

    public function localFileUploadTaskCreateV30Api(): \Oceanengine\Api\LocalFileUploadTaskCreateV30ApiService
    {
        return $this->getService('LocalFileUploadTaskCreateV30Api', \Oceanengine\Api\LocalFileUploadTaskCreateV30ApiService::class);
    }

    public function localFileVideoAwemeGetV30Api(): \Oceanengine\Api\LocalFileVideoAwemeGetV30ApiService
    {
        return $this->getService('LocalFileVideoAwemeGetV30Api', \Oceanengine\Api\LocalFileVideoAwemeGetV30ApiService::class);
    }

    public function localFileVideoGetV30Api(): \Oceanengine\Api\LocalFileVideoGetV30ApiService
    {
        return $this->getService('LocalFileVideoGetV30Api', \Oceanengine\Api\LocalFileVideoGetV30ApiService::class);
    }

    public function localFileVideoUploadTaskListV30Api(): \Oceanengine\Api\LocalFileVideoUploadTaskListV30ApiService
    {
        return $this->getService('LocalFileVideoUploadTaskListV30Api', \Oceanengine\Api\LocalFileVideoUploadTaskListV30ApiService::class);
    }

    public function localFileVideoUploadV30Api(): \Oceanengine\Api\LocalFileVideoUploadV30ApiService
    {
        return $this->getService('LocalFileVideoUploadV30Api', \Oceanengine\Api\LocalFileVideoUploadV30ApiService::class);
    }

    public function localImAccountGetV30Api(): \Oceanengine\Api\LocalImAccountGetV30ApiService
    {
        return $this->getService('LocalImAccountGetV30Api', \Oceanengine\Api\LocalImAccountGetV30ApiService::class);
    }

    public function localImAutoSettingGetV30Api(): \Oceanengine\Api\LocalImAutoSettingGetV30ApiService
    {
        return $this->getService('LocalImAutoSettingGetV30Api', \Oceanengine\Api\LocalImAutoSettingGetV30ApiService::class);
    }

    public function localImAutoSettingUpdateV30Api(): \Oceanengine\Api\LocalImAutoSettingUpdateV30ApiService
    {
        return $this->getService('LocalImAutoSettingUpdateV30Api', \Oceanengine\Api\LocalImAutoSettingUpdateV30ApiService::class);
    }

    public function localImCardGetV30Api(): \Oceanengine\Api\LocalImCardGetV30ApiService
    {
        return $this->getService('LocalImCardGetV30Api', \Oceanengine\Api\LocalImCardGetV30ApiService::class);
    }

    public function localImQueryMsgV30Api(): \Oceanengine\Api\LocalImQueryMsgV30ApiService
    {
        return $this->getService('LocalImQueryMsgV30Api', \Oceanengine\Api\LocalImQueryMsgV30ApiService::class);
    }

    public function localImSendMsgV30Api(): \Oceanengine\Api\LocalImSendMsgV30ApiService
    {
        return $this->getService('LocalImSendMsgV30Api', \Oceanengine\Api\LocalImSendMsgV30ApiService::class);
    }

    public function localImUploadImageV30Api(): \Oceanengine\Api\LocalImUploadImageV30ApiService
    {
        return $this->getService('LocalImUploadImageV30Api', \Oceanengine\Api\LocalImUploadImageV30ApiService::class);
    }

    public function localImageUploadV30Api(): \Oceanengine\Api\LocalImageUploadV30ApiService
    {
        return $this->getService('LocalImageUploadV30Api', \Oceanengine\Api\LocalImageUploadV30ApiService::class);
    }

    public function localInterestCategoryV30Api(): \Oceanengine\Api\LocalInterestCategoryV30ApiService
    {
        return $this->getService('LocalInterestCategoryV30Api', \Oceanengine\Api\LocalInterestCategoryV30ApiService::class);
    }

    public function localInterestKeywordV30Api(): \Oceanengine\Api\LocalInterestKeywordV30ApiService
    {
        return $this->getService('LocalInterestKeywordV30Api', \Oceanengine\Api\LocalInterestKeywordV30ApiService::class);
    }

    public function localLifeAdvertiserCreateV30Api(): \Oceanengine\Api\LocalLifeAdvertiserCreateV30ApiService
    {
        return $this->getService('LocalLifeAdvertiserCreateV30Api', \Oceanengine\Api\LocalLifeAdvertiserCreateV30ApiService::class);
    }

    public function localLifeAdvertiserListV30Api(): \Oceanengine\Api\LocalLifeAdvertiserListV30ApiService
    {
        return $this->getService('LocalLifeAdvertiserListV30Api', \Oceanengine\Api\LocalLifeAdvertiserListV30ApiService::class);
    }

    public function localMarketPageGetV30Api(): \Oceanengine\Api\LocalMarketPageGetV30ApiService
    {
        return $this->getService('LocalMarketPageGetV30Api', \Oceanengine\Api\LocalMarketPageGetV30ApiService::class);
    }

    public function localMarketPageListGetV30Api(): \Oceanengine\Api\LocalMarketPageListGetV30ApiService
    {
        return $this->getService('LocalMarketPageListGetV30Api', \Oceanengine\Api\LocalMarketPageListGetV30ApiService::class);
    }

    public function localMultiPoiIdPoiIdsGetV30Api(): \Oceanengine\Api\LocalMultiPoiIdPoiIdsGetV30ApiService
    {
        return $this->getService('LocalMultiPoiIdPoiIdsGetV30Api', \Oceanengine\Api\LocalMultiPoiIdPoiIdsGetV30ApiService::class);
    }

    public function localOcMaterialGetV30Api(): \Oceanengine\Api\LocalOcMaterialGetV30ApiService
    {
        return $this->getService('LocalOcMaterialGetV30Api', \Oceanengine\Api\LocalOcMaterialGetV30ApiService::class);
    }

    public function localOcProjectGetV30Api(): \Oceanengine\Api\LocalOcProjectGetV30ApiService
    {
        return $this->getService('LocalOcProjectGetV30Api', \Oceanengine\Api\LocalOcProjectGetV30ApiService::class);
    }

    public function localOcProjectListV30Api(): \Oceanengine\Api\LocalOcProjectListV30ApiService
    {
        return $this->getService('LocalOcProjectListV30Api', \Oceanengine\Api\LocalOcProjectListV30ApiService::class);
    }

    public function localPoiGetV30Api(): \Oceanengine\Api\LocalPoiGetV30ApiService
    {
        return $this->getService('LocalPoiGetV30Api', \Oceanengine\Api\LocalPoiGetV30ApiService::class);
    }

    public function localProductGetByPoiidsV30Api(): \Oceanengine\Api\LocalProductGetByPoiidsV30ApiService
    {
        return $this->getService('LocalProductGetByPoiidsV30Api', \Oceanengine\Api\LocalProductGetByPoiidsV30ApiService::class);
    }

    public function localProductGetV30Api(): \Oceanengine\Api\LocalProductGetV30ApiService
    {
        return $this->getService('LocalProductGetV30Api', \Oceanengine\Api\LocalProductGetV30ApiService::class);
    }

    public function localProjectCreateV30Api(): \Oceanengine\Api\LocalProjectCreateV30ApiService
    {
        return $this->getService('LocalProjectCreateV30Api', \Oceanengine\Api\LocalProjectCreateV30ApiService::class);
    }

    public function localProjectDeleteV30Api(): \Oceanengine\Api\LocalProjectDeleteV30ApiService
    {
        return $this->getService('LocalProjectDeleteV30Api', \Oceanengine\Api\LocalProjectDeleteV30ApiService::class);
    }

    public function localProjectDetailV30Api(): \Oceanengine\Api\LocalProjectDetailV30ApiService
    {
        return $this->getService('LocalProjectDetailV30Api', \Oceanengine\Api\LocalProjectDetailV30ApiService::class);
    }

    public function localProjectListV30Api(): \Oceanengine\Api\LocalProjectListV30ApiService
    {
        return $this->getService('LocalProjectListV30Api', \Oceanengine\Api\LocalProjectListV30ApiService::class);
    }

    public function localProjectStatusUpdateV30Api(): \Oceanengine\Api\LocalProjectStatusUpdateV30ApiService
    {
        return $this->getService('LocalProjectStatusUpdateV30Api', \Oceanengine\Api\LocalProjectStatusUpdateV30ApiService::class);
    }

    public function localProjectUpdateV30Api(): \Oceanengine\Api\LocalProjectUpdateV30ApiService
    {
        return $this->getService('LocalProjectUpdateV30Api', \Oceanengine\Api\LocalProjectUpdateV30ApiService::class);
    }

    public function localProjectWeekScheduleUpdateV30Api(): \Oceanengine\Api\LocalProjectWeekScheduleUpdateV30ApiService
    {
        return $this->getService('LocalProjectWeekScheduleUpdateV30Api', \Oceanengine\Api\LocalProjectWeekScheduleUpdateV30ApiService::class);
    }

    public function localPromotionCostProtectStatusGetV30Api(): \Oceanengine\Api\LocalPromotionCostProtectStatusGetV30ApiService
    {
        return $this->getService('LocalPromotionCostProtectStatusGetV30Api', \Oceanengine\Api\LocalPromotionCostProtectStatusGetV30ApiService::class);
    }

    public function localPromotionCreateV30Api(): \Oceanengine\Api\LocalPromotionCreateV30ApiService
    {
        return $this->getService('LocalPromotionCreateV30Api', \Oceanengine\Api\LocalPromotionCreateV30ApiService::class);
    }

    public function localPromotionDeleteV30Api(): \Oceanengine\Api\LocalPromotionDeleteV30ApiService
    {
        return $this->getService('LocalPromotionDeleteV30Api', \Oceanengine\Api\LocalPromotionDeleteV30ApiService::class);
    }

    public function localPromotionDetailV30Api(): \Oceanengine\Api\LocalPromotionDetailV30ApiService
    {
        return $this->getService('LocalPromotionDetailV30Api', \Oceanengine\Api\LocalPromotionDetailV30ApiService::class);
    }

    public function localPromotionListV30Api(): \Oceanengine\Api\LocalPromotionListV30ApiService
    {
        return $this->getService('LocalPromotionListV30Api', \Oceanengine\Api\LocalPromotionListV30ApiService::class);
    }

    public function localPromotionRejectReasonGetV30Api(): \Oceanengine\Api\LocalPromotionRejectReasonGetV30ApiService
    {
        return $this->getService('LocalPromotionRejectReasonGetV30Api', \Oceanengine\Api\LocalPromotionRejectReasonGetV30ApiService::class);
    }

    public function localPromotionStatusUpdateV30Api(): \Oceanengine\Api\LocalPromotionStatusUpdateV30ApiService
    {
        return $this->getService('LocalPromotionStatusUpdateV30Api', \Oceanengine\Api\LocalPromotionStatusUpdateV30ApiService::class);
    }

    public function localPromotionUpdateV30Api(): \Oceanengine\Api\LocalPromotionUpdateV30ApiService
    {
        return $this->getService('LocalPromotionUpdateV30Api', \Oceanengine\Api\LocalPromotionUpdateV30ApiService::class);
    }

    public function localQualificationGetV30Api(): \Oceanengine\Api\LocalQualificationGetV30ApiService
    {
        return $this->getService('LocalQualificationGetV30Api', \Oceanengine\Api\LocalQualificationGetV30ApiService::class);
    }

    public function localReportAccountGetV30Api(): \Oceanengine\Api\LocalReportAccountGetV30ApiService
    {
        return $this->getService('LocalReportAccountGetV30Api', \Oceanengine\Api\LocalReportAccountGetV30ApiService::class);
    }

    public function localReportAudienceGetV30Api(): \Oceanengine\Api\LocalReportAudienceGetV30ApiService
    {
        return $this->getService('LocalReportAudienceGetV30Api', \Oceanengine\Api\LocalReportAudienceGetV30ApiService::class);
    }

    public function localReportMaterialGetV30Api(): \Oceanengine\Api\LocalReportMaterialGetV30ApiService
    {
        return $this->getService('LocalReportMaterialGetV30Api', \Oceanengine\Api\LocalReportMaterialGetV30ApiService::class);
    }

    public function localReportProjectGetV30Api(): \Oceanengine\Api\LocalReportProjectGetV30ApiService
    {
        return $this->getService('LocalReportProjectGetV30Api', \Oceanengine\Api\LocalReportProjectGetV30ApiService::class);
    }

    public function localReportPromotionGetV30Api(): \Oceanengine\Api\LocalReportPromotionGetV30ApiService
    {
        return $this->getService('LocalReportPromotionGetV30Api', \Oceanengine\Api\LocalReportPromotionGetV30ApiService::class);
    }

    public function localToolPackDetailV30Api(): \Oceanengine\Api\LocalToolPackDetailV30ApiService
    {
        return $this->getService('LocalToolPackDetailV30Api', \Oceanengine\Api\LocalToolPackDetailV30ApiService::class);
    }

    public function localToolPackListGetV30Api(): \Oceanengine\Api\LocalToolPackListGetV30ApiService
    {
        return $this->getService('LocalToolPackListGetV30Api', \Oceanengine\Api\LocalToolPackListGetV30ApiService::class);
    }

    public function majordomoAdvertiserSelectV2Api(): \Oceanengine\Api\MajordomoAdvertiserSelectV2ApiService
    {
        return $this->getService('MajordomoAdvertiserSelectV2Api', \Oceanengine\Api\MajordomoAdvertiserSelectV2ApiService::class);
    }

    public function materialStatusUpdateV30Api(): \Oceanengine\Api\MaterialStatusUpdateV30ApiService
    {
        return $this->getService('MaterialStatusUpdateV30Api', \Oceanengine\Api\MaterialStatusUpdateV30ApiService::class);
    }

    public function nativeAnchorCreateV30Api(): \Oceanengine\Api\NativeAnchorCreateV30ApiService
    {
        return $this->getService('NativeAnchorCreateV30Api', \Oceanengine\Api\NativeAnchorCreateV30ApiService::class);
    }

    public function nativeAnchorDeleteV30Api(): \Oceanengine\Api\NativeAnchorDeleteV30ApiService
    {
        return $this->getService('NativeAnchorDeleteV30Api', \Oceanengine\Api\NativeAnchorDeleteV30ApiService::class);
    }

    public function nativeAnchorGetDetailV30Api(): \Oceanengine\Api\NativeAnchorGetDetailV30ApiService
    {
        return $this->getService('NativeAnchorGetDetailV30Api', \Oceanengine\Api\NativeAnchorGetDetailV30ApiService::class);
    }

    public function nativeAnchorGetV30Api(): \Oceanengine\Api\NativeAnchorGetV30ApiService
    {
        return $this->getService('NativeAnchorGetV30Api', \Oceanengine\Api\NativeAnchorGetV30ApiService::class);
    }

    public function nativeAnchorQrcodePreviewGetV30Api(): \Oceanengine\Api\NativeAnchorQrcodePreviewGetV30ApiService
    {
        return $this->getService('NativeAnchorQrcodePreviewGetV30Api', \Oceanengine\Api\NativeAnchorQrcodePreviewGetV30ApiService::class);
    }

    public function nativeAnchorUpdateV30Api(): \Oceanengine\Api\NativeAnchorUpdateV30ApiService
    {
        return $this->getService('NativeAnchorUpdateV30Api', \Oceanengine\Api\NativeAnchorUpdateV30ApiService::class);
    }

    public function nearRealtimeCostGetV30Api(): \Oceanengine\Api\NearRealtimeCostGetV30ApiService
    {
        return $this->getService('NearRealtimeCostGetV30Api', \Oceanengine\Api\NearRealtimeCostGetV30ApiService::class);
    }

    public function oauth2AccessTokenApi(): \Oceanengine\Api\Oauth2AccessTokenApiService
    {
        return $this->getService('Oauth2AccessTokenApi', \Oceanengine\Api\Oauth2AccessTokenApiService::class);
    }

    public function oauth2AdvertiserGetApi(): \Oceanengine\Api\Oauth2AdvertiserGetApiService
    {
        return $this->getService('Oauth2AdvertiserGetApi', \Oceanengine\Api\Oauth2AdvertiserGetApiService::class);
    }

    public function oauth2AppAccessTokenApi(): \Oceanengine\Api\Oauth2AppAccessTokenApiService
    {
        return $this->getService('Oauth2AppAccessTokenApi', \Oceanengine\Api\Oauth2AppAccessTokenApiService::class);
    }

    public function oauth2RefreshTokenApi(): \Oceanengine\Api\Oauth2RefreshTokenApiService
    {
        return $this->getService('Oauth2RefreshTokenApi', \Oceanengine\Api\Oauth2RefreshTokenApiService::class);
    }

    public function oauth2RenewTokenApi(): \Oceanengine\Api\Oauth2RenewTokenApiService
    {
        return $this->getService('Oauth2RenewTokenApi', \Oceanengine\Api\Oauth2RenewTokenApiService::class);
    }

    public function ocProjectEcosystemRiskFailedReasonGetV30Api(): \Oceanengine\Api\OcProjectEcosystemRiskFailedReasonGetV30ApiService
    {
        return $this->getService('OcProjectEcosystemRiskFailedReasonGetV30Api', \Oceanengine\Api\OcProjectEcosystemRiskFailedReasonGetV30ApiService::class);
    }

    public function ocProjectMaterialCreateV30Api(): \Oceanengine\Api\OcProjectMaterialCreateV30ApiService
    {
        return $this->getService('OcProjectMaterialCreateV30Api', \Oceanengine\Api\OcProjectMaterialCreateV30ApiService::class);
    }

    public function ocProjectMaterialDeleteV30Api(): \Oceanengine\Api\OcProjectMaterialDeleteV30ApiService
    {
        return $this->getService('OcProjectMaterialDeleteV30Api', \Oceanengine\Api\OcProjectMaterialDeleteV30ApiService::class);
    }

    public function ocProjectMaterialGetV30Api(): \Oceanengine\Api\OcProjectMaterialGetV30ApiService
    {
        return $this->getService('OcProjectMaterialGetV30Api', \Oceanengine\Api\OcProjectMaterialGetV30ApiService::class);
    }

    public function ocProjectMaterialStatusUpdateV30Api(): \Oceanengine\Api\OcProjectMaterialStatusUpdateV30ApiService
    {
        return $this->getService('OcProjectMaterialStatusUpdateV30Api', \Oceanengine\Api\OcProjectMaterialStatusUpdateV30ApiService::class);
    }

    public function ocProjectRejectReasonGetV30Api(): \Oceanengine\Api\OcProjectRejectReasonGetV30ApiService
    {
        return $this->getService('OcProjectRejectReasonGetV30Api', \Oceanengine\Api\OcProjectRejectReasonGetV30ApiService::class);
    }

    public function ocProjectStdProjectToolsGetV30Api(): \Oceanengine\Api\OcProjectStdProjectToolsGetV30ApiService
    {
        return $this->getService('OcProjectStdProjectToolsGetV30Api', \Oceanengine\Api\OcProjectStdProjectToolsGetV30ApiService::class);
    }

    public function ocProjectToolsAudienceCreateV30Api(): \Oceanengine\Api\OcProjectToolsAudienceCreateV30ApiService
    {
        return $this->getService('OcProjectToolsAudienceCreateV30Api', \Oceanengine\Api\OcProjectToolsAudienceCreateV30ApiService::class);
    }

    public function ocProjectToolsAudienceDeleteV30Api(): \Oceanengine\Api\OcProjectToolsAudienceDeleteV30ApiService
    {
        return $this->getService('OcProjectToolsAudienceDeleteV30Api', \Oceanengine\Api\OcProjectToolsAudienceDeleteV30ApiService::class);
    }

    public function ocProjectToolsAudienceListV30Api(): \Oceanengine\Api\OcProjectToolsAudienceListV30ApiService
    {
        return $this->getService('OcProjectToolsAudienceListV30Api', \Oceanengine\Api\OcProjectToolsAudienceListV30ApiService::class);
    }

    public function ocProjectToolsAudienceStatusUpdateV30Api(): \Oceanengine\Api\OcProjectToolsAudienceStatusUpdateV30ApiService
    {
        return $this->getService('OcProjectToolsAudienceStatusUpdateV30Api', \Oceanengine\Api\OcProjectToolsAudienceStatusUpdateV30ApiService::class);
    }

    public function ocProjectToolsAudienceUpdateV30Api(): \Oceanengine\Api\OcProjectToolsAudienceUpdateV30ApiService
    {
        return $this->getService('OcProjectToolsAudienceUpdateV30Api', \Oceanengine\Api\OcProjectToolsAudienceUpdateV30ApiService::class);
    }

    public function ocProjectToolsCompensateHistoryListGetV30Api(): \Oceanengine\Api\OcProjectToolsCompensateHistoryListGetV30ApiService
    {
        return $this->getService('OcProjectToolsCompensateHistoryListGetV30Api', \Oceanengine\Api\OcProjectToolsCompensateHistoryListGetV30ApiService::class);
    }

    public function ocProjectToolsCostProtectStatusGetV30Api(): \Oceanengine\Api\OcProjectToolsCostProtectStatusGetV30ApiService
    {
        return $this->getService('OcProjectToolsCostProtectStatusGetV30Api', \Oceanengine\Api\OcProjectToolsCostProtectStatusGetV30ApiService::class);
    }

    public function ocProjectToolsKeywordCreateV30Api(): \Oceanengine\Api\OcProjectToolsKeywordCreateV30ApiService
    {
        return $this->getService('OcProjectToolsKeywordCreateV30Api', \Oceanengine\Api\OcProjectToolsKeywordCreateV30ApiService::class);
    }

    public function ocProjectToolsKeywordDeleteV30Api(): \Oceanengine\Api\OcProjectToolsKeywordDeleteV30ApiService
    {
        return $this->getService('OcProjectToolsKeywordDeleteV30Api', \Oceanengine\Api\OcProjectToolsKeywordDeleteV30ApiService::class);
    }

    public function ocProjectToolsKeywordListV30Api(): \Oceanengine\Api\OcProjectToolsKeywordListV30ApiService
    {
        return $this->getService('OcProjectToolsKeywordListV30Api', \Oceanengine\Api\OcProjectToolsKeywordListV30ApiService::class);
    }

    public function ocProjectToolsKeywordStatusUpdateV30Api(): \Oceanengine\Api\OcProjectToolsKeywordStatusUpdateV30ApiService
    {
        return $this->getService('OcProjectToolsKeywordStatusUpdateV30Api', \Oceanengine\Api\OcProjectToolsKeywordStatusUpdateV30ApiService::class);
    }

    public function ocProjectToolsKeywordUpdateV30Api(): \Oceanengine\Api\OcProjectToolsKeywordUpdateV30ApiService
    {
        return $this->getService('OcProjectToolsKeywordUpdateV30Api', \Oceanengine\Api\OcProjectToolsKeywordUpdateV30ApiService::class);
    }

    public function ocProjectToolsMaterialRaiseCreateV30Api(): \Oceanengine\Api\OcProjectToolsMaterialRaiseCreateV30ApiService
    {
        return $this->getService('OcProjectToolsMaterialRaiseCreateV30Api', \Oceanengine\Api\OcProjectToolsMaterialRaiseCreateV30ApiService::class);
    }

    public function ocProjectToolsMaterialRaiseDeleteV30Api(): \Oceanengine\Api\OcProjectToolsMaterialRaiseDeleteV30ApiService
    {
        return $this->getService('OcProjectToolsMaterialRaiseDeleteV30Api', \Oceanengine\Api\OcProjectToolsMaterialRaiseDeleteV30ApiService::class);
    }

    public function ocProjectToolsMaterialRaiseGetV30Api(): \Oceanengine\Api\OcProjectToolsMaterialRaiseGetV30ApiService
    {
        return $this->getService('OcProjectToolsMaterialRaiseGetV30Api', \Oceanengine\Api\OcProjectToolsMaterialRaiseGetV30ApiService::class);
    }

    public function openMaterialAuditProGetV30Api(): \Oceanengine\Api\OpenMaterialAuditProGetV30ApiService
    {
        return $this->getService('OpenMaterialAuditProGetV30Api', \Oceanengine\Api\OpenMaterialAuditProGetV30ApiService::class);
    }

    public function openMaterialAuditProSubmitV30Api(): \Oceanengine\Api\OpenMaterialAuditProSubmitV30ApiService
    {
        return $this->getService('OpenMaterialAuditProSubmitV30Api', \Oceanengine\Api\OpenMaterialAuditProSubmitV30ApiService::class);
    }

    public function paycnt7rStopDecisionGetV10Api(): \Oceanengine\Api\Paycnt7rStopDecisionGetV10ApiService
    {
        return $this->getService('Paycnt7rStopDecisionGetV10Api', \Oceanengine\Api\Paycnt7rStopDecisionGetV10ApiService::class);
    }

    public function paycntStopDecisionGetV10Api(): \Oceanengine\Api\PaycntStopDecisionGetV10ApiService
    {
        return $this->getService('PaycntStopDecisionGetV10Api', \Oceanengine\Api\PaycntStopDecisionGetV10ApiService::class);
    }

    public function penaltyTaskGetV30Api(): \Oceanengine\Api\PenaltyTaskGetV30ApiService
    {
        return $this->getService('PenaltyTaskGetV30Api', \Oceanengine\Api\PenaltyTaskGetV30ApiService::class);
    }

    public function prepayChargeGenerateFixRemiattanceCodeCreateV30Api(): \Oceanengine\Api\PrepayChargeGenerateFixRemiattanceCodeCreateV30ApiService
    {
        return $this->getService('PrepayChargeGenerateFixRemiattanceCodeCreateV30Api', \Oceanengine\Api\PrepayChargeGenerateFixRemiattanceCodeCreateV30ApiService::class);
    }

    public function prepayChargeGenerateRemittanceCodeCreateV30Api(): \Oceanengine\Api\PrepayChargeGenerateRemittanceCodeCreateV30ApiService
    {
        return $this->getService('PrepayChargeGenerateRemittanceCodeCreateV30Api', \Oceanengine\Api\PrepayChargeGenerateRemittanceCodeCreateV30ApiService::class);
    }

    public function projectAdsListV10Api(): \Oceanengine\Api\ProjectAdsListV10ApiService
    {
        return $this->getService('ProjectAdsListV10Api', \Oceanengine\Api\ProjectAdsListV10ApiService::class);
    }

    public function projectBudgetUpdateV30Api(): \Oceanengine\Api\ProjectBudgetUpdateV30ApiService
    {
        return $this->getService('ProjectBudgetUpdateV30Api', \Oceanengine\Api\ProjectBudgetUpdateV30ApiService::class);
    }

    public function projectColdStartDecisionGetV10Api(): \Oceanengine\Api\ProjectColdStartDecisionGetV10ApiService
    {
        return $this->getService('ProjectColdStartDecisionGetV10Api', \Oceanengine\Api\ProjectColdStartDecisionGetV10ApiService::class);
    }

    public function projectCostProtectStatusGetV30Api(): \Oceanengine\Api\ProjectCostProtectStatusGetV30ApiService
    {
        return $this->getService('ProjectCostProtectStatusGetV30Api', \Oceanengine\Api\ProjectCostProtectStatusGetV30ApiService::class);
    }

    public function projectCpaBidUpdateV30Api(): \Oceanengine\Api\ProjectCpaBidUpdateV30ApiService
    {
        return $this->getService('ProjectCpaBidUpdateV30Api', \Oceanengine\Api\ProjectCpaBidUpdateV30ApiService::class);
    }

    public function projectCreateV30Api(): \Oceanengine\Api\ProjectCreateV30ApiService
    {
        return $this->getService('ProjectCreateV30Api', \Oceanengine\Api\ProjectCreateV30ApiService::class);
    }

    public function projectDeepCpaBidUpdateV30Api(): \Oceanengine\Api\ProjectDeepCpaBidUpdateV30ApiService
    {
        return $this->getService('ProjectDeepCpaBidUpdateV30Api', \Oceanengine\Api\ProjectDeepCpaBidUpdateV30ApiService::class);
    }

    public function projectDeleteV30Api(): \Oceanengine\Api\ProjectDeleteV30ApiService
    {
        return $this->getService('ProjectDeleteV30Api', \Oceanengine\Api\ProjectDeleteV30ApiService::class);
    }

    public function projectDeliveryUpdateV10Api(): \Oceanengine\Api\ProjectDeliveryUpdateV10ApiService
    {
        return $this->getService('ProjectDeliveryUpdateV10Api', \Oceanengine\Api\ProjectDeliveryUpdateV10ApiService::class);
    }

    public function projectListV30Api(): \Oceanengine\Api\ProjectListV30ApiService
    {
        return $this->getService('ProjectListV30Api', \Oceanengine\Api\ProjectListV30ApiService::class);
    }

    public function projectNameUpdateV30Api(): \Oceanengine\Api\ProjectNameUpdateV30ApiService
    {
        return $this->getService('ProjectNameUpdateV30Api', \Oceanengine\Api\ProjectNameUpdateV30ApiService::class);
    }

    public function projectRoigoalUpdateV30Api(): \Oceanengine\Api\ProjectRoigoalUpdateV30ApiService
    {
        return $this->getService('ProjectRoigoalUpdateV30Api', \Oceanengine\Api\ProjectRoigoalUpdateV30ApiService::class);
    }

    public function projectScheduleTimeUpdateV30Api(): \Oceanengine\Api\ProjectScheduleTimeUpdateV30ApiService
    {
        return $this->getService('ProjectScheduleTimeUpdateV30Api', \Oceanengine\Api\ProjectScheduleTimeUpdateV30ApiService::class);
    }

    public function projectStatusUpdateV30Api(): \Oceanengine\Api\ProjectStatusUpdateV30ApiService
    {
        return $this->getService('ProjectStatusUpdateV30Api', \Oceanengine\Api\ProjectStatusUpdateV30ApiService::class);
    }

    public function projectUpdateV30Api(): \Oceanengine\Api\ProjectUpdateV30ApiService
    {
        return $this->getService('ProjectUpdateV30Api', \Oceanengine\Api\ProjectUpdateV30ApiService::class);
    }

    public function projectWeekScheduleUpdateV30Api(): \Oceanengine\Api\ProjectWeekScheduleUpdateV30ApiService
    {
        return $this->getService('ProjectWeekScheduleUpdateV30Api', \Oceanengine\Api\ProjectWeekScheduleUpdateV30ApiService::class);
    }

    public function promotionAidGetV30Api(): \Oceanengine\Api\PromotionAidGetV30ApiService
    {
        return $this->getService('PromotionAidGetV30Api', \Oceanengine\Api\PromotionAidGetV30ApiService::class);
    }

    public function promotionAutoGenerateConfigCreateV30Api(): \Oceanengine\Api\PromotionAutoGenerateConfigCreateV30ApiService
    {
        return $this->getService('PromotionAutoGenerateConfigCreateV30Api', \Oceanengine\Api\PromotionAutoGenerateConfigCreateV30ApiService::class);
    }

    public function promotionAutoGenerateConfigGetV30Api(): \Oceanengine\Api\PromotionAutoGenerateConfigGetV30ApiService
    {
        return $this->getService('PromotionAutoGenerateConfigGetV30Api', \Oceanengine\Api\PromotionAutoGenerateConfigGetV30ApiService::class);
    }

    public function promotionBidUpdateV30Api(): \Oceanengine\Api\PromotionBidUpdateV30ApiService
    {
        return $this->getService('PromotionBidUpdateV30Api', \Oceanengine\Api\PromotionBidUpdateV30ApiService::class);
    }

    public function promotionBudgetUpdateV30Api(): \Oceanengine\Api\PromotionBudgetUpdateV30ApiService
    {
        return $this->getService('PromotionBudgetUpdateV30Api', \Oceanengine\Api\PromotionBudgetUpdateV30ApiService::class);
    }

    public function promotionCostProtectStatusGetV30Api(): \Oceanengine\Api\PromotionCostProtectStatusGetV30ApiService
    {
        return $this->getService('PromotionCostProtectStatusGetV30Api', \Oceanengine\Api\PromotionCostProtectStatusGetV30ApiService::class);
    }

    public function promotionCreateV30Api(): \Oceanengine\Api\PromotionCreateV30ApiService
    {
        return $this->getService('PromotionCreateV30Api', \Oceanengine\Api\PromotionCreateV30ApiService::class);
    }

    public function promotionDeepbidUpdateV30Api(): \Oceanengine\Api\PromotionDeepbidUpdateV30ApiService
    {
        return $this->getService('PromotionDeepbidUpdateV30Api', \Oceanengine\Api\PromotionDeepbidUpdateV30ApiService::class);
    }

    public function promotionDeleteV30Api(): \Oceanengine\Api\PromotionDeleteV30ApiService
    {
        return $this->getService('PromotionDeleteV30Api', \Oceanengine\Api\PromotionDeleteV30ApiService::class);
    }

    public function promotionEasyKeepDeliverySwitchUpdateV30Api(): \Oceanengine\Api\PromotionEasyKeepDeliverySwitchUpdateV30ApiService
    {
        return $this->getService('PromotionEasyKeepDeliverySwitchUpdateV30Api', \Oceanengine\Api\PromotionEasyKeepDeliverySwitchUpdateV30ApiService::class);
    }

    public function promotionEasyUpdateV30Api(): \Oceanengine\Api\PromotionEasyUpdateV30ApiService
    {
        return $this->getService('PromotionEasyUpdateV30Api', \Oceanengine\Api\PromotionEasyUpdateV30ApiService::class);
    }

    public function promotionEcosystemRiskFailedReasonGetV30Api(): \Oceanengine\Api\PromotionEcosystemRiskFailedReasonGetV30ApiService
    {
        return $this->getService('PromotionEcosystemRiskFailedReasonGetV30Api', \Oceanengine\Api\PromotionEcosystemRiskFailedReasonGetV30ApiService::class);
    }

    public function promotionListV30Api(): \Oceanengine\Api\PromotionListV30ApiService
    {
        return $this->getService('PromotionListV30Api', \Oceanengine\Api\PromotionListV30ApiService::class);
    }

    public function promotionMaterialDeleteV30Api(): \Oceanengine\Api\PromotionMaterialDeleteV30ApiService
    {
        return $this->getService('PromotionMaterialDeleteV30Api', \Oceanengine\Api\PromotionMaterialDeleteV30ApiService::class);
    }

    public function promotionNameUpdateV30Api(): \Oceanengine\Api\PromotionNameUpdateV30ApiService
    {
        return $this->getService('PromotionNameUpdateV30Api', \Oceanengine\Api\PromotionNameUpdateV30ApiService::class);
    }

    public function promotionNewcustomerCreateV30Api(): \Oceanengine\Api\PromotionNewcustomerCreateV30ApiService
    {
        return $this->getService('PromotionNewcustomerCreateV30Api', \Oceanengine\Api\PromotionNewcustomerCreateV30ApiService::class);
    }

    public function promotionNewcustomerTypeGetV30Api(): \Oceanengine\Api\PromotionNewcustomerTypeGetV30ApiService
    {
        return $this->getService('PromotionNewcustomerTypeGetV30Api', \Oceanengine\Api\PromotionNewcustomerTypeGetV30ApiService::class);
    }

    public function promotionRejectReasonGetV30Api(): \Oceanengine\Api\PromotionRejectReasonGetV30ApiService
    {
        return $this->getService('PromotionRejectReasonGetV30Api', \Oceanengine\Api\PromotionRejectReasonGetV30ApiService::class);
    }

    public function promotionScheduleTimeUpdateV30Api(): \Oceanengine\Api\PromotionScheduleTimeUpdateV30ApiService
    {
        return $this->getService('PromotionScheduleTimeUpdateV30Api', \Oceanengine\Api\PromotionScheduleTimeUpdateV30ApiService::class);
    }

    public function promotionShopInfoUpdateV30Api(): \Oceanengine\Api\PromotionShopInfoUpdateV30ApiService
    {
        return $this->getService('PromotionShopInfoUpdateV30Api', \Oceanengine\Api\PromotionShopInfoUpdateV30ApiService::class);
    }

    public function promotionStatusUpdateV30Api(): \Oceanengine\Api\PromotionStatusUpdateV30ApiService
    {
        return $this->getService('PromotionStatusUpdateV30Api', \Oceanengine\Api\PromotionStatusUpdateV30ApiService::class);
    }

    public function promotionUpdateV30Api(): \Oceanengine\Api\PromotionUpdateV30ApiService
    {
        return $this->getService('PromotionUpdateV30Api', \Oceanengine\Api\PromotionUpdateV30ApiService::class);
    }

    public function qianchuanAccountBalanceGetV10Api(): \Oceanengine\Api\QianchuanAccountBalanceGetV10ApiService
    {
        return $this->getService('QianchuanAccountBalanceGetV10Api', \Oceanengine\Api\QianchuanAccountBalanceGetV10ApiService::class);
    }

    public function qianchuanAccountBudgetGetV10Api(): \Oceanengine\Api\QianchuanAccountBudgetGetV10ApiService
    {
        return $this->getService('QianchuanAccountBudgetGetV10Api', \Oceanengine\Api\QianchuanAccountBudgetGetV10ApiService::class);
    }

    public function qianchuanAccountBudgetUpdateV10Api(): \Oceanengine\Api\QianchuanAccountBudgetUpdateV10ApiService
    {
        return $this->getService('QianchuanAccountBudgetUpdateV10Api', \Oceanengine\Api\QianchuanAccountBudgetUpdateV10ApiService::class);
    }

    public function qianchuanAdBidUpdateV10Api(): \Oceanengine\Api\QianchuanAdBidUpdateV10ApiService
    {
        return $this->getService('QianchuanAdBidUpdateV10Api', \Oceanengine\Api\QianchuanAdBidUpdateV10ApiService::class);
    }

    public function qianchuanAdBudgetUpdateV10Api(): \Oceanengine\Api\QianchuanAdBudgetUpdateV10ApiService
    {
        return $this->getService('QianchuanAdBudgetUpdateV10Api', \Oceanengine\Api\QianchuanAdBudgetUpdateV10ApiService::class);
    }

    public function qianchuanAdCompensateStatusGetV10Api(): \Oceanengine\Api\QianchuanAdCompensateStatusGetV10ApiService
    {
        return $this->getService('QianchuanAdCompensateStatusGetV10Api', \Oceanengine\Api\QianchuanAdCompensateStatusGetV10ApiService::class);
    }

    public function qianchuanAdCreateV10Api(): \Oceanengine\Api\QianchuanAdCreateV10ApiService
    {
        return $this->getService('QianchuanAdCreateV10Api', \Oceanengine\Api\QianchuanAdCreateV10ApiService::class);
    }

    public function qianchuanAdDetailGetV10Api(): \Oceanengine\Api\QianchuanAdDetailGetV10ApiService
    {
        return $this->getService('QianchuanAdDetailGetV10Api', \Oceanengine\Api\QianchuanAdDetailGetV10ApiService::class);
    }

    public function qianchuanAdGetV10Api(): \Oceanengine\Api\QianchuanAdGetV10ApiService
    {
        return $this->getService('QianchuanAdGetV10Api', \Oceanengine\Api\QianchuanAdGetV10ApiService::class);
    }

    public function qianchuanAdKeywordsGetV10Api(): \Oceanengine\Api\QianchuanAdKeywordsGetV10ApiService
    {
        return $this->getService('QianchuanAdKeywordsGetV10Api', \Oceanengine\Api\QianchuanAdKeywordsGetV10ApiService::class);
    }

    public function qianchuanAdLearingStatusGetV10Api(): \Oceanengine\Api\QianchuanAdLearingStatusGetV10ApiService
    {
        return $this->getService('QianchuanAdLearingStatusGetV10Api', \Oceanengine\Api\QianchuanAdLearingStatusGetV10ApiService::class);
    }

    public function qianchuanAdMaterialDeleteV10Api(): \Oceanengine\Api\QianchuanAdMaterialDeleteV10ApiService
    {
        return $this->getService('QianchuanAdMaterialDeleteV10Api', \Oceanengine\Api\QianchuanAdMaterialDeleteV10ApiService::class);
    }

    public function qianchuanAdMaterialGetV10Api(): \Oceanengine\Api\QianchuanAdMaterialGetV10ApiService
    {
        return $this->getService('QianchuanAdMaterialGetV10Api', \Oceanengine\Api\QianchuanAdMaterialGetV10ApiService::class);
    }

    public function qianchuanAdMaterialSuggestionV10Api(): \Oceanengine\Api\QianchuanAdMaterialSuggestionV10ApiService
    {
        return $this->getService('QianchuanAdMaterialSuggestionV10Api', \Oceanengine\Api\QianchuanAdMaterialSuggestionV10ApiService::class);
    }

    public function qianchuanAdOverallMarketingUpdateV10Api(): \Oceanengine\Api\QianchuanAdOverallMarketingUpdateV10ApiService
    {
        return $this->getService('QianchuanAdOverallMarketingUpdateV10Api', \Oceanengine\Api\QianchuanAdOverallMarketingUpdateV10ApiService::class);
    }

    public function qianchuanAdQuotaGetV10Api(): \Oceanengine\Api\QianchuanAdQuotaGetV10ApiService
    {
        return $this->getService('QianchuanAdQuotaGetV10Api', \Oceanengine\Api\QianchuanAdQuotaGetV10ApiService::class);
    }

    public function qianchuanAdRecommendKeywordsGetV10Api(): \Oceanengine\Api\QianchuanAdRecommendKeywordsGetV10ApiService
    {
        return $this->getService('QianchuanAdRecommendKeywordsGetV10Api', \Oceanengine\Api\QianchuanAdRecommendKeywordsGetV10ApiService::class);
    }

    public function qianchuanAdRegionUpdateV10Api(): \Oceanengine\Api\QianchuanAdRegionUpdateV10ApiService
    {
        return $this->getService('QianchuanAdRegionUpdateV10Api', \Oceanengine\Api\QianchuanAdRegionUpdateV10ApiService::class);
    }

    public function qianchuanAdRejectReasonV10Api(): \Oceanengine\Api\QianchuanAdRejectReasonV10ApiService
    {
        return $this->getService('QianchuanAdRejectReasonV10Api', \Oceanengine\Api\QianchuanAdRejectReasonV10ApiService::class);
    }

    public function qianchuanAdScheduleDateUpdateV10Api(): \Oceanengine\Api\QianchuanAdScheduleDateUpdateV10ApiService
    {
        return $this->getService('QianchuanAdScheduleDateUpdateV10Api', \Oceanengine\Api\QianchuanAdScheduleDateUpdateV10ApiService::class);
    }

    public function qianchuanAdScheduleFixedRangeUpdateV10Api(): \Oceanengine\Api\QianchuanAdScheduleFixedRangeUpdateV10ApiService
    {
        return $this->getService('QianchuanAdScheduleFixedRangeUpdateV10Api', \Oceanengine\Api\QianchuanAdScheduleFixedRangeUpdateV10ApiService::class);
    }

    public function qianchuanAdStatusUpdateV10Api(): \Oceanengine\Api\QianchuanAdStatusUpdateV10ApiService
    {
        return $this->getService('QianchuanAdStatusUpdateV10Api', \Oceanengine\Api\QianchuanAdStatusUpdateV10ApiService::class);
    }

    public function qianchuanAdUpdateV10Api(): \Oceanengine\Api\QianchuanAdUpdateV10ApiService
    {
        return $this->getService('QianchuanAdUpdateV10Api', \Oceanengine\Api\QianchuanAdUpdateV10ApiService::class);
    }

    public function qianchuanAdvertiserTypeGetV10Api(): \Oceanengine\Api\QianchuanAdvertiserTypeGetV10ApiService
    {
        return $this->getService('QianchuanAdvertiserTypeGetV10Api', \Oceanengine\Api\QianchuanAdvertiserTypeGetV10ApiService::class);
    }

    public function qianchuanAudienceCreateByFileV10Api(): \Oceanengine\Api\QianchuanAudienceCreateByFileV10ApiService
    {
        return $this->getService('QianchuanAudienceCreateByFileV10Api', \Oceanengine\Api\QianchuanAudienceCreateByFileV10ApiService::class);
    }

    public function qianchuanAudienceDeleteV10Api(): \Oceanengine\Api\QianchuanAudienceDeleteV10ApiService
    {
        return $this->getService('QianchuanAudienceDeleteV10Api', \Oceanengine\Api\QianchuanAudienceDeleteV10ApiService::class);
    }

    public function qianchuanAudienceFilePartUploadV10Api(): \Oceanengine\Api\QianchuanAudienceFilePartUploadV10ApiService
    {
        return $this->getService('QianchuanAudienceFilePartUploadV10Api', \Oceanengine\Api\QianchuanAudienceFilePartUploadV10ApiService::class);
    }

    public function qianchuanAudienceFileUploadV10Api(): \Oceanengine\Api\QianchuanAudienceFileUploadV10ApiService
    {
        return $this->getService('QianchuanAudienceFileUploadV10Api', \Oceanengine\Api\QianchuanAudienceFileUploadV10ApiService::class);
    }

    public function qianchuanAudienceGroupGetV10Api(): \Oceanengine\Api\QianchuanAudienceGroupGetV10ApiService
    {
        return $this->getService('QianchuanAudienceGroupGetV10Api', \Oceanengine\Api\QianchuanAudienceGroupGetV10ApiService::class);
    }

    public function qianchuanAudienceListGetV10Api(): \Oceanengine\Api\QianchuanAudienceListGetV10ApiService
    {
        return $this->getService('QianchuanAudienceListGetV10Api', \Oceanengine\Api\QianchuanAudienceListGetV10ApiService::class);
    }

    public function qianchuanAudiencePushV10Api(): \Oceanengine\Api\QianchuanAudiencePushV10ApiService
    {
        return $this->getService('QianchuanAudiencePushV10Api', \Oceanengine\Api\QianchuanAudiencePushV10ApiService::class);
    }

    public function qianchuanAwemeAuthListGetV10Api(): \Oceanengine\Api\QianchuanAwemeAuthListGetV10ApiService
    {
        return $this->getService('QianchuanAwemeAuthListGetV10Api', \Oceanengine\Api\QianchuanAwemeAuthListGetV10ApiService::class);
    }

    public function qianchuanAwemeAuthorizedGetV10Api(): \Oceanengine\Api\QianchuanAwemeAuthorizedGetV10ApiService
    {
        return $this->getService('QianchuanAwemeAuthorizedGetV10Api', \Oceanengine\Api\QianchuanAwemeAuthorizedGetV10ApiService::class);
    }

    public function qianchuanAwemeEstimateProfitV10Api(): \Oceanengine\Api\QianchuanAwemeEstimateProfitV10ApiService
    {
        return $this->getService('QianchuanAwemeEstimateProfitV10Api', \Oceanengine\Api\QianchuanAwemeEstimateProfitV10ApiService::class);
    }

    public function qianchuanAwemeInterestActionInterestKeywordV10Api(): \Oceanengine\Api\QianchuanAwemeInterestActionInterestKeywordV10ApiService
    {
        return $this->getService('QianchuanAwemeInterestActionInterestKeywordV10Api', \Oceanengine\Api\QianchuanAwemeInterestActionInterestKeywordV10ApiService::class);
    }

    public function qianchuanAwemeOrderBudgetAddV10Api(): \Oceanengine\Api\QianchuanAwemeOrderBudgetAddV10ApiService
    {
        return $this->getService('QianchuanAwemeOrderBudgetAddV10Api', \Oceanengine\Api\QianchuanAwemeOrderBudgetAddV10ApiService::class);
    }

    public function qianchuanAwemeOrderCreateV10Api(): \Oceanengine\Api\QianchuanAwemeOrderCreateV10ApiService
    {
        return $this->getService('QianchuanAwemeOrderCreateV10Api', \Oceanengine\Api\QianchuanAwemeOrderCreateV10ApiService::class);
    }

    public function qianchuanAwemeOrderDetailGetV10Api(): \Oceanengine\Api\QianchuanAwemeOrderDetailGetV10ApiService
    {
        return $this->getService('QianchuanAwemeOrderDetailGetV10Api', \Oceanengine\Api\QianchuanAwemeOrderDetailGetV10ApiService::class);
    }

    public function qianchuanAwemeOrderGetV10Api(): \Oceanengine\Api\QianchuanAwemeOrderGetV10ApiService
    {
        return $this->getService('QianchuanAwemeOrderGetV10Api', \Oceanengine\Api\QianchuanAwemeOrderGetV10ApiService::class);
    }

    public function qianchuanAwemeOrderQuotaGetV10Api(): \Oceanengine\Api\QianchuanAwemeOrderQuotaGetV10ApiService
    {
        return $this->getService('QianchuanAwemeOrderQuotaGetV10Api', \Oceanengine\Api\QianchuanAwemeOrderQuotaGetV10ApiService::class);
    }

    public function qianchuanAwemeOrderSuggestDeliveryTimeGetV10Api(): \Oceanengine\Api\QianchuanAwemeOrderSuggestDeliveryTimeGetV10ApiService
    {
        return $this->getService('QianchuanAwemeOrderSuggestDeliveryTimeGetV10Api', \Oceanengine\Api\QianchuanAwemeOrderSuggestDeliveryTimeGetV10ApiService::class);
    }

    public function qianchuanAwemeOrderTerminateV10Api(): \Oceanengine\Api\QianchuanAwemeOrderTerminateV10ApiService
    {
        return $this->getService('QianchuanAwemeOrderTerminateV10Api', \Oceanengine\Api\QianchuanAwemeOrderTerminateV10ApiService::class);
    }

    public function qianchuanAwemeProductAvailableGetV10Api(): \Oceanengine\Api\QianchuanAwemeProductAvailableGetV10ApiService
    {
        return $this->getService('QianchuanAwemeProductAvailableGetV10Api', \Oceanengine\Api\QianchuanAwemeProductAvailableGetV10ApiService::class);
    }

    public function qianchuanAwemeReportOrderGetV10Api(): \Oceanengine\Api\QianchuanAwemeReportOrderGetV10ApiService
    {
        return $this->getService('QianchuanAwemeReportOrderGetV10Api', \Oceanengine\Api\QianchuanAwemeReportOrderGetV10ApiService::class);
    }

    public function qianchuanAwemeSuggestBidV10Api(): \Oceanengine\Api\QianchuanAwemeSuggestBidV10ApiService
    {
        return $this->getService('QianchuanAwemeSuggestBidV10Api', \Oceanengine\Api\QianchuanAwemeSuggestBidV10ApiService::class);
    }

    public function qianchuanAwemeSuggestRoiGoalV10Api(): \Oceanengine\Api\QianchuanAwemeSuggestRoiGoalV10ApiService
    {
        return $this->getService('QianchuanAwemeSuggestRoiGoalV10Api', \Oceanengine\Api\QianchuanAwemeSuggestRoiGoalV10ApiService::class);
    }

    public function qianchuanAwemeUniPromotionAdMaterialGetV10Api(): \Oceanengine\Api\QianchuanAwemeUniPromotionAdMaterialGetV10ApiService
    {
        return $this->getService('QianchuanAwemeUniPromotionAdMaterialGetV10Api', \Oceanengine\Api\QianchuanAwemeUniPromotionAdMaterialGetV10ApiService::class);
    }

    public function qianchuanAwemeUniPromotionEstimateEffectV10Api(): \Oceanengine\Api\QianchuanAwemeUniPromotionEstimateEffectV10ApiService
    {
        return $this->getService('QianchuanAwemeUniPromotionEstimateEffectV10Api', \Oceanengine\Api\QianchuanAwemeUniPromotionEstimateEffectV10ApiService::class);
    }

    public function qianchuanAwemeUniPromotionOrderBudgetAddV10Api(): \Oceanengine\Api\QianchuanAwemeUniPromotionOrderBudgetAddV10ApiService
    {
        return $this->getService('QianchuanAwemeUniPromotionOrderBudgetAddV10Api', \Oceanengine\Api\QianchuanAwemeUniPromotionOrderBudgetAddV10ApiService::class);
    }

    public function qianchuanAwemeUniPromotionOrderCreateV10Api(): \Oceanengine\Api\QianchuanAwemeUniPromotionOrderCreateV10ApiService
    {
        return $this->getService('QianchuanAwemeUniPromotionOrderCreateV10Api', \Oceanengine\Api\QianchuanAwemeUniPromotionOrderCreateV10ApiService::class);
    }

    public function qianchuanAwemeUniPromotionOrderDetailV10Api(): \Oceanengine\Api\QianchuanAwemeUniPromotionOrderDetailV10ApiService
    {
        return $this->getService('QianchuanAwemeUniPromotionOrderDetailV10Api', \Oceanengine\Api\QianchuanAwemeUniPromotionOrderDetailV10ApiService::class);
    }

    public function qianchuanAwemeUniPromotionOrderGetV10Api(): \Oceanengine\Api\QianchuanAwemeUniPromotionOrderGetV10ApiService
    {
        return $this->getService('QianchuanAwemeUniPromotionOrderGetV10Api', \Oceanengine\Api\QianchuanAwemeUniPromotionOrderGetV10ApiService::class);
    }

    public function qianchuanAwemeUniPromotionOrderReportGetV10Api(): \Oceanengine\Api\QianchuanAwemeUniPromotionOrderReportGetV10ApiService
    {
        return $this->getService('QianchuanAwemeUniPromotionOrderReportGetV10Api', \Oceanengine\Api\QianchuanAwemeUniPromotionOrderReportGetV10ApiService::class);
    }

    public function qianchuanAwemeUniPromotionOrderSuggestDeliveryTimeGetV10Api(): \Oceanengine\Api\QianchuanAwemeUniPromotionOrderSuggestDeliveryTimeGetV10ApiService
    {
        return $this->getService('QianchuanAwemeUniPromotionOrderSuggestDeliveryTimeGetV10Api', \Oceanengine\Api\QianchuanAwemeUniPromotionOrderSuggestDeliveryTimeGetV10ApiService::class);
    }

    public function qianchuanAwemeUniPromotionReportV10Api(): \Oceanengine\Api\QianchuanAwemeUniPromotionReportV10ApiService
    {
        return $this->getService('QianchuanAwemeUniPromotionReportV10Api', \Oceanengine\Api\QianchuanAwemeUniPromotionReportV10ApiService::class);
    }

    public function qianchuanAwemeUniPromotionSuggestRoiV10Api(): \Oceanengine\Api\QianchuanAwemeUniPromotionSuggestRoiV10ApiService
    {
        return $this->getService('QianchuanAwemeUniPromotionSuggestRoiV10Api', \Oceanengine\Api\QianchuanAwemeUniPromotionSuggestRoiV10ApiService::class);
    }

    public function qianchuanAwemeUniPromotionSuggestV10Api(): \Oceanengine\Api\QianchuanAwemeUniPromotionSuggestV10ApiService
    {
        return $this->getService('QianchuanAwemeUniPromotionSuggestV10Api', \Oceanengine\Api\QianchuanAwemeUniPromotionSuggestV10ApiService::class);
    }

    public function qianchuanAwemeVideoGetV10Api(): \Oceanengine\Api\QianchuanAwemeVideoGetV10ApiService
    {
        return $this->getService('QianchuanAwemeVideoGetV10Api', \Oceanengine\Api\QianchuanAwemeVideoGetV10ApiService::class);
    }

    public function qianchuanBatchCampaignStatusUpdateV10Api(): \Oceanengine\Api\QianchuanBatchCampaignStatusUpdateV10ApiService
    {
        return $this->getService('QianchuanBatchCampaignStatusUpdateV10Api', \Oceanengine\Api\QianchuanBatchCampaignStatusUpdateV10ApiService::class);
    }

    public function qianchuanBrandAuthorizedGetV10Api(): \Oceanengine\Api\QianchuanBrandAuthorizedGetV10ApiService
    {
        return $this->getService('QianchuanBrandAuthorizedGetV10Api', \Oceanengine\Api\QianchuanBrandAuthorizedGetV10ApiService::class);
    }

    public function qianchuanBrandReportAdGetV10Api(): \Oceanengine\Api\QianchuanBrandReportAdGetV10ApiService
    {
        return $this->getService('QianchuanBrandReportAdGetV10Api', \Oceanengine\Api\QianchuanBrandReportAdGetV10ApiService::class);
    }

    public function qianchuanBrandReportAdvertiserGetV10Api(): \Oceanengine\Api\QianchuanBrandReportAdvertiserGetV10ApiService
    {
        return $this->getService('QianchuanBrandReportAdvertiserGetV10Api', \Oceanengine\Api\QianchuanBrandReportAdvertiserGetV10ApiService::class);
    }

    public function qianchuanCampaignCreateV10Api(): \Oceanengine\Api\QianchuanCampaignCreateV10ApiService
    {
        return $this->getService('QianchuanCampaignCreateV10Api', \Oceanengine\Api\QianchuanCampaignCreateV10ApiService::class);
    }

    public function qianchuanCampaignListGetV10Api(): \Oceanengine\Api\QianchuanCampaignListGetV10ApiService
    {
        return $this->getService('QianchuanCampaignListGetV10Api', \Oceanengine\Api\QianchuanCampaignListGetV10ApiService::class);
    }

    public function qianchuanCampaignUpdateV10Api(): \Oceanengine\Api\QianchuanCampaignUpdateV10ApiService
    {
        return $this->getService('QianchuanCampaignUpdateV10Api', \Oceanengine\Api\QianchuanCampaignUpdateV10ApiService::class);
    }

    public function qianchuanCarouselAwemeGetV10Api(): \Oceanengine\Api\QianchuanCarouselAwemeGetV10ApiService
    {
        return $this->getService('QianchuanCarouselAwemeGetV10Api', \Oceanengine\Api\QianchuanCarouselAwemeGetV10ApiService::class);
    }

    public function qianchuanCarouselGetV10Api(): \Oceanengine\Api\QianchuanCarouselGetV10ApiService
    {
        return $this->getService('QianchuanCarouselGetV10Api', \Oceanengine\Api\QianchuanCarouselGetV10ApiService::class);
    }

    public function qianchuanDmpAudiencesGetV10Api(): \Oceanengine\Api\QianchuanDmpAudiencesGetV10ApiService
    {
        return $this->getService('QianchuanDmpAudiencesGetV10Api', \Oceanengine\Api\QianchuanDmpAudiencesGetV10ApiService::class);
    }

    public function qianchuanEstimateEffectV10Api(): \Oceanengine\Api\QianchuanEstimateEffectV10ApiService
    {
        return $this->getService('QianchuanEstimateEffectV10Api', \Oceanengine\Api\QianchuanEstimateEffectV10ApiService::class);
    }

    public function qianchuanFileImageDeleteV10Api(): \Oceanengine\Api\QianchuanFileImageDeleteV10ApiService
    {
        return $this->getService('QianchuanFileImageDeleteV10Api', \Oceanengine\Api\QianchuanFileImageDeleteV10ApiService::class);
    }

    public function qianchuanFileVideoAwemeGetV10Api(): \Oceanengine\Api\QianchuanFileVideoAwemeGetV10ApiService
    {
        return $this->getService('QianchuanFileVideoAwemeGetV10Api', \Oceanengine\Api\QianchuanFileVideoAwemeGetV10ApiService::class);
    }

    public function qianchuanFileVideoDeleteV10Api(): \Oceanengine\Api\QianchuanFileVideoDeleteV10ApiService
    {
        return $this->getService('QianchuanFileVideoDeleteV10Api', \Oceanengine\Api\QianchuanFileVideoDeleteV10ApiService::class);
    }

    public function qianchuanFileVideoEfficiencyGetV10Api(): \Oceanengine\Api\QianchuanFileVideoEfficiencyGetV10ApiService
    {
        return $this->getService('QianchuanFileVideoEfficiencyGetV10Api', \Oceanengine\Api\QianchuanFileVideoEfficiencyGetV10ApiService::class);
    }

    public function qianchuanFileVideoOriginalGetV10Api(): \Oceanengine\Api\QianchuanFileVideoOriginalGetV10ApiService
    {
        return $this->getService('QianchuanFileVideoOriginalGetV10Api', \Oceanengine\Api\QianchuanFileVideoOriginalGetV10ApiService::class);
    }

    public function qianchuanFinanceDetailGetV10Api(): \Oceanengine\Api\QianchuanFinanceDetailGetV10ApiService
    {
        return $this->getService('QianchuanFinanceDetailGetV10Api', \Oceanengine\Api\QianchuanFinanceDetailGetV10ApiService::class);
    }

    public function qianchuanFinanceWalletGetV10Api(): \Oceanengine\Api\QianchuanFinanceWalletGetV10ApiService
    {
        return $this->getService('QianchuanFinanceWalletGetV10Api', \Oceanengine\Api\QianchuanFinanceWalletGetV10ApiService::class);
    }

    public function qianchuanImageGetV10Api(): \Oceanengine\Api\QianchuanImageGetV10ApiService
    {
        return $this->getService('QianchuanImageGetV10Api', \Oceanengine\Api\QianchuanImageGetV10ApiService::class);
    }

    public function qianchuanKeywordCheckV10Api(): \Oceanengine\Api\QianchuanKeywordCheckV10ApiService
    {
        return $this->getService('QianchuanKeywordCheckV10Api', \Oceanengine\Api\QianchuanKeywordCheckV10ApiService::class);
    }

    public function qianchuanKeywordPackageGetV10Api(): \Oceanengine\Api\QianchuanKeywordPackageGetV10ApiService
    {
        return $this->getService('QianchuanKeywordPackageGetV10Api', \Oceanengine\Api\QianchuanKeywordPackageGetV10ApiService::class);
    }

    public function qianchuanLqAdGetV10Api(): \Oceanengine\Api\QianchuanLqAdGetV10ApiService
    {
        return $this->getService('QianchuanLqAdGetV10Api', \Oceanengine\Api\QianchuanLqAdGetV10ApiService::class);
    }

    public function qianchuanMaterialAdGetV10Api(): \Oceanengine\Api\QianchuanMaterialAdGetV10ApiService
    {
        return $this->getService('QianchuanMaterialAdGetV10Api', \Oceanengine\Api\QianchuanMaterialAdGetV10ApiService::class);
    }

    public function qianchuanMaterialGetV10Api(): \Oceanengine\Api\QianchuanMaterialGetV10ApiService
    {
        return $this->getService('QianchuanMaterialGetV10Api', \Oceanengine\Api\QianchuanMaterialGetV10ApiService::class);
    }

    public function qianchuanOrientationPackageGetV10Api(): \Oceanengine\Api\QianchuanOrientationPackageGetV10ApiService
    {
        return $this->getService('QianchuanOrientationPackageGetV10Api', \Oceanengine\Api\QianchuanOrientationPackageGetV10ApiService::class);
    }

    public function qianchuanOverallAwemeAwemeDeleteV10Api(): \Oceanengine\Api\QianchuanOverallAwemeAwemeDeleteV10ApiService
    {
        return $this->getService('QianchuanOverallAwemeAwemeDeleteV10Api', \Oceanengine\Api\QianchuanOverallAwemeAwemeDeleteV10ApiService::class);
    }

    public function qianchuanOverallAwemeListV10Api(): \Oceanengine\Api\QianchuanOverallAwemeListV10ApiService
    {
        return $this->getService('QianchuanOverallAwemeListV10Api', \Oceanengine\Api\QianchuanOverallAwemeListV10ApiService::class);
    }

    public function qianchuanOverallLiveCreateV10Api(): \Oceanengine\Api\QianchuanOverallLiveCreateV10ApiService
    {
        return $this->getService('QianchuanOverallLiveCreateV10Api', \Oceanengine\Api\QianchuanOverallLiveCreateV10ApiService::class);
    }

    public function qianchuanOverallLiveUpdateV10Api(): \Oceanengine\Api\QianchuanOverallLiveUpdateV10ApiService
    {
        return $this->getService('QianchuanOverallLiveUpdateV10Api', \Oceanengine\Api\QianchuanOverallLiveUpdateV10ApiService::class);
    }

    public function qianchuanOverallStarProductGetV10Api(): \Oceanengine\Api\QianchuanOverallStarProductGetV10ApiService
    {
        return $this->getService('QianchuanOverallStarProductGetV10Api', \Oceanengine\Api\QianchuanOverallStarProductGetV10ApiService::class);
    }

    public function qianchuanOverallSuggestRoiGetV10Api(): \Oceanengine\Api\QianchuanOverallSuggestRoiGetV10ApiService
    {
        return $this->getService('QianchuanOverallSuggestRoiGetV10Api', \Oceanengine\Api\QianchuanOverallSuggestRoiGetV10ApiService::class);
    }

    public function qianchuanOverallVideoCreateV10Api(): \Oceanengine\Api\QianchuanOverallVideoCreateV10ApiService
    {
        return $this->getService('QianchuanOverallVideoCreateV10Api', \Oceanengine\Api\QianchuanOverallVideoCreateV10ApiService::class);
    }

    public function qianchuanOverallVideoUpdateV10Api(): \Oceanengine\Api\QianchuanOverallVideoUpdateV10ApiService
    {
        return $this->getService('QianchuanOverallVideoUpdateV10Api', \Oceanengine\Api\QianchuanOverallVideoUpdateV10ApiService::class);
    }

    public function qianchuanProductAvailableGetV10Api(): \Oceanengine\Api\QianchuanProductAvailableGetV10ApiService
    {
        return $this->getService('QianchuanProductAvailableGetV10Api', \Oceanengine\Api\QianchuanProductAvailableGetV10ApiService::class);
    }

    public function qianchuanQianchuanReportTodayLiveRoomConfigGetV10Api(): \Oceanengine\Api\QianchuanQianchuanReportTodayLiveRoomConfigGetV10ApiService
    {
        return $this->getService('QianchuanQianchuanReportTodayLiveRoomConfigGetV10Api', \Oceanengine\Api\QianchuanQianchuanReportTodayLiveRoomConfigGetV10ApiService::class);
    }

    public function qianchuanQianchuanVideoStarGetV10Api(): \Oceanengine\Api\QianchuanQianchuanVideoStarGetV10ApiService
    {
        return $this->getService('QianchuanQianchuanVideoStarGetV10Api', \Oceanengine\Api\QianchuanQianchuanVideoStarGetV10ApiService::class);
    }

    public function qianchuanReportAdGetV10Api(): \Oceanengine\Api\QianchuanReportAdGetV10ApiService
    {
        return $this->getService('QianchuanReportAdGetV10Api', \Oceanengine\Api\QianchuanReportAdGetV10ApiService::class);
    }

    public function qianchuanReportAdMaterialGetV10Api(): \Oceanengine\Api\QianchuanReportAdMaterialGetV10ApiService
    {
        return $this->getService('QianchuanReportAdMaterialGetV10Api', \Oceanengine\Api\QianchuanReportAdMaterialGetV10ApiService::class);
    }

    public function qianchuanReportAdvertiserGetV10Api(): \Oceanengine\Api\QianchuanReportAdvertiserGetV10ApiService
    {
        return $this->getService('QianchuanReportAdvertiserGetV10Api', \Oceanengine\Api\QianchuanReportAdvertiserGetV10ApiService::class);
    }

    public function qianchuanReportAllPromotionGetV10Api(): \Oceanengine\Api\QianchuanReportAllPromotionGetV10ApiService
    {
        return $this->getService('QianchuanReportAllPromotionGetV10Api', \Oceanengine\Api\QianchuanReportAllPromotionGetV10ApiService::class);
    }

    public function qianchuanReportCustomConfigGetV10Api(): \Oceanengine\Api\QianchuanReportCustomConfigGetV10ApiService
    {
        return $this->getService('QianchuanReportCustomConfigGetV10Api', \Oceanengine\Api\QianchuanReportCustomConfigGetV10ApiService::class);
    }

    public function qianchuanReportCustomGetV10Api(): \Oceanengine\Api\QianchuanReportCustomGetV10ApiService
    {
        return $this->getService('QianchuanReportCustomGetV10Api', \Oceanengine\Api\QianchuanReportCustomGetV10ApiService::class);
    }

    public function qianchuanReportLiveGetV10Api(): \Oceanengine\Api\QianchuanReportLiveGetV10ApiService
    {
        return $this->getService('QianchuanReportLiveGetV10Api', \Oceanengine\Api\QianchuanReportLiveGetV10ApiService::class);
    }

    public function qianchuanReportLongTransferOrderConfigGetV10Api(): \Oceanengine\Api\QianchuanReportLongTransferOrderConfigGetV10ApiService
    {
        return $this->getService('QianchuanReportLongTransferOrderConfigGetV10Api', \Oceanengine\Api\QianchuanReportLongTransferOrderConfigGetV10ApiService::class);
    }

    public function qianchuanReportLongTransferOrderDataGetV10Api(): \Oceanengine\Api\QianchuanReportLongTransferOrderDataGetV10ApiService
    {
        return $this->getService('QianchuanReportLongTransferOrderDataGetV10Api', \Oceanengine\Api\QianchuanReportLongTransferOrderDataGetV10ApiService::class);
    }

    public function qianchuanReportLongTransferOrderGetV10Api(): \Oceanengine\Api\QianchuanReportLongTransferOrderGetV10ApiService
    {
        return $this->getService('QianchuanReportLongTransferOrderGetV10Api', \Oceanengine\Api\QianchuanReportLongTransferOrderGetV10ApiService::class);
    }

    public function qianchuanReportMaterialGetV10Api(): \Oceanengine\Api\QianchuanReportMaterialGetV10ApiService
    {
        return $this->getService('QianchuanReportMaterialGetV10Api', \Oceanengine\Api\QianchuanReportMaterialGetV10ApiService::class);
    }

    public function qianchuanReportSearchWordGetV10Api(): \Oceanengine\Api\QianchuanReportSearchWordGetV10ApiService
    {
        return $this->getService('QianchuanReportSearchWordGetV10Api', \Oceanengine\Api\QianchuanReportSearchWordGetV10ApiService::class);
    }

    public function qianchuanReportTodayLiveGetV10Api(): \Oceanengine\Api\QianchuanReportTodayLiveGetV10ApiService
    {
        return $this->getService('QianchuanReportTodayLiveGetV10Api', \Oceanengine\Api\QianchuanReportTodayLiveGetV10ApiService::class);
    }

    public function qianchuanReportTodayLiveRoomConfigGetV10Api(): \Oceanengine\Api\QianchuanReportTodayLiveRoomConfigGetV10ApiService
    {
        return $this->getService('QianchuanReportTodayLiveRoomConfigGetV10Api', \Oceanengine\Api\QianchuanReportTodayLiveRoomConfigGetV10ApiService::class);
    }

    public function qianchuanReportTodayLiveRoomDataGetV10Api(): \Oceanengine\Api\QianchuanReportTodayLiveRoomDataGetV10ApiService
    {
        return $this->getService('QianchuanReportTodayLiveRoomDataGetV10Api', \Oceanengine\Api\QianchuanReportTodayLiveRoomDataGetV10ApiService::class);
    }

    public function qianchuanReportUniPromotionConfigGetV10Api(): \Oceanengine\Api\QianchuanReportUniPromotionConfigGetV10ApiService
    {
        return $this->getService('QianchuanReportUniPromotionConfigGetV10Api', \Oceanengine\Api\QianchuanReportUniPromotionConfigGetV10ApiService::class);
    }

    public function qianchuanReportUniPromotionDataGetV10Api(): \Oceanengine\Api\QianchuanReportUniPromotionDataGetV10ApiService
    {
        return $this->getService('QianchuanReportUniPromotionDataGetV10Api', \Oceanengine\Api\QianchuanReportUniPromotionDataGetV10ApiService::class);
    }

    public function qianchuanReportUniPromotionDimensionDataAuthorGetV10Api(): \Oceanengine\Api\QianchuanReportUniPromotionDimensionDataAuthorGetV10ApiService
    {
        return $this->getService('QianchuanReportUniPromotionDimensionDataAuthorGetV10Api', \Oceanengine\Api\QianchuanReportUniPromotionDimensionDataAuthorGetV10ApiService::class);
    }

    public function qianchuanReportUniPromotionDimensionDataRoomGetV10Api(): \Oceanengine\Api\QianchuanReportUniPromotionDimensionDataRoomGetV10ApiService
    {
        return $this->getService('QianchuanReportUniPromotionDimensionDataRoomGetV10Api', \Oceanengine\Api\QianchuanReportUniPromotionDimensionDataRoomGetV10ApiService::class);
    }

    public function qianchuanReportUniPromotionGetV10Api(): \Oceanengine\Api\QianchuanReportUniPromotionGetV10ApiService
    {
        return $this->getService('QianchuanReportUniPromotionGetV10Api', \Oceanengine\Api\QianchuanReportUniPromotionGetV10ApiService::class);
    }

    public function qianchuanReportVideoUserLoseGetV10Api(): \Oceanengine\Api\QianchuanReportVideoUserLoseGetV10ApiService
    {
        return $this->getService('QianchuanReportVideoUserLoseGetV10Api', \Oceanengine\Api\QianchuanReportVideoUserLoseGetV10ApiService::class);
    }

    public function qianchuanRoiGoalUpdateV10Api(): \Oceanengine\Api\QianchuanRoiGoalUpdateV10ApiService
    {
        return $this->getService('QianchuanRoiGoalUpdateV10Api', \Oceanengine\Api\QianchuanRoiGoalUpdateV10ApiService::class);
    }

    public function qianchuanShopAdvertiserListV10Api(): \Oceanengine\Api\QianchuanShopAdvertiserListV10ApiService
    {
        return $this->getService('QianchuanShopAdvertiserListV10Api', \Oceanengine\Api\QianchuanShopAdvertiserListV10ApiService::class);
    }

    public function qianchuanShopAuthorizedGetV10Api(): \Oceanengine\Api\QianchuanShopAuthorizedGetV10ApiService
    {
        return $this->getService('QianchuanShopAuthorizedGetV10Api', \Oceanengine\Api\QianchuanShopAuthorizedGetV10ApiService::class);
    }

    public function qianchuanShopGetV10Api(): \Oceanengine\Api\QianchuanShopGetV10ApiService
    {
        return $this->getService('QianchuanShopGetV10Api', \Oceanengine\Api\QianchuanShopGetV10ApiService::class);
    }

    public function qianchuanSuggestBidV10Api(): \Oceanengine\Api\QianchuanSuggestBidV10ApiService
    {
        return $this->getService('QianchuanSuggestBidV10Api', \Oceanengine\Api\QianchuanSuggestBidV10ApiService::class);
    }

    public function qianchuanSuggestBudgetV10Api(): \Oceanengine\Api\QianchuanSuggestBudgetV10ApiService
    {
        return $this->getService('QianchuanSuggestBudgetV10Api', \Oceanengine\Api\QianchuanSuggestBudgetV10ApiService::class);
    }

    public function qianchuanSuggestRoiGoalV10Api(): \Oceanengine\Api\QianchuanSuggestRoiGoalV10ApiService
    {
        return $this->getService('QianchuanSuggestRoiGoalV10Api', \Oceanengine\Api\QianchuanSuggestRoiGoalV10ApiService::class);
    }

    public function qianchuanTodayLiveRoomDetailGetV10Api(): \Oceanengine\Api\QianchuanTodayLiveRoomDetailGetV10ApiService
    {
        return $this->getService('QianchuanTodayLiveRoomDetailGetV10Api', \Oceanengine\Api\QianchuanTodayLiveRoomDetailGetV10ApiService::class);
    }

    public function qianchuanTodayLiveRoomFlowPerformanceGetV10Api(): \Oceanengine\Api\QianchuanTodayLiveRoomFlowPerformanceGetV10ApiService
    {
        return $this->getService('QianchuanTodayLiveRoomFlowPerformanceGetV10Api', \Oceanengine\Api\QianchuanTodayLiveRoomFlowPerformanceGetV10ApiService::class);
    }

    public function qianchuanTodayLiveRoomGetV10Api(): \Oceanengine\Api\QianchuanTodayLiveRoomGetV10ApiService
    {
        return $this->getService('QianchuanTodayLiveRoomGetV10Api', \Oceanengine\Api\QianchuanTodayLiveRoomGetV10ApiService::class);
    }

    public function qianchuanTodayLiveRoomProductListGetV10Api(): \Oceanengine\Api\QianchuanTodayLiveRoomProductListGetV10ApiService
    {
        return $this->getService('QianchuanTodayLiveRoomProductListGetV10Api', \Oceanengine\Api\QianchuanTodayLiveRoomProductListGetV10ApiService::class);
    }

    public function qianchuanTodayLiveRoomUserGetV10Api(): \Oceanengine\Api\QianchuanTodayLiveRoomUserGetV10ApiService
    {
        return $this->getService('QianchuanTodayLiveRoomUserGetV10Api', \Oceanengine\Api\QianchuanTodayLiveRoomUserGetV10ApiService::class);
    }

    public function qianchuanTodayLiveV2RoomUserGetV10Api(): \Oceanengine\Api\QianchuanTodayLiveV2RoomUserGetV10ApiService
    {
        return $this->getService('QianchuanTodayLiveV2RoomUserGetV10Api', \Oceanengine\Api\QianchuanTodayLiveV2RoomUserGetV10ApiService::class);
    }

    public function qianchuanToolsAllowCouponV10Api(): \Oceanengine\Api\QianchuanToolsAllowCouponV10ApiService
    {
        return $this->getService('QianchuanToolsAllowCouponV10Api', \Oceanengine\Api\QianchuanToolsAllowCouponV10ApiService::class);
    }

    public function qianchuanToolsAwemeAuthV10Api(): \Oceanengine\Api\QianchuanToolsAwemeAuthV10ApiService
    {
        return $this->getService('QianchuanToolsAwemeAuthV10Api', \Oceanengine\Api\QianchuanToolsAwemeAuthV10ApiService::class);
    }

    public function qianchuanToolsEstimateAudienceV10Api(): \Oceanengine\Api\QianchuanToolsEstimateAudienceV10ApiService
    {
        return $this->getService('QianchuanToolsEstimateAudienceV10Api', \Oceanengine\Api\QianchuanToolsEstimateAudienceV10ApiService::class);
    }

    public function qianchuanToolsGrayV10Api(): \Oceanengine\Api\QianchuanToolsGrayV10ApiService
    {
        return $this->getService('QianchuanToolsGrayV10Api', \Oceanengine\Api\QianchuanToolsGrayV10ApiService::class);
    }

    public function qianchuanToolsLogSearchV10Api(): \Oceanengine\Api\QianchuanToolsLogSearchV10ApiService
    {
        return $this->getService('QianchuanToolsLogSearchV10Api', \Oceanengine\Api\QianchuanToolsLogSearchV10ApiService::class);
    }

    public function qianchuanToolsShopAuthV10Api(): \Oceanengine\Api\QianchuanToolsShopAuthV10ApiService
    {
        return $this->getService('QianchuanToolsShopAuthV10Api', \Oceanengine\Api\QianchuanToolsShopAuthV10ApiService::class);
    }

    public function qianchuanToolsSmartBoostAdBoostReportGetV10Api(): \Oceanengine\Api\QianchuanToolsSmartBoostAdBoostReportGetV10ApiService
    {
        return $this->getService('QianchuanToolsSmartBoostAdBoostReportGetV10Api', \Oceanengine\Api\QianchuanToolsSmartBoostAdBoostReportGetV10ApiService::class);
    }

    public function qianchuanToolsSmartBoostAdBoostSetV10Api(): \Oceanengine\Api\QianchuanToolsSmartBoostAdBoostSetV10ApiService
    {
        return $this->getService('QianchuanToolsSmartBoostAdBoostSetV10Api', \Oceanengine\Api\QianchuanToolsSmartBoostAdBoostSetV10ApiService::class);
    }

    public function qianchuanToolsSmartBoostAdBoostStatusGetV10Api(): \Oceanengine\Api\QianchuanToolsSmartBoostAdBoostStatusGetV10ApiService
    {
        return $this->getService('QianchuanToolsSmartBoostAdBoostStatusGetV10Api', \Oceanengine\Api\QianchuanToolsSmartBoostAdBoostStatusGetV10ApiService::class);
    }

    public function qianchuanToolsSmartBoostAdBoostVersionGetV10Api(): \Oceanengine\Api\QianchuanToolsSmartBoostAdBoostVersionGetV10ApiService
    {
        return $this->getService('QianchuanToolsSmartBoostAdBoostVersionGetV10Api', \Oceanengine\Api\QianchuanToolsSmartBoostAdBoostVersionGetV10ApiService::class);
    }

    public function qianchuanTrackUrlCheckV10Api(): \Oceanengine\Api\QianchuanTrackUrlCheckV10ApiService
    {
        return $this->getService('QianchuanTrackUrlCheckV10Api', \Oceanengine\Api\QianchuanTrackUrlCheckV10ApiService::class);
    }

    public function qianchuanUniAwemeAdCreateV10Api(): \Oceanengine\Api\QianchuanUniAwemeAdCreateV10ApiService
    {
        return $this->getService('QianchuanUniAwemeAdCreateV10Api', \Oceanengine\Api\QianchuanUniAwemeAdCreateV10ApiService::class);
    }

    public function qianchuanUniAwemeAdUpdateV10Api(): \Oceanengine\Api\QianchuanUniAwemeAdUpdateV10ApiService
    {
        return $this->getService('QianchuanUniAwemeAdUpdateV10Api', \Oceanengine\Api\QianchuanUniAwemeAdUpdateV10ApiService::class);
    }

    public function qianchuanUniAwemeAuthorizedGetV10Api(): \Oceanengine\Api\QianchuanUniAwemeAuthorizedGetV10ApiService
    {
        return $this->getService('QianchuanUniAwemeAuthorizedGetV10Api', \Oceanengine\Api\QianchuanUniAwemeAuthorizedGetV10ApiService::class);
    }

    public function qianchuanUniAwemeSuggestBudgetV10Api(): \Oceanengine\Api\QianchuanUniAwemeSuggestBudgetV10ApiService
    {
        return $this->getService('QianchuanUniAwemeSuggestBudgetV10Api', \Oceanengine\Api\QianchuanUniAwemeSuggestBudgetV10ApiService::class);
    }

    public function qianchuanUniAwemeSuggestRoiV10Api(): \Oceanengine\Api\QianchuanUniAwemeSuggestRoiV10ApiService
    {
        return $this->getService('QianchuanUniAwemeSuggestRoiV10Api', \Oceanengine\Api\QianchuanUniAwemeSuggestRoiV10ApiService::class);
    }

    public function qianchuanUniPromotionAdBudgetUpdateV10Api(): \Oceanengine\Api\QianchuanUniPromotionAdBudgetUpdateV10ApiService
    {
        return $this->getService('QianchuanUniPromotionAdBudgetUpdateV10Api', \Oceanengine\Api\QianchuanUniPromotionAdBudgetUpdateV10ApiService::class);
    }

    public function qianchuanUniPromotionAdControlTaskBudgetUpdateV10Api(): \Oceanengine\Api\QianchuanUniPromotionAdControlTaskBudgetUpdateV10ApiService
    {
        return $this->getService('QianchuanUniPromotionAdControlTaskBudgetUpdateV10Api', \Oceanengine\Api\QianchuanUniPromotionAdControlTaskBudgetUpdateV10ApiService::class);
    }

    public function qianchuanUniPromotionAdControlTaskCreateV10Api(): \Oceanengine\Api\QianchuanUniPromotionAdControlTaskCreateV10ApiService
    {
        return $this->getService('QianchuanUniPromotionAdControlTaskCreateV10Api', \Oceanengine\Api\QianchuanUniPromotionAdControlTaskCreateV10ApiService::class);
    }

    public function qianchuanUniPromotionAdControlTaskDurationUpdateV10Api(): \Oceanengine\Api\QianchuanUniPromotionAdControlTaskDurationUpdateV10ApiService
    {
        return $this->getService('QianchuanUniPromotionAdControlTaskDurationUpdateV10Api', \Oceanengine\Api\QianchuanUniPromotionAdControlTaskDurationUpdateV10ApiService::class);
    }

    public function qianchuanUniPromotionAdControlTaskListV10Api(): \Oceanengine\Api\QianchuanUniPromotionAdControlTaskListV10ApiService
    {
        return $this->getService('QianchuanUniPromotionAdControlTaskListV10Api', \Oceanengine\Api\QianchuanUniPromotionAdControlTaskListV10ApiService::class);
    }

    public function qianchuanUniPromotionAdControlTaskSmartControlCreateV10Api(): \Oceanengine\Api\QianchuanUniPromotionAdControlTaskSmartControlCreateV10ApiService
    {
        return $this->getService('QianchuanUniPromotionAdControlTaskSmartControlCreateV10Api', \Oceanengine\Api\QianchuanUniPromotionAdControlTaskSmartControlCreateV10ApiService::class);
    }

    public function qianchuanUniPromotionAdControlTaskSmartControlStatusUpdateV10Api(): \Oceanengine\Api\QianchuanUniPromotionAdControlTaskSmartControlStatusUpdateV10ApiService
    {
        return $this->getService('QianchuanUniPromotionAdControlTaskSmartControlStatusUpdateV10Api', \Oceanengine\Api\QianchuanUniPromotionAdControlTaskSmartControlStatusUpdateV10ApiService::class);
    }

    public function qianchuanUniPromotionAdControlTaskStatusUpdateV10Api(): \Oceanengine\Api\QianchuanUniPromotionAdControlTaskStatusUpdateV10ApiService
    {
        return $this->getService('QianchuanUniPromotionAdControlTaskStatusUpdateV10Api', \Oceanengine\Api\QianchuanUniPromotionAdControlTaskStatusUpdateV10ApiService::class);
    }

    public function qianchuanUniPromotionAdControlTaskUpdateV10Api(): \Oceanengine\Api\QianchuanUniPromotionAdControlTaskUpdateV10ApiService
    {
        return $this->getService('QianchuanUniPromotionAdControlTaskUpdateV10Api', \Oceanengine\Api\QianchuanUniPromotionAdControlTaskUpdateV10ApiService::class);
    }

    public function qianchuanUniPromotionAdDetailV10Api(): \Oceanengine\Api\QianchuanUniPromotionAdDetailV10ApiService
    {
        return $this->getService('QianchuanUniPromotionAdDetailV10Api', \Oceanengine\Api\QianchuanUniPromotionAdDetailV10ApiService::class);
    }

    public function qianchuanUniPromotionAdMaterialAddV10Api(): \Oceanengine\Api\QianchuanUniPromotionAdMaterialAddV10ApiService
    {
        return $this->getService('QianchuanUniPromotionAdMaterialAddV10Api', \Oceanengine\Api\QianchuanUniPromotionAdMaterialAddV10ApiService::class);
    }

    public function qianchuanUniPromotionAdMaterialDeleteV10Api(): \Oceanengine\Api\QianchuanUniPromotionAdMaterialDeleteV10ApiService
    {
        return $this->getService('QianchuanUniPromotionAdMaterialDeleteV10Api', \Oceanengine\Api\QianchuanUniPromotionAdMaterialDeleteV10ApiService::class);
    }

    public function qianchuanUniPromotionAdMaterialGetV10Api(): \Oceanengine\Api\QianchuanUniPromotionAdMaterialGetV10ApiService
    {
        return $this->getService('QianchuanUniPromotionAdMaterialGetV10Api', \Oceanengine\Api\QianchuanUniPromotionAdMaterialGetV10ApiService::class);
    }

    public function qianchuanUniPromotionAdNameUpdateV10Api(): \Oceanengine\Api\QianchuanUniPromotionAdNameUpdateV10ApiService
    {
        return $this->getService('QianchuanUniPromotionAdNameUpdateV10Api', \Oceanengine\Api\QianchuanUniPromotionAdNameUpdateV10ApiService::class);
    }

    public function qianchuanUniPromotionAdProductDeleteV10Api(): \Oceanengine\Api\QianchuanUniPromotionAdProductDeleteV10ApiService
    {
        return $this->getService('QianchuanUniPromotionAdProductDeleteV10Api', \Oceanengine\Api\QianchuanUniPromotionAdProductDeleteV10ApiService::class);
    }

    public function qianchuanUniPromotionAdProductGetV10Api(): \Oceanengine\Api\QianchuanUniPromotionAdProductGetV10ApiService
    {
        return $this->getService('QianchuanUniPromotionAdProductGetV10Api', \Oceanengine\Api\QianchuanUniPromotionAdProductGetV10ApiService::class);
    }

    public function qianchuanUniPromotionAdRoi2GoalUpdateV10Api(): \Oceanengine\Api\QianchuanUniPromotionAdRoi2GoalUpdateV10ApiService
    {
        return $this->getService('QianchuanUniPromotionAdRoi2GoalUpdateV10Api', \Oceanengine\Api\QianchuanUniPromotionAdRoi2GoalUpdateV10ApiService::class);
    }

    public function qianchuanUniPromotionAdScheduleDateUpdateV10Api(): \Oceanengine\Api\QianchuanUniPromotionAdScheduleDateUpdateV10ApiService
    {
        return $this->getService('QianchuanUniPromotionAdScheduleDateUpdateV10Api', \Oceanengine\Api\QianchuanUniPromotionAdScheduleDateUpdateV10ApiService::class);
    }

    public function qianchuanUniPromotionAdStatusUpdateV10Api(): \Oceanengine\Api\QianchuanUniPromotionAdStatusUpdateV10ApiService
    {
        return $this->getService('QianchuanUniPromotionAdStatusUpdateV10Api', \Oceanengine\Api\QianchuanUniPromotionAdStatusUpdateV10ApiService::class);
    }

    public function qianchuanUniPromotionAdSuggestionV10Api(): \Oceanengine\Api\QianchuanUniPromotionAdSuggestionV10ApiService
    {
        return $this->getService('QianchuanUniPromotionAdSuggestionV10Api', \Oceanengine\Api\QianchuanUniPromotionAdSuggestionV10ApiService::class);
    }

    public function qianchuanUniPromotionAuthInitV10Api(): \Oceanengine\Api\QianchuanUniPromotionAuthInitV10ApiService
    {
        return $this->getService('QianchuanUniPromotionAuthInitV10Api', \Oceanengine\Api\QianchuanUniPromotionAuthInitV10ApiService::class);
    }

    public function qianchuanUniPromotionAuthorizableShopListV10Api(): \Oceanengine\Api\QianchuanUniPromotionAuthorizableShopListV10ApiService
    {
        return $this->getService('QianchuanUniPromotionAuthorizableShopListV10Api', \Oceanengine\Api\QianchuanUniPromotionAuthorizableShopListV10ApiService::class);
    }

    public function qianchuanUniPromotionAuthorizationApplyV10Api(): \Oceanengine\Api\QianchuanUniPromotionAuthorizationApplyV10ApiService
    {
        return $this->getService('QianchuanUniPromotionAuthorizationApplyV10Api', \Oceanengine\Api\QianchuanUniPromotionAuthorizationApplyV10ApiService::class);
    }

    public function qianchuanUniPromotionBlockMaterialGetV10Api(): \Oceanengine\Api\QianchuanUniPromotionBlockMaterialGetV10ApiService
    {
        return $this->getService('QianchuanUniPromotionBlockMaterialGetV10Api', \Oceanengine\Api\QianchuanUniPromotionBlockMaterialGetV10ApiService::class);
    }

    public function qianchuanUniPromotionListV10Api(): \Oceanengine\Api\QianchuanUniPromotionListV10ApiService
    {
        return $this->getService('QianchuanUniPromotionListV10Api', \Oceanengine\Api\QianchuanUniPromotionListV10ApiService::class);
    }

    public function qianchuanUniPromotionProductAwemeGetV10Api(): \Oceanengine\Api\QianchuanUniPromotionProductAwemeGetV10ApiService
    {
        return $this->getService('QianchuanUniPromotionProductAwemeGetV10Api', \Oceanengine\Api\QianchuanUniPromotionProductAwemeGetV10ApiService::class);
    }

    public function qianchuanUniPromotionProductGetV10Api(): \Oceanengine\Api\QianchuanUniPromotionProductGetV10ApiService
    {
        return $this->getService('QianchuanUniPromotionProductGetV10Api', \Oceanengine\Api\QianchuanUniPromotionProductGetV10ApiService::class);
    }

    public function qianchuanUniPromotionPromshopProductGetV10Api(): \Oceanengine\Api\QianchuanUniPromotionPromshopProductGetV10ApiService
    {
        return $this->getService('QianchuanUniPromotionPromshopProductGetV10Api', \Oceanengine\Api\QianchuanUniPromotionPromshopProductGetV10ApiService::class);
    }

    public function qianchuanVideoByAwemeGetV10Api(): \Oceanengine\Api\QianchuanVideoByAwemeGetV10ApiService
    {
        return $this->getService('QianchuanVideoByAwemeGetV10Api', \Oceanengine\Api\QianchuanVideoByAwemeGetV10ApiService::class);
    }

    public function qianchuanVideoGetV10Api(): \Oceanengine\Api\QianchuanVideoGetV10ApiService
    {
        return $this->getService('QianchuanVideoGetV10Api', \Oceanengine\Api\QianchuanVideoGetV10ApiService::class);
    }

    public function qualAccountListV2Api(): \Oceanengine\Api\QualAccountListV2ApiService
    {
        return $this->getService('QualAccountListV2Api', \Oceanengine\Api\QualAccountListV2ApiService::class);
    }

    public function queryBookingBusinessEntityIdGetV2Api(): \Oceanengine\Api\QueryBookingBusinessEntityIdGetV2ApiService
    {
        return $this->getService('QueryBookingBusinessEntityIdGetV2Api', \Oceanengine\Api\QueryBookingBusinessEntityIdGetV2ApiService::class);
    }

    public function queryInvoiceDetailSelfV2Api(): \Oceanengine\Api\QueryInvoiceDetailSelfV2ApiService
    {
        return $this->getService('QueryInvoiceDetailSelfV2Api', \Oceanengine\Api\QueryInvoiceDetailSelfV2ApiService::class);
    }

    public function queryInvoiceDetailV2Api(): \Oceanengine\Api\QueryInvoiceDetailV2ApiService
    {
        return $this->getService('QueryInvoiceDetailV2Api', \Oceanengine\Api\QueryInvoiceDetailV2ApiService::class);
    }

    public function queryInvoiceElectronicUrlSelfV2Api(): \Oceanengine\Api\QueryInvoiceElectronicUrlSelfV2ApiService
    {
        return $this->getService('QueryInvoiceElectronicUrlSelfV2Api', \Oceanengine\Api\QueryInvoiceElectronicUrlSelfV2ApiService::class);
    }

    public function queryInvoiceElectronicUrlV2Api(): \Oceanengine\Api\QueryInvoiceElectronicUrlV2ApiService
    {
        return $this->getService('QueryInvoiceElectronicUrlV2Api', \Oceanengine\Api\QueryInvoiceElectronicUrlV2ApiService::class);
    }

    public function queryInvoiceSelfV2Api(): \Oceanengine\Api\QueryInvoiceSelfV2ApiService
    {
        return $this->getService('QueryInvoiceSelfV2Api', \Oceanengine\Api\QueryInvoiceSelfV2ApiService::class);
    }

    public function queryInvoiceTaxV2Api(): \Oceanengine\Api\QueryInvoiceTaxV2ApiService
    {
        return $this->getService('QueryInvoiceTaxV2Api', \Oceanengine\Api\QueryInvoiceTaxV2ApiService::class);
    }

    public function queryInvoiceV2Api(): \Oceanengine\Api\QueryInvoiceV2ApiService
    {
        return $this->getService('QueryInvoiceV2Api', \Oceanengine\Api\QueryInvoiceV2ApiService::class);
    }

    public function queryProjectV2Api(): \Oceanengine\Api\QueryProjectV2ApiService
    {
        return $this->getService('QueryProjectV2Api', \Oceanengine\Api\QueryProjectV2ApiService::class);
    }

    public function queryProjectV30Api(): \Oceanengine\Api\QueryProjectV30ApiService
    {
        return $this->getService('QueryProjectV30Api', \Oceanengine\Api\QueryProjectV30ApiService::class);
    }

    public function queryRebateAccountingInfoV2Api(): \Oceanengine\Api\QueryRebateAccountingInfoV2ApiService
    {
        return $this->getService('QueryRebateAccountingInfoV2Api', \Oceanengine\Api\QueryRebateAccountingInfoV2ApiService::class);
    }

    public function queryRebateBalanceV2Api(): \Oceanengine\Api\QueryRebateBalanceV2ApiService
    {
        return $this->getService('QueryRebateBalanceV2Api', \Oceanengine\Api\QueryRebateBalanceV2ApiService::class);
    }

    public function queryStatementV2Api(): \Oceanengine\Api\QueryStatementV2ApiService
    {
        return $this->getService('QueryStatementV2Api', \Oceanengine\Api\QueryStatementV2ApiService::class);
    }

    public function recommendVideoListV30Api(): \Oceanengine\Api\RecommendVideoListV30ApiService
    {
        return $this->getService('RecommendVideoListV30Api', \Oceanengine\Api\RecommendVideoListV30ApiService::class);
    }

    public function rejectMaterialAiRepairAcceptTaskCreateV30Api(): \Oceanengine\Api\RejectMaterialAiRepairAcceptTaskCreateV30ApiService
    {
        return $this->getService('RejectMaterialAiRepairAcceptTaskCreateV30Api', \Oceanengine\Api\RejectMaterialAiRepairAcceptTaskCreateV30ApiService::class);
    }

    public function rejectMaterialAiRepairAcceptTaskListV30Api(): \Oceanengine\Api\RejectMaterialAiRepairAcceptTaskListV30ApiService
    {
        return $this->getService('RejectMaterialAiRepairAcceptTaskListV30Api', \Oceanengine\Api\RejectMaterialAiRepairAcceptTaskListV30ApiService::class);
    }

    public function rejectMaterialAiRepairCrossAccountGetV30Api(): \Oceanengine\Api\RejectMaterialAiRepairCrossAccountGetV30ApiService
    {
        return $this->getService('RejectMaterialAiRepairCrossAccountGetV30Api', \Oceanengine\Api\RejectMaterialAiRepairCrossAccountGetV30ApiService::class);
    }

    public function rejectMaterialAiRepairGetV30Api(): \Oceanengine\Api\RejectMaterialAiRepairGetV30ApiService
    {
        return $this->getService('RejectMaterialAiRepairGetV30Api', \Oceanengine\Api\RejectMaterialAiRepairGetV30ApiService::class);
    }

    public function remittanceCodeListGetV30Api(): \Oceanengine\Api\RemittanceCodeListGetV30ApiService
    {
        return $this->getService('RemittanceCodeListGetV30Api', \Oceanengine\Api\RemittanceCodeListGetV30ApiService::class);
    }

    public function remittanceCodeListV30Api(): \Oceanengine\Api\RemittanceCodeListV30ApiService
    {
        return $this->getService('RemittanceCodeListV30Api', \Oceanengine\Api\RemittanceCodeListV30ApiService::class);
    }

    public function reportAdGetV2Api(): \Oceanengine\Api\ReportAdGetV2ApiService
    {
        return $this->getService('ReportAdGetV2Api', \Oceanengine\Api\ReportAdGetV2ApiService::class);
    }

    public function reportAdvertiserGetV2Api(): \Oceanengine\Api\ReportAdvertiserGetV2ApiService
    {
        return $this->getService('ReportAdvertiserGetV2Api', \Oceanengine\Api\ReportAdvertiserGetV2ApiService::class);
    }

    public function reportAgentGetV2V2Api(): \Oceanengine\Api\ReportAgentGetV2V2ApiService
    {
        return $this->getService('ReportAgentGetV2V2Api', \Oceanengine\Api\ReportAgentGetV2V2ApiService::class);
    }

    public function reportAudienceAgeV2Api(): \Oceanengine\Api\ReportAudienceAgeV2ApiService
    {
        return $this->getService('ReportAudienceAgeV2Api', \Oceanengine\Api\ReportAudienceAgeV2ApiService::class);
    }

    public function reportAudienceAwemeListV2Api(): \Oceanengine\Api\ReportAudienceAwemeListV2ApiService
    {
        return $this->getService('ReportAudienceAwemeListV2Api', \Oceanengine\Api\ReportAudienceAwemeListV2ApiService::class);
    }

    public function reportAudienceCityV2Api(): \Oceanengine\Api\ReportAudienceCityV2ApiService
    {
        return $this->getService('ReportAudienceCityV2Api', \Oceanengine\Api\ReportAudienceCityV2ApiService::class);
    }

    public function reportAudienceGenderV2Api(): \Oceanengine\Api\ReportAudienceGenderV2ApiService
    {
        return $this->getService('ReportAudienceGenderV2Api', \Oceanengine\Api\ReportAudienceGenderV2ApiService::class);
    }

    public function reportAudienceInterestActionListV2Api(): \Oceanengine\Api\ReportAudienceInterestActionListV2ApiService
    {
        return $this->getService('ReportAudienceInterestActionListV2Api', \Oceanengine\Api\ReportAudienceInterestActionListV2ApiService::class);
    }

    public function reportAudienceProvinceV2Api(): \Oceanengine\Api\ReportAudienceProvinceV2ApiService
    {
        return $this->getService('ReportAudienceProvinceV2Api', \Oceanengine\Api\ReportAudienceProvinceV2ApiService::class);
    }

    public function reportBrandAdGetV30Api(): \Oceanengine\Api\ReportBrandAdGetV30ApiService
    {
        return $this->getService('ReportBrandAdGetV30Api', \Oceanengine\Api\ReportBrandAdGetV30ApiService::class);
    }

    public function reportBrandAdvertiserGetV30Api(): \Oceanengine\Api\ReportBrandAdvertiserGetV30ApiService
    {
        return $this->getService('ReportBrandAdvertiserGetV30Api', \Oceanengine\Api\ReportBrandAdvertiserGetV30ApiService::class);
    }

    public function reportBrandAgentDataV30Api(): \Oceanengine\Api\ReportBrandAgentDataV30ApiService
    {
        return $this->getService('ReportBrandAgentDataV30Api', \Oceanengine\Api\ReportBrandAgentDataV30ApiService::class);
    }

    public function reportBrandCampaignGetV30Api(): \Oceanengine\Api\ReportBrandCampaignGetV30ApiService
    {
        return $this->getService('ReportBrandCampaignGetV30Api', \Oceanengine\Api\ReportBrandCampaignGetV30ApiService::class);
    }

    public function reportBrandCreativeGetV30Api(): \Oceanengine\Api\ReportBrandCreativeGetV30ApiService
    {
        return $this->getService('ReportBrandCreativeGetV30Api', \Oceanengine\Api\ReportBrandCreativeGetV30ApiService::class);
    }

    public function reportBrandDataV30Api(): \Oceanengine\Api\ReportBrandDataV30ApiService
    {
        return $this->getService('ReportBrandDataV30Api', \Oceanengine\Api\ReportBrandDataV30ApiService::class);
    }

    public function reportBusinessPlatformStardeliveryTaskVideoDataGetV30Api(): \Oceanengine\Api\ReportBusinessPlatformStardeliveryTaskVideoDataGetV30ApiService
    {
        return $this->getService('ReportBusinessPlatformStardeliveryTaskVideoDataGetV30Api', \Oceanengine\Api\ReportBusinessPlatformStardeliveryTaskVideoDataGetV30ApiService::class);
    }

    public function reportCampaignGetV2Api(): \Oceanengine\Api\ReportCampaignGetV2ApiService
    {
        return $this->getService('ReportCampaignGetV2Api', \Oceanengine\Api\ReportCampaignGetV2ApiService::class);
    }

    public function reportCreativeGetV2Api(): \Oceanengine\Api\ReportCreativeGetV2ApiService
    {
        return $this->getService('ReportCreativeGetV2Api', \Oceanengine\Api\ReportCreativeGetV2ApiService::class);
    }

    public function reportCustomAsyncTaskCreateV30Api(): \Oceanengine\Api\ReportCustomAsyncTaskCreateV30ApiService
    {
        return $this->getService('ReportCustomAsyncTaskCreateV30Api', \Oceanengine\Api\ReportCustomAsyncTaskCreateV30ApiService::class);
    }

    public function reportCustomAsyncTaskDownloadV30Api(): \Oceanengine\Api\ReportCustomAsyncTaskDownloadV30ApiService
    {
        return $this->getService('ReportCustomAsyncTaskDownloadV30Api', \Oceanengine\Api\ReportCustomAsyncTaskDownloadV30ApiService::class);
    }

    public function reportCustomAsyncTaskGetV30Api(): \Oceanengine\Api\ReportCustomAsyncTaskGetV30ApiService
    {
        return $this->getService('ReportCustomAsyncTaskGetV30Api', \Oceanengine\Api\ReportCustomAsyncTaskGetV30ApiService::class);
    }

    public function reportCustomConfigGetV30Api(): \Oceanengine\Api\ReportCustomConfigGetV30ApiService
    {
        return $this->getService('ReportCustomConfigGetV30Api', \Oceanengine\Api\ReportCustomConfigGetV30ApiService::class);
    }

    public function reportCustomCreativeGetV30Api(): \Oceanengine\Api\ReportCustomCreativeGetV30ApiService
    {
        return $this->getService('ReportCustomCreativeGetV30Api', \Oceanengine\Api\ReportCustomCreativeGetV30ApiService::class);
    }

    public function reportCustomGetV30Api(): \Oceanengine\Api\ReportCustomGetV30ApiService
    {
        return $this->getService('ReportCustomGetV30Api', \Oceanengine\Api\ReportCustomGetV30ApiService::class);
    }

    public function reportJointGrowthCusGetV30Api(): \Oceanengine\Api\ReportJointGrowthCusGetV30ApiService
    {
        return $this->getService('ReportJointGrowthCusGetV30Api', \Oceanengine\Api\ReportJointGrowthCusGetV30ApiService::class);
    }

    public function reportJointGrowthGetV30Api(): \Oceanengine\Api\ReportJointGrowthGetV30ApiService
    {
        return $this->getService('ReportJointGrowthGetV30Api', \Oceanengine\Api\ReportJointGrowthGetV30ApiService::class);
    }

    public function reportLiveRoomAnalysisGetV30Api(): \Oceanengine\Api\ReportLiveRoomAnalysisGetV30ApiService
    {
        return $this->getService('ReportLiveRoomAnalysisGetV30Api', \Oceanengine\Api\ReportLiveRoomAnalysisGetV30ApiService::class);
    }

    public function reportProductAsyncTaskDownloadV30Api(): \Oceanengine\Api\ReportProductAsyncTaskDownloadV30ApiService
    {
        return $this->getService('ReportProductAsyncTaskDownloadV30Api', \Oceanengine\Api\ReportProductAsyncTaskDownloadV30ApiService::class);
    }

    public function reportProductAsyncTaskGetV30Api(): \Oceanengine\Api\ReportProductAsyncTaskGetV30ApiService
    {
        return $this->getService('ReportProductAsyncTaskGetV30Api', \Oceanengine\Api\ReportProductAsyncTaskGetV30ApiService::class);
    }

    public function reportProductDailyAsyncTaskCreateV30Api(): \Oceanengine\Api\ReportProductDailyAsyncTaskCreateV30ApiService
    {
        return $this->getService('ReportProductDailyAsyncTaskCreateV30Api', \Oceanengine\Api\ReportProductDailyAsyncTaskCreateV30ApiService::class);
    }

    public function reportProductHourlyAsyncTaskCreateV30Api(): \Oceanengine\Api\ReportProductHourlyAsyncTaskCreateV30ApiService
    {
        return $this->getService('ReportProductHourlyAsyncTaskCreateV30Api', \Oceanengine\Api\ReportProductHourlyAsyncTaskCreateV30ApiService::class);
    }

    public function reportReportLiveRoomAudiencePortraitGetV30Api(): \Oceanengine\Api\ReportReportLiveRoomAudiencePortraitGetV30ApiService
    {
        return $this->getService('ReportReportLiveRoomAudiencePortraitGetV30Api', \Oceanengine\Api\ReportReportLiveRoomAudiencePortraitGetV30ApiService::class);
    }

    public function reportRtaCusExpGetV2Api(): \Oceanengine\Api\ReportRtaCusExpGetV2ApiService
    {
        return $this->getService('ReportRtaCusExpGetV2Api', \Oceanengine\Api\ReportRtaCusExpGetV2ApiService::class);
    }

    public function reportRtaExpGetV2Api(): \Oceanengine\Api\ReportRtaExpGetV2ApiService
    {
        return $this->getService('ReportRtaExpGetV2Api', \Oceanengine\Api\ReportRtaExpGetV2ApiService::class);
    }

    public function reportRtaExpLocalDailyGetV30Api(): \Oceanengine\Api\ReportRtaExpLocalDailyGetV30ApiService
    {
        return $this->getService('ReportRtaExpLocalDailyGetV30Api', \Oceanengine\Api\ReportRtaExpLocalDailyGetV30ApiService::class);
    }

    public function reportRtaExpLocalHourlyGetV30Api(): \Oceanengine\Api\ReportRtaExpLocalHourlyGetV30ApiService
    {
        return $this->getService('ReportRtaExpLocalHourlyGetV30Api', \Oceanengine\Api\ReportRtaExpLocalHourlyGetV30ApiService::class);
    }

    public function reportRtaGetV2Api(): \Oceanengine\Api\ReportRtaGetV2ApiService
    {
        return $this->getService('ReportRtaGetV2Api', \Oceanengine\Api\ReportRtaGetV2ApiService::class);
    }

    public function reportRubeexGetV2Api(): \Oceanengine\Api\ReportRubeexGetV2ApiService
    {
        return $this->getService('ReportRubeexGetV2Api', \Oceanengine\Api\ReportRubeexGetV2ApiService::class);
    }

    public function reportSitePageV2Api(): \Oceanengine\Api\ReportSitePageV2ApiService
    {
        return $this->getService('ReportSitePageV2Api', \Oceanengine\Api\ReportSitePageV2ApiService::class);
    }

    public function reportStardeliveryTaskDataGetV30Api(): \Oceanengine\Api\ReportStardeliveryTaskDataGetV30ApiService
    {
        return $this->getService('ReportStardeliveryTaskDataGetV30Api', \Oceanengine\Api\ReportStardeliveryTaskDataGetV30ApiService::class);
    }

    public function reportStardeliveryTaskVideoDataGetV30Api(): \Oceanengine\Api\ReportStardeliveryTaskVideoDataGetV30ApiService
    {
        return $this->getService('ReportStardeliveryTaskVideoDataGetV30Api', \Oceanengine\Api\ReportStardeliveryTaskVideoDataGetV30ApiService::class);
    }

    public function reportVideoFrameGetV2Api(): \Oceanengine\Api\ReportVideoFrameGetV2ApiService
    {
        return $this->getService('ReportVideoFrameGetV2Api', \Oceanengine\Api\ReportVideoFrameGetV2ApiService::class);
    }

    public function scheduleResultGetV30Api(): \Oceanengine\Api\ScheduleResultGetV30ApiService
    {
        return $this->getService('ScheduleResultGetV30Api', \Oceanengine\Api\ScheduleResultGetV30ApiService::class);
    }

    public function securityAuditResultsV30Api(): \Oceanengine\Api\SecurityAuditResultsV30ApiService
    {
        return $this->getService('SecurityAuditResultsV30Api', \Oceanengine\Api\SecurityAuditResultsV30ApiService::class);
    }

    public function securityCreateAppealV30Api(): \Oceanengine\Api\SecurityCreateAppealV30ApiService
    {
        return $this->getService('SecurityCreateAppealV30Api', \Oceanengine\Api\SecurityCreateAppealV30ApiService::class);
    }

    public function securityGetConsultResultV30Api(): \Oceanengine\Api\SecurityGetConsultResultV30ApiService
    {
        return $this->getService('SecurityGetConsultResultV30Api', \Oceanengine\Api\SecurityGetConsultResultV30ApiService::class);
    }

    public function securityNonScoreDisposalInfoGetV30Api(): \Oceanengine\Api\SecurityNonScoreDisposalInfoGetV30ApiService
    {
        return $this->getService('SecurityNonScoreDisposalInfoGetV30Api', \Oceanengine\Api\SecurityNonScoreDisposalInfoGetV30ApiService::class);
    }

    public function securityOpenMaterialAuditV30Api(): \Oceanengine\Api\SecurityOpenMaterialAuditV30ApiService
    {
        return $this->getService('SecurityOpenMaterialAuditV30Api', \Oceanengine\Api\SecurityOpenMaterialAuditV30ApiService::class);
    }

    public function securityScoreDisposalInfoGetV30Api(): \Oceanengine\Api\SecurityScoreDisposalInfoGetV30ApiService
    {
        return $this->getService('SecurityScoreDisposalInfoGetV30Api', \Oceanengine\Api\SecurityScoreDisposalInfoGetV30ApiService::class);
    }

    public function securityScoreTotalGetV30Api(): \Oceanengine\Api\SecurityScoreTotalGetV30ApiService
    {
        return $this->getService('SecurityScoreTotalGetV30Api', \Oceanengine\Api\SecurityScoreTotalGetV30ApiService::class);
    }

    public function securityScoreViolationEventGetV30Api(): \Oceanengine\Api\SecurityScoreViolationEventGetV30ApiService
    {
        return $this->getService('SecurityScoreViolationEventGetV30Api', \Oceanengine\Api\SecurityScoreViolationEventGetV30ApiService::class);
    }

    public function serveMarketActiveFuncGetV10Api(): \Oceanengine\Api\ServeMarketActiveFuncGetV10ApiService
    {
        return $this->getService('ServeMarketActiveFuncGetV10Api', \Oceanengine\Api\ServeMarketActiveFuncGetV10ApiService::class);
    }

    public function serveMarketCidVerifyTokenV10Api(): \Oceanengine\Api\ServeMarketCidVerifyTokenV10ApiService
    {
        return $this->getService('ServeMarketCidVerifyTokenV10Api', \Oceanengine\Api\ServeMarketCidVerifyTokenV10ApiService::class);
    }

    public function serveMarketOrderGetV10Api(): \Oceanengine\Api\ServeMarketOrderGetV10ApiService
    {
        return $this->getService('ServeMarketOrderGetV10Api', \Oceanengine\Api\ServeMarketOrderGetV10ApiService::class);
    }

    public function sharedWalletAccountRelationGetV30Api(): \Oceanengine\Api\SharedWalletAccountRelationGetV30ApiService
    {
        return $this->getService('SharedWalletAccountRelationGetV30Api', \Oceanengine\Api\SharedWalletAccountRelationGetV30ApiService::class);
    }

    public function sharedWalletBudgetGetV30Api(): \Oceanengine\Api\SharedWalletBudgetGetV30ApiService
    {
        return $this->getService('SharedWalletBudgetGetV30Api', \Oceanengine\Api\SharedWalletBudgetGetV30ApiService::class);
    }

    public function sharedWalletBudgetSubmitV30Api(): \Oceanengine\Api\SharedWalletBudgetSubmitV30ApiService
    {
        return $this->getService('SharedWalletBudgetSubmitV30Api', \Oceanengine\Api\SharedWalletBudgetSubmitV30ApiService::class);
    }

    public function sharedWalletDailyStatGetV30Api(): \Oceanengine\Api\SharedWalletDailyStatGetV30ApiService
    {
        return $this->getService('SharedWalletDailyStatGetV30Api', \Oceanengine\Api\SharedWalletDailyStatGetV30ApiService::class);
    }

    public function sharedWalletMainWalletGetV30Api(): \Oceanengine\Api\SharedWalletMainWalletGetV30ApiService
    {
        return $this->getService('SharedWalletMainWalletGetV30Api', \Oceanengine\Api\SharedWalletMainWalletGetV30ApiService::class);
    }

    public function sharedWalletSharedRelationCreateV30Api(): \Oceanengine\Api\SharedWalletSharedRelationCreateV30ApiService
    {
        return $this->getService('SharedWalletSharedRelationCreateV30Api', \Oceanengine\Api\SharedWalletSharedRelationCreateV30ApiService::class);
    }

    public function sharedWalletSubWalletCreateV30Api(): \Oceanengine\Api\SharedWalletSubWalletCreateV30ApiService
    {
        return $this->getService('SharedWalletSubWalletCreateV30Api', \Oceanengine\Api\SharedWalletSubWalletCreateV30ApiService::class);
    }

    public function sharedWalletTransactionDetailGetV30Api(): \Oceanengine\Api\SharedWalletTransactionDetailGetV30ApiService
    {
        return $this->getService('SharedWalletTransactionDetailGetV30Api', \Oceanengine\Api\SharedWalletTransactionDetailGetV30ApiService::class);
    }

    public function sharedWalletWalletAdvOperationLogGetV30Api(): \Oceanengine\Api\SharedWalletWalletAdvOperationLogGetV30ApiService
    {
        return $this->getService('SharedWalletWalletAdvOperationLogGetV30Api', \Oceanengine\Api\SharedWalletWalletAdvOperationLogGetV30ApiService::class);
    }

    public function sharedWalletWalletBalanceGetV30Api(): \Oceanengine\Api\SharedWalletWalletBalanceGetV30ApiService
    {
        return $this->getService('SharedWalletWalletBalanceGetV30Api', \Oceanengine\Api\SharedWalletWalletBalanceGetV30ApiService::class);
    }

    public function sharedWalletWalletEbpRelationGetV30Api(): \Oceanengine\Api\SharedWalletWalletEbpRelationGetV30ApiService
    {
        return $this->getService('SharedWalletWalletEbpRelationGetV30Api', \Oceanengine\Api\SharedWalletWalletEbpRelationGetV30ApiService::class);
    }

    public function sharedWalletWalletInfoGetV30Api(): \Oceanengine\Api\SharedWalletWalletInfoGetV30ApiService
    {
        return $this->getService('SharedWalletWalletInfoGetV30Api', \Oceanengine\Api\SharedWalletWalletInfoGetV30ApiService::class);
    }

    public function sharedWalletWalletOperationLogGetV30Api(): \Oceanengine\Api\SharedWalletWalletOperationLogGetV30ApiService
    {
        return $this->getService('SharedWalletWalletOperationLogGetV30Api', \Oceanengine\Api\SharedWalletWalletOperationLogGetV30ApiService::class);
    }

    public function sharedWalletWalletRelationGetV30Api(): \Oceanengine\Api\SharedWalletWalletRelationGetV30ApiService
    {
        return $this->getService('SharedWalletWalletRelationGetV30Api', \Oceanengine\Api\SharedWalletWalletRelationGetV30ApiService::class);
    }

    public function sharedWalletWatchRuleGetV30Api(): \Oceanengine\Api\SharedWalletWatchRuleGetV30ApiService
    {
        return $this->getService('SharedWalletWatchRuleGetV30Api', \Oceanengine\Api\SharedWalletWatchRuleGetV30ApiService::class);
    }

    public function sharedWalletWatchRuleSubmitV30Api(): \Oceanengine\Api\SharedWalletWatchRuleSubmitV30ApiService
    {
        return $this->getService('SharedWalletWatchRuleSubmitV30Api', \Oceanengine\Api\SharedWalletWatchRuleSubmitV30ApiService::class);
    }

    public function shopBonusCreateV30Api(): \Oceanengine\Api\ShopBonusCreateV30ApiService
    {
        return $this->getService('ShopBonusCreateV30Api', \Oceanengine\Api\ShopBonusCreateV30ApiService::class);
    }

    public function shopBonusSuccessGetV30Api(): \Oceanengine\Api\ShopBonusSuccessGetV30ApiService
    {
        return $this->getService('ShopBonusSuccessGetV30Api', \Oceanengine\Api\ShopBonusSuccessGetV30ApiService::class);
    }

    public function spiTaskGetV2Api(): \Oceanengine\Api\SpiTaskGetV2ApiService
    {
        return $this->getService('SpiTaskGetV2Api', \Oceanengine\Api\SpiTaskGetV2ApiService::class);
    }

    public function starAttachmentUploadV2Api(): \Oceanengine\Api\StarAttachmentUploadV2ApiService
    {
        return $this->getService('StarAttachmentUploadV2Api', \Oceanengine\Api\StarAttachmentUploadV2ApiService::class);
    }

    public function starAttributeItemEventFeedbackV2Api(): \Oceanengine\Api\StarAttributeItemEventFeedbackV2ApiService
    {
        return $this->getService('StarAttributeItemEventFeedbackV2Api', \Oceanengine\Api\StarAttributeItemEventFeedbackV2ApiService::class);
    }

    public function starAttributeJdOverflowConvertV2Api(): \Oceanengine\Api\StarAttributeJdOverflowConvertV2ApiService
    {
        return $this->getService('StarAttributeJdOverflowConvertV2Api', \Oceanengine\Api\StarAttributeJdOverflowConvertV2ApiService::class);
    }

    public function starAttributeUserEventFeedbackV2Api(): \Oceanengine\Api\StarAttributeUserEventFeedbackV2ApiService
    {
        return $this->getService('StarAttributeUserEventFeedbackV2Api', \Oceanengine\Api\StarAttributeUserEventFeedbackV2ApiService::class);
    }

    public function starAttributeUserInfoFeedbackV2Api(): \Oceanengine\Api\StarAttributeUserInfoFeedbackV2ApiService
    {
        return $this->getService('StarAttributeUserInfoFeedbackV2Api', \Oceanengine\Api\StarAttributeUserInfoFeedbackV2ApiService::class);
    }

    public function starBillGetPendingV2Api(): \Oceanengine\Api\StarBillGetPendingV2ApiService
    {
        return $this->getService('StarBillGetPendingV2Api', \Oceanengine\Api\StarBillGetPendingV2ApiService::class);
    }

    public function starBillPayV2Api(): \Oceanengine\Api\StarBillPayV2ApiService
    {
        return $this->getService('StarBillPayV2Api', \Oceanengine\Api\StarBillPayV2ApiService::class);
    }

    public function starBrandCategoryListV2Api(): \Oceanengine\Api\StarBrandCategoryListV2ApiService
    {
        return $this->getService('StarBrandCategoryListV2Api', \Oceanengine\Api\StarBrandCategoryListV2ApiService::class);
    }

    public function starBrandListV2Api(): \Oceanengine\Api\StarBrandListV2ApiService
    {
        return $this->getService('StarBrandListV2Api', \Oceanengine\Api\StarBrandListV2ApiService::class);
    }

    public function starCampaignListV2Api(): \Oceanengine\Api\StarCampaignListV2ApiService
    {
        return $this->getService('StarCampaignListV2Api', \Oceanengine\Api\StarCampaignListV2ApiService::class);
    }

    public function starChallengeAddBudgetV2Api(): \Oceanengine\Api\StarChallengeAddBudgetV2ApiService
    {
        return $this->getService('StarChallengeAddBudgetV2Api', \Oceanengine\Api\StarChallengeAddBudgetV2ApiService::class);
    }

    public function starChallengeAuthorListV2Api(): \Oceanengine\Api\StarChallengeAuthorListV2ApiService
    {
        return $this->getService('StarChallengeAuthorListV2Api', \Oceanengine\Api\StarChallengeAuthorListV2ApiService::class);
    }

    public function starChallengeCancelV2Api(): \Oceanengine\Api\StarChallengeCancelV2ApiService
    {
        return $this->getService('StarChallengeCancelV2Api', \Oceanengine\Api\StarChallengeCancelV2ApiService::class);
    }

    public function starChallengeChooseTaskItemWithRewardV2Api(): \Oceanengine\Api\StarChallengeChooseTaskItemWithRewardV2ApiService
    {
        return $this->getService('StarChallengeChooseTaskItemWithRewardV2Api', \Oceanengine\Api\StarChallengeChooseTaskItemWithRewardV2ApiService::class);
    }

    public function starChallengeExpandRangeV2Api(): \Oceanengine\Api\StarChallengeExpandRangeV2ApiService
    {
        return $this->getService('StarChallengeExpandRangeV2Api', \Oceanengine\Api\StarChallengeExpandRangeV2ApiService::class);
    }

    public function starChallengeGetCustomTaskDataV2Api(): \Oceanengine\Api\StarChallengeGetCustomTaskDataV2ApiService
    {
        return $this->getService('StarChallengeGetCustomTaskDataV2Api', \Oceanengine\Api\StarChallengeGetCustomTaskDataV2ApiService::class);
    }

    public function starChallengeGetCustomTaskListV2Api(): \Oceanengine\Api\StarChallengeGetCustomTaskListV2ApiService
    {
        return $this->getService('StarChallengeGetCustomTaskListV2Api', \Oceanengine\Api\StarChallengeGetCustomTaskListV2ApiService::class);
    }

    public function starChallengeGetPushAdResultsV2Api(): \Oceanengine\Api\StarChallengeGetPushAdResultsV2ApiService
    {
        return $this->getService('StarChallengeGetPushAdResultsV2Api', \Oceanengine\Api\StarChallengeGetPushAdResultsV2ApiService::class);
    }

    public function starChallengeInfoV2Api(): \Oceanengine\Api\StarChallengeInfoV2ApiService
    {
        return $this->getService('StarChallengeInfoV2Api', \Oceanengine\Api\StarChallengeInfoV2ApiService::class);
    }

    public function starChallengeItemsDataV2Api(): \Oceanengine\Api\StarChallengeItemsDataV2ApiService
    {
        return $this->getService('StarChallengeItemsDataV2Api', \Oceanengine\Api\StarChallengeItemsDataV2ApiService::class);
    }

    public function starChallengeListV2Api(): \Oceanengine\Api\StarChallengeListV2ApiService
    {
        return $this->getService('StarChallengeListV2Api', \Oceanengine\Api\StarChallengeListV2ApiService::class);
    }

    public function starChallengePushItemsToAdV2Api(): \Oceanengine\Api\StarChallengePushItemsToAdV2ApiService
    {
        return $this->getService('StarChallengePushItemsToAdV2Api', \Oceanengine\Api\StarChallengePushItemsToAdV2ApiService::class);
    }

    public function starChallengeSyncItemToAdV2Api(): \Oceanengine\Api\StarChallengeSyncItemToAdV2ApiService
    {
        return $this->getService('StarChallengeSyncItemToAdV2Api', \Oceanengine\Api\StarChallengeSyncItemToAdV2ApiService::class);
    }

    public function starClueGetV2Api(): \Oceanengine\Api\StarClueGetV2ApiService
    {
        return $this->getService('StarClueGetV2Api', \Oceanengine\Api\StarClueGetV2ApiService::class);
    }

    public function starComponentCreateCommonComponentV2Api(): \Oceanengine\Api\StarComponentCreateCommonComponentV2ApiService
    {
        return $this->getService('StarComponentCreateCommonComponentV2Api', \Oceanengine\Api\StarComponentCreateCommonComponentV2ApiService::class);
    }

    public function starComponentCreateLinkV2Api(): \Oceanengine\Api\StarComponentCreateLinkV2ApiService
    {
        return $this->getService('StarComponentCreateLinkV2Api', \Oceanengine\Api\StarComponentCreateLinkV2ApiService::class);
    }

    public function starComponentQueryIndustryAnchorV2Api(): \Oceanengine\Api\StarComponentQueryIndustryAnchorV2ApiService
    {
        return $this->getService('StarComponentQueryIndustryAnchorV2Api', \Oceanengine\Api\StarComponentQueryIndustryAnchorV2ApiService::class);
    }

    public function starComponentQueryLinkV2Api(): \Oceanengine\Api\StarComponentQueryLinkV2ApiService
    {
        return $this->getService('StarComponentQueryLinkV2Api', \Oceanengine\Api\StarComponentQueryLinkV2ApiService::class);
    }

    public function starComponentUpdateCommonComponentV2Api(): \Oceanengine\Api\StarComponentUpdateCommonComponentV2ApiService
    {
        return $this->getService('StarComponentUpdateCommonComponentV2Api', \Oceanengine\Api\StarComponentUpdateCommonComponentV2ApiService::class);
    }

    public function starComponentUpdateLinkV2Api(): \Oceanengine\Api\StarComponentUpdateLinkV2ApiService
    {
        return $this->getService('StarComponentUpdateLinkV2Api', \Oceanengine\Api\StarComponentUpdateLinkV2ApiService::class);
    }

    public function starCopyrightCreateV2Api(): \Oceanengine\Api\StarCopyrightCreateV2ApiService
    {
        return $this->getService('StarCopyrightCreateV2Api', \Oceanengine\Api\StarCopyrightCreateV2ApiService::class);
    }

    public function starCopyrightGetV2Api(): \Oceanengine\Api\StarCopyrightGetV2ApiService
    {
        return $this->getService('StarCopyrightGetV2Api', \Oceanengine\Api\StarCopyrightGetV2ApiService::class);
    }

    public function starCreateProjectV2Api(): \Oceanengine\Api\StarCreateProjectV2ApiService
    {
        return $this->getService('StarCreateProjectV2Api', \Oceanengine\Api\StarCreateProjectV2ApiService::class);
    }

    public function starDataTaskTimelineReportV2Api(): \Oceanengine\Api\StarDataTaskTimelineReportV2ApiService
    {
        return $this->getService('StarDataTaskTimelineReportV2Api', \Oceanengine\Api\StarDataTaskTimelineReportV2ApiService::class);
    }

    public function starDemandCreateAssignV2Api(): \Oceanengine\Api\StarDemandCreateAssignV2ApiService
    {
        return $this->getService('StarDemandCreateAssignV2Api', \Oceanengine\Api\StarDemandCreateAssignV2ApiService::class);
    }

    public function starDemandCreateChallengeV2Api(): \Oceanengine\Api\StarDemandCreateChallengeV2ApiService
    {
        return $this->getService('StarDemandCreateChallengeV2Api', \Oceanengine\Api\StarDemandCreateChallengeV2ApiService::class);
    }

    public function starDemandGetEpisodeLimitV2Api(): \Oceanengine\Api\StarDemandGetEpisodeLimitV2ApiService
    {
        return $this->getService('StarDemandGetEpisodeLimitV2Api', \Oceanengine\Api\StarDemandGetEpisodeLimitV2ApiService::class);
    }

    public function starDemandGetResellCodeV2Api(): \Oceanengine\Api\StarDemandGetResellCodeV2ApiService
    {
        return $this->getService('StarDemandGetResellCodeV2Api', \Oceanengine\Api\StarDemandGetResellCodeV2ApiService::class);
    }

    public function starDemandListV2Api(): \Oceanengine\Api\StarDemandListV2ApiService
    {
        return $this->getService('StarDemandListV2Api', \Oceanengine\Api\StarDemandListV2ApiService::class);
    }

    public function starDemandMixListGetV2Api(): \Oceanengine\Api\StarDemandMixListGetV2ApiService
    {
        return $this->getService('StarDemandMixListGetV2Api', \Oceanengine\Api\StarDemandMixListGetV2ApiService::class);
    }

    public function starDemandOmCreateChallengeV2Api(): \Oceanengine\Api\StarDemandOmCreateChallengeV2ApiService
    {
        return $this->getService('StarDemandOmCreateChallengeV2Api', \Oceanengine\Api\StarDemandOmCreateChallengeV2ApiService::class);
    }

    public function starDemandOmExpandChallengeProviderV2Api(): \Oceanengine\Api\StarDemandOmExpandChallengeProviderV2ApiService
    {
        return $this->getService('StarDemandOmExpandChallengeProviderV2Api', \Oceanengine\Api\StarDemandOmExpandChallengeProviderV2ApiService::class);
    }

    public function starDemandOmExpandChallengeV2Api(): \Oceanengine\Api\StarDemandOmExpandChallengeV2ApiService
    {
        return $this->getService('StarDemandOmExpandChallengeV2Api', \Oceanengine\Api\StarDemandOmExpandChallengeV2ApiService::class);
    }

    public function starDemandOmGetChallengeDispatchedProviderListV2Api(): \Oceanengine\Api\StarDemandOmGetChallengeDispatchedProviderListV2ApiService
    {
        return $this->getService('StarDemandOmGetChallengeDispatchedProviderListV2Api', \Oceanengine\Api\StarDemandOmGetChallengeDispatchedProviderListV2ApiService::class);
    }

    public function starDemandOmGetChallengeItemsDataV2Api(): \Oceanengine\Api\StarDemandOmGetChallengeItemsDataV2ApiService
    {
        return $this->getService('StarDemandOmGetChallengeItemsDataV2Api', \Oceanengine\Api\StarDemandOmGetChallengeItemsDataV2ApiService::class);
    }

    public function starDemandOmGetChallengeV2Api(): \Oceanengine\Api\StarDemandOmGetChallengeV2ApiService
    {
        return $this->getService('StarDemandOmGetChallengeV2Api', \Oceanengine\Api\StarDemandOmGetChallengeV2ApiService::class);
    }

    public function starDemandOmGetDemandListV2Api(): \Oceanengine\Api\StarDemandOmGetDemandListV2ApiService
    {
        return $this->getService('StarDemandOmGetDemandListV2Api', \Oceanengine\Api\StarDemandOmGetDemandListV2ApiService::class);
    }

    public function starDemandOmUpdateChallengeV2Api(): \Oceanengine\Api\StarDemandOmUpdateChallengeV2ApiService
    {
        return $this->getService('StarDemandOmUpdateChallengeV2Api', \Oceanengine\Api\StarDemandOmUpdateChallengeV2ApiService::class);
    }

    public function starDemandOrderListV2Api(): \Oceanengine\Api\StarDemandOrderListV2ApiService
    {
        return $this->getService('StarDemandOrderListV2Api', \Oceanengine\Api\StarDemandOrderListV2ApiService::class);
    }

    public function starDemandSearchWordModifyV2Api(): \Oceanengine\Api\StarDemandSearchWordModifyV2ApiService
    {
        return $this->getService('StarDemandSearchWordModifyV2Api', \Oceanengine\Api\StarDemandSearchWordModifyV2ApiService::class);
    }

    public function starDemanderDemanderGetAuthorBindInfoV2Api(): \Oceanengine\Api\StarDemanderDemanderGetAuthorBindInfoV2ApiService
    {
        return $this->getService('StarDemanderDemanderGetAuthorBindInfoV2Api', \Oceanengine\Api\StarDemanderDemanderGetAuthorBindInfoV2ApiService::class);
    }

    public function starDemanderDemanderGetBindShareCodeV2Api(): \Oceanengine\Api\StarDemanderDemanderGetBindShareCodeV2ApiService
    {
        return $this->getService('StarDemanderDemanderGetBindShareCodeV2Api', \Oceanengine\Api\StarDemanderDemanderGetBindShareCodeV2ApiService::class);
    }

    public function starDemanderGetCarBrandListV2Api(): \Oceanengine\Api\StarDemanderGetCarBrandListV2ApiService
    {
        return $this->getService('StarDemanderGetCarBrandListV2Api', \Oceanengine\Api\StarDemanderGetCarBrandListV2ApiService::class);
    }

    public function starDemanderGetRegisteredIpActsV2Api(): \Oceanengine\Api\StarDemanderGetRegisteredIpActsV2ApiService
    {
        return $this->getService('StarDemanderGetRegisteredIpActsV2Api', \Oceanengine\Api\StarDemanderGetRegisteredIpActsV2ApiService::class);
    }

    public function starDemanderQueryCpsTaskSalesV2Api(): \Oceanengine\Api\StarDemanderQueryCpsTaskSalesV2ApiService
    {
        return $this->getService('StarDemanderQueryCpsTaskSalesV2Api', \Oceanengine\Api\StarDemanderQueryCpsTaskSalesV2ApiService::class);
    }

    public function starDemanderUploadCpsTaskSalesV2Api(): \Oceanengine\Api\StarDemanderUploadCpsTaskSalesV2ApiService
    {
        return $this->getService('StarDemanderUploadCpsTaskSalesV2Api', \Oceanengine\Api\StarDemanderUploadCpsTaskSalesV2ApiService::class);
    }

    public function starFeCommonServiceTalentDayGetCheckInCodeV2Api(): \Oceanengine\Api\StarFeCommonServiceTalentDayGetCheckInCodeV2ApiService
    {
        return $this->getService('StarFeCommonServiceTalentDayGetCheckInCodeV2Api', \Oceanengine\Api\StarFeCommonServiceTalentDayGetCheckInCodeV2ApiService::class);
    }

    public function starFeCommonServiceTalentDayJudgeCheckedInV2Api(): \Oceanengine\Api\StarFeCommonServiceTalentDayJudgeCheckedInV2ApiService
    {
        return $this->getService('StarFeCommonServiceTalentDayJudgeCheckedInV2Api', \Oceanengine\Api\StarFeCommonServiceTalentDayJudgeCheckedInV2ApiService::class);
    }

    public function starGetCreateChallengeDataDictV2Api(): \Oceanengine\Api\StarGetCreateChallengeDataDictV2ApiService
    {
        return $this->getService('StarGetCreateChallengeDataDictV2Api', \Oceanengine\Api\StarGetCreateChallengeDataDictV2ApiService::class);
    }

    public function starInfoV2Api(): \Oceanengine\Api\StarInfoV2ApiService
    {
        return $this->getService('StarInfoV2Api', \Oceanengine\Api\StarInfoV2ApiService::class);
    }

    public function starItemAuthorGetV2Api(): \Oceanengine\Api\StarItemAuthorGetV2ApiService
    {
        return $this->getService('StarItemAuthorGetV2Api', \Oceanengine\Api\StarItemAuthorGetV2ApiService::class);
    }

    public function starMcnContractChallengeV2Api(): \Oceanengine\Api\StarMcnContractChallengeV2ApiService
    {
        return $this->getService('StarMcnContractChallengeV2Api', \Oceanengine\Api\StarMcnContractChallengeV2ApiService::class);
    }

    public function starMcnGetAuthorListV2Api(): \Oceanengine\Api\StarMcnGetAuthorListV2ApiService
    {
        return $this->getService('StarMcnGetAuthorListV2Api', \Oceanengine\Api\StarMcnGetAuthorListV2ApiService::class);
    }

    public function starMcnGetContractChallengeAuthorItemListV2V2Api(): \Oceanengine\Api\StarMcnGetContractChallengeAuthorItemListV2V2ApiService
    {
        return $this->getService('StarMcnGetContractChallengeAuthorItemListV2V2Api', \Oceanengine\Api\StarMcnGetContractChallengeAuthorItemListV2V2ApiService::class);
    }

    public function starMcnGetContractedChallengeListV2Api(): \Oceanengine\Api\StarMcnGetContractedChallengeListV2ApiService
    {
        return $this->getService('StarMcnGetContractedChallengeListV2Api', \Oceanengine\Api\StarMcnGetContractedChallengeListV2ApiService::class);
    }

    public function starMcnGetContractedChallengeUrlV2Api(): \Oceanengine\Api\StarMcnGetContractedChallengeUrlV2ApiService
    {
        return $this->getService('StarMcnGetContractedChallengeUrlV2Api', \Oceanengine\Api\StarMcnGetContractedChallengeUrlV2ApiService::class);
    }

    public function starMcnGetUnparticipatedTaskV2Api(): \Oceanengine\Api\StarMcnGetUnparticipatedTaskV2ApiService
    {
        return $this->getService('StarMcnGetUnparticipatedTaskV2Api', \Oceanengine\Api\StarMcnGetUnparticipatedTaskV2ApiService::class);
    }

    public function starMcnMixListGetV2Api(): \Oceanengine\Api\StarMcnMixListGetV2ApiService
    {
        return $this->getService('StarMcnMixListGetV2Api', \Oceanengine\Api\StarMcnMixListGetV2ApiService::class);
    }

    public function starMcnProviderGetParticipatedTaskV2Api(): \Oceanengine\Api\StarMcnProviderGetParticipatedTaskV2ApiService
    {
        return $this->getService('StarMcnProviderGetParticipatedTaskV2Api', \Oceanengine\Api\StarMcnProviderGetParticipatedTaskV2ApiService::class);
    }

    public function starMcnProviderGetRecruitInfoGetV2Api(): \Oceanengine\Api\StarMcnProviderGetRecruitInfoGetV2ApiService
    {
        return $this->getService('StarMcnProviderGetRecruitInfoGetV2Api', \Oceanengine\Api\StarMcnProviderGetRecruitInfoGetV2ApiService::class);
    }

    public function starMcnProviderGetTagOnTaskV2Api(): \Oceanengine\Api\StarMcnProviderGetTagOnTaskV2ApiService
    {
        return $this->getService('StarMcnProviderGetTagOnTaskV2Api', \Oceanengine\Api\StarMcnProviderGetTagOnTaskV2ApiService::class);
    }

    public function starMcnProviderGetTaskAuthorListV2Api(): \Oceanengine\Api\StarMcnProviderGetTaskAuthorListV2ApiService
    {
        return $this->getService('StarMcnProviderGetTaskAuthorListV2Api', \Oceanengine\Api\StarMcnProviderGetTaskAuthorListV2ApiService::class);
    }

    public function starMcnProviderGetTaskDetailV2Api(): \Oceanengine\Api\StarMcnProviderGetTaskDetailV2ApiService
    {
        return $this->getService('StarMcnProviderGetTaskDetailV2Api', \Oceanengine\Api\StarMcnProviderGetTaskDetailV2ApiService::class);
    }

    public function starMcnProviderGetTaskItemListV2Api(): \Oceanengine\Api\StarMcnProviderGetTaskItemListV2ApiService
    {
        return $this->getService('StarMcnProviderGetTaskItemListV2Api', \Oceanengine\Api\StarMcnProviderGetTaskItemListV2ApiService::class);
    }

    public function starMcnProviderGetTaskShareCodeV2Api(): \Oceanengine\Api\StarMcnProviderGetTaskShareCodeV2ApiService
    {
        return $this->getService('StarMcnProviderGetTaskShareCodeV2Api', \Oceanengine\Api\StarMcnProviderGetTaskShareCodeV2ApiService::class);
    }

    public function starMcnProviderGetUnparticipatedTaskV2Api(): \Oceanengine\Api\StarMcnProviderGetUnparticipatedTaskV2ApiService
    {
        return $this->getService('StarMcnProviderGetUnparticipatedTaskV2Api', \Oceanengine\Api\StarMcnProviderGetUnparticipatedTaskV2ApiService::class);
    }

    public function starMcnProviderHandleJoinedAuthorV2Api(): \Oceanengine\Api\StarMcnProviderHandleJoinedAuthorV2ApiService
    {
        return $this->getService('StarMcnProviderHandleJoinedAuthorV2Api', \Oceanengine\Api\StarMcnProviderHandleJoinedAuthorV2ApiService::class);
    }

    public function starMcnProviderUploadSearchItemV2Api(): \Oceanengine\Api\StarMcnProviderUploadSearchItemV2ApiService
    {
        return $this->getService('StarMcnProviderUploadSearchItemV2Api', \Oceanengine\Api\StarMcnProviderUploadSearchItemV2ApiService::class);
    }

    public function starMcnRecuritProviderGetTaskOrderListGetV2Api(): \Oceanengine\Api\StarMcnRecuritProviderGetTaskOrderListGetV2ApiService
    {
        return $this->getService('StarMcnRecuritProviderGetTaskOrderListGetV2Api', \Oceanengine\Api\StarMcnRecuritProviderGetTaskOrderListGetV2ApiService::class);
    }

    public function starOrderApproveResourceV2Api(): \Oceanengine\Api\StarOrderApproveResourceV2ApiService
    {
        return $this->getService('StarOrderApproveResourceV2Api', \Oceanengine\Api\StarOrderApproveResourceV2ApiService::class);
    }

    public function starOrderDemanderCancelV2Api(): \Oceanengine\Api\StarOrderDemanderCancelV2ApiService
    {
        return $this->getService('StarOrderDemanderCancelV2Api', \Oceanengine\Api\StarOrderDemanderCancelV2ApiService::class);
    }

    public function starOrderDetailV2Api(): \Oceanengine\Api\StarOrderDetailV2ApiService
    {
        return $this->getService('StarOrderDetailV2Api', \Oceanengine\Api\StarOrderDetailV2ApiService::class);
    }

    public function starOrderFinishV2Api(): \Oceanengine\Api\StarOrderFinishV2ApiService
    {
        return $this->getService('StarOrderFinishV2Api', \Oceanengine\Api\StarOrderFinishV2ApiService::class);
    }

    public function starOrderGetCancelAmountV2Api(): \Oceanengine\Api\StarOrderGetCancelAmountV2ApiService
    {
        return $this->getService('StarOrderGetCancelAmountV2Api', \Oceanengine\Api\StarOrderGetCancelAmountV2ApiService::class);
    }

    public function starOrderGetComponentV2Api(): \Oceanengine\Api\StarOrderGetComponentV2ApiService
    {
        return $this->getService('StarOrderGetComponentV2Api', \Oceanengine\Api\StarOrderGetComponentV2ApiService::class);
    }

    public function starOrderGetInfoV2Api(): \Oceanengine\Api\StarOrderGetInfoV2ApiService
    {
        return $this->getService('StarOrderGetInfoV2Api', \Oceanengine\Api\StarOrderGetInfoV2ApiService::class);
    }

    public function starOrderGetLiveV2Api(): \Oceanengine\Api\StarOrderGetLiveV2ApiService
    {
        return $this->getService('StarOrderGetLiveV2Api', \Oceanengine\Api\StarOrderGetLiveV2ApiService::class);
    }

    public function starOrderGetScriptV2Api(): \Oceanengine\Api\StarOrderGetScriptV2ApiService
    {
        return $this->getService('StarOrderGetScriptV2Api', \Oceanengine\Api\StarOrderGetScriptV2ApiService::class);
    }

    public function starOrderGetVideoV2Api(): \Oceanengine\Api\StarOrderGetVideoV2ApiService
    {
        return $this->getService('StarOrderGetVideoV2Api', \Oceanengine\Api\StarOrderGetVideoV2ApiService::class);
    }

    public function starOrderListByCampaignV2Api(): \Oceanengine\Api\StarOrderListByCampaignV2ApiService
    {
        return $this->getService('StarOrderListByCampaignV2Api', \Oceanengine\Api\StarOrderListByCampaignV2ApiService::class);
    }

    public function starOrderPublishResourceV2Api(): \Oceanengine\Api\StarOrderPublishResourceV2ApiService
    {
        return $this->getService('StarOrderPublishResourceV2Api', \Oceanengine\Api\StarOrderPublishResourceV2ApiService::class);
    }

    public function starOrderPushResourceV2Api(): \Oceanengine\Api\StarOrderPushResourceV2ApiService
    {
        return $this->getService('StarOrderPushResourceV2Api', \Oceanengine\Api\StarOrderPushResourceV2ApiService::class);
    }

    public function starOrderRejectResourceV2Api(): \Oceanengine\Api\StarOrderRejectResourceV2ApiService
    {
        return $this->getService('StarOrderRejectResourceV2Api', \Oceanengine\Api\StarOrderRejectResourceV2ApiService::class);
    }

    public function starOrderReplyAuthorCancelV2Api(): \Oceanengine\Api\StarOrderReplyAuthorCancelV2ApiService
    {
        return $this->getService('StarOrderReplyAuthorCancelV2Api', \Oceanengine\Api\StarOrderReplyAuthorCancelV2ApiService::class);
    }

    public function starOrderUpdateV2Api(): \Oceanengine\Api\StarOrderUpdateV2ApiService
    {
        return $this->getService('StarOrderUpdateV2Api', \Oceanengine\Api\StarOrderUpdateV2ApiService::class);
    }

    public function starProjectListV2Api(): \Oceanengine\Api\StarProjectListV2ApiService
    {
        return $this->getService('StarProjectListV2Api', \Oceanengine\Api\StarProjectListV2ApiService::class);
    }

    public function starProviderTaskItemListV2Api(): \Oceanengine\Api\StarProviderTaskItemListV2ApiService
    {
        return $this->getService('StarProviderTaskItemListV2Api', \Oceanengine\Api\StarProviderTaskItemListV2ApiService::class);
    }

    public function starProviderTaskListV2Api(): \Oceanengine\Api\StarProviderTaskListV2ApiService
    {
        return $this->getService('StarProviderTaskListV2Api', \Oceanengine\Api\StarProviderTaskListV2ApiService::class);
    }

    public function starReportCustomDataTopicDailyReportV2Api(): \Oceanengine\Api\StarReportCustomDataTopicDailyReportV2ApiService
    {
        return $this->getService('StarReportCustomDataTopicDailyReportV2Api', \Oceanengine\Api\StarReportCustomDataTopicDailyReportV2ApiService::class);
    }

    public function starReportCustomDataTopicReportV2Api(): \Oceanengine\Api\StarReportCustomDataTopicReportV2ApiService
    {
        return $this->getService('StarReportCustomDataTopicReportV2Api', \Oceanengine\Api\StarReportCustomDataTopicReportV2ApiService::class);
    }

    public function starReportDataTopicConfigV2Api(): \Oceanengine\Api\StarReportDataTopicConfigV2ApiService
    {
        return $this->getService('StarReportDataTopicConfigV2Api', \Oceanengine\Api\StarReportDataTopicConfigV2ApiService::class);
    }

    public function starReportOrderOverviewGetV2Api(): \Oceanengine\Api\StarReportOrderOverviewGetV2ApiService
    {
        return $this->getService('StarReportOrderOverviewGetV2Api', \Oceanengine\Api\StarReportOrderOverviewGetV2ApiService::class);
    }

    public function starReportOrderOverviewV2Api(): \Oceanengine\Api\StarReportOrderOverviewV2ApiService
    {
        return $this->getService('StarReportOrderOverviewV2Api', \Oceanengine\Api\StarReportOrderOverviewV2ApiService::class);
    }

    public function starReportOrderUserDistributionGetV2Api(): \Oceanengine\Api\StarReportOrderUserDistributionGetV2ApiService
    {
        return $this->getService('StarReportOrderUserDistributionGetV2Api', \Oceanengine\Api\StarReportOrderUserDistributionGetV2ApiService::class);
    }

    public function starStarAdUniteTaskDetailV2Api(): \Oceanengine\Api\StarStarAdUniteTaskDetailV2ApiService
    {
        return $this->getService('StarStarAdUniteTaskDetailV2Api', \Oceanengine\Api\StarStarAdUniteTaskDetailV2ApiService::class);
    }

    public function starStarAdUniteTaskItemListV2Api(): \Oceanengine\Api\StarStarAdUniteTaskItemListV2ApiService
    {
        return $this->getService('StarStarAdUniteTaskItemListV2Api', \Oceanengine\Api\StarStarAdUniteTaskItemListV2ApiService::class);
    }

    public function starStarAdUniteTaskListV2Api(): \Oceanengine\Api\StarStarAdUniteTaskListV2ApiService
    {
        return $this->getService('StarStarAdUniteTaskListV2Api', \Oceanengine\Api\StarStarAdUniteTaskListV2ApiService::class);
    }

    public function starTaskBindProjectV2Api(): \Oceanengine\Api\StarTaskBindProjectV2ApiService
    {
        return $this->getService('StarTaskBindProjectV2Api', \Oceanengine\Api\StarTaskBindProjectV2ApiService::class);
    }

    public function starTaskListByProjectV2Api(): \Oceanengine\Api\StarTaskListByProjectV2ApiService
    {
        return $this->getService('StarTaskListByProjectV2Api', \Oceanengine\Api\StarTaskListByProjectV2ApiService::class);
    }

    public function starUpdateProjectV2Api(): \Oceanengine\Api\StarUpdateProjectV2ApiService
    {
        return $this->getService('StarUpdateProjectV2Api', \Oceanengine\Api\StarUpdateProjectV2ApiService::class);
    }

    public function starUserGetAwemeAuthorIdV2Api(): \Oceanengine\Api\StarUserGetAwemeAuthorIdV2ApiService
    {
        return $this->getService('StarUserGetAwemeAuthorIdV2Api', \Oceanengine\Api\StarUserGetAwemeAuthorIdV2ApiService::class);
    }

    public function starUserGetStarIdV2Api(): \Oceanengine\Api\StarUserGetStarIdV2ApiService
    {
        return $this->getService('StarUserGetStarIdV2Api', \Oceanengine\Api\StarUserGetStarIdV2ApiService::class);
    }

    public function starVasAppendOrderToBoostItemGroupV2Api(): \Oceanengine\Api\StarVasAppendOrderToBoostItemGroupV2ApiService
    {
        return $this->getService('StarVasAppendOrderToBoostItemGroupV2Api', \Oceanengine\Api\StarVasAppendOrderToBoostItemGroupV2ApiService::class);
    }

    public function starVasCancelBoostItemGroupV2Api(): \Oceanengine\Api\StarVasCancelBoostItemGroupV2ApiService
    {
        return $this->getService('StarVasCancelBoostItemGroupV2Api', \Oceanengine\Api\StarVasCancelBoostItemGroupV2ApiService::class);
    }

    public function starVasCreateBoostItemGroupV2Api(): \Oceanengine\Api\StarVasCreateBoostItemGroupV2ApiService
    {
        return $this->getService('StarVasCreateBoostItemGroupV2Api', \Oceanengine\Api\StarVasCreateBoostItemGroupV2ApiService::class);
    }

    public function starVasGetBoostGroupListV2Api(): \Oceanengine\Api\StarVasGetBoostGroupListV2ApiService
    {
        return $this->getService('StarVasGetBoostGroupListV2Api', \Oceanengine\Api\StarVasGetBoostGroupListV2ApiService::class);
    }

    public function starVasGetBoostGroupOptionsV2Api(): \Oceanengine\Api\StarVasGetBoostGroupOptionsV2ApiService
    {
        return $this->getService('StarVasGetBoostGroupOptionsV2Api', \Oceanengine\Api\StarVasGetBoostGroupOptionsV2ApiService::class);
    }

    public function starVasGetBoostItemGroupDetailV2Api(): \Oceanengine\Api\StarVasGetBoostItemGroupDetailV2ApiService
    {
        return $this->getService('StarVasGetBoostItemGroupDetailV2Api', \Oceanengine\Api\StarVasGetBoostItemGroupDetailV2ApiService::class);
    }

    public function starVasGetCommonAuthorPackageListV2Api(): \Oceanengine\Api\StarVasGetCommonAuthorPackageListV2ApiService
    {
        return $this->getService('StarVasGetCommonAuthorPackageListV2Api', \Oceanengine\Api\StarVasGetCommonAuthorPackageListV2ApiService::class);
    }

    public function starVasGetExportBoostItemGroupResultV2Api(): \Oceanengine\Api\StarVasGetExportBoostItemGroupResultV2ApiService
    {
        return $this->getService('StarVasGetExportBoostItemGroupResultV2Api', \Oceanengine\Api\StarVasGetExportBoostItemGroupResultV2ApiService::class);
    }

    public function starVasSubmitExportBoostItemGroupDataV2Api(): \Oceanengine\Api\StarVasSubmitExportBoostItemGroupDataV2ApiService
    {
        return $this->getService('StarVasSubmitExportBoostItemGroupDataV2Api', \Oceanengine\Api\StarVasSubmitExportBoostItemGroupDataV2ApiService::class);
    }

    public function stardeliveryTaskAuthorDetailV30Api(): \Oceanengine\Api\StardeliveryTaskAuthorDetailV30ApiService
    {
        return $this->getService('StardeliveryTaskAuthorDetailV30Api', \Oceanengine\Api\StardeliveryTaskAuthorDetailV30ApiService::class);
    }

    public function stardeliveryTaskAuthorVideoAuditV30Api(): \Oceanengine\Api\StardeliveryTaskAuthorVideoAuditV30ApiService
    {
        return $this->getService('StardeliveryTaskAuthorVideoAuditV30Api', \Oceanengine\Api\StardeliveryTaskAuthorVideoAuditV30ApiService::class);
    }

    public function stardeliveryTaskAuthorVideoDetailV30Api(): \Oceanengine\Api\StardeliveryTaskAuthorVideoDetailV30ApiService
    {
        return $this->getService('StardeliveryTaskAuthorVideoDetailV30Api', \Oceanengine\Api\StardeliveryTaskAuthorVideoDetailV30ApiService::class);
    }

    public function stardeliveryTaskBudgetUpdateV30Api(): \Oceanengine\Api\StardeliveryTaskBudgetUpdateV30ApiService
    {
        return $this->getService('StardeliveryTaskBudgetUpdateV30Api', \Oceanengine\Api\StardeliveryTaskBudgetUpdateV30ApiService::class);
    }

    public function stardeliveryTaskCancelV30Api(): \Oceanengine\Api\StardeliveryTaskCancelV30ApiService
    {
        return $this->getService('StardeliveryTaskCancelV30Api', \Oceanengine\Api\StardeliveryTaskCancelV30ApiService::class);
    }

    public function stardeliveryTaskDetailV30Api(): \Oceanengine\Api\StardeliveryTaskDetailV30ApiService
    {
        return $this->getService('StardeliveryTaskDetailV30Api', \Oceanengine\Api\StardeliveryTaskDetailV30ApiService::class);
    }

    public function stardeliveryTaskListV30Api(): \Oceanengine\Api\StardeliveryTaskListV30ApiService
    {
        return $this->getService('StardeliveryTaskListV30Api', \Oceanengine\Api\StardeliveryTaskListV30ApiService::class);
    }

    public function stardeliveryTaskPostEndTimeUpdateV30Api(): \Oceanengine\Api\StardeliveryTaskPostEndTimeUpdateV30ApiService
    {
        return $this->getService('StardeliveryTaskPostEndTimeUpdateV30Api', \Oceanengine\Api\StardeliveryTaskPostEndTimeUpdateV30ApiService::class);
    }

    public function stardeliveryTaskShareV30Api(): \Oceanengine\Api\StardeliveryTaskShareV30ApiService
    {
        return $this->getService('StardeliveryTaskShareV30Api', \Oceanengine\Api\StardeliveryTaskShareV30ApiService::class);
    }

    public function stardeliveryTaskShareableListV30Api(): \Oceanengine\Api\StardeliveryTaskShareableListV30ApiService
    {
        return $this->getService('StardeliveryTaskShareableListV30Api', \Oceanengine\Api\StardeliveryTaskShareableListV30ApiService::class);
    }

    public function stardeliveryTaskSharingListV30Api(): \Oceanengine\Api\StardeliveryTaskSharingListV30ApiService
    {
        return $this->getService('StardeliveryTaskSharingListV30Api', \Oceanengine\Api\StardeliveryTaskSharingListV30ApiService::class);
    }

    public function stardeliveryTaskUnshareV30Api(): \Oceanengine\Api\StardeliveryTaskUnshareV30ApiService
    {
        return $this->getService('StardeliveryTaskUnshareV30Api', \Oceanengine\Api\StardeliveryTaskUnshareV30ApiService::class);
    }

    public function stdProjectCreateV30Api(): \Oceanengine\Api\StdProjectCreateV30ApiService
    {
        return $this->getService('StdProjectCreateV30Api', \Oceanengine\Api\StdProjectCreateV30ApiService::class);
    }

    public function stdProjectListV30Api(): \Oceanengine\Api\StdProjectListV30ApiService
    {
        return $this->getService('StdProjectListV30Api', \Oceanengine\Api\StdProjectListV30ApiService::class);
    }

    public function stdProjectUpdateV30Api(): \Oceanengine\Api\StdProjectUpdateV30ApiService
    {
        return $this->getService('StdProjectUpdateV30Api', \Oceanengine\Api\StdProjectUpdateV30ApiService::class);
    }

    public function subscribeAccountsAddV30Api(): \Oceanengine\Api\SubscribeAccountsAddV30ApiService
    {
        return $this->getService('SubscribeAccountsAddV30Api', \Oceanengine\Api\SubscribeAccountsAddV30ApiService::class);
    }

    public function subscribeAccountsListV30Api(): \Oceanengine\Api\SubscribeAccountsListV30ApiService
    {
        return $this->getService('SubscribeAccountsListV30Api', \Oceanengine\Api\SubscribeAccountsListV30ApiService::class);
    }

    public function subscribeAccountsRemoveV30Api(): \Oceanengine\Api\SubscribeAccountsRemoveV30ApiService
    {
        return $this->getService('SubscribeAccountsRemoveV30Api', \Oceanengine\Api\SubscribeAccountsRemoveV30ApiService::class);
    }

    public function suggWordsV30Api(): \Oceanengine\Api\SuggWordsV30ApiService
    {
        return $this->getService('SuggWordsV30Api', \Oceanengine\Api\SuggWordsV30ApiService::class);
    }

    public function svipChargeVerifyGetV30Api(): \Oceanengine\Api\SvipChargeVerifyGetV30ApiService
    {
        return $this->getService('SvipChargeVerifyGetV30Api', \Oceanengine\Api\SvipChargeVerifyGetV30ApiService::class);
    }

    public function toolQuickAppManagementQuickAppGetV2Api(): \Oceanengine\Api\ToolQuickAppManagementQuickAppGetV2ApiService
    {
        return $this->getService('ToolQuickAppManagementQuickAppGetV2Api', \Oceanengine\Api\ToolQuickAppManagementQuickAppGetV2ApiService::class);
    }

    public function toolsAdPreviewQrcodeGetV30Api(): \Oceanengine\Api\ToolsAdPreviewQrcodeGetV30ApiService
    {
        return $this->getService('ToolsAdPreviewQrcodeGetV30Api', \Oceanengine\Api\ToolsAdPreviewQrcodeGetV30ApiService::class);
    }

    public function toolsAdRaiseStatusGetV2Api(): \Oceanengine\Api\ToolsAdRaiseStatusGetV2ApiService
    {
        return $this->getService('ToolsAdRaiseStatusGetV2Api', \Oceanengine\Api\ToolsAdRaiseStatusGetV2ApiService::class);
    }

    public function toolsAdminInfoV2Api(): \Oceanengine\Api\ToolsAdminInfoV2ApiService
    {
        return $this->getService('ToolsAdminInfoV2Api', \Oceanengine\Api\ToolsAdminInfoV2ApiService::class);
    }

    public function toolsAdvertiserDiagnosisSuggestionAcceptUpdateV30Api(): \Oceanengine\Api\ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30ApiService
    {
        return $this->getService('ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30Api', \Oceanengine\Api\ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30ApiService::class);
    }

    public function toolsAdvertiserDiagnosisSuggestionGetV30Api(): \Oceanengine\Api\ToolsAdvertiserDiagnosisSuggestionGetV30ApiService
    {
        return $this->getService('ToolsAdvertiserDiagnosisSuggestionGetV30Api', \Oceanengine\Api\ToolsAdvertiserDiagnosisSuggestionGetV30ApiService::class);
    }

    public function toolsAdvertiserStoreSearchV2Api(): \Oceanengine\Api\ToolsAdvertiserStoreSearchV2ApiService
    {
        return $this->getService('ToolsAdvertiserStoreSearchV2Api', \Oceanengine\Api\ToolsAdvertiserStoreSearchV2ApiService::class);
    }

    public function toolsAgreementCreateV30Api(): \Oceanengine\Api\ToolsAgreementCreateV30ApiService
    {
        return $this->getService('ToolsAgreementCreateV30Api', \Oceanengine\Api\ToolsAgreementCreateV30ApiService::class);
    }

    public function toolsAgreementListV30Api(): \Oceanengine\Api\ToolsAgreementListV30ApiService
    {
        return $this->getService('ToolsAgreementListV30Api', \Oceanengine\Api\ToolsAgreementListV30ApiService::class);
    }

    public function toolsAigcMaterialGetV2Api(): \Oceanengine\Api\ToolsAigcMaterialGetV2ApiService
    {
        return $this->getService('ToolsAigcMaterialGetV2Api', \Oceanengine\Api\ToolsAigcMaterialGetV2ApiService::class);
    }

    public function toolsAipThirdSiteCreateV2Api(): \Oceanengine\Api\ToolsAipThirdSiteCreateV2ApiService
    {
        return $this->getService('ToolsAipThirdSiteCreateV2Api', \Oceanengine\Api\ToolsAipThirdSiteCreateV2ApiService::class);
    }

    public function toolsAipThirdSiteGetV2Api(): \Oceanengine\Api\ToolsAipThirdSiteGetV2ApiService
    {
        return $this->getService('ToolsAipThirdSiteGetV2Api', \Oceanengine\Api\ToolsAipThirdSiteGetV2ApiService::class);
    }

    public function toolsAipThirdSiteUpdateV2Api(): \Oceanengine\Api\ToolsAipThirdSiteUpdateV2ApiService
    {
        return $this->getService('ToolsAipThirdSiteUpdateV2Api', \Oceanengine\Api\ToolsAipThirdSiteUpdateV2ApiService::class);
    }

    public function toolsAppIosListV2Api(): \Oceanengine\Api\ToolsAppIosListV2ApiService
    {
        return $this->getService('ToolsAppIosListV2Api', \Oceanengine\Api\ToolsAppIosListV2ApiService::class);
    }

    public function toolsAppManagementAndroidAppListV2Api(): \Oceanengine\Api\ToolsAppManagementAndroidAppListV2ApiService
    {
        return $this->getService('ToolsAppManagementAndroidAppListV2Api', \Oceanengine\Api\ToolsAppManagementAndroidAppListV2ApiService::class);
    }

    public function toolsAppManagementAndroidBasicPackageGetV2Api(): \Oceanengine\Api\ToolsAppManagementAndroidBasicPackageGetV2ApiService
    {
        return $this->getService('ToolsAppManagementAndroidBasicPackageGetV2Api', \Oceanengine\Api\ToolsAppManagementAndroidBasicPackageGetV2ApiService::class);
    }

    public function toolsAppManagementAndroidBasicPackagePublishV2Api(): \Oceanengine\Api\ToolsAppManagementAndroidBasicPackagePublishV2ApiService
    {
        return $this->getService('ToolsAppManagementAndroidBasicPackagePublishV2Api', \Oceanengine\Api\ToolsAppManagementAndroidBasicPackagePublishV2ApiService::class);
    }

    public function toolsAppManagementAndroidBasicPackageUpdateV2Api(): \Oceanengine\Api\ToolsAppManagementAndroidBasicPackageUpdateV2ApiService
    {
        return $this->getService('ToolsAppManagementAndroidBasicPackageUpdateV2Api', \Oceanengine\Api\ToolsAppManagementAndroidBasicPackageUpdateV2ApiService::class);
    }

    public function toolsAppManagementAppGetV2Api(): \Oceanengine\Api\ToolsAppManagementAppGetV2ApiService
    {
        return $this->getService('ToolsAppManagementAppGetV2Api', \Oceanengine\Api\ToolsAppManagementAppGetV2ApiService::class);
    }

    public function toolsAppManagementBookingGetV2Api(): \Oceanengine\Api\ToolsAppManagementBookingGetV2ApiService
    {
        return $this->getService('ToolsAppManagementBookingGetV2Api', \Oceanengine\Api\ToolsAppManagementBookingGetV2ApiService::class);
    }

    public function toolsAppManagementBookingRecordsGetV2Api(): \Oceanengine\Api\ToolsAppManagementBookingRecordsGetV2ApiService
    {
        return $this->getService('ToolsAppManagementBookingRecordsGetV2Api', \Oceanengine\Api\ToolsAppManagementBookingRecordsGetV2ApiService::class);
    }

    public function toolsAppManagementBpShareCancelV2Api(): \Oceanengine\Api\ToolsAppManagementBpShareCancelV2ApiService
    {
        return $this->getService('ToolsAppManagementBpShareCancelV2Api', \Oceanengine\Api\ToolsAppManagementBpShareCancelV2ApiService::class);
    }

    public function toolsAppManagementBpShareV2Api(): \Oceanengine\Api\ToolsAppManagementBpShareV2ApiService
    {
        return $this->getService('ToolsAppManagementBpShareV2Api', \Oceanengine\Api\ToolsAppManagementBpShareV2ApiService::class);
    }

    public function toolsAppManagementExtendPackageCreateV2Api(): \Oceanengine\Api\ToolsAppManagementExtendPackageCreateV2ApiService
    {
        return $this->getService('ToolsAppManagementExtendPackageCreateV2Api', \Oceanengine\Api\ToolsAppManagementExtendPackageCreateV2ApiService::class);
    }

    public function toolsAppManagementExtendPackageCreateV2V2Api(): \Oceanengine\Api\ToolsAppManagementExtendPackageCreateV2V2ApiService
    {
        return $this->getService('ToolsAppManagementExtendPackageCreateV2V2Api', \Oceanengine\Api\ToolsAppManagementExtendPackageCreateV2V2ApiService::class);
    }

    public function toolsAppManagementExtendPackageListV2Api(): \Oceanengine\Api\ToolsAppManagementExtendPackageListV2ApiService
    {
        return $this->getService('ToolsAppManagementExtendPackageListV2Api', \Oceanengine\Api\ToolsAppManagementExtendPackageListV2ApiService::class);
    }

    public function toolsAppManagementExtendPackageListV2V2Api(): \Oceanengine\Api\ToolsAppManagementExtendPackageListV2V2ApiService
    {
        return $this->getService('ToolsAppManagementExtendPackageListV2V2Api', \Oceanengine\Api\ToolsAppManagementExtendPackageListV2V2ApiService::class);
    }

    public function toolsAppManagementExtendPackageUpdateV2Api(): \Oceanengine\Api\ToolsAppManagementExtendPackageUpdateV2ApiService
    {
        return $this->getService('ToolsAppManagementExtendPackageUpdateV2Api', \Oceanengine\Api\ToolsAppManagementExtendPackageUpdateV2ApiService::class);
    }

    public function toolsAppManagementExtendPackageUpdateV2V2Api(): \Oceanengine\Api\ToolsAppManagementExtendPackageUpdateV2V2ApiService
    {
        return $this->getService('ToolsAppManagementExtendPackageUpdateV2V2Api', \Oceanengine\Api\ToolsAppManagementExtendPackageUpdateV2V2ApiService::class);
    }

    public function toolsAppManagementHarmonyAppListV2Api(): \Oceanengine\Api\ToolsAppManagementHarmonyAppListV2ApiService
    {
        return $this->getService('ToolsAppManagementHarmonyAppListV2Api', \Oceanengine\Api\ToolsAppManagementHarmonyAppListV2ApiService::class);
    }

    public function toolsAppManagementIndustryInfoListV2Api(): \Oceanengine\Api\ToolsAppManagementIndustryInfoListV2ApiService
    {
        return $this->getService('ToolsAppManagementIndustryInfoListV2Api', \Oceanengine\Api\ToolsAppManagementIndustryInfoListV2ApiService::class);
    }

    public function toolsAppManagementShareAccountListV2Api(): \Oceanengine\Api\ToolsAppManagementShareAccountListV2ApiService
    {
        return $this->getService('ToolsAppManagementShareAccountListV2Api', \Oceanengine\Api\ToolsAppManagementShareAccountListV2ApiService::class);
    }

    public function toolsAppManagementUpdateAuthorizationV2Api(): \Oceanengine\Api\ToolsAppManagementUpdateAuthorizationV2ApiService
    {
        return $this->getService('ToolsAppManagementUpdateAuthorizationV2Api', \Oceanengine\Api\ToolsAppManagementUpdateAuthorizationV2ApiService::class);
    }

    public function toolsAppManagementUploadTaskCreateV2Api(): \Oceanengine\Api\ToolsAppManagementUploadTaskCreateV2ApiService
    {
        return $this->getService('ToolsAppManagementUploadTaskCreateV2Api', \Oceanengine\Api\ToolsAppManagementUploadTaskCreateV2ApiService::class);
    }

    public function toolsAppManagementUploadTaskListV2Api(): \Oceanengine\Api\ToolsAppManagementUploadTaskListV2ApiService
    {
        return $this->getService('ToolsAppManagementUploadTaskListV2Api', \Oceanengine\Api\ToolsAppManagementUploadTaskListV2ApiService::class);
    }

    public function toolsAssetLinkListV30Api(): \Oceanengine\Api\ToolsAssetLinkListV30ApiService
    {
        return $this->getService('ToolsAssetLinkListV30Api', \Oceanengine\Api\ToolsAssetLinkListV30ApiService::class);
    }

    public function toolsAwemeAuthAuthShareAdShareV2Api(): \Oceanengine\Api\ToolsAwemeAuthAuthShareAdShareV2ApiService
    {
        return $this->getService('ToolsAwemeAuthAuthShareAdShareV2Api', \Oceanengine\Api\ToolsAwemeAuthAuthShareAdShareV2ApiService::class);
    }

    public function toolsAwemeAuthCancelV2Api(): \Oceanengine\Api\ToolsAwemeAuthCancelV2ApiService
    {
        return $this->getService('ToolsAwemeAuthCancelV2Api', \Oceanengine\Api\ToolsAwemeAuthCancelV2ApiService::class);
    }

    public function toolsAwemeAuthListV2Api(): \Oceanengine\Api\ToolsAwemeAuthListV2ApiService
    {
        return $this->getService('ToolsAwemeAuthListV2Api', \Oceanengine\Api\ToolsAwemeAuthListV2ApiService::class);
    }

    public function toolsAwemeAuthRenewalV2Api(): \Oceanengine\Api\ToolsAwemeAuthRenewalV2ApiService
    {
        return $this->getService('ToolsAwemeAuthRenewalV2Api', \Oceanengine\Api\ToolsAwemeAuthRenewalV2ApiService::class);
    }

    public function toolsAwemeAuthV2Api(): \Oceanengine\Api\ToolsAwemeAuthV2ApiService
    {
        return $this->getService('ToolsAwemeAuthV2Api', \Oceanengine\Api\ToolsAwemeAuthV2ApiService::class);
    }

    public function toolsAwemeAuthorInfoGetV2Api(): \Oceanengine\Api\ToolsAwemeAuthorInfoGetV2ApiService
    {
        return $this->getService('ToolsAwemeAuthorInfoGetV2Api', \Oceanengine\Api\ToolsAwemeAuthorInfoGetV2ApiService::class);
    }

    public function toolsAwemeBannedCreateV30Api(): \Oceanengine\Api\ToolsAwemeBannedCreateV30ApiService
    {
        return $this->getService('ToolsAwemeBannedCreateV30Api', \Oceanengine\Api\ToolsAwemeBannedCreateV30ApiService::class);
    }

    public function toolsAwemeBannedDeleteV30Api(): \Oceanengine\Api\ToolsAwemeBannedDeleteV30ApiService
    {
        return $this->getService('ToolsAwemeBannedDeleteV30Api', \Oceanengine\Api\ToolsAwemeBannedDeleteV30ApiService::class);
    }

    public function toolsAwemeBannedListV30Api(): \Oceanengine\Api\ToolsAwemeBannedListV30ApiService
    {
        return $this->getService('ToolsAwemeBannedListV30Api', \Oceanengine\Api\ToolsAwemeBannedListV30ApiService::class);
    }

    public function toolsAwemeCategoryTopAuthorGetV2Api(): \Oceanengine\Api\ToolsAwemeCategoryTopAuthorGetV2ApiService
    {
        return $this->getService('ToolsAwemeCategoryTopAuthorGetV2Api', \Oceanengine\Api\ToolsAwemeCategoryTopAuthorGetV2ApiService::class);
    }

    public function toolsAwemeInfoSearchV2Api(): \Oceanengine\Api\ToolsAwemeInfoSearchV2ApiService
    {
        return $this->getService('ToolsAwemeInfoSearchV2Api', \Oceanengine\Api\ToolsAwemeInfoSearchV2ApiService::class);
    }

    public function toolsAwemeMultiLevelCategoryGetV2Api(): \Oceanengine\Api\ToolsAwemeMultiLevelCategoryGetV2ApiService
    {
        return $this->getService('ToolsAwemeMultiLevelCategoryGetV2Api', \Oceanengine\Api\ToolsAwemeMultiLevelCategoryGetV2ApiService::class);
    }

    public function toolsAwemeSimilarAuthorSearchV2Api(): \Oceanengine\Api\ToolsAwemeSimilarAuthorSearchV2ApiService
    {
        return $this->getService('ToolsAwemeSimilarAuthorSearchV2Api', \Oceanengine\Api\ToolsAwemeSimilarAuthorSearchV2ApiService::class);
    }

    public function toolsBidSuggestV2Api(): \Oceanengine\Api\ToolsBidSuggestV2ApiService
    {
        return $this->getService('ToolsBidSuggestV2Api', \Oceanengine\Api\ToolsBidSuggestV2ApiService::class);
    }

    public function toolsBidsSuggestV30Api(): \Oceanengine\Api\ToolsBidsSuggestV30ApiService
    {
        return $this->getService('ToolsBidsSuggestV30Api', \Oceanengine\Api\ToolsBidsSuggestV30ApiService::class);
    }

    public function toolsBlueFlowKeywordListV30Api(): \Oceanengine\Api\ToolsBlueFlowKeywordListV30ApiService
    {
        return $this->getService('ToolsBlueFlowKeywordListV30Api', \Oceanengine\Api\ToolsBlueFlowKeywordListV30ApiService::class);
    }

    public function toolsBlueFlowPackageListV30Api(): \Oceanengine\Api\ToolsBlueFlowPackageListV30ApiService
    {
        return $this->getService('ToolsBlueFlowPackageListV30Api', \Oceanengine\Api\ToolsBlueFlowPackageListV30ApiService::class);
    }

    public function toolsBpAssetManagementShareCancelV30Api(): \Oceanengine\Api\ToolsBpAssetManagementShareCancelV30ApiService
    {
        return $this->getService('ToolsBpAssetManagementShareCancelV30Api', \Oceanengine\Api\ToolsBpAssetManagementShareCancelV30ApiService::class);
    }

    public function toolsBpAssetManagementShareGetV30Api(): \Oceanengine\Api\ToolsBpAssetManagementShareGetV30ApiService
    {
        return $this->getService('ToolsBpAssetManagementShareGetV30Api', \Oceanengine\Api\ToolsBpAssetManagementShareGetV30ApiService::class);
    }

    public function toolsBpAssetManagementShareV30Api(): \Oceanengine\Api\ToolsBpAssetManagementShareV30ApiService
    {
        return $this->getService('ToolsBpAssetManagementShareV30Api', \Oceanengine\Api\ToolsBpAssetManagementShareV30ApiService::class);
    }

    public function toolsClueBridgeCallCreateV2Api(): \Oceanengine\Api\ToolsClueBridgeCallCreateV2ApiService
    {
        return $this->getService('ToolsClueBridgeCallCreateV2Api', \Oceanengine\Api\ToolsClueBridgeCallCreateV2ApiService::class);
    }

    public function toolsClueCallCreateV2Api(): \Oceanengine\Api\ToolsClueCallCreateV2ApiService
    {
        return $this->getService('ToolsClueCallCreateV2Api', \Oceanengine\Api\ToolsClueCallCreateV2ApiService::class);
    }

    public function toolsClueCallVirtualNumberGetV2Api(): \Oceanengine\Api\ToolsClueCallVirtualNumberGetV2ApiService
    {
        return $this->getService('ToolsClueCallVirtualNumberGetV2Api', \Oceanengine\Api\ToolsClueCallVirtualNumberGetV2ApiService::class);
    }

    public function toolsClueCallVirtualNumberRefundDetailGetV2Api(): \Oceanengine\Api\ToolsClueCallVirtualNumberRefundDetailGetV2ApiService
    {
        return $this->getService('ToolsClueCallVirtualNumberRefundDetailGetV2Api', \Oceanengine\Api\ToolsClueCallVirtualNumberRefundDetailGetV2ApiService::class);
    }

    public function toolsClueCallbackV2Api(): \Oceanengine\Api\ToolsClueCallbackV2ApiService
    {
        return $this->getService('ToolsClueCallbackV2Api', \Oceanengine\Api\ToolsClueCallbackV2ApiService::class);
    }

    public function toolsClueClueOverviewQueryV2Api(): \Oceanengine\Api\ToolsClueClueOverviewQueryV2ApiService
    {
        return $this->getService('ToolsClueClueOverviewQueryV2Api', \Oceanengine\Api\ToolsClueClueOverviewQueryV2ApiService::class);
    }

    public function toolsClueContactLogListV2Api(): \Oceanengine\Api\ToolsClueContactLogListV2ApiService
    {
        return $this->getService('ToolsClueContactLogListV2Api', \Oceanengine\Api\ToolsClueContactLogListV2ApiService::class);
    }

    public function toolsClueContactLogOverviewQueryV2Api(): \Oceanengine\Api\ToolsClueContactLogOverviewQueryV2ApiService
    {
        return $this->getService('ToolsClueContactLogOverviewQueryV2Api', \Oceanengine\Api\ToolsClueContactLogOverviewQueryV2ApiService::class);
    }

    public function toolsClueContactLogRecordUrlGetV2Api(): \Oceanengine\Api\ToolsClueContactLogRecordUrlGetV2ApiService
    {
        return $this->getService('ToolsClueContactLogRecordUrlGetV2Api', \Oceanengine\Api\ToolsClueContactLogRecordUrlGetV2ApiService::class);
    }

    public function toolsClueExtInfoCallbackV2Api(): \Oceanengine\Api\ToolsClueExtInfoCallbackV2ApiService
    {
        return $this->getService('ToolsClueExtInfoCallbackV2Api', \Oceanengine\Api\ToolsClueExtInfoCallbackV2ApiService::class);
    }

    public function toolsClueFormDetailV2Api(): \Oceanengine\Api\ToolsClueFormDetailV2ApiService
    {
        return $this->getService('ToolsClueFormDetailV2Api', \Oceanengine\Api\ToolsClueFormDetailV2ApiService::class);
    }

    public function toolsClueFormGetV2Api(): \Oceanengine\Api\ToolsClueFormGetV2ApiService
    {
        return $this->getService('ToolsClueFormGetV2Api', \Oceanengine\Api\ToolsClueFormGetV2ApiService::class);
    }

    public function toolsClueGetV2Api(): \Oceanengine\Api\ToolsClueGetV2ApiService
    {
        return $this->getService('ToolsClueGetV2Api', \Oceanengine\Api\ToolsClueGetV2ApiService::class);
    }

    public function toolsClueInfoGetV2Api(): \Oceanengine\Api\ToolsClueInfoGetV2ApiService
    {
        return $this->getService('ToolsClueInfoGetV2Api', \Oceanengine\Api\ToolsClueInfoGetV2ApiService::class);
    }

    public function toolsClueInfoUpdateV2Api(): \Oceanengine\Api\ToolsClueInfoUpdateV2ApiService
    {
        return $this->getService('ToolsClueInfoUpdateV2Api', \Oceanengine\Api\ToolsClueInfoUpdateV2ApiService::class);
    }

    public function toolsClueLifeCallbackV2Api(): \Oceanengine\Api\ToolsClueLifeCallbackV2ApiService
    {
        return $this->getService('ToolsClueLifeCallbackV2Api', \Oceanengine\Api\ToolsClueLifeCallbackV2ApiService::class);
    }

    public function toolsClueLifeGetV2Api(): \Oceanengine\Api\ToolsClueLifeGetV2ApiService
    {
        return $this->getService('ToolsClueLifeGetV2Api', \Oceanengine\Api\ToolsClueLifeGetV2ApiService::class);
    }

    public function toolsClueLiteContactGetV2Api(): \Oceanengine\Api\ToolsClueLiteContactGetV2ApiService
    {
        return $this->getService('ToolsClueLiteContactGetV2Api', \Oceanengine\Api\ToolsClueLiteContactGetV2ApiService::class);
    }

    public function toolsClueLiteContactRecordV2Api(): \Oceanengine\Api\ToolsClueLiteContactRecordV2ApiService
    {
        return $this->getService('ToolsClueLiteContactRecordV2Api', \Oceanengine\Api\ToolsClueLiteContactRecordV2ApiService::class);
    }

    public function toolsCluePrivateMessageCallbackV2Api(): \Oceanengine\Api\ToolsCluePrivateMessageCallbackV2ApiService
    {
        return $this->getService('ToolsCluePrivateMessageCallbackV2Api', \Oceanengine\Api\ToolsCluePrivateMessageCallbackV2ApiService::class);
    }

    public function toolsClueRefundDetailGetV2Api(): \Oceanengine\Api\ToolsClueRefundDetailGetV2ApiService
    {
        return $this->getService('ToolsClueRefundDetailGetV2Api', \Oceanengine\Api\ToolsClueRefundDetailGetV2ApiService::class);
    }

    public function toolsClueRefundInfoQueryV2Api(): \Oceanengine\Api\ToolsClueRefundInfoQueryV2ApiService
    {
        return $this->getService('ToolsClueRefundInfoQueryV2Api', \Oceanengine\Api\ToolsClueRefundInfoQueryV2ApiService::class);
    }

    public function toolsClueRefundReportGetV2Api(): \Oceanengine\Api\ToolsClueRefundReportGetV2ApiService
    {
        return $this->getService('ToolsClueRefundReportGetV2Api', \Oceanengine\Api\ToolsClueRefundReportGetV2ApiService::class);
    }

    public function toolsClueRefundViewGetV2Api(): \Oceanengine\Api\ToolsClueRefundViewGetV2ApiService
    {
        return $this->getService('ToolsClueRefundViewGetV2Api', \Oceanengine\Api\ToolsClueRefundViewGetV2ApiService::class);
    }

    public function toolsClueRobotScriptQueryV2Api(): \Oceanengine\Api\ToolsClueRobotScriptQueryV2ApiService
    {
        return $this->getService('ToolsClueRobotScriptQueryV2Api', \Oceanengine\Api\ToolsClueRobotScriptQueryV2ApiService::class);
    }

    public function toolsClueRobotTaskCancelV2Api(): \Oceanengine\Api\ToolsClueRobotTaskCancelV2ApiService
    {
        return $this->getService('ToolsClueRobotTaskCancelV2Api', \Oceanengine\Api\ToolsClueRobotTaskCancelV2ApiService::class);
    }

    public function toolsClueRobotTaskCreateV2Api(): \Oceanengine\Api\ToolsClueRobotTaskCreateV2ApiService
    {
        return $this->getService('ToolsClueRobotTaskCreateV2Api', \Oceanengine\Api\ToolsClueRobotTaskCreateV2ApiService::class);
    }

    public function toolsClueSmartPhoneGetV2Api(): \Oceanengine\Api\ToolsClueSmartPhoneGetV2ApiService
    {
        return $this->getService('ToolsClueSmartPhoneGetV2Api', \Oceanengine\Api\ToolsClueSmartPhoneGetV2ApiService::class);
    }

    public function toolsClueWebrtcCreateV2V30Api(): \Oceanengine\Api\ToolsClueWebrtcCreateV2V30ApiService
    {
        return $this->getService('ToolsClueWebrtcCreateV2V30Api', \Oceanengine\Api\ToolsClueWebrtcCreateV2V30ApiService::class);
    }

    public function toolsClueWebrtcTokenGetV2Api(): \Oceanengine\Api\ToolsClueWebrtcTokenGetV2ApiService
    {
        return $this->getService('ToolsClueWebrtcTokenGetV2Api', \Oceanengine\Api\ToolsClueWebrtcTokenGetV2ApiService::class);
    }

    public function toolsClueWebrtcTokenGetV2V30Api(): \Oceanengine\Api\ToolsClueWebrtcTokenGetV2V30ApiService
    {
        return $this->getService('ToolsClueWebrtcTokenGetV2V30Api', \Oceanengine\Api\ToolsClueWebrtcTokenGetV2V30ApiService::class);
    }

    public function toolsCommentGetV30Api(): \Oceanengine\Api\ToolsCommentGetV30ApiService
    {
        return $this->getService('ToolsCommentGetV30Api', \Oceanengine\Api\ToolsCommentGetV30ApiService::class);
    }

    public function toolsCommentHideV30Api(): \Oceanengine\Api\ToolsCommentHideV30ApiService
    {
        return $this->getService('ToolsCommentHideV30Api', \Oceanengine\Api\ToolsCommentHideV30ApiService::class);
    }

    public function toolsCommentMetricsGetV30Api(): \Oceanengine\Api\ToolsCommentMetricsGetV30ApiService
    {
        return $this->getService('ToolsCommentMetricsGetV30Api', \Oceanengine\Api\ToolsCommentMetricsGetV30ApiService::class);
    }

    public function toolsCommentMid2itemIdV30Api(): \Oceanengine\Api\ToolsCommentMid2itemIdV30ApiService
    {
        return $this->getService('ToolsCommentMid2itemIdV30Api', \Oceanengine\Api\ToolsCommentMid2itemIdV30ApiService::class);
    }

    public function toolsCommentReplyGetV30Api(): \Oceanengine\Api\ToolsCommentReplyGetV30ApiService
    {
        return $this->getService('ToolsCommentReplyGetV30Api', \Oceanengine\Api\ToolsCommentReplyGetV30ApiService::class);
    }

    public function toolsCommentReplyV30Api(): \Oceanengine\Api\ToolsCommentReplyV30ApiService
    {
        return $this->getService('ToolsCommentReplyV30Api', \Oceanengine\Api\ToolsCommentReplyV30ApiService::class);
    }

    public function toolsCommentStickOnTopV30Api(): \Oceanengine\Api\ToolsCommentStickOnTopV30ApiService
    {
        return $this->getService('ToolsCommentStickOnTopV30Api', \Oceanengine\Api\ToolsCommentStickOnTopV30ApiService::class);
    }

    public function toolsCommentTermsBannedAddV30Api(): \Oceanengine\Api\ToolsCommentTermsBannedAddV30ApiService
    {
        return $this->getService('ToolsCommentTermsBannedAddV30Api', \Oceanengine\Api\ToolsCommentTermsBannedAddV30ApiService::class);
    }

    public function toolsCommentTermsBannedDeleteV30Api(): \Oceanengine\Api\ToolsCommentTermsBannedDeleteV30ApiService
    {
        return $this->getService('ToolsCommentTermsBannedDeleteV30Api', \Oceanengine\Api\ToolsCommentTermsBannedDeleteV30ApiService::class);
    }

    public function toolsCommentTermsBannedGetV30Api(): \Oceanengine\Api\ToolsCommentTermsBannedGetV30ApiService
    {
        return $this->getService('ToolsCommentTermsBannedGetV30Api', \Oceanengine\Api\ToolsCommentTermsBannedGetV30ApiService::class);
    }

    public function toolsCommentTermsBannedUpdateV30Api(): \Oceanengine\Api\ToolsCommentTermsBannedUpdateV30ApiService
    {
        return $this->getService('ToolsCommentTermsBannedUpdateV30Api', \Oceanengine\Api\ToolsCommentTermsBannedUpdateV30ApiService::class);
    }

    public function toolsCountryInfoV2Api(): \Oceanengine\Api\ToolsCountryInfoV2ApiService
    {
        return $this->getService('ToolsCountryInfoV2Api', \Oceanengine\Api\ToolsCountryInfoV2ApiService::class);
    }

    public function toolsCreativeWordSelectV2Api(): \Oceanengine\Api\ToolsCreativeWordSelectV2ApiService
    {
        return $this->getService('ToolsCreativeWordSelectV2Api', \Oceanengine\Api\ToolsCreativeWordSelectV2ApiService::class);
    }

    public function toolsDiagnosisSuggestionGetV30Api(): \Oceanengine\Api\ToolsDiagnosisSuggestionGetV30ApiService
    {
        return $this->getService('ToolsDiagnosisSuggestionGetV30Api', \Oceanengine\Api\ToolsDiagnosisSuggestionGetV30ApiService::class);
    }

    public function toolsDownloadPackageGetV2Api(): \Oceanengine\Api\ToolsDownloadPackageGetV2ApiService
    {
        return $this->getService('ToolsDownloadPackageGetV2Api', \Oceanengine\Api\ToolsDownloadPackageGetV2ApiService::class);
    }

    public function toolsDownloadPackageParseV2Api(): \Oceanengine\Api\ToolsDownloadPackageParseV2ApiService
    {
        return $this->getService('ToolsDownloadPackageParseV2Api', \Oceanengine\Api\ToolsDownloadPackageParseV2ApiService::class);
    }

    public function toolsEbpAppDetailV30Api(): \Oceanengine\Api\ToolsEbpAppDetailV30ApiService
    {
        return $this->getService('ToolsEbpAppDetailV30Api', \Oceanengine\Api\ToolsEbpAppDetailV30ApiService::class);
    }

    public function toolsEbpAppExtendCreateV30Api(): \Oceanengine\Api\ToolsEbpAppExtendCreateV30ApiService
    {
        return $this->getService('ToolsEbpAppExtendCreateV30Api', \Oceanengine\Api\ToolsEbpAppExtendCreateV30ApiService::class);
    }

    public function toolsEbpAppExtendListV30Api(): \Oceanengine\Api\ToolsEbpAppExtendListV30ApiService
    {
        return $this->getService('ToolsEbpAppExtendListV30Api', \Oceanengine\Api\ToolsEbpAppExtendListV30ApiService::class);
    }

    public function toolsEbpAppExtendUpdateV30Api(): \Oceanengine\Api\ToolsEbpAppExtendUpdateV30ApiService
    {
        return $this->getService('ToolsEbpAppExtendUpdateV30Api', \Oceanengine\Api\ToolsEbpAppExtendUpdateV30ApiService::class);
    }

    public function toolsEbpAppGameBookListV30Api(): \Oceanengine\Api\ToolsEbpAppGameBookListV30ApiService
    {
        return $this->getService('ToolsEbpAppGameBookListV30Api', \Oceanengine\Api\ToolsEbpAppGameBookListV30ApiService::class);
    }

    public function toolsEbpAppListV30Api(): \Oceanengine\Api\ToolsEbpAppListV30ApiService
    {
        return $this->getService('ToolsEbpAppListV30Api', \Oceanengine\Api\ToolsEbpAppListV30ApiService::class);
    }

    public function toolsEbpAppPublishV30Api(): \Oceanengine\Api\ToolsEbpAppPublishV30ApiService
    {
        return $this->getService('ToolsEbpAppPublishV30Api', \Oceanengine\Api\ToolsEbpAppPublishV30ApiService::class);
    }

    public function toolsEbpAppUpdateV30Api(): \Oceanengine\Api\ToolsEbpAppUpdateV30ApiService
    {
        return $this->getService('ToolsEbpAppUpdateV30Api', \Oceanengine\Api\ToolsEbpAppUpdateV30ApiService::class);
    }

    public function toolsEbpAssetAuthCancelV30Api(): \Oceanengine\Api\ToolsEbpAssetAuthCancelV30ApiService
    {
        return $this->getService('ToolsEbpAssetAuthCancelV30Api', \Oceanengine\Api\ToolsEbpAssetAuthCancelV30ApiService::class);
    }

    public function toolsEbpAssetAuthListV30Api(): \Oceanengine\Api\ToolsEbpAssetAuthListV30ApiService
    {
        return $this->getService('ToolsEbpAssetAuthListV30Api', \Oceanengine\Api\ToolsEbpAssetAuthListV30ApiService::class);
    }

    public function toolsEbpAssetAuthV30Api(): \Oceanengine\Api\ToolsEbpAssetAuthV30ApiService
    {
        return $this->getService('ToolsEbpAssetAuthV30Api', \Oceanengine\Api\ToolsEbpAssetAuthV30ApiService::class);
    }

    public function toolsEbpMaterialAuthCreateV30Api(): \Oceanengine\Api\ToolsEbpMaterialAuthCreateV30ApiService
    {
        return $this->getService('ToolsEbpMaterialAuthCreateV30Api', \Oceanengine\Api\ToolsEbpMaterialAuthCreateV30ApiService::class);
    }

    public function toolsEbpMaterialAuthDeleteV30Api(): \Oceanengine\Api\ToolsEbpMaterialAuthDeleteV30ApiService
    {
        return $this->getService('ToolsEbpMaterialAuthDeleteV30Api', \Oceanengine\Api\ToolsEbpMaterialAuthDeleteV30ApiService::class);
    }

    public function toolsEbpMaterialAuthListV30Api(): \Oceanengine\Api\ToolsEbpMaterialAuthListV30ApiService
    {
        return $this->getService('ToolsEbpMaterialAuthListV30Api', \Oceanengine\Api\ToolsEbpMaterialAuthListV30ApiService::class);
    }

    public function toolsEbpMaterialListV30Api(): \Oceanengine\Api\ToolsEbpMaterialListV30ApiService
    {
        return $this->getService('ToolsEbpMaterialListV30Api', \Oceanengine\Api\ToolsEbpMaterialListV30ApiService::class);
    }

    public function toolsEbpMicroAppletCreateV30Api(): \Oceanengine\Api\ToolsEbpMicroAppletCreateV30ApiService
    {
        return $this->getService('ToolsEbpMicroAppletCreateV30Api', \Oceanengine\Api\ToolsEbpMicroAppletCreateV30ApiService::class);
    }

    public function toolsEbpMicroAppletLinkListV30Api(): \Oceanengine\Api\ToolsEbpMicroAppletLinkListV30ApiService
    {
        return $this->getService('ToolsEbpMicroAppletLinkListV30Api', \Oceanengine\Api\ToolsEbpMicroAppletLinkListV30ApiService::class);
    }

    public function toolsEbpMicroAppletListV30Api(): \Oceanengine\Api\ToolsEbpMicroAppletListV30ApiService
    {
        return $this->getService('ToolsEbpMicroAppletListV30Api', \Oceanengine\Api\ToolsEbpMicroAppletListV30ApiService::class);
    }

    public function toolsEbpMicroAppletUpdateV30Api(): \Oceanengine\Api\ToolsEbpMicroAppletUpdateV30ApiService
    {
        return $this->getService('ToolsEbpMicroAppletUpdateV30Api', \Oceanengine\Api\ToolsEbpMicroAppletUpdateV30ApiService::class);
    }

    public function toolsEbpMicroGameCreateV30Api(): \Oceanengine\Api\ToolsEbpMicroGameCreateV30ApiService
    {
        return $this->getService('ToolsEbpMicroGameCreateV30Api', \Oceanengine\Api\ToolsEbpMicroGameCreateV30ApiService::class);
    }

    public function toolsEbpMicroGameLinkListV30Api(): \Oceanengine\Api\ToolsEbpMicroGameLinkListV30ApiService
    {
        return $this->getService('ToolsEbpMicroGameLinkListV30Api', \Oceanengine\Api\ToolsEbpMicroGameLinkListV30ApiService::class);
    }

    public function toolsEbpMicroGameListV30Api(): \Oceanengine\Api\ToolsEbpMicroGameListV30ApiService
    {
        return $this->getService('ToolsEbpMicroGameListV30Api', \Oceanengine\Api\ToolsEbpMicroGameListV30ApiService::class);
    }

    public function toolsEbpMicroGameUpdateV30Api(): \Oceanengine\Api\ToolsEbpMicroGameUpdateV30ApiService
    {
        return $this->getService('ToolsEbpMicroGameUpdateV30Api', \Oceanengine\Api\ToolsEbpMicroGameUpdateV30ApiService::class);
    }

    public function toolsEbpPlayableDeleteV30Api(): \Oceanengine\Api\ToolsEbpPlayableDeleteV30ApiService
    {
        return $this->getService('ToolsEbpPlayableDeleteV30Api', \Oceanengine\Api\ToolsEbpPlayableDeleteV30ApiService::class);
    }

    public function toolsEbpPlayableListV30Api(): \Oceanengine\Api\ToolsEbpPlayableListV30ApiService
    {
        return $this->getService('ToolsEbpPlayableListV30Api', \Oceanengine\Api\ToolsEbpPlayableListV30ApiService::class);
    }

    public function toolsEbpPlayableUploadV30Api(): \Oceanengine\Api\ToolsEbpPlayableUploadV30ApiService
    {
        return $this->getService('ToolsEbpPlayableUploadV30Api', \Oceanengine\Api\ToolsEbpPlayableUploadV30ApiService::class);
    }

    public function toolsEbpStarTaskGetV30Api(): \Oceanengine\Api\ToolsEbpStarTaskGetV30ApiService
    {
        return $this->getService('ToolsEbpStarTaskGetV30Api', \Oceanengine\Api\ToolsEbpStarTaskGetV30ApiService::class);
    }

    public function toolsEbpStarTaskListV30Api(): \Oceanengine\Api\ToolsEbpStarTaskListV30ApiService
    {
        return $this->getService('ToolsEbpStarTaskListV30Api', \Oceanengine\Api\ToolsEbpStarTaskListV30ApiService::class);
    }

    public function toolsEbpStarTaskTaskAuthorGetV30Api(): \Oceanengine\Api\ToolsEbpStarTaskTaskAuthorGetV30ApiService
    {
        return $this->getService('ToolsEbpStarTaskTaskAuthorGetV30Api', \Oceanengine\Api\ToolsEbpStarTaskTaskAuthorGetV30ApiService::class);
    }

    public function toolsEbpStarTaskTaskAuthorVedioGetV30Api(): \Oceanengine\Api\ToolsEbpStarTaskTaskAuthorVedioGetV30ApiService
    {
        return $this->getService('ToolsEbpStarTaskTaskAuthorVedioGetV30Api', \Oceanengine\Api\ToolsEbpStarTaskTaskAuthorVedioGetV30ApiService::class);
    }

    public function toolsEbpStarTaskTaskVideoDataGetV30Api(): \Oceanengine\Api\ToolsEbpStarTaskTaskVideoDataGetV30ApiService
    {
        return $this->getService('ToolsEbpStarTaskTaskVideoDataGetV30Api', \Oceanengine\Api\ToolsEbpStarTaskTaskVideoDataGetV30ApiService::class);
    }

    public function toolsEbpSubjectListV30Api(): \Oceanengine\Api\ToolsEbpSubjectListV30ApiService
    {
        return $this->getService('ToolsEbpSubjectListV30Api', \Oceanengine\Api\ToolsEbpSubjectListV30ApiService::class);
    }

    public function toolsEbpVideoAttributesListV30Api(): \Oceanengine\Api\ToolsEbpVideoAttributesListV30ApiService
    {
        return $this->getService('ToolsEbpVideoAttributesListV30Api', \Oceanengine\Api\ToolsEbpVideoAttributesListV30ApiService::class);
    }

    public function toolsEbpVideoDeleteV30Api(): \Oceanengine\Api\ToolsEbpVideoDeleteV30ApiService
    {
        return $this->getService('ToolsEbpVideoDeleteV30Api', \Oceanengine\Api\ToolsEbpVideoDeleteV30ApiService::class);
    }

    public function toolsEbpVideoUpdateV30Api(): \Oceanengine\Api\ToolsEbpVideoUpdateV30ApiService
    {
        return $this->getService('ToolsEbpVideoUpdateV30Api', \Oceanengine\Api\ToolsEbpVideoUpdateV30ApiService::class);
    }

    public function toolsEbpVideoUploadV30Api(): \Oceanengine\Api\ToolsEbpVideoUploadV30ApiService
    {
        return $this->getService('ToolsEbpVideoUploadV30Api', \Oceanengine\Api\ToolsEbpVideoUploadV30ApiService::class);
    }

    public function toolsEbpWechatAppletCreateV30Api(): \Oceanengine\Api\ToolsEbpWechatAppletCreateV30ApiService
    {
        return $this->getService('ToolsEbpWechatAppletCreateV30Api', \Oceanengine\Api\ToolsEbpWechatAppletCreateV30ApiService::class);
    }

    public function toolsEbpWechatAppletListV30Api(): \Oceanengine\Api\ToolsEbpWechatAppletListV30ApiService
    {
        return $this->getService('ToolsEbpWechatAppletListV30Api', \Oceanengine\Api\ToolsEbpWechatAppletListV30ApiService::class);
    }

    public function toolsEbpWechatAppletUpdateV30Api(): \Oceanengine\Api\ToolsEbpWechatAppletUpdateV30ApiService
    {
        return $this->getService('ToolsEbpWechatAppletUpdateV30Api', \Oceanengine\Api\ToolsEbpWechatAppletUpdateV30ApiService::class);
    }

    public function toolsEbpWechatGameCreateV30Api(): \Oceanengine\Api\ToolsEbpWechatGameCreateV30ApiService
    {
        return $this->getService('ToolsEbpWechatGameCreateV30Api', \Oceanengine\Api\ToolsEbpWechatGameCreateV30ApiService::class);
    }

    public function toolsEbpWechatGameListV30Api(): \Oceanengine\Api\ToolsEbpWechatGameListV30ApiService
    {
        return $this->getService('ToolsEbpWechatGameListV30Api', \Oceanengine\Api\ToolsEbpWechatGameListV30ApiService::class);
    }

    public function toolsEbpWechatGameUpdateV30Api(): \Oceanengine\Api\ToolsEbpWechatGameUpdateV30ApiService
    {
        return $this->getService('ToolsEbpWechatGameUpdateV30Api', \Oceanengine\Api\ToolsEbpWechatGameUpdateV30ApiService::class);
    }

    public function toolsEstimateAudienceV2Api(): \Oceanengine\Api\ToolsEstimateAudienceV2ApiService
    {
        return $this->getService('ToolsEstimateAudienceV2Api', \Oceanengine\Api\ToolsEstimateAudienceV2ApiService::class);
    }

    public function toolsEstimatedPriceGetV2Api(): \Oceanengine\Api\ToolsEstimatedPriceGetV2ApiService
    {
        return $this->getService('ToolsEstimatedPriceGetV2Api', \Oceanengine\Api\ToolsEstimatedPriceGetV2ApiService::class);
    }

    public function toolsEventAllAssetsDetailV2Api(): \Oceanengine\Api\ToolsEventAllAssetsDetailV2ApiService
    {
        return $this->getService('ToolsEventAllAssetsDetailV2Api', \Oceanengine\Api\ToolsEventAllAssetsDetailV2ApiService::class);
    }

    public function toolsEventAllAssetsListV2Api(): \Oceanengine\Api\ToolsEventAllAssetsListV2ApiService
    {
        return $this->getService('ToolsEventAllAssetsListV2Api', \Oceanengine\Api\ToolsEventAllAssetsListV2ApiService::class);
    }

    public function toolsEventAssetsGetV2Api(): \Oceanengine\Api\ToolsEventAssetsGetV2ApiService
    {
        return $this->getService('ToolsEventAssetsGetV2Api', \Oceanengine\Api\ToolsEventAssetsGetV2ApiService::class);
    }

    public function toolsEventConvertOptimizedGoalGetV30Api(): \Oceanengine\Api\ToolsEventConvertOptimizedGoalGetV30ApiService
    {
        return $this->getService('ToolsEventConvertOptimizedGoalGetV30Api', \Oceanengine\Api\ToolsEventConvertOptimizedGoalGetV30ApiService::class);
    }

    public function toolsExtremeMaterialLimitGetV30Api(): \Oceanengine\Api\ToolsExtremeMaterialLimitGetV30ApiService
    {
        return $this->getService('ToolsExtremeMaterialLimitGetV30Api', \Oceanengine\Api\ToolsExtremeMaterialLimitGetV30ApiService::class);
    }

    public function toolsForbiddenLinkGreyGetV30Api(): \Oceanengine\Api\ToolsForbiddenLinkGreyGetV30ApiService
    {
        return $this->getService('ToolsForbiddenLinkGreyGetV30Api', \Oceanengine\Api\ToolsForbiddenLinkGreyGetV30ApiService::class);
    }

    public function toolsGrayGetV30Api(): \Oceanengine\Api\ToolsGrayGetV30ApiService
    {
        return $this->getService('ToolsGrayGetV30Api', \Oceanengine\Api\ToolsGrayGetV30ApiService::class);
    }

    public function toolsHotMaterialDeriveAdoptV30Api(): \Oceanengine\Api\ToolsHotMaterialDeriveAdoptV30ApiService
    {
        return $this->getService('ToolsHotMaterialDeriveAdoptV30Api', \Oceanengine\Api\ToolsHotMaterialDeriveAdoptV30ApiService::class);
    }

    public function toolsHotMaterialDeriveGetV30Api(): \Oceanengine\Api\ToolsHotMaterialDeriveGetV30ApiService
    {
        return $this->getService('ToolsHotMaterialDeriveGetV30Api', \Oceanengine\Api\ToolsHotMaterialDeriveGetV30ApiService::class);
    }

    public function toolsHotMaterialDeriveListV30Api(): \Oceanengine\Api\ToolsHotMaterialDeriveListV30ApiService
    {
        return $this->getService('ToolsHotMaterialDeriveListV30Api', \Oceanengine\Api\ToolsHotMaterialDeriveListV30ApiService::class);
    }

    public function toolsHotMaterialDeriveSubmitV30Api(): \Oceanengine\Api\ToolsHotMaterialDeriveSubmitV30ApiService
    {
        return $this->getService('ToolsHotMaterialDeriveSubmitV30Api', \Oceanengine\Api\ToolsHotMaterialDeriveSubmitV30ApiService::class);
    }

    public function toolsInactiveAdvertiserListV30Api(): \Oceanengine\Api\ToolsInactiveAdvertiserListV30ApiService
    {
        return $this->getService('ToolsInactiveAdvertiserListV30Api', \Oceanengine\Api\ToolsInactiveAdvertiserListV30ApiService::class);
    }

    public function toolsIndustryGetV2Api(): \Oceanengine\Api\ToolsIndustryGetV2ApiService
    {
        return $this->getService('ToolsIndustryGetV2Api', \Oceanengine\Api\ToolsIndustryGetV2ApiService::class);
    }

    public function toolsInterestActionActionKeywordV2Api(): \Oceanengine\Api\ToolsInterestActionActionKeywordV2ApiService
    {
        return $this->getService('ToolsInterestActionActionKeywordV2Api', \Oceanengine\Api\ToolsInterestActionActionKeywordV2ApiService::class);
    }

    public function toolsInterestActionId2wordV2Api(): \Oceanengine\Api\ToolsInterestActionId2wordV2ApiService
    {
        return $this->getService('ToolsInterestActionId2wordV2Api', \Oceanengine\Api\ToolsInterestActionId2wordV2ApiService::class);
    }

    public function toolsInterestActionInterestKeywordV2Api(): \Oceanengine\Api\ToolsInterestActionInterestKeywordV2ApiService
    {
        return $this->getService('ToolsInterestActionInterestKeywordV2Api', \Oceanengine\Api\ToolsInterestActionInterestKeywordV2ApiService::class);
    }

    public function toolsInterestActionKeywordSuggestV2Api(): \Oceanengine\Api\ToolsInterestActionKeywordSuggestV2ApiService
    {
        return $this->getService('ToolsInterestActionKeywordSuggestV2Api', \Oceanengine\Api\ToolsInterestActionKeywordSuggestV2ApiService::class);
    }

    public function toolsIsSupportUniversalGetV2Api(): \Oceanengine\Api\ToolsIsSupportUniversalGetV2ApiService
    {
        return $this->getService('ToolsIsSupportUniversalGetV2Api', \Oceanengine\Api\ToolsIsSupportUniversalGetV2ApiService::class);
    }

    public function toolsJointBidCreateV30Api(): \Oceanengine\Api\ToolsJointBidCreateV30ApiService
    {
        return $this->getService('ToolsJointBidCreateV30Api', \Oceanengine\Api\ToolsJointBidCreateV30ApiService::class);
    }

    public function toolsJointBidGetV30Api(): \Oceanengine\Api\ToolsJointBidGetV30ApiService
    {
        return $this->getService('ToolsJointBidGetV30Api', \Oceanengine\Api\ToolsJointBidGetV30ApiService::class);
    }

    public function toolsJointBidUpdateV30Api(): \Oceanengine\Api\ToolsJointBidUpdateV30ApiService
    {
        return $this->getService('ToolsJointBidUpdateV30Api', \Oceanengine\Api\ToolsJointBidUpdateV30ApiService::class);
    }

    public function toolsKeywordsBidRatioCreateV30Api(): \Oceanengine\Api\ToolsKeywordsBidRatioCreateV30ApiService
    {
        return $this->getService('ToolsKeywordsBidRatioCreateV30Api', \Oceanengine\Api\ToolsKeywordsBidRatioCreateV30ApiService::class);
    }

    public function toolsKeywordsBidRatioDeleteV30Api(): \Oceanengine\Api\ToolsKeywordsBidRatioDeleteV30ApiService
    {
        return $this->getService('ToolsKeywordsBidRatioDeleteV30Api', \Oceanengine\Api\ToolsKeywordsBidRatioDeleteV30ApiService::class);
    }

    public function toolsKeywordsBidRatioGetV30Api(): \Oceanengine\Api\ToolsKeywordsBidRatioGetV30ApiService
    {
        return $this->getService('ToolsKeywordsBidRatioGetV30Api', \Oceanengine\Api\ToolsKeywordsBidRatioGetV30ApiService::class);
    }

    public function toolsKeywordsBidRatioUpdateV30Api(): \Oceanengine\Api\ToolsKeywordsBidRatioUpdateV30ApiService
    {
        return $this->getService('ToolsKeywordsBidRatioUpdateV30Api', \Oceanengine\Api\ToolsKeywordsBidRatioUpdateV30ApiService::class);
    }

    public function toolsKeywordsProjectInfoGetV30Api(): \Oceanengine\Api\ToolsKeywordsProjectInfoGetV30ApiService
    {
        return $this->getService('ToolsKeywordsProjectInfoGetV30Api', \Oceanengine\Api\ToolsKeywordsProjectInfoGetV30ApiService::class);
    }

    public function toolsLandingGroupCreateV2Api(): \Oceanengine\Api\ToolsLandingGroupCreateV2ApiService
    {
        return $this->getService('ToolsLandingGroupCreateV2Api', \Oceanengine\Api\ToolsLandingGroupCreateV2ApiService::class);
    }

    public function toolsLandingGroupGetV2Api(): \Oceanengine\Api\ToolsLandingGroupGetV2ApiService
    {
        return $this->getService('ToolsLandingGroupGetV2Api', \Oceanengine\Api\ToolsLandingGroupGetV2ApiService::class);
    }

    public function toolsLandingGroupSiteOptStatusUpdateV2Api(): \Oceanengine\Api\ToolsLandingGroupSiteOptStatusUpdateV2ApiService
    {
        return $this->getService('ToolsLandingGroupSiteOptStatusUpdateV2Api', \Oceanengine\Api\ToolsLandingGroupSiteOptStatusUpdateV2ApiService::class);
    }

    public function toolsLandingGroupUpdateV2Api(): \Oceanengine\Api\ToolsLandingGroupUpdateV2ApiService
    {
        return $this->getService('ToolsLandingGroupUpdateV2Api', \Oceanengine\Api\ToolsLandingGroupUpdateV2ApiService::class);
    }

    public function toolsLiveAuthorizeListV2Api(): \Oceanengine\Api\ToolsLiveAuthorizeListV2ApiService
    {
        return $this->getService('ToolsLiveAuthorizeListV2Api', \Oceanengine\Api\ToolsLiveAuthorizeListV2ApiService::class);
    }

    public function toolsLogSearchDetailGetV2Api(): \Oceanengine\Api\ToolsLogSearchDetailGetV2ApiService
    {
        return $this->getService('ToolsLogSearchDetailGetV2Api', \Oceanengine\Api\ToolsLogSearchDetailGetV2ApiService::class);
    }

    public function toolsLogSearchV2Api(): \Oceanengine\Api\ToolsLogSearchV2ApiService
    {
        return $this->getService('ToolsLogSearchV2Api', \Oceanengine\Api\ToolsLogSearchV2ApiService::class);
    }

    public function toolsMaterialRaiseCreateV30Api(): \Oceanengine\Api\ToolsMaterialRaiseCreateV30ApiService
    {
        return $this->getService('ToolsMaterialRaiseCreateV30Api', \Oceanengine\Api\ToolsMaterialRaiseCreateV30ApiService::class);
    }

    public function toolsMaterialRaiseGetV30Api(): \Oceanengine\Api\ToolsMaterialRaiseGetV30ApiService
    {
        return $this->getService('ToolsMaterialRaiseGetV30Api', \Oceanengine\Api\ToolsMaterialRaiseGetV30ApiService::class);
    }

    public function toolsMaterialRaiseMaterialIdsGetV30Api(): \Oceanengine\Api\ToolsMaterialRaiseMaterialIdsGetV30ApiService
    {
        return $this->getService('ToolsMaterialRaiseMaterialIdsGetV30Api', \Oceanengine\Api\ToolsMaterialRaiseMaterialIdsGetV30ApiService::class);
    }

    public function toolsMaterialRaiseRecordsGetV30Api(): \Oceanengine\Api\ToolsMaterialRaiseRecordsGetV30ApiService
    {
        return $this->getService('ToolsMaterialRaiseRecordsGetV30Api', \Oceanengine\Api\ToolsMaterialRaiseRecordsGetV30ApiService::class);
    }

    public function toolsMaterialRaiseStatusGetV30Api(): \Oceanengine\Api\ToolsMaterialRaiseStatusGetV30ApiService
    {
        return $this->getService('ToolsMaterialRaiseStatusGetV30Api', \Oceanengine\Api\ToolsMaterialRaiseStatusGetV30ApiService::class);
    }

    public function toolsMaterialRaiseStopV30Api(): \Oceanengine\Api\ToolsMaterialRaiseStopV30ApiService
    {
        return $this->getService('ToolsMaterialRaiseStopV30Api', \Oceanengine\Api\ToolsMaterialRaiseStopV30ApiService::class);
    }

    public function toolsMicroAppCreateV30Api(): \Oceanengine\Api\ToolsMicroAppCreateV30ApiService
    {
        return $this->getService('ToolsMicroAppCreateV30Api', \Oceanengine\Api\ToolsMicroAppCreateV30ApiService::class);
    }

    public function toolsMicroAppListV30Api(): \Oceanengine\Api\ToolsMicroAppListV30ApiService
    {
        return $this->getService('ToolsMicroAppListV30Api', \Oceanengine\Api\ToolsMicroAppListV30ApiService::class);
    }

    public function toolsMicroAppUpdateV30Api(): \Oceanengine\Api\ToolsMicroAppUpdateV30ApiService
    {
        return $this->getService('ToolsMicroAppUpdateV30Api', \Oceanengine\Api\ToolsMicroAppUpdateV30ApiService::class);
    }

    public function toolsMicroGameConvertWindowGetV30Api(): \Oceanengine\Api\ToolsMicroGameConvertWindowGetV30ApiService
    {
        return $this->getService('ToolsMicroGameConvertWindowGetV30Api', \Oceanengine\Api\ToolsMicroGameConvertWindowGetV30ApiService::class);
    }

    public function toolsMicroGameConvertWindowUpdateV30Api(): \Oceanengine\Api\ToolsMicroGameConvertWindowUpdateV30ApiService
    {
        return $this->getService('ToolsMicroGameConvertWindowUpdateV30Api', \Oceanengine\Api\ToolsMicroGameConvertWindowUpdateV30ApiService::class);
    }

    public function toolsMicroGameCreateV30Api(): \Oceanengine\Api\ToolsMicroGameCreateV30ApiService
    {
        return $this->getService('ToolsMicroGameCreateV30Api', \Oceanengine\Api\ToolsMicroGameCreateV30ApiService::class);
    }

    public function toolsMicroGameListV30Api(): \Oceanengine\Api\ToolsMicroGameListV30ApiService
    {
        return $this->getService('ToolsMicroGameListV30Api', \Oceanengine\Api\ToolsMicroGameListV30ApiService::class);
    }

    public function toolsMicroGameUpdateV30Api(): \Oceanengine\Api\ToolsMicroGameUpdateV30ApiService
    {
        return $this->getService('ToolsMicroGameUpdateV30Api', \Oceanengine\Api\ToolsMicroGameUpdateV30ApiService::class);
    }

    public function toolsNoBidSuggestBidV2Api(): \Oceanengine\Api\ToolsNoBidSuggestBidV2ApiService
    {
        return $this->getService('ToolsNoBidSuggestBidV2Api', \Oceanengine\Api\ToolsNoBidSuggestBidV2ApiService::class);
    }

    public function toolsOrangeSiteGetV30Api(): \Oceanengine\Api\ToolsOrangeSiteGetV30ApiService
    {
        return $this->getService('ToolsOrangeSiteGetV30Api', \Oceanengine\Api\ToolsOrangeSiteGetV30ApiService::class);
    }

    public function toolsPioneerProgramAttachmentUploadV2Api(): \Oceanengine\Api\ToolsPioneerProgramAttachmentUploadV2ApiService
    {
        return $this->getService('ToolsPioneerProgramAttachmentUploadV2Api', \Oceanengine\Api\ToolsPioneerProgramAttachmentUploadV2ApiService::class);
    }

    public function toolsPlayableCloudGameListV2Api(): \Oceanengine\Api\ToolsPlayableCloudGameListV2ApiService
    {
        return $this->getService('ToolsPlayableCloudGameListV2Api', \Oceanengine\Api\ToolsPlayableCloudGameListV2ApiService::class);
    }

    public function toolsPlayableCreateV2Api(): \Oceanengine\Api\ToolsPlayableCreateV2ApiService
    {
        return $this->getService('ToolsPlayableCreateV2Api', \Oceanengine\Api\ToolsPlayableCreateV2ApiService::class);
    }

    public function toolsPlayableGrantResultV2Api(): \Oceanengine\Api\ToolsPlayableGrantResultV2ApiService
    {
        return $this->getService('ToolsPlayableGrantResultV2Api', \Oceanengine\Api\ToolsPlayableGrantResultV2ApiService::class);
    }

    public function toolsPlayableGrantV2Api(): \Oceanengine\Api\ToolsPlayableGrantV2ApiService
    {
        return $this->getService('ToolsPlayableGrantV2Api', \Oceanengine\Api\ToolsPlayableGrantV2ApiService::class);
    }

    public function toolsPlayableListGetV2Api(): \Oceanengine\Api\ToolsPlayableListGetV2ApiService
    {
        return $this->getService('ToolsPlayableListGetV2Api', \Oceanengine\Api\ToolsPlayableListGetV2ApiService::class);
    }

    public function toolsPlayableSaveV2Api(): \Oceanengine\Api\ToolsPlayableSaveV2ApiService
    {
        return $this->getService('ToolsPlayableSaveV2Api', \Oceanengine\Api\ToolsPlayableSaveV2ApiService::class);
    }

    public function toolsPlayableUploadV2Api(): \Oceanengine\Api\ToolsPlayableUploadV2ApiService
    {
        return $this->getService('ToolsPlayableUploadV2Api', \Oceanengine\Api\ToolsPlayableUploadV2ApiService::class);
    }

    public function toolsPlayableValidateV2Api(): \Oceanengine\Api\ToolsPlayableValidateV2ApiService
    {
        return $this->getService('ToolsPlayableValidateV2Api', \Oceanengine\Api\ToolsPlayableValidateV2ApiService::class);
    }

    public function toolsPreAuditGetV2Api(): \Oceanengine\Api\ToolsPreAuditGetV2ApiService
    {
        return $this->getService('ToolsPreAuditGetV2Api', \Oceanengine\Api\ToolsPreAuditGetV2ApiService::class);
    }

    public function toolsPreAuditSendV2Api(): \Oceanengine\Api\ToolsPreAuditSendV2ApiService
    {
        return $this->getService('ToolsPreAuditSendV2Api', \Oceanengine\Api\ToolsPreAuditSendV2ApiService::class);
    }

    public function toolsPrivativeWordAdAddV2Api(): \Oceanengine\Api\ToolsPrivativeWordAdAddV2ApiService
    {
        return $this->getService('ToolsPrivativeWordAdAddV2Api', \Oceanengine\Api\ToolsPrivativeWordAdAddV2ApiService::class);
    }

    public function toolsPrivativeWordAdUpdateV2Api(): \Oceanengine\Api\ToolsPrivativeWordAdUpdateV2ApiService
    {
        return $this->getService('ToolsPrivativeWordAdUpdateV2Api', \Oceanengine\Api\ToolsPrivativeWordAdUpdateV2ApiService::class);
    }

    public function toolsPrivativeWordBatchGetV30Api(): \Oceanengine\Api\ToolsPrivativeWordBatchGetV30ApiService
    {
        return $this->getService('ToolsPrivativeWordBatchGetV30Api', \Oceanengine\Api\ToolsPrivativeWordBatchGetV30ApiService::class);
    }

    public function toolsPrivativeWordCampaignAddV2Api(): \Oceanengine\Api\ToolsPrivativeWordCampaignAddV2ApiService
    {
        return $this->getService('ToolsPrivativeWordCampaignAddV2Api', \Oceanengine\Api\ToolsPrivativeWordCampaignAddV2ApiService::class);
    }

    public function toolsPrivativeWordCampaignUpdateV2Api(): \Oceanengine\Api\ToolsPrivativeWordCampaignUpdateV2ApiService
    {
        return $this->getService('ToolsPrivativeWordCampaignUpdateV2Api', \Oceanengine\Api\ToolsPrivativeWordCampaignUpdateV2ApiService::class);
    }

    public function toolsPrivativeWordGetV2Api(): \Oceanengine\Api\ToolsPrivativeWordGetV2ApiService
    {
        return $this->getService('ToolsPrivativeWordGetV2Api', \Oceanengine\Api\ToolsPrivativeWordGetV2ApiService::class);
    }

    public function toolsPrivativeWordProjectAddV30Api(): \Oceanengine\Api\ToolsPrivativeWordProjectAddV30ApiService
    {
        return $this->getService('ToolsPrivativeWordProjectAddV30Api', \Oceanengine\Api\ToolsPrivativeWordProjectAddV30ApiService::class);
    }

    public function toolsPrivativeWordProjectUpdateV30Api(): \Oceanengine\Api\ToolsPrivativeWordProjectUpdateV30ApiService
    {
        return $this->getService('ToolsPrivativeWordProjectUpdateV30Api', \Oceanengine\Api\ToolsPrivativeWordProjectUpdateV30ApiService::class);
    }

    public function toolsPrivativeWordPromotionAddV30Api(): \Oceanengine\Api\ToolsPrivativeWordPromotionAddV30ApiService
    {
        return $this->getService('ToolsPrivativeWordPromotionAddV30Api', \Oceanengine\Api\ToolsPrivativeWordPromotionAddV30ApiService::class);
    }

    public function toolsPrivativeWordPromotionUpdateV30Api(): \Oceanengine\Api\ToolsPrivativeWordPromotionUpdateV30ApiService
    {
        return $this->getService('ToolsPrivativeWordPromotionUpdateV30Api', \Oceanengine\Api\ToolsPrivativeWordPromotionUpdateV30ApiService::class);
    }

    public function toolsProjectDiagnosisSuggestionListV30Api(): \Oceanengine\Api\ToolsProjectDiagnosisSuggestionListV30ApiService
    {
        return $this->getService('ToolsProjectDiagnosisSuggestionListV30Api', \Oceanengine\Api\ToolsProjectDiagnosisSuggestionListV30ApiService::class);
    }

    public function toolsProjectMaterialTypeUpdateV30Api(): \Oceanengine\Api\ToolsProjectMaterialTypeUpdateV30ApiService
    {
        return $this->getService('ToolsProjectMaterialTypeUpdateV30Api', \Oceanengine\Api\ToolsProjectMaterialTypeUpdateV30ApiService::class);
    }

    public function toolsPromotionCardRecommendGetV2Api(): \Oceanengine\Api\ToolsPromotionCardRecommendGetV2ApiService
    {
        return $this->getService('ToolsPromotionCardRecommendGetV2Api', \Oceanengine\Api\ToolsPromotionCardRecommendGetV2ApiService::class);
    }

    public function toolsPromotionCardRecommendTitleGetV2Api(): \Oceanengine\Api\ToolsPromotionCardRecommendTitleGetV2ApiService
    {
        return $this->getService('ToolsPromotionCardRecommendTitleGetV2Api', \Oceanengine\Api\ToolsPromotionCardRecommendTitleGetV2ApiService::class);
    }

    public function toolsPromotionDiagnosisSuggestionAcceptV30Api(): \Oceanengine\Api\ToolsPromotionDiagnosisSuggestionAcceptV30ApiService
    {
        return $this->getService('ToolsPromotionDiagnosisSuggestionAcceptV30Api', \Oceanengine\Api\ToolsPromotionDiagnosisSuggestionAcceptV30ApiService::class);
    }

    public function toolsPromotionDiagnosisSuggestionGetV30Api(): \Oceanengine\Api\ToolsPromotionDiagnosisSuggestionGetV30ApiService
    {
        return $this->getService('ToolsPromotionDiagnosisSuggestionGetV30Api', \Oceanengine\Api\ToolsPromotionDiagnosisSuggestionGetV30ApiService::class);
    }

    public function toolsPromotionRaiseSetV30Api(): \Oceanengine\Api\ToolsPromotionRaiseSetV30ApiService
    {
        return $this->getService('ToolsPromotionRaiseSetV30Api', \Oceanengine\Api\ToolsPromotionRaiseSetV30ApiService::class);
    }

    public function toolsPromotionRaiseStatusCurrentIdsGetV30Api(): \Oceanengine\Api\ToolsPromotionRaiseStatusCurrentIdsGetV30ApiService
    {
        return $this->getService('ToolsPromotionRaiseStatusCurrentIdsGetV30Api', \Oceanengine\Api\ToolsPromotionRaiseStatusCurrentIdsGetV30ApiService::class);
    }

    public function toolsPromotionRaiseStatusGetV30Api(): \Oceanengine\Api\ToolsPromotionRaiseStatusGetV30ApiService
    {
        return $this->getService('ToolsPromotionRaiseStatusGetV30Api', \Oceanengine\Api\ToolsPromotionRaiseStatusGetV30ApiService::class);
    }

    public function toolsPromotionRaiseStopV30Api(): \Oceanengine\Api\ToolsPromotionRaiseStopV30ApiService
    {
        return $this->getService('ToolsPromotionRaiseStopV30Api', \Oceanengine\Api\ToolsPromotionRaiseStopV30ApiService::class);
    }

    public function toolsPromotionRaiseVersionGetV30Api(): \Oceanengine\Api\ToolsPromotionRaiseVersionGetV30ApiService
    {
        return $this->getService('ToolsPromotionRaiseVersionGetV30Api', \Oceanengine\Api\ToolsPromotionRaiseVersionGetV30ApiService::class);
    }

    public function toolsQuotaGetV2Api(): \Oceanengine\Api\ToolsQuotaGetV2ApiService
    {
        return $this->getService('ToolsQuotaGetV2Api', \Oceanengine\Api\ToolsQuotaGetV2ApiService::class);
    }

    public function toolsRegionGetV2Api(): \Oceanengine\Api\ToolsRegionGetV2ApiService
    {
        return $this->getService('ToolsRegionGetV2Api', \Oceanengine\Api\ToolsRegionGetV2ApiService::class);
    }

    public function toolsRtaGetInfoTmpV2Api(): \Oceanengine\Api\ToolsRtaGetInfoTmpV2ApiService
    {
        return $this->getService('ToolsRtaGetInfoTmpV2Api', \Oceanengine\Api\ToolsRtaGetInfoTmpV2ApiService::class);
    }

    public function toolsRtaGetInfoV2Api(): \Oceanengine\Api\ToolsRtaGetInfoV2ApiService
    {
        return $this->getService('ToolsRtaGetInfoV2Api', \Oceanengine\Api\ToolsRtaGetInfoV2ApiService::class);
    }

    public function toolsRtaGetV2Api(): \Oceanengine\Api\ToolsRtaGetV2ApiService
    {
        return $this->getService('ToolsRtaGetV2Api', \Oceanengine\Api\ToolsRtaGetV2ApiService::class);
    }

    public function toolsRtaScopeGetV30Api(): \Oceanengine\Api\ToolsRtaScopeGetV30ApiService
    {
        return $this->getService('ToolsRtaScopeGetV30Api', \Oceanengine\Api\ToolsRtaScopeGetV30ApiService::class);
    }

    public function toolsRtaSetScopeV2Api(): \Oceanengine\Api\ToolsRtaSetScopeV2ApiService
    {
        return $this->getService('ToolsRtaSetScopeV2Api', \Oceanengine\Api\ToolsRtaSetScopeV2ApiService::class);
    }

    public function toolsRtaStatusUpdateV2Api(): \Oceanengine\Api\ToolsRtaStatusUpdateV2ApiService
    {
        return $this->getService('ToolsRtaStatusUpdateV2Api', \Oceanengine\Api\ToolsRtaStatusUpdateV2ApiService::class);
    }

    public function toolsRubeexPlayableAdListV2Api(): \Oceanengine\Api\ToolsRubeexPlayableAdListV2ApiService
    {
        return $this->getService('ToolsRubeexPlayableAdListV2Api', \Oceanengine\Api\ToolsRubeexPlayableAdListV2ApiService::class);
    }

    public function toolsRubeexPlayableListV2Api(): \Oceanengine\Api\ToolsRubeexPlayableListV2ApiService
    {
        return $this->getService('ToolsRubeexPlayableListV2Api', \Oceanengine\Api\ToolsRubeexPlayableListV2ApiService::class);
    }

    public function toolsRubeexRemarkV2Api(): \Oceanengine\Api\ToolsRubeexRemarkV2ApiService
    {
        return $this->getService('ToolsRubeexRemarkV2Api', \Oceanengine\Api\ToolsRubeexRemarkV2ApiService::class);
    }

    public function toolsRubeexVersionGetV2Api(): \Oceanengine\Api\ToolsRubeexVersionGetV2ApiService
    {
        return $this->getService('ToolsRubeexVersionGetV2Api', \Oceanengine\Api\ToolsRubeexVersionGetV2ApiService::class);
    }

    public function toolsSearchBidRatioGetV2Api(): \Oceanengine\Api\ToolsSearchBidRatioGetV2ApiService
    {
        return $this->getService('ToolsSearchBidRatioGetV2Api', \Oceanengine\Api\ToolsSearchBidRatioGetV2ApiService::class);
    }

    public function toolsSiteCopyV2Api(): \Oceanengine\Api\ToolsSiteCopyV2ApiService
    {
        return $this->getService('ToolsSiteCopyV2Api', \Oceanengine\Api\ToolsSiteCopyV2ApiService::class);
    }

    public function toolsSiteCreateV2Api(): \Oceanengine\Api\ToolsSiteCreateV2ApiService
    {
        return $this->getService('ToolsSiteCreateV2Api', \Oceanengine\Api\ToolsSiteCreateV2ApiService::class);
    }

    public function toolsSiteFormsListV2Api(): \Oceanengine\Api\ToolsSiteFormsListV2ApiService
    {
        return $this->getService('ToolsSiteFormsListV2Api', \Oceanengine\Api\ToolsSiteFormsListV2ApiService::class);
    }

    public function toolsSiteGetV2Api(): \Oceanengine\Api\ToolsSiteGetV2ApiService
    {
        return $this->getService('ToolsSiteGetV2Api', \Oceanengine\Api\ToolsSiteGetV2ApiService::class);
    }

    public function toolsSiteHandselV2Api(): \Oceanengine\Api\ToolsSiteHandselV2ApiService
    {
        return $this->getService('ToolsSiteHandselV2Api', \Oceanengine\Api\ToolsSiteHandselV2ApiService::class);
    }

    public function toolsSitePreviewV2Api(): \Oceanengine\Api\ToolsSitePreviewV2ApiService
    {
        return $this->getService('ToolsSitePreviewV2Api', \Oceanengine\Api\ToolsSitePreviewV2ApiService::class);
    }

    public function toolsSiteReadV2Api(): \Oceanengine\Api\ToolsSiteReadV2ApiService
    {
        return $this->getService('ToolsSiteReadV2Api', \Oceanengine\Api\ToolsSiteReadV2ApiService::class);
    }

    public function toolsSiteTemplateCreateV2Api(): \Oceanengine\Api\ToolsSiteTemplateCreateV2ApiService
    {
        return $this->getService('ToolsSiteTemplateCreateV2Api', \Oceanengine\Api\ToolsSiteTemplateCreateV2ApiService::class);
    }

    public function toolsSiteTemplateGetV2Api(): \Oceanengine\Api\ToolsSiteTemplateGetV2ApiService
    {
        return $this->getService('ToolsSiteTemplateGetV2Api', \Oceanengine\Api\ToolsSiteTemplateGetV2ApiService::class);
    }

    public function toolsSiteTemplatePicUrlGetV2Api(): \Oceanengine\Api\ToolsSiteTemplatePicUrlGetV2ApiService
    {
        return $this->getService('ToolsSiteTemplatePicUrlGetV2Api', \Oceanengine\Api\ToolsSiteTemplatePicUrlGetV2ApiService::class);
    }

    public function toolsSiteTemplatePreviewV2Api(): \Oceanengine\Api\ToolsSiteTemplatePreviewV2ApiService
    {
        return $this->getService('ToolsSiteTemplatePreviewV2Api', \Oceanengine\Api\ToolsSiteTemplatePreviewV2ApiService::class);
    }

    public function toolsSiteTemplateSiteCreateV2Api(): \Oceanengine\Api\ToolsSiteTemplateSiteCreateV2ApiService
    {
        return $this->getService('ToolsSiteTemplateSiteCreateV2Api', \Oceanengine\Api\ToolsSiteTemplateSiteCreateV2ApiService::class);
    }

    public function toolsSiteUpdateStatusV2Api(): \Oceanengine\Api\ToolsSiteUpdateStatusV2ApiService
    {
        return $this->getService('ToolsSiteUpdateStatusV2Api', \Oceanengine\Api\ToolsSiteUpdateStatusV2ApiService::class);
    }

    public function toolsSiteUpdateV2Api(): \Oceanengine\Api\ToolsSiteUpdateV2ApiService
    {
        return $this->getService('ToolsSiteUpdateV2Api', \Oceanengine\Api\ToolsSiteUpdateV2ApiService::class);
    }

    public function toolsStarTaskSettlementConfigV2Api(): \Oceanengine\Api\ToolsStarTaskSettlementConfigV2ApiService
    {
        return $this->getService('ToolsStarTaskSettlementConfigV2Api', \Oceanengine\Api\ToolsStarTaskSettlementConfigV2ApiService::class);
    }

    public function toolsStarTaskTitleTopicGetV2Api(): \Oceanengine\Api\ToolsStarTaskTitleTopicGetV2ApiService
    {
        return $this->getService('ToolsStarTaskTitleTopicGetV2Api', \Oceanengine\Api\ToolsStarTaskTitleTopicGetV2ApiService::class);
    }

    public function toolsSuggestBudgetGetV30Api(): \Oceanengine\Api\ToolsSuggestBudgetGetV30ApiService
    {
        return $this->getService('ToolsSuggestBudgetGetV30Api', \Oceanengine\Api\ToolsSuggestBudgetGetV30ApiService::class);
    }

    public function toolsTaskRaiseCreateV2Api(): \Oceanengine\Api\ToolsTaskRaiseCreateV2ApiService
    {
        return $this->getService('ToolsTaskRaiseCreateV2Api', \Oceanengine\Api\ToolsTaskRaiseCreateV2ApiService::class);
    }

    public function toolsTaskRaiseDataGetV2Api(): \Oceanengine\Api\ToolsTaskRaiseDataGetV2ApiService
    {
        return $this->getService('ToolsTaskRaiseDataGetV2Api', \Oceanengine\Api\ToolsTaskRaiseDataGetV2ApiService::class);
    }

    public function toolsTaskRaiseGetV2Api(): \Oceanengine\Api\ToolsTaskRaiseGetV2ApiService
    {
        return $this->getService('ToolsTaskRaiseGetV2Api', \Oceanengine\Api\ToolsTaskRaiseGetV2ApiService::class);
    }

    public function toolsTaskRaiseOptimizationIdsGetV2Api(): \Oceanengine\Api\ToolsTaskRaiseOptimizationIdsGetV2ApiService
    {
        return $this->getService('ToolsTaskRaiseOptimizationIdsGetV2Api', \Oceanengine\Api\ToolsTaskRaiseOptimizationIdsGetV2ApiService::class);
    }

    public function toolsTaskRaiseStatusStopV2Api(): \Oceanengine\Api\ToolsTaskRaiseStatusStopV2ApiService
    {
        return $this->getService('ToolsTaskRaiseStatusStopV2Api', \Oceanengine\Api\ToolsTaskRaiseStatusStopV2ApiService::class);
    }

    public function toolsThirdSiteDeleteV2Api(): \Oceanengine\Api\ToolsThirdSiteDeleteV2ApiService
    {
        return $this->getService('ToolsThirdSiteDeleteV2Api', \Oceanengine\Api\ToolsThirdSiteDeleteV2ApiService::class);
    }

    public function toolsThirdSiteGetV2Api(): \Oceanengine\Api\ToolsThirdSiteGetV2ApiService
    {
        return $this->getService('ToolsThirdSiteGetV2Api', \Oceanengine\Api\ToolsThirdSiteGetV2ApiService::class);
    }

    public function toolsThirdSitePreviewV2Api(): \Oceanengine\Api\ToolsThirdSitePreviewV2ApiService
    {
        return $this->getService('ToolsThirdSitePreviewV2Api', \Oceanengine\Api\ToolsThirdSitePreviewV2ApiService::class);
    }

    public function toolsThirdSiteUpdateV2Api(): \Oceanengine\Api\ToolsThirdSiteUpdateV2ApiService
    {
        return $this->getService('ToolsThirdSiteUpdateV2Api', \Oceanengine\Api\ToolsThirdSiteUpdateV2ApiService::class);
    }

    public function toolsToolsTaskDetailGetV30Api(): \Oceanengine\Api\ToolsToolsTaskDetailGetV30ApiService
    {
        return $this->getService('ToolsToolsTaskDetailGetV30Api', \Oceanengine\Api\ToolsToolsTaskDetailGetV30ApiService::class);
    }

    public function toolsToolsTaskGetV30Api(): \Oceanengine\Api\ToolsToolsTaskGetV30ApiService
    {
        return $this->getService('ToolsToolsTaskGetV30Api', \Oceanengine\Api\ToolsToolsTaskGetV30ApiService::class);
    }

    public function toolsUnionFlowPackageCreateV2Api(): \Oceanengine\Api\ToolsUnionFlowPackageCreateV2ApiService
    {
        return $this->getService('ToolsUnionFlowPackageCreateV2Api', \Oceanengine\Api\ToolsUnionFlowPackageCreateV2ApiService::class);
    }

    public function toolsUnionFlowPackageDeleteV2Api(): \Oceanengine\Api\ToolsUnionFlowPackageDeleteV2ApiService
    {
        return $this->getService('ToolsUnionFlowPackageDeleteV2Api', \Oceanengine\Api\ToolsUnionFlowPackageDeleteV2ApiService::class);
    }

    public function toolsUnionFlowPackageGetV2Api(): \Oceanengine\Api\ToolsUnionFlowPackageGetV2ApiService
    {
        return $this->getService('ToolsUnionFlowPackageGetV2Api', \Oceanengine\Api\ToolsUnionFlowPackageGetV2ApiService::class);
    }

    public function toolsUnionFlowPackagePromotionReportV30Api(): \Oceanengine\Api\ToolsUnionFlowPackagePromotionReportV30ApiService
    {
        return $this->getService('ToolsUnionFlowPackagePromotionReportV30Api', \Oceanengine\Api\ToolsUnionFlowPackagePromotionReportV30ApiService::class);
    }

    public function toolsUnionFlowPackageReportV2Api(): \Oceanengine\Api\ToolsUnionFlowPackageReportV2ApiService
    {
        return $this->getService('ToolsUnionFlowPackageReportV2Api', \Oceanengine\Api\ToolsUnionFlowPackageReportV2ApiService::class);
    }

    public function toolsUnionFlowPackageUpdateV2Api(): \Oceanengine\Api\ToolsUnionFlowPackageUpdateV2ApiService
    {
        return $this->getService('ToolsUnionFlowPackageUpdateV2Api', \Oceanengine\Api\ToolsUnionFlowPackageUpdateV2ApiService::class);
    }

    public function toolsVideoCheckAvailableAnchorV2Api(): \Oceanengine\Api\ToolsVideoCheckAvailableAnchorV2ApiService
    {
        return $this->getService('ToolsVideoCheckAvailableAnchorV2Api', \Oceanengine\Api\ToolsVideoCheckAvailableAnchorV2ApiService::class);
    }

    public function toolsVideoCoverSuggestV2Api(): \Oceanengine\Api\ToolsVideoCoverSuggestV2ApiService
    {
        return $this->getService('ToolsVideoCoverSuggestV2Api', \Oceanengine\Api\ToolsVideoCoverSuggestV2ApiService::class);
    }

    public function toolsWechatAppletCreateV30Api(): \Oceanengine\Api\ToolsWechatAppletCreateV30ApiService
    {
        return $this->getService('ToolsWechatAppletCreateV30Api', \Oceanengine\Api\ToolsWechatAppletCreateV30ApiService::class);
    }

    public function toolsWechatAppletListV30Api(): \Oceanengine\Api\ToolsWechatAppletListV30ApiService
    {
        return $this->getService('ToolsWechatAppletListV30Api', \Oceanengine\Api\ToolsWechatAppletListV30ApiService::class);
    }

    public function toolsWechatAppletUpdateV30Api(): \Oceanengine\Api\ToolsWechatAppletUpdateV30ApiService
    {
        return $this->getService('ToolsWechatAppletUpdateV30Api', \Oceanengine\Api\ToolsWechatAppletUpdateV30ApiService::class);
    }

    public function toolsWechatGameCreateV30Api(): \Oceanengine\Api\ToolsWechatGameCreateV30ApiService
    {
        return $this->getService('ToolsWechatGameCreateV30Api', \Oceanengine\Api\ToolsWechatGameCreateV30ApiService::class);
    }

    public function toolsWechatGameListV30Api(): \Oceanengine\Api\ToolsWechatGameListV30ApiService
    {
        return $this->getService('ToolsWechatGameListV30Api', \Oceanengine\Api\ToolsWechatGameListV30ApiService::class);
    }

    public function ubaToolAdCreateCreateV10Api(): \Oceanengine\Api\UbaToolAdCreateCreateV10ApiService
    {
        return $this->getService('UbaToolAdCreateCreateV10Api', \Oceanengine\Api\UbaToolAdCreateCreateV10ApiService::class);
    }

    public function ubaToolMidAdListV10Api(): \Oceanengine\Api\UbaToolMidAdListV10ApiService
    {
        return $this->getService('UbaToolMidAdListV10Api', \Oceanengine\Api\UbaToolMidAdListV10ApiService::class);
    }

    public function ubaToolPredUpdateV10Api(): \Oceanengine\Api\UbaToolPredUpdateV10ApiService
    {
        return $this->getService('UbaToolPredUpdateV10Api', \Oceanengine\Api\UbaToolPredUpdateV10ApiService::class);
    }

    public function ubaToolRitUpdateV10Api(): \Oceanengine\Api\UbaToolRitUpdateV10ApiService
    {
        return $this->getService('UbaToolRitUpdateV10Api', \Oceanengine\Api\UbaToolRitUpdateV10ApiService::class);
    }

    public function ubaToolStopUpdateV10Api(): \Oceanengine\Api\UbaToolStopUpdateV10ApiService
    {
        return $this->getService('UbaToolStopUpdateV10Api', \Oceanengine\Api\UbaToolStopUpdateV10ApiService::class);
    }

    public function uniProjectAwemeAuthorizedGetV30Api(): \Oceanengine\Api\UniProjectAwemeAuthorizedGetV30ApiService
    {
        return $this->getService('UniProjectAwemeAuthorizedGetV30Api', \Oceanengine\Api\UniProjectAwemeAuthorizedGetV30ApiService::class);
    }

    public function uniProjectCreateV30Api(): \Oceanengine\Api\UniProjectCreateV30ApiService
    {
        return $this->getService('UniProjectCreateV30Api', \Oceanengine\Api\UniProjectCreateV30ApiService::class);
    }

    public function uniProjectListGetV30Api(): \Oceanengine\Api\UniProjectListGetV30ApiService
    {
        return $this->getService('UniProjectListGetV30Api', \Oceanengine\Api\UniProjectListGetV30ApiService::class);
    }

    public function uniProjectMonetizationModeUpdateV30Api(): \Oceanengine\Api\UniProjectMonetizationModeUpdateV30ApiService
    {
        return $this->getService('UniProjectMonetizationModeUpdateV30Api', \Oceanengine\Api\UniProjectMonetizationModeUpdateV30ApiService::class);
    }

    public function uniProjectUpdateV30Api(): \Oceanengine\Api\UniProjectUpdateV30ApiService
    {
        return $this->getService('UniProjectUpdateV30Api', \Oceanengine\Api\UniProjectUpdateV30ApiService::class);
    }

    public function uploadStatementV2Api(): \Oceanengine\Api\UploadStatementV2ApiService
    {
        return $this->getService('UploadStatementV2Api', \Oceanengine\Api\UploadStatementV2ApiService::class);
    }

    public function userInfoV2Api(): \Oceanengine\Api\UserInfoV2ApiService
    {
        return $this->getService('UserInfoV2Api', \Oceanengine\Api\UserInfoV2ApiService::class);
    }

    public function walletChargeVerifyGetV30Api(): \Oceanengine\Api\WalletChargeVerifyGetV30ApiService
    {
        return $this->getService('WalletChargeVerifyGetV30Api', \Oceanengine\Api\WalletChargeVerifyGetV30ApiService::class);
    }

    public function walletPrepayChargeGenerateRemittanceCodeCreateV30Api(): \Oceanengine\Api\WalletPrepayChargeGenerateRemittanceCodeCreateV30ApiService
    {
        return $this->getService('WalletPrepayChargeGenerateRemittanceCodeCreateV30Api', \Oceanengine\Api\WalletPrepayChargeGenerateRemittanceCodeCreateV30ApiService::class);
    }

    public function walletRemittanceCodeListGetV30Api(): \Oceanengine\Api\WalletRemittanceCodeListGetV30ApiService
    {
        return $this->getService('WalletRemittanceCodeListGetV30Api', \Oceanengine\Api\WalletRemittanceCodeListGetV30ApiService::class);
    }

    public function yuntuAudienceInfoCreateV30Api(): \Oceanengine\Api\YuntuAudienceInfoCreateV30ApiService
    {
        return $this->getService('YuntuAudienceInfoCreateV30Api', \Oceanengine\Api\YuntuAudienceInfoCreateV30ApiService::class);
    }

    public function yuntuAudienceInfoDeleteV30Api(): \Oceanengine\Api\YuntuAudienceInfoDeleteV30ApiService
    {
        return $this->getService('YuntuAudienceInfoDeleteV30Api', \Oceanengine\Api\YuntuAudienceInfoDeleteV30ApiService::class);
    }

    public function yuntuAudienceInfoGetV30Api(): \Oceanengine\Api\YuntuAudienceInfoGetV30ApiService
    {
        return $this->getService('YuntuAudienceInfoGetV30Api', \Oceanengine\Api\YuntuAudienceInfoGetV30ApiService::class);
    }

    public function yuntuAudienceLabelCreateV30Api(): \Oceanengine\Api\YuntuAudienceLabelCreateV30ApiService
    {
        return $this->getService('YuntuAudienceLabelCreateV30Api', \Oceanengine\Api\YuntuAudienceLabelCreateV30ApiService::class);
    }

    public function yuntuAudienceLabelDeleteV30Api(): \Oceanengine\Api\YuntuAudienceLabelDeleteV30ApiService
    {
        return $this->getService('YuntuAudienceLabelDeleteV30Api', \Oceanengine\Api\YuntuAudienceLabelDeleteV30ApiService::class);
    }

    public function yuntuAudienceLabelGetV30Api(): \Oceanengine\Api\YuntuAudienceLabelGetV30ApiService
    {
        return $this->getService('YuntuAudienceLabelGetV30Api', \Oceanengine\Api\YuntuAudienceLabelGetV30ApiService::class);
    }

    public function yuntuBrandInfoGetV30Api(): \Oceanengine\Api\YuntuBrandInfoGetV30ApiService
    {
        return $this->getService('YuntuBrandInfoGetV30Api', \Oceanengine\Api\YuntuBrandInfoGetV30ApiService::class);
    }

    public function commonApi(): \Oceanengine\Api\CommonApiService
    {
        return $this->getService('CommonApi', \Oceanengine\Api\CommonApiService::class);
    }
}
