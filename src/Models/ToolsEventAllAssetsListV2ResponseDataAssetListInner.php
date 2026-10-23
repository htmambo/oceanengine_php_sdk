<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEventAllAssetsListV2ResponseDataAssetListInner implements \JsonSerializable
{
    /**
     * 应用类资产融合归因升级文案
     * @var string
     */
    protected ?string $appForceInfo = null;

    /**
     * 资产id
     * @var int
     */
    protected ?int $assetId = null;

    /**
     * 资产名称
     * @var string
     */
    protected ?string $assetName = null;

    /**
     * @var \Oceanengine\Models\ToolsEventAllAssetsListV2DataAssetListAssetType
     */
    protected ?string $assetType = null;

    /**
     * 资产创建时间，格式`YYYY-MM-DD HH:MM:SS`
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 资产修改时间，格式`YYYY-MM-DD HH:MM:SS`
     * @var string
     */
    protected ?string $modifyTime = null;

    /**
     * @var \Oceanengine\Models\ToolsEventAllAssetsListV2DataAssetListShareType
     */
    protected ?string $shareType = null;

    /**
     * 应用类资产融合归因升级文案
     * @return string
     */
    public function getAppForceInfo(): ?string
    {
        return $this->appForceInfo;
    }

    /**
     * 应用类资产融合归因升级文案
     * @param string $appForceInfo
     * @return self
     */
    public function setAppForceInfo(?string $appForceInfo): self
    {
        $this->appForceInfo = $appForceInfo;
        return $this;
    }

    /**
     * 资产id
     * @return int
     */
    public function getAssetId(): ?int
    {
        return $this->assetId;
    }

    /**
     * 资产id
     * @param int $assetId
     * @return self
     */
    public function setAssetId(?int $assetId): self
    {
        $this->assetId = $assetId;
        return $this;
    }

    /**
     * 资产名称
     * @return string
     */
    public function getAssetName(): ?string
    {
        return $this->assetName;
    }

    /**
     * 资产名称
     * @param string $assetName
     * @return self
     */
    public function setAssetName(?string $assetName): self
    {
        $this->assetName = $assetName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEventAllAssetsListV2DataAssetListAssetType
     */
    public function getAssetType(): ?string
    {
        return $this->assetType;
    }

    /**
     * @param \Oceanengine\Models\ToolsEventAllAssetsListV2DataAssetListAssetType $assetType
     * @return self
     */
    public function setAssetType(?string $assetType): self
    {
        $this->assetType = $assetType;
        return $this;
    }

    /**
     * 资产创建时间，格式`YYYY-MM-DD HH:MM:SS`
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 资产创建时间，格式`YYYY-MM-DD HH:MM:SS`
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 资产修改时间，格式`YYYY-MM-DD HH:MM:SS`
     * @return string
     */
    public function getModifyTime(): ?string
    {
        return $this->modifyTime;
    }

    /**
     * 资产修改时间，格式`YYYY-MM-DD HH:MM:SS`
     * @param string $modifyTime
     * @return self
     */
    public function setModifyTime(?string $modifyTime): self
    {
        $this->modifyTime = $modifyTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEventAllAssetsListV2DataAssetListShareType
     */
    public function getShareType(): ?string
    {
        return $this->shareType;
    }

    /**
     * @param \Oceanengine\Models\ToolsEventAllAssetsListV2DataAssetListShareType $shareType
     * @return self
     */
    public function setShareType(?string $shareType): self
    {
        $this->shareType = $shareType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->appForceInfo !== null) {
            $result['app_force_info'] = $this->appForceInfo;
        }
        if ($this->assetId !== null) {
            $result['asset_id'] = $this->assetId;
        }
        if ($this->assetName !== null) {
            $result['asset_name'] = $this->assetName;
        }
        if ($this->assetType !== null) {
            $result['asset_type'] = $this->assetType;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->modifyTime !== null) {
            $result['modify_time'] = $this->modifyTime;
        }
        if ($this->shareType !== null) {
            $result['share_type'] = $this->shareType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_force_info'] ?? null) !== null) {
            $obj->appForceInfo = (string) $v;
        }
        if (($v = $data['asset_id'] ?? null) !== null) {
            $obj->assetId = (int) $v;
        }
        if (($v = $data['asset_name'] ?? null) !== null) {
            $obj->assetName = (string) $v;
        }
        if (($v = $data['asset_type'] ?? null) !== null) {
            $obj->assetType = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['modify_time'] ?? null) !== null) {
            $obj->modifyTime = (string) $v;
        }
        if (($v = $data['share_type'] ?? null) !== null) {
            $obj->shareType = (string) $v;
        }
        return $obj;
    }
}
