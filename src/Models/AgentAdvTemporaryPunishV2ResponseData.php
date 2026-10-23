<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvTemporaryPunishV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\AgentAdvTemporaryPunishV2ResponseDataPunishItemsInner[]
     */
    protected ?array $punishItems = null;

    /**
     * @var \Oceanengine\Models\AgentAdvTemporaryPunishV2DataStatus
     */
    protected ?string $status = null;

    /**
     * @return \Oceanengine\Models\AgentAdvTemporaryPunishV2ResponseDataPunishItemsInner[]
     */
    public function getPunishItems(): ?array
    {
        return $this->punishItems;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvTemporaryPunishV2ResponseDataPunishItemsInner[] $punishItems
     * @return self
     */
    public function setPunishItems(?array $punishItems): self
    {
        $this->punishItems = $punishItems;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvTemporaryPunishV2DataStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvTemporaryPunishV2DataStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->punishItems !== null) {
            $result['punish_items'] = $this->punishItems;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['punish_items'] ?? null) !== null && is_array($v)) {
            $obj->punishItems = array_map(fn ($vv) => \Oceanengine\Models\AgentAdvTemporaryPunishV2ResponseDataPunishItemsInner::fromArray($vv), $v);
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
