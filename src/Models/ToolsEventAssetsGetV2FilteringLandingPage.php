<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEventAssetsGetV2FilteringLandingPage implements \JsonSerializable
{
    /**
     * 三方的资产id
     * @var int
     */
    protected ?int $assetId = null;

    /**
     * 三方落地页名称
     * @var string
     */
    protected ?string $assetName = null;

    /**
     * 三方的资产id
     * @return int
     */
    public function getAssetId(): ?int
    {
        return $this->assetId;
    }

    /**
     * 三方的资产id
     * @param int $assetId
     * @return self
     */
    public function setAssetId(?int $assetId): self
    {
        $this->assetId = $assetId;
        return $this;
    }

    /**
     * 三方落地页名称
     * @return string
     */
    public function getAssetName(): ?string
    {
        return $this->assetName;
    }

    /**
     * 三方落地页名称
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
        if ($this->assetId !== null) {
            $result['asset_id'] = $this->assetId;
        }
        if ($this->assetName !== null) {
            $result['asset_name'] = $this->assetName;
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
        return $obj;
    }
}
