<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileImageDeleteV30ResponseData implements \JsonSerializable
{
    /**
     * 操作失败的图片ID列表，不在此列表内的素材表示删除成功
     * @var string[]
     */
    protected ?array $failImageIds = null;

    /**
     * 操作失败的图片ID列表，不在此列表内的素材表示删除成功
     * @return string[]
     */
    public function getFailImageIds(): ?array
    {
        return $this->failImageIds;
    }

    /**
     * 操作失败的图片ID列表，不在此列表内的素材表示删除成功
     * @param string[] $failImageIds
     * @return self
     */
    public function setFailImageIds(?array $failImageIds): self
    {
        $this->failImageIds = $failImageIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->failImageIds !== null) {
            $result['fail_image_ids'] = $this->failImageIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['fail_image_ids'] ?? null) !== null && is_array($v)) {
            $obj->failImageIds = $v;
        }
        return $obj;
    }
}
