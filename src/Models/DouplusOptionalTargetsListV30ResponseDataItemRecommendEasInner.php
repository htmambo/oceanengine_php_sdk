<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DouplusOptionalTargetsListV30ResponseDataItemRecommendEasInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\DouplusOptionalTargetsListV30DataItemRecommendEasExternalActions[]
     */
    protected ?array $externalActions = null;

    /**
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * @return \Oceanengine\Models\DouplusOptionalTargetsListV30DataItemRecommendEasExternalActions[]
     */
    public function getExternalActions(): ?array
    {
        return $this->externalActions;
    }

    /**
     * @param \Oceanengine\Models\DouplusOptionalTargetsListV30DataItemRecommendEasExternalActions[] $externalActions
     * @return self
     */
    public function setExternalActions(?array $externalActions): self
    {
        $this->externalActions = $externalActions;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->externalActions !== null) {
            $result['external_actions'] = $this->externalActions;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['external_actions'] ?? null) !== null && is_array($v)) {
            $obj->externalActions = $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        return $obj;
    }
}
