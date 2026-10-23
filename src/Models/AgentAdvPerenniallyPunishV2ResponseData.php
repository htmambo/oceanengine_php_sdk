<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvPerenniallyPunishV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\AgentAdvPerenniallyPunishV2ResponseDataPunishItemsInner[]
     */
    protected ?array $punishItems = null;

    /**
     * @return \Oceanengine\Models\AgentAdvPerenniallyPunishV2ResponseDataPunishItemsInner[]
     */
    public function getPunishItems(): ?array
    {
        return $this->punishItems;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvPerenniallyPunishV2ResponseDataPunishItemsInner[] $punishItems
     * @return self
     */
    public function setPunishItems(?array $punishItems): self
    {
        $this->punishItems = $punishItems;
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
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['punish_items'] ?? null) !== null && is_array($v)) {
            $obj->punishItems = array_map(fn ($vv) => \Oceanengine\Models\AgentAdvPerenniallyPunishV2ResponseDataPunishItemsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
