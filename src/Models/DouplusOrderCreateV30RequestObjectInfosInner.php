<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DouplusOrderCreateV30RequestObjectInfosInner implements \JsonSerializable
{
    /**
     * 抖音号，即客户在手机端上看到的抖音号，若向客户披露抖音号请使用该字段
     * @var string
     */
    protected ?string $awemeId = null;

    /**
     * 抖音视频ID，当营销目标为视频加热和视频加热直播间：传递视频ID
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * @var \Oceanengine\Models\DouplusOrderCreateV30ObjectInfosMarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * 抖音号，即客户在手机端上看到的抖音号，若向客户披露抖音号请使用该字段
     * @return string
     */
    public function getAwemeId(): ?string
    {
        return $this->awemeId;
    }

    /**
     * 抖音号，即客户在手机端上看到的抖音号，若向客户披露抖音号请使用该字段
     * @param string $awemeId
     * @return self
     */
    public function setAwemeId(?string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 抖音视频ID，当营销目标为视频加热和视频加热直播间：传递视频ID
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * 抖音视频ID，当营销目标为视频加热和视频加热直播间：传递视频ID
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DouplusOrderCreateV30ObjectInfosMarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\DouplusOrderCreateV30ObjectInfosMarketingGoal $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->marketingGoal !== null) {
            $result['marketing_goal'] = $this->marketingGoal;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (string) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['marketing_goal'] ?? null) !== null) {
            $obj->marketingGoal = (string) $v;
        }
        return $obj;
    }
}
