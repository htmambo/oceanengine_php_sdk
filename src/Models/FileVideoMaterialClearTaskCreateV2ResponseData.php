<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileVideoMaterialClearTaskCreateV2ResponseData implements \JsonSerializable
{
    /**
     * 创建成功的素材清理任务id
     * @var int
     */
    protected ?int $clearId = null;

    /**
     * 创建成功的素材清理任务id
     * @return int
     */
    public function getClearId(): ?int
    {
        return $this->clearId;
    }

    /**
     * 创建成功的素材清理任务id
     * @param int $clearId
     * @return self
     */
    public function setClearId(?int $clearId): self
    {
        $this->clearId = $clearId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->clearId !== null) {
            $result['clear_id'] = $this->clearId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['clear_id'] ?? null) !== null) {
            $obj->clearId = (int) $v;
        }
        return $obj;
    }
}
