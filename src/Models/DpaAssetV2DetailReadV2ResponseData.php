<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaAssetV2DetailReadV2ResponseData implements \JsonSerializable
{
    /**
     * 投放条件列表
     * @var \Oceanengine\Models\DpaAssetV2DetailReadV2ResponseDataAssetListInner[]
     */
    protected ?array $assetList = null;

    /**
     * 投放条件列表
     * @return \Oceanengine\Models\DpaAssetV2DetailReadV2ResponseDataAssetListInner[]
     */
    public function getAssetList(): ?array
    {
        return $this->assetList;
    }

    /**
     * 投放条件列表
     * @param \Oceanengine\Models\DpaAssetV2DetailReadV2ResponseDataAssetListInner[] $assetList
     * @return self
     */
    public function setAssetList(?array $assetList): self
    {
        $this->assetList = $assetList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->assetList !== null) {
            $result['asset_list'] = $this->assetList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['asset_list'] ?? null) !== null && is_array($v)) {
            $obj->assetList = array_map(fn ($vv) => \Oceanengine\Models\DpaAssetV2DetailReadV2ResponseDataAssetListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
