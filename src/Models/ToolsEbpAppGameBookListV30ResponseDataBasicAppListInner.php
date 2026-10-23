<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpAppGameBookListV30ResponseDataBasicAppListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $accountId = null;

    /**
     * @var string
     */
    protected ?string $accountName = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpAppGameBookListV30DataBasicAppListAccountType
     */
    protected ?string $accountType = null;

    /**
     * @var string
     */
    protected ?string $appCloudId = null;

    /**
     * @var string
     */
    protected ?string $appLogo = null;

    /**
     * 应用名称
     * @var string
     */
    protected ?string $appName = null;

    /**
     * 英文应用名称
     * @var string
     */
    protected ?string $appNameEn = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpAppGameBookListV30DataBasicAppListAssetGeneration
     */
    protected ?string $assetGeneration = null;

    /**
     * AD账户查询时是否能以BP校验权限
     * @var bool
     */
    protected ?bool $authDetail = null;

    /**
     * @var int
     */
    protected ?int $basicPackageIntId = null;

    /**
     * 创建时间
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 下载链接
     * @var string
     */
    protected ?string $downloadUrl = null;

    /**
     * 是否有分包
     * @var bool
     */
    protected ?bool $hasExtendPackage = null;

    /**
     * 历史来源账户id
     * @var int
     */
    protected ?int $historyAccountId = null;

    /**
     * 历史来源账户名称
     * @var string
     */
    protected ?string $historyAccountName = null;

    /**
     * 历史来源账户类型
     * @var int
     */
    protected ?int $historyAccountType = null;

    /**
     * @var string
     */
    protected ?string $packageId = null;

    /**
     * 包名
     * @var string
     */
    protected ?string $packageName = null;

    /**
     * 发布时间
     * @var string
     */
    protected ?string $publishTime = null;

    /**
     * @var string
     */
    protected ?string $scheduledPublishTime = null;

    /**
     * 版本号
     * @var string
     */
    protected ?string $versionCode = null;

    /**
     * 版本名称
     * @var string
     */
    protected ?string $versionName = null;

    /**
     * @return string
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    /**
     * @param string $accountId
     * @return self
     */
    public function setAccountId(?string $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * @param string $accountName
     * @return self
     */
    public function setAccountName(?string $accountName): self
    {
        $this->accountName = $accountName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpAppGameBookListV30DataBasicAppListAccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAppGameBookListV30DataBasicAppListAccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return string
     */
    public function getAppCloudId(): ?string
    {
        return $this->appCloudId;
    }

    /**
     * @param string $appCloudId
     * @return self
     */
    public function setAppCloudId(?string $appCloudId): self
    {
        $this->appCloudId = $appCloudId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAppLogo(): ?string
    {
        return $this->appLogo;
    }

    /**
     * @param string $appLogo
     * @return self
     */
    public function setAppLogo(?string $appLogo): self
    {
        $this->appLogo = $appLogo;
        return $this;
    }

    /**
     * 应用名称
     * @return string
     */
    public function getAppName(): ?string
    {
        return $this->appName;
    }

    /**
     * 应用名称
     * @param string $appName
     * @return self
     */
    public function setAppName(?string $appName): self
    {
        $this->appName = $appName;
        return $this;
    }

    /**
     * 英文应用名称
     * @return string
     */
    public function getAppNameEn(): ?string
    {
        return $this->appNameEn;
    }

    /**
     * 英文应用名称
     * @param string $appNameEn
     * @return self
     */
    public function setAppNameEn(?string $appNameEn): self
    {
        $this->appNameEn = $appNameEn;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpAppGameBookListV30DataBasicAppListAssetGeneration
     */
    public function getAssetGeneration(): ?string
    {
        return $this->assetGeneration;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAppGameBookListV30DataBasicAppListAssetGeneration $assetGeneration
     * @return self
     */
    public function setAssetGeneration(?string $assetGeneration): self
    {
        $this->assetGeneration = $assetGeneration;
        return $this;
    }

    /**
     * AD账户查询时是否能以BP校验权限
     * @return bool
     */
    public function getAuthDetail(): ?bool
    {
        return $this->authDetail;
    }

    /**
     * AD账户查询时是否能以BP校验权限
     * @param bool $authDetail
     * @return self
     */
    public function setAuthDetail(?bool $authDetail): self
    {
        $this->authDetail = $authDetail;
        return $this;
    }

    /**
     * @return int
     */
    public function getBasicPackageIntId(): ?int
    {
        return $this->basicPackageIntId;
    }

    /**
     * @param int $basicPackageIntId
     * @return self
     */
    public function setBasicPackageIntId(?int $basicPackageIntId): self
    {
        $this->basicPackageIntId = $basicPackageIntId;
        return $this;
    }

    /**
     * 创建时间
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 创建时间
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 下载链接
     * @return string
     */
    public function getDownloadUrl(): ?string
    {
        return $this->downloadUrl;
    }

    /**
     * 下载链接
     * @param string $downloadUrl
     * @return self
     */
    public function setDownloadUrl(?string $downloadUrl): self
    {
        $this->downloadUrl = $downloadUrl;
        return $this;
    }

    /**
     * 是否有分包
     * @return bool
     */
    public function getHasExtendPackage(): ?bool
    {
        return $this->hasExtendPackage;
    }

    /**
     * 是否有分包
     * @param bool $hasExtendPackage
     * @return self
     */
    public function setHasExtendPackage(?bool $hasExtendPackage): self
    {
        $this->hasExtendPackage = $hasExtendPackage;
        return $this;
    }

    /**
     * 历史来源账户id
     * @return int
     */
    public function getHistoryAccountId(): ?int
    {
        return $this->historyAccountId;
    }

    /**
     * 历史来源账户id
     * @param int $historyAccountId
     * @return self
     */
    public function setHistoryAccountId(?int $historyAccountId): self
    {
        $this->historyAccountId = $historyAccountId;
        return $this;
    }

    /**
     * 历史来源账户名称
     * @return string
     */
    public function getHistoryAccountName(): ?string
    {
        return $this->historyAccountName;
    }

    /**
     * 历史来源账户名称
     * @param string $historyAccountName
     * @return self
     */
    public function setHistoryAccountName(?string $historyAccountName): self
    {
        $this->historyAccountName = $historyAccountName;
        return $this;
    }

    /**
     * 历史来源账户类型
     * @return int
     */
    public function getHistoryAccountType(): ?int
    {
        return $this->historyAccountType;
    }

    /**
     * 历史来源账户类型
     * @param int $historyAccountType
     * @return self
     */
    public function setHistoryAccountType(?int $historyAccountType): self
    {
        $this->historyAccountType = $historyAccountType;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackageId(): ?string
    {
        return $this->packageId;
    }

    /**
     * @param string $packageId
     * @return self
     */
    public function setPackageId(?string $packageId): self
    {
        $this->packageId = $packageId;
        return $this;
    }

    /**
     * 包名
     * @return string
     */
    public function getPackageName(): ?string
    {
        return $this->packageName;
    }

    /**
     * 包名
     * @param string $packageName
     * @return self
     */
    public function setPackageName(?string $packageName): self
    {
        $this->packageName = $packageName;
        return $this;
    }

    /**
     * 发布时间
     * @return string
     */
    public function getPublishTime(): ?string
    {
        return $this->publishTime;
    }

    /**
     * 发布时间
     * @param string $publishTime
     * @return self
     */
    public function setPublishTime(?string $publishTime): self
    {
        $this->publishTime = $publishTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getScheduledPublishTime(): ?string
    {
        return $this->scheduledPublishTime;
    }

    /**
     * @param string $scheduledPublishTime
     * @return self
     */
    public function setScheduledPublishTime(?string $scheduledPublishTime): self
    {
        $this->scheduledPublishTime = $scheduledPublishTime;
        return $this;
    }

    /**
     * 版本号
     * @return string
     */
    public function getVersionCode(): ?string
    {
        return $this->versionCode;
    }

    /**
     * 版本号
     * @param string $versionCode
     * @return self
     */
    public function setVersionCode(?string $versionCode): self
    {
        $this->versionCode = $versionCode;
        return $this;
    }

    /**
     * 版本名称
     * @return string
     */
    public function getVersionName(): ?string
    {
        return $this->versionName;
    }

    /**
     * 版本名称
     * @param string $versionName
     * @return self
     */
    public function setVersionName(?string $versionName): self
    {
        $this->versionName = $versionName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountId !== null) {
            $result['account_id'] = $this->accountId;
        }
        if ($this->accountName !== null) {
            $result['account_name'] = $this->accountName;
        }
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        if ($this->appCloudId !== null) {
            $result['app_cloud_id'] = $this->appCloudId;
        }
        if ($this->appLogo !== null) {
            $result['app_logo'] = $this->appLogo;
        }
        if ($this->appName !== null) {
            $result['app_name'] = $this->appName;
        }
        if ($this->appNameEn !== null) {
            $result['app_name_en'] = $this->appNameEn;
        }
        if ($this->assetGeneration !== null) {
            $result['asset_generation'] = $this->assetGeneration;
        }
        if ($this->authDetail !== null) {
            $result['auth_detail'] = $this->authDetail;
        }
        if ($this->basicPackageIntId !== null) {
            $result['basic_package_int_id'] = $this->basicPackageIntId;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->downloadUrl !== null) {
            $result['download_url'] = $this->downloadUrl;
        }
        if ($this->hasExtendPackage !== null) {
            $result['has_extend_package'] = $this->hasExtendPackage;
        }
        if ($this->historyAccountId !== null) {
            $result['history_account_id'] = $this->historyAccountId;
        }
        if ($this->historyAccountName !== null) {
            $result['history_account_name'] = $this->historyAccountName;
        }
        if ($this->historyAccountType !== null) {
            $result['history_account_type'] = $this->historyAccountType;
        }
        if ($this->packageId !== null) {
            $result['package_id'] = $this->packageId;
        }
        if ($this->packageName !== null) {
            $result['package_name'] = $this->packageName;
        }
        if ($this->publishTime !== null) {
            $result['publish_time'] = $this->publishTime;
        }
        if ($this->scheduledPublishTime !== null) {
            $result['scheduled_publish_time'] = $this->scheduledPublishTime;
        }
        if ($this->versionCode !== null) {
            $result['version_code'] = $this->versionCode;
        }
        if ($this->versionName !== null) {
            $result['version_name'] = $this->versionName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (string) $v;
        }
        if (($v = $data['account_name'] ?? null) !== null) {
            $obj->accountName = (string) $v;
        }
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (string) $v;
        }
        if (($v = $data['app_cloud_id'] ?? null) !== null) {
            $obj->appCloudId = (string) $v;
        }
        if (($v = $data['app_logo'] ?? null) !== null) {
            $obj->appLogo = (string) $v;
        }
        if (($v = $data['app_name'] ?? null) !== null) {
            $obj->appName = (string) $v;
        }
        if (($v = $data['app_name_en'] ?? null) !== null) {
            $obj->appNameEn = (string) $v;
        }
        if (($v = $data['asset_generation'] ?? null) !== null) {
            $obj->assetGeneration = (string) $v;
        }
        if (($v = $data['auth_detail'] ?? null) !== null) {
            $obj->authDetail = (bool) $v;
        }
        if (($v = $data['basic_package_int_id'] ?? null) !== null) {
            $obj->basicPackageIntId = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['download_url'] ?? null) !== null) {
            $obj->downloadUrl = (string) $v;
        }
        if (($v = $data['has_extend_package'] ?? null) !== null) {
            $obj->hasExtendPackage = (bool) $v;
        }
        if (($v = $data['history_account_id'] ?? null) !== null) {
            $obj->historyAccountId = (int) $v;
        }
        if (($v = $data['history_account_name'] ?? null) !== null) {
            $obj->historyAccountName = (string) $v;
        }
        if (($v = $data['history_account_type'] ?? null) !== null) {
            $obj->historyAccountType = (int) $v;
        }
        if (($v = $data['package_id'] ?? null) !== null) {
            $obj->packageId = (string) $v;
        }
        if (($v = $data['package_name'] ?? null) !== null) {
            $obj->packageName = (string) $v;
        }
        if (($v = $data['publish_time'] ?? null) !== null) {
            $obj->publishTime = (string) $v;
        }
        if (($v = $data['scheduled_publish_time'] ?? null) !== null) {
            $obj->scheduledPublishTime = (string) $v;
        }
        if (($v = $data['version_code'] ?? null) !== null) {
            $obj->versionCode = (string) $v;
        }
        if (($v = $data['version_name'] ?? null) !== null) {
            $obj->versionName = (string) $v;
        }
        return $obj;
    }
}
