<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEventAssetsGetV2ResponseDataAppInner implements \JsonSerializable
{
    /**
     * 应用ID
     * @var int
     */
    protected ?int $appId = null;

    /**
     * 应用名
     * @var string
     */
    protected ?string $appName = null;

    /**
     * @var \Oceanengine\Models\ToolsEventAssetsGetV2DataAppAppType
     */
    protected ?string $appType = null;

    /**
     * 应用资产ID
     * @var int
     */
    protected ?int $assetId = null;

    /**
     * 资产名
     * @var string
     */
    protected ?string $assetName = null;

    /**
     * 应用下载链接
     * @var string
     */
    protected ?string $downloadUrl = null;

    /**
     * 母包ID
     * @var string
     */
    protected ?string $packageId = null;

    /**
     * 应用包名
     * @var string
     */
    protected ?string $packageName = null;

    /**
     * @var \Oceanengine\Models\ToolsEventAssetsGetV2DataAppRole
     */
    protected ?string $role = null;

    /**
     * 应用ID
     * @return int
     */
    public function getAppId(): ?int
    {
        return $this->appId;
    }

    /**
     * 应用ID
     * @param int $appId
     * @return self
     */
    public function setAppId(?int $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * 应用名
     * @return string
     */
    public function getAppName(): ?string
    {
        return $this->appName;
    }

    /**
     * 应用名
     * @param string $appName
     * @return self
     */
    public function setAppName(?string $appName): self
    {
        $this->appName = $appName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEventAssetsGetV2DataAppAppType
     */
    public function getAppType(): ?string
    {
        return $this->appType;
    }

    /**
     * @param \Oceanengine\Models\ToolsEventAssetsGetV2DataAppAppType $appType
     * @return self
     */
    public function setAppType(?string $appType): self
    {
        $this->appType = $appType;
        return $this;
    }

    /**
     * 应用资产ID
     * @return int
     */
    public function getAssetId(): ?int
    {
        return $this->assetId;
    }

    /**
     * 应用资产ID
     * @param int $assetId
     * @return self
     */
    public function setAssetId(?int $assetId): self
    {
        $this->assetId = $assetId;
        return $this;
    }

    /**
     * 资产名
     * @return string
     */
    public function getAssetName(): ?string
    {
        return $this->assetName;
    }

    /**
     * 资产名
     * @param string $assetName
     * @return self
     */
    public function setAssetName(?string $assetName): self
    {
        $this->assetName = $assetName;
        return $this;
    }

    /**
     * 应用下载链接
     * @return string
     */
    public function getDownloadUrl(): ?string
    {
        return $this->downloadUrl;
    }

    /**
     * 应用下载链接
     * @param string $downloadUrl
     * @return self
     */
    public function setDownloadUrl(?string $downloadUrl): self
    {
        $this->downloadUrl = $downloadUrl;
        return $this;
    }

    /**
     * 母包ID
     * @return string
     */
    public function getPackageId(): ?string
    {
        return $this->packageId;
    }

    /**
     * 母包ID
     * @param string $packageId
     * @return self
     */
    public function setPackageId(?string $packageId): self
    {
        $this->packageId = $packageId;
        return $this;
    }

    /**
     * 应用包名
     * @return string
     */
    public function getPackageName(): ?string
    {
        return $this->packageName;
    }

    /**
     * 应用包名
     * @param string $packageName
     * @return self
     */
    public function setPackageName(?string $packageName): self
    {
        $this->packageName = $packageName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEventAssetsGetV2DataAppRole
     */
    public function getRole(): ?string
    {
        return $this->role;
    }

    /**
     * @param \Oceanengine\Models\ToolsEventAssetsGetV2DataAppRole $role
     * @return self
     */
    public function setRole(?string $role): self
    {
        $this->role = $role;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->appId !== null) {
            $result['app_id'] = $this->appId;
        }
        if ($this->appName !== null) {
            $result['app_name'] = $this->appName;
        }
        if ($this->appType !== null) {
            $result['app_type'] = $this->appType;
        }
        if ($this->assetId !== null) {
            $result['asset_id'] = $this->assetId;
        }
        if ($this->assetName !== null) {
            $result['asset_name'] = $this->assetName;
        }
        if ($this->downloadUrl !== null) {
            $result['download_url'] = $this->downloadUrl;
        }
        if ($this->packageId !== null) {
            $result['package_id'] = $this->packageId;
        }
        if ($this->packageName !== null) {
            $result['package_name'] = $this->packageName;
        }
        if ($this->role !== null) {
            $result['role'] = $this->role;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_id'] ?? null) !== null) {
            $obj->appId = (int) $v;
        }
        if (($v = $data['app_name'] ?? null) !== null) {
            $obj->appName = (string) $v;
        }
        if (($v = $data['app_type'] ?? null) !== null) {
            $obj->appType = (string) $v;
        }
        if (($v = $data['asset_id'] ?? null) !== null) {
            $obj->assetId = (int) $v;
        }
        if (($v = $data['asset_name'] ?? null) !== null) {
            $obj->assetName = (string) $v;
        }
        if (($v = $data['download_url'] ?? null) !== null) {
            $obj->downloadUrl = (string) $v;
        }
        if (($v = $data['package_id'] ?? null) !== null) {
            $obj->packageId = (string) $v;
        }
        if (($v = $data['package_name'] ?? null) !== null) {
            $obj->packageName = (string) $v;
        }
        if (($v = $data['role'] ?? null) !== null) {
            $obj->role = (string) $v;
        }
        return $obj;
    }
}
