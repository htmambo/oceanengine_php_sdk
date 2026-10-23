<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanFileVideoDeleteV10ResponseData implements \JsonSerializable
{
    /**
     * 操作失败的video_id列表，不在此列表内的素材表示删除成功
     * @var string[]
     */
    protected ?array $failVideoIds = null;

    /**
     * 操作失败的video_id列表，不在此列表内的素材表示删除成功
     * @return string[]
     */
    public function getFailVideoIds(): ?array
    {
        return $this->failVideoIds;
    }

    /**
     * 操作失败的video_id列表，不在此列表内的素材表示删除成功
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
        if ($this->failVideoIds !== null) {
            $result['fail_video_ids'] = $this->failVideoIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['fail_video_ids'] ?? null) !== null && is_array($v)) {
            $obj->failVideoIds = $v;
        }
        return $obj;
    }
}
