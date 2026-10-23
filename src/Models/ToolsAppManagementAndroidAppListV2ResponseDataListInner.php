<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementAndroidAppListV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * 客户id
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidAppListV2DataListAccountType
     */
    protected ?string $accountType = null;

    /**
     * @var int
     */
    protected ?int $appCloudId = null;

    /**
     * @var string
     */
    protected ?string $appName = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var string
     */
    protected ?string $downloadUrl = null;

    /**
     * @var int
     */
    protected ?int $historyAccountId = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidAppListV2DataListHistoryAccountType
     */
    protected ?string $historyAccountType = null;

    /**
     * @var string
     */
    protected ?string $iconUrl = null;

    /**
     * @var bool
     */
    protected ?bool $isEbpAsset = null;

    /**
     * @var string
     */
    protected ?string $packageId = null;

    /**
     * @var string
     */
    protected ?string $packageName = null;

    /**
     * @var string
     */
    protected ?string $publishTime = null;

    /**
     * @var string
     */
    protected ?string $updateTime = null;

    /**
     * @var string
     */
    protected ?string $version = null;

    /**
     * 客户id
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 客户id
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementAndroidAppListV2DataListAccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidAppListV2DataListAccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return int
     */
    public function getAppCloudId(): ?int
    {
        return $this->appCloudId;
    }

    /**
     * @param int $appCloudId
     * @return self
     */
    public function setAppCloudId(?int $appCloudId): self
    {
        $this->appCloudId = $appCloudId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAppName(): ?string
    {
        return $this->appName;
    }

    /**
     * @param string $appName
     * @return self
     */
    public function setAppName(?string $appName): self
    {
        $this->appName = $appName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getDownloadUrl(): ?string
    {
        return $this->downloadUrl;
    }

    /**
     * @param string $downloadUrl
     * @return self
     */
    public function setDownloadUrl(?string $downloadUrl): self
    {
        $this->downloadUrl = $downloadUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getHistoryAccountId(): ?int
    {
        return $this->historyAccountId;
    }

    /**
     * @param int $historyAccountId
     * @return self
     */
    public function setHistoryAccountId(?int $historyAccountId): self
    {
        $this->historyAccountId = $historyAccountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementAndroidAppListV2DataListHistoryAccountType
     */
    public function getHistoryAccountType(): ?string
    {
        return $this->historyAccountType;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidAppListV2DataListHistoryAccountType $historyAccountType
     * @return self
     */
    public function setHistoryAccountType(?string $historyAccountType): self
    {
        $this->historyAccountType = $historyAccountType;
        return $this;
    }

    /**
     * @return string
     */
    public function getIconUrl(): ?string
    {
        return $this->iconUrl;
    }

    /**
     * @param string $iconUrl
     * @return self
     */
    public function setIconUrl(?string $iconUrl): self
    {
        $this->iconUrl = $iconUrl;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsEbpAsset(): ?bool
    {
        return $this->isEbpAsset;
    }

    /**
     * @param bool $isEbpAsset
     * @return self
     */
    public function setIsEbpAsset(?bool $isEbpAsset): self
    {
        $this->isEbpAsset = $isEbpAsset;
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
     * @return string
     */
    public function getPackageName(): ?string
    {
        return $this->packageName;
    }

    /**
     * @param string $packageName
     * @return self
     */
    public function setPackageName(?string $packageName): self
    {
        $this->packageName = $packageName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPublishTime(): ?string
    {
        return $this->publishTime;
    }

    /**
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
    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }

    /**
     * @param string $updateTime
     * @return self
     */
    public function setUpdateTime(?string $updateTime): self
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return self
     */
    public function setVersion(?string $version): self
    {
        $this->version = $version;
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
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        if ($this->appCloudId !== null) {
            $result['app_cloud_id'] = $this->appCloudId;
        }
        if ($this->appName !== null) {
            $result['app_name'] = $this->appName;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->downloadUrl !== null) {
            $result['download_url'] = $this->downloadUrl;
        }
        if ($this->historyAccountId !== null) {
            $result['history_account_id'] = $this->historyAccountId;
        }
        if ($this->historyAccountType !== null) {
            $result['history_account_type'] = $this->historyAccountType;
        }
        if ($this->iconUrl !== null) {
            $result['icon_url'] = $this->iconUrl;
        }
        if ($this->isEbpAsset !== null) {
            $result['is_ebp_asset'] = $this->isEbpAsset;
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
        if ($this->updateTime !== null) {
            $result['update_time'] = $this->updateTime;
        }
        if ($this->version !== null) {
            $result['version'] = $this->version;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (string) $v;
        }
        if (($v = $data['app_cloud_id'] ?? null) !== null) {
            $obj->appCloudId = (int) $v;
        }
        if (($v = $data['app_name'] ?? null) !== null) {
            $obj->appName = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['download_url'] ?? null) !== null) {
            $obj->downloadUrl = (string) $v;
        }
        if (($v = $data['history_account_id'] ?? null) !== null) {
            $obj->historyAccountId = (int) $v;
        }
        if (($v = $data['history_account_type'] ?? null) !== null) {
            $obj->historyAccountType = (string) $v;
        }
        if (($v = $data['icon_url'] ?? null) !== null) {
            $obj->iconUrl = (string) $v;
        }
        if (($v = $data['is_ebp_asset'] ?? null) !== null) {
            $obj->isEbpAsset = (bool) $v;
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
        if (($v = $data['update_time'] ?? null) !== null) {
            $obj->updateTime = (string) $v;
        }
        if (($v = $data['version'] ?? null) !== null) {
            $obj->version = (string) $v;
        }
        return $obj;
    }
}
