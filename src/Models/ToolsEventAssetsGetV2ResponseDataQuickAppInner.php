<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEventAssetsGetV2ResponseDataQuickAppInner implements \JsonSerializable
{
    /**
     * 快应用资产ID
     * @var int
     */
    protected ?int $assetId = null;

    /**
     * 快应用名称
     * @var string
     */
    protected ?string $assetName = null;

    /**
     * 快应用包名
     * @var string
     */
    protected ?string $packageName = null;

    /**
     * 快应用ID
     * @var int
     */
    protected ?int $quickAppId = null;

    /**
     * 快应用资产ID
     * @return int
     */
    public function getAssetId(): ?int
    {
        return $this->assetId;
    }

    /**
     * 快应用资产ID
     * @param int $assetId
     * @return self
     */
    public function setAssetId(?int $assetId): self
    {
        $this->assetId = $assetId;
        return $this;
    }

    /**
     * 快应用名称
     * @return string
     */
    public function getAssetName(): ?string
    {
        return $this->assetName;
    }

    /**
     * 快应用名称
     * @param string $assetName
     * @return self
     */
    public function setAssetName(?string $assetName): self
    {
        $this->assetName = $assetName;
        return $this;
    }

    /**
     * 快应用包名
     * @return string
     */
    public function getPackageName(): ?string
    {
        return $this->packageName;
    }

    /**
     * 快应用包名
     * @param string $packageName
     * @return self
     */
    public function setPackageName(?string $packageName): self
    {
        $this->packageName = $packageName;
        return $this;
    }

    /**
     * 快应用ID
     * @return int
     */
    public function getQuickAppId(): ?int
    {
        return $this->quickAppId;
    }

    /**
     * 快应用ID
     * @param int $quickAppId
     * @return self
     */
    public function setQuickAppId(?int $quickAppId): self
    {
        $this->quickAppId = $quickAppId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->assetId !== null) {
            $result['asset_id'] = $this->assetId;
        }
        if ($this->assetName !== null) {
            $result['asset_name'] = $this->assetName;
        }
        if ($this->packageName !== null) {
            $result['package_name'] = $this->packageName;
        }
        if ($this->quickAppId !== null) {
            $result['quick_app_id'] = $this->quickAppId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['asset_id'] ?? null) !== null) {
            $obj->assetId = (int) $v;
        }
        if (($v = $data['asset_name'] ?? null) !== null) {
            $obj->assetName = (string) $v;
        }
        if (($v = $data['package_name'] ?? null) !== null) {
            $obj->packageName = (string) $v;
        }
        if (($v = $data['quick_app_id'] ?? null) !== null) {
            $obj->quickAppId = (int) $v;
        }
        return $obj;
    }
}
