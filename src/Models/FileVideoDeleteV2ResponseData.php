<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileVideoDeleteV2ResponseData implements \JsonSerializable
{
    /**
     * 操作失败的视频ID列表，不在此列表内的素材表示删除成功
     * @var int[]
     */
    protected ?array $failMaterialIds = null;

    /**
     * 操作失败的素材ID列表，不在此列表内的素材表示删除成功
     * @var string[]
     */
    protected ?array $failVideoIds = null;

    /**
     * 操作失败的视频ID列表，不在此列表内的素材表示删除成功
     * @return int[]
     */
    public function getFailMaterialIds(): ?array
    {
        return $this->failMaterialIds;
    }

    /**
     * 操作失败的视频ID列表，不在此列表内的素材表示删除成功
     * @param int[] $failMaterialIds
     * @return self
     */
    public function setFailMaterialIds(?array $failMaterialIds): self
    {
        $this->failMaterialIds = $failMaterialIds;
        return $this;
    }

    /**
     * 操作失败的素材ID列表，不在此列表内的素材表示删除成功
     * @return string[]
     */
    public function getFailVideoIds(): ?array
    {
        return $this->failVideoIds;
    }

    /**
     * 操作失败的素材ID列表，不在此列表内的素材表示删除成功
     * @param string[] $failVideoIds
     * @return self
     */
    public function setFailVideoIds(?array $failVideoIds): self
    {
        $this->failVideoIds = $failVideoIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->failMaterialIds !== null) {
            $result['fail_material_ids'] = $this->failMaterialIds;
        }
        if ($this->failVideoIds !== null) {
            $result['fail_video_ids'] = $this->failVideoIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['fail_material_ids'] ?? null) !== null && is_array($v)) {
            $obj->failMaterialIds = $v;
        }
        if (($v = $data['fail_video_ids'] ?? null) !== null && is_array($v)) {
            $obj->failVideoIds = $v;
        }
        return $obj;
    }
}
