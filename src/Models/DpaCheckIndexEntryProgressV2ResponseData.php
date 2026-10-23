<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaCheckIndexEntryProgressV2ResponseData implements \JsonSerializable
{
    /**
     * 文件录入是否完成
     * @var bool
     */
    protected ?bool $isFinish = null;

    /**
     * 文件录入是否完成
     * @return bool
     */
    public function getIsFinish(): ?bool
    {
        return $this->isFinish;
    }

    /**
     * 文件录入是否完成
     * @param bool $isFinish
     * @return self
     */
    public function setIsFinish(?bool $isFinish): self
    {
        $this->isFinish = $isFinish;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->isFinish !== null) {
            $result['is_finish'] = $this->isFinish;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['is_finish'] ?? null) !== null) {
            $obj->isFinish = (bool) $v;
        }
        return $obj;
    }
}
