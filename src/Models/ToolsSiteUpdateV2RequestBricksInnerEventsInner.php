<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteUpdateV2RequestBricksInnerEventsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerEventsInnerBehavior
     */
    protected ?\Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerEventsInnerBehavior $behavior = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerEventsInnerTrigger
     */
    protected ?\Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerEventsInnerTrigger $trigger = null;

    /**
     * @return \Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerEventsInnerBehavior
     */
    public function getBehavior(): ?\Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerEventsInnerBehavior
    {
        return $this->behavior;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerEventsInnerBehavior $behavior
     * @return self
     */
    public function setBehavior(?\Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerEventsInnerBehavior $behavior): self
    {
        $this->behavior = $behavior;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerEventsInnerTrigger
     */
    public function getTrigger(): ?\Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerEventsInnerTrigger
    {
        return $this->trigger;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerEventsInnerTrigger $trigger
     * @return self
     */
    public function setTrigger(?\Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerEventsInnerTrigger $trigger): self
    {
        $this->trigger = $trigger;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->behavior !== null) {
            $result['behavior'] = $this->behavior;
        }
        if ($this->trigger !== null) {
            $result['trigger'] = $this->trigger;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['behavior'] ?? null) !== null && is_array($v)) {
            $obj->behavior = \Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerEventsInnerBehavior::fromArray($v);
        }
        if (($v = $data['trigger'] ?? null) !== null && is_array($v)) {
            $obj->trigger = \Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerEventsInnerTrigger::fromArray($v);
        }
        return $obj;
    }
}
