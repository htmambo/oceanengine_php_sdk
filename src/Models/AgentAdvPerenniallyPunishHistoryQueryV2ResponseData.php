<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvPerenniallyPunishHistoryQueryV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\AgentAdvPerenniallyPunishHistoryQueryV2ResponseDataPunishListInner[]
     */
    protected ?array $punishList = null;

    /**
     * @return \Oceanengine\Models\AgentAdvPerenniallyPunishHistoryQueryV2ResponseDataPunishListInner[]
     */
    public function getPunishList(): ?array
    {
        return $this->punishList;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvPerenniallyPunishHistoryQueryV2ResponseDataPunishListInner[] $punishList
     * @return self
     */
    public function setPunishList(?array $punishList): self
    {
        $this->punishList = $punishList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->punishList !== null) {
            $result['punish_list'] = $this->punishList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['punish_list'] ?? null) !== null && is_array($v)) {
            $obj->punishList = array_map(fn ($vv) => \Oceanengine\Models\AgentAdvPerenniallyPunishHistoryQueryV2ResponseDataPunishListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
