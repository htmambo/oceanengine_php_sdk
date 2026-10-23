<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvertiserCopyV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\AgentAdvertiserCopyV2DataCopyStatus
     */
    protected ?string $copyStatus = null;

    /**
     * 复制结果，包括单个账户的失败原因
     * @var \Oceanengine\Models\AgentAdvertiserCopyV2ResponseDataItemInner[]
     */
    protected ?array $item = null;

    /**
     * @return \Oceanengine\Models\AgentAdvertiserCopyV2DataCopyStatus
     */
    public function getCopyStatus(): ?string
    {
        return $this->copyStatus;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvertiserCopyV2DataCopyStatus $copyStatus
     * @return self
     */
    public function setCopyStatus(?string $copyStatus): self
    {
        $this->copyStatus = $copyStatus;
        return $this;
    }

    /**
     * 复制结果，包括单个账户的失败原因
     * @return \Oceanengine\Models\AgentAdvertiserCopyV2ResponseDataItemInner[]
     */
    public function getItem(): ?array
    {
        return $this->item;
    }

    /**
     * 复制结果，包括单个账户的失败原因
     * @param \Oceanengine\Models\AgentAdvertiserCopyV2ResponseDataItemInner[] $item
     * @return self
     */
    public function setItem(?array $item): self
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->copyStatus !== null) {
            $result['copy_status'] = $this->copyStatus;
        }
        if ($this->item !== null) {
            $result['item'] = $this->item;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['copy_status'] ?? null) !== null) {
            $obj->copyStatus = (string) $v;
        }
        if (($v = $data['item'] ?? null) !== null && is_array($v)) {
            $obj->item = array_map(fn ($vv) => \Oceanengine\Models\AgentAdvertiserCopyV2ResponseDataItemInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
