<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEventAssetsGetV2FilteringApp implements \JsonSerializable
{
    /**
     * 应用包名，精确搜索
     * @var string
     */
    protected ?string $appPackageName = null;

    /**
     * 资产名，模糊搜索
     * @var string
     */
    protected ?string $assetName = null;

    /**
     * 应用包名，精确搜索
     * @return string
     */
    public function getAppPackageName(): ?string
    {
        return $this->appPackageName;
    }

    /**
     * 应用包名，精确搜索
     * @param string $appPackageName
     * @return self
     */
    public function setAppPackageName(?string $appPackageName): self
    {
        $this->appPackageName = $appPackageName;
        return $this;
    }

    /**
     * 资产名，模糊搜索
     * @return string
     */
    public function getAssetName(): ?string
    {
        return $this->assetName;
    }

    /**
     * 资产名，模糊搜索
     * @param string $assetName
     * @return self
     */
    public function setAssetName(?string $assetName): self
    {
        $this->assetName = $assetName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->appPackageName !== null) {
            $result['app_package_name'] = $this->appPackageName;
        }
        if ($this->assetName !== null) {
            $result['asset_name'] = $this->assetName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_package_name'] ?? null) !== null) {
            $obj->appPackageName = (string) $v;
        }
        if (($v = $data['asset_name'] ?? null) !== null) {
            $obj->assetName = (string) $v;
        }
        return $obj;
    }
}
