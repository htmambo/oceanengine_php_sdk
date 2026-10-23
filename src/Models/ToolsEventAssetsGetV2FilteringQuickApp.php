<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEventAssetsGetV2FilteringQuickApp implements \JsonSerializable
{
    /**
     * 快应用包名，模糊搜索
     * @var string
     */
    protected ?string $assetName = null;

    /**
     * 快应用包名，模糊搜索
     * @return string
     */
    public function getAssetName(): ?string
    {
        return $this->assetName;
    }

    /**
     * 快应用包名，模糊搜索
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
        if ($this->assetName !== null) {
            $result['asset_name'] = $this->assetName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['asset_name'] ?? null) !== null) {
            $obj->assetName = (string) $v;
        }
        return $obj;
    }
}
