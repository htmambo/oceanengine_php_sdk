<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpAssetAuthV30ResponseDataFailedRecordsInnerAssetScope implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $assetScope = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetScopeType
     */
    protected ?string $assetScopeType = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetType
     */
    protected ?string $assetType = null;

    /**
     * @return int
     */
    public function getAssetScope(): ?int
    {
        return $this->assetScope;
    }

    /**
     * @param int $assetScope
     * @return self
     */
    public function setAssetScope(?int $assetScope): self
    {
        $this->assetScope = $assetScope;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetScopeType
     */
    public function getAssetScopeType(): ?string
    {
        return $this->assetScopeType;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetScopeType $assetScopeType
     * @return self
     */
    public function setAssetScopeType(?string $assetScopeType): self
    {
        $this->assetScopeType = $assetScopeType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetType
     */
    public function getAssetType(): ?string
    {
        return $this->assetType;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAssetAuthV30DataFailedRecordsAssetScopeAssetType $assetType
     * @return self
     */
    public function setAssetType(?string $assetType): self
    {
        $this->assetType = $assetType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->assetScope !== null) {
            $result['asset_scope'] = $this->assetScope;
        }
        if ($this->assetScopeType !== null) {
            $result['asset_scope_type'] = $this->assetScopeType;
        }
        if ($this->assetType !== null) {
            $result['asset_type'] = $this->assetType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['asset_scope'] ?? null) !== null) {
            $obj->assetScope = (int) $v;
        }
        if (($v = $data['asset_scope_type'] ?? null) !== null) {
            $obj->assetScopeType = (string) $v;
        }
        if (($v = $data['asset_type'] ?? null) !== null) {
            $obj->assetType = (string) $v;
        }
        return $obj;
    }
}
