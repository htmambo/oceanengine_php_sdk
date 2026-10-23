<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueInfoUpdateV2Request implements \JsonSerializable
{
    /**
     * 修改线索所属的广告主id
     * @var int[]
     */
    protected ?array $advertiserIds = null;

    /**
     * 操作人，不能为空
     * @var string
     */
    protected ?string $opName = null;

    /**
     * 更新的线索信息
     * @var \Oceanengine\Models\ToolsClueInfoUpdateV2RequestUpdateInfoInner[]
     */
    protected ?array $updateInfo = null;

    /**
     * 修改线索所属的广告主id
     * @return int[]
     */
    public function getAdvertiserIds(): ?array
    {
        return $this->advertiserIds;
    }

    /**
     * 修改线索所属的广告主id
     * @param int[] $advertiserIds
     * @return self
     */
    public function setAdvertiserIds(?array $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
        return $this;
    }

    /**
     * 操作人，不能为空
     * @return string
     */
    public function getOpName(): ?string
    {
        return $this->opName;
    }

    /**
     * 操作人，不能为空
     * @param string $opName
     * @return self
     */
    public function setOpName(?string $opName): self
    {
        $this->opName = $opName;
        return $this;
    }

    /**
     * 更新的线索信息
     * @return \Oceanengine\Models\ToolsClueInfoUpdateV2RequestUpdateInfoInner[]
     */
    public function getUpdateInfo(): ?array
    {
        return $this->updateInfo;
    }

    /**
     * 更新的线索信息
     * @param \Oceanengine\Models\ToolsClueInfoUpdateV2RequestUpdateInfoInner[] $updateInfo
     * @return self
     */
    public function setUpdateInfo(?array $updateInfo): self
    {
        $this->updateInfo = $updateInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserIds !== null) {
            $result['advertiser_ids'] = $this->advertiserIds;
        }
        if ($this->opName !== null) {
            $result['op_name'] = $this->opName;
        }
        if ($this->updateInfo !== null) {
            $result['update_info'] = $this->updateInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_ids'] ?? null) !== null && is_array($v)) {
            $obj->advertiserIds = $v;
        }
        if (($v = $data['op_name'] ?? null) !== null) {
            $obj->opName = (string) $v;
        }
        if (($v = $data['update_info'] ?? null) !== null && is_array($v)) {
            $obj->updateInfo = array_map(fn ($vv) => \Oceanengine\Models\ToolsClueInfoUpdateV2RequestUpdateInfoInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
