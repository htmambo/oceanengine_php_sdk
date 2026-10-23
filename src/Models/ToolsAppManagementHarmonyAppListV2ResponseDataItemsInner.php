<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementHarmonyAppListV2ResponseDataItemsInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $appId = null;

    /**
     * @var string
     */
    protected ?string $appName = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementHarmonyAppListV2DataItemsAssetGeneration
     */
    protected ?string $assetGeneration = null;

    /**
     * @var string
     */
    protected ?string $assetId = null;

    /**
     * @var string
     */
    protected ?string $downloadUrl = null;

    /**
     * @var string
     */
    protected ?string $iconUrl = null;

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
    protected ?string $status = null;

    /**
     * @var int
     */
    protected ?int $versionId = null;

    /**
     * @var string
     */
    protected ?string $versionName = null;

    /**
     * @return string
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }

    /**
     * @param string $appId
     * @return self
     */
    public function setAppId(?string $appId): self
    {
        $this->appId = $appId;
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
     * @return \Oceanengine\Models\ToolsAppManagementHarmonyAppListV2DataItemsAssetGeneration
     */
    public function getAssetGeneration(): ?string
    {
        return $this->assetGeneration;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementHarmonyAppListV2DataItemsAssetGeneration $assetGeneration
     * @return self
     */
    public function setAssetGeneration(?string $assetGeneration): self
    {
        $this->assetGeneration = $assetGeneration;
        return $this;
    }

    /**
     * @return string
     */
    public function getAssetId(): ?string
    {
        return $this->assetId;
    }

    /**
     * @param string $assetId
     * @return self
     */
    public function setAssetId(?string $assetId): self
    {
        $this->assetId = $assetId;
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
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return int
     */
    public function getVersionId(): ?int
    {
        return $this->versionId;
    }

    /**
     * @param int $versionId
     * @return self
     */
    public function setVersionId(?int $versionId): self
    {
        $this->versionId = $versionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersionName(): ?string
    {
        return $this->versionName;
    }

    /**
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
        if ($this->appId !== null) {
            $result['app_id'] = $this->appId;
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
        if ($this->downloadUrl !== null) {
            $result['download_url'] = $this->downloadUrl;
        }
        if ($this->iconUrl !== null) {
            $result['icon_url'] = $this->iconUrl;
        }
        if ($this->packageName !== null) {
            $result['package_name'] = $this->packageName;
        }
        if ($this->publishTime !== null) {
            $result['publish_time'] = $this->publishTime;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->versionId !== null) {
            $result['version_id'] = $this->versionId;
        }
        if ($this->versionName !== null) {
            $result['version_name'] = $this->versionName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_id'] ?? null) !== null) {
            $obj->appId = (string) $v;
        }
        if (($v = $data['app_name'] ?? null) !== null) {
            $obj->appName = (string) $v;
        }
        if (($v = $data['asset_generation'] ?? null) !== null) {
            $obj->assetGeneration = (string) $v;
        }
        if (($v = $data['asset_id'] ?? null) !== null) {
            $obj->assetId = (string) $v;
        }
        if (($v = $data['download_url'] ?? null) !== null) {
            $obj->downloadUrl = (string) $v;
        }
        if (($v = $data['icon_url'] ?? null) !== null) {
            $obj->iconUrl = (string) $v;
        }
        if (($v = $data['package_name'] ?? null) !== null) {
            $obj->packageName = (string) $v;
        }
        if (($v = $data['publish_time'] ?? null) !== null) {
            $obj->publishTime = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['version_id'] ?? null) !== null) {
            $obj->versionId = (int) $v;
        }
        if (($v = $data['version_name'] ?? null) !== null) {
            $obj->versionName = (string) $v;
        }
        return $obj;
    }
}
