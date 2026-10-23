<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class IosAppListV30ResponseDataAppListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\IosAppListV30ResponseDataAppListInnerAccount
     */
    protected ?\Oceanengine\Models\IosAppListV30ResponseDataAppListInnerAccount $account = null;

    /**
     * @var string
     */
    protected ?string $appName = null;

    /**
     * @var \Oceanengine\Models\IosAppListV30DataAppListAssetGeneration
     */
    protected ?string $assetGeneration = null;

    /**
     * bp资产库-资产id
     * @var int
     */
    protected ?int $assetId = null;

    /**
     * 审核失败信息
     * @var string
     */
    protected ?string $auditResult = null;

    /**
     * @var string
     */
    protected ?string $downloadUrl = null;

    /**
     * @var string
     */
    protected ?string $iconUrl = null;

    /**
     * @var int
     */
    protected ?int $itunesId = null;

    /**
     * @var int
     */
    protected ?int $packageId = null;

    /**
     * @var string
     */
    protected ?string $packageName = null;

    /**
     * @var int
     */
    protected ?int $pkgId = null;

    /**
     * 发布时间
     * @var int
     */
    protected ?int $publishTime = null;

    /**
     * @var \Oceanengine\Models\IosAppListV30DataAppListStatus
     */
    protected ?string $status = null;

    /**
     * @var string
     */
    protected ?string $version = null;

    /**
     * @return \Oceanengine\Models\IosAppListV30ResponseDataAppListInnerAccount
     */
    public function getAccount(): ?\Oceanengine\Models\IosAppListV30ResponseDataAppListInnerAccount
    {
        return $this->account;
    }

    /**
     * @param \Oceanengine\Models\IosAppListV30ResponseDataAppListInnerAccount $account
     * @return self
     */
    public function setAccount(?\Oceanengine\Models\IosAppListV30ResponseDataAppListInnerAccount $account): self
    {
        $this->account = $account;
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
     * @return \Oceanengine\Models\IosAppListV30DataAppListAssetGeneration
     */
    public function getAssetGeneration(): ?string
    {
        return $this->assetGeneration;
    }

    /**
     * @param \Oceanengine\Models\IosAppListV30DataAppListAssetGeneration $assetGeneration
     * @return self
     */
    public function setAssetGeneration(?string $assetGeneration): self
    {
        $this->assetGeneration = $assetGeneration;
        return $this;
    }

    /**
     * bp资产库-资产id
     * @return int
     */
    public function getAssetId(): ?int
    {
        return $this->assetId;
    }

    /**
     * bp资产库-资产id
     * @param int $assetId
     * @return self
     */
    public function setAssetId(?int $assetId): self
    {
        $this->assetId = $assetId;
        return $this;
    }

    /**
     * 审核失败信息
     * @return string
     */
    public function getAuditResult(): ?string
    {
        return $this->auditResult;
    }

    /**
     * 审核失败信息
     * @param string $auditResult
     * @return self
     */
    public function setAuditResult(?string $auditResult): self
    {
        $this->auditResult = $auditResult;
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
     * @return int
     */
    public function getItunesId(): ?int
    {
        return $this->itunesId;
    }

    /**
     * @param int $itunesId
     * @return self
     */
    public function setItunesId(?int $itunesId): self
    {
        $this->itunesId = $itunesId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPackageId(): ?int
    {
        return $this->packageId;
    }

    /**
     * @param int $packageId
     * @return self
     */
    public function setPackageId(?int $packageId): self
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
     * @return int
     */
    public function getPkgId(): ?int
    {
        return $this->pkgId;
    }

    /**
     * @param int $pkgId
     * @return self
     */
    public function setPkgId(?int $pkgId): self
    {
        $this->pkgId = $pkgId;
        return $this;
    }

    /**
     * 发布时间
     * @return int
     */
    public function getPublishTime(): ?int
    {
        return $this->publishTime;
    }

    /**
     * 发布时间
     * @param int $publishTime
     * @return self
     */
    public function setPublishTime(?int $publishTime): self
    {
        $this->publishTime = $publishTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\IosAppListV30DataAppListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\IosAppListV30DataAppListStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
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
        if ($this->account !== null) {
            $result['account'] = $this->account;
        }
        if ($this->appName !== null) {
            $result['app_name'] = $this->appName;
        }
        if ($this->assetGeneration !== null) {
            $result['asset_generation'] = $this->assetGeneration;
        }
        if ($this->assetId !== null) {
            $result['asset_id'] = $this->assetId;
        }
        if ($this->auditResult !== null) {
            $result['audit_result'] = $this->auditResult;
        }
        if ($this->downloadUrl !== null) {
            $result['download_url'] = $this->downloadUrl;
        }
        if ($this->iconUrl !== null) {
            $result['icon_url'] = $this->iconUrl;
        }
        if ($this->itunesId !== null) {
            $result['itunes_id'] = $this->itunesId;
        }
        if ($this->packageId !== null) {
            $result['package_id'] = $this->packageId;
        }
        if ($this->packageName !== null) {
            $result['package_name'] = $this->packageName;
        }
        if ($this->pkgId !== null) {
            $result['pkg_id'] = $this->pkgId;
        }
        if ($this->publishTime !== null) {
            $result['publish_time'] = $this->publishTime;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->version !== null) {
            $result['version'] = $this->version;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account'] ?? null) !== null && is_array($v)) {
            $obj->account = \Oceanengine\Models\IosAppListV30ResponseDataAppListInnerAccount::fromArray($v);
        }
        if (($v = $data['app_name'] ?? null) !== null) {
            $obj->appName = (string) $v;
        }
        if (($v = $data['asset_generation'] ?? null) !== null) {
            $obj->assetGeneration = (string) $v;
        }
        if (($v = $data['asset_id'] ?? null) !== null) {
            $obj->assetId = (int) $v;
        }
        if (($v = $data['audit_result'] ?? null) !== null) {
            $obj->auditResult = (string) $v;
        }
        if (($v = $data['download_url'] ?? null) !== null) {
            $obj->downloadUrl = (string) $v;
        }
        if (($v = $data['icon_url'] ?? null) !== null) {
            $obj->iconUrl = (string) $v;
        }
        if (($v = $data['itunes_id'] ?? null) !== null) {
            $obj->itunesId = (int) $v;
        }
        if (($v = $data['package_id'] ?? null) !== null) {
            $obj->packageId = (int) $v;
        }
        if (($v = $data['package_name'] ?? null) !== null) {
            $obj->packageName = (string) $v;
        }
        if (($v = $data['pkg_id'] ?? null) !== null) {
            $obj->pkgId = (int) $v;
        }
        if (($v = $data['publish_time'] ?? null) !== null) {
            $obj->publishTime = (int) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['version'] ?? null) !== null) {
            $obj->version = (string) $v;
        }
        return $obj;
    }
}
