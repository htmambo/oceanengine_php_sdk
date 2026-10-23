<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueInfoUpdateV2RequestUpdateInfoInner implements \JsonSerializable
{
    /**
     * 线索id
     * @var int
     */
    protected ?int $clueId = null;

    /**
     * 具体更新的 key, value。更新name时，不能修改为空
     * @var array<string,string>
     */
    protected ?array $fields = null;

    /**
     * 线索id
     * @return int
     */
    public function getClueId(): ?int
    {
        return $this->clueId;
    }

    /**
     * 线索id
     * @param int $clueId
     * @return self
     */
    public function setClueId(?int $clueId): self
    {
        $this->clueId = $clueId;
        return $this;
    }

    /**
     * 具体更新的 key, value。更新name时，不能修改为空
     * @return array<string,string>
     */
    public function getFields(): ?array
    {
        return $this->fields;
    }

    /**
     * 具体更新的 key, value。更新name时，不能修改为空
     * @param array<string,string> $fields
     * @return self
     */
    public function setFields(?array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->clueId !== null) {
            $result['clue_id'] = $this->clueId;
        }
        if ($this->fields !== null) {
            $result['fields'] = $this->fields;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['clue_id'] ?? null) !== null) {
            $obj->clueId = (int) $v;
        }
        if (($v = $data['fields'] ?? null) !== null && is_array($v)) {
            $obj->fields = $v;
        }
        return $obj;
    }
}
