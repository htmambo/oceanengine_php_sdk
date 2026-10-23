<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpStarTaskGetV30ResponseDataProductAdditionalIntroduction implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataProductAdditionalIntroductionGamePromotionEvent
     */
    protected ?\Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataProductAdditionalIntroductionGamePromotionEvent $gamePromotionEvent = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataProductAdditionalIntroductionGameSellingPointsInner[]
     */
    protected ?array $gameSellingPoints = null;

    /**
     * @var string
     */
    protected ?string $gameType = null;

    /**
     * @return \Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataProductAdditionalIntroductionGamePromotionEvent
     */
    public function getGamePromotionEvent(): ?\Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataProductAdditionalIntroductionGamePromotionEvent
    {
        return $this->gamePromotionEvent;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataProductAdditionalIntroductionGamePromotionEvent $gamePromotionEvent
     * @return self
     */
    public function setGamePromotionEvent(?\Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataProductAdditionalIntroductionGamePromotionEvent $gamePromotionEvent): self
    {
        $this->gamePromotionEvent = $gamePromotionEvent;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataProductAdditionalIntroductionGameSellingPointsInner[]
     */
    public function getGameSellingPoints(): ?array
    {
        return $this->gameSellingPoints;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataProductAdditionalIntroductionGameSellingPointsInner[] $gameSellingPoints
     * @return self
     */
    public function setGameSellingPoints(?array $gameSellingPoints): self
    {
        $this->gameSellingPoints = $gameSellingPoints;
        return $this;
    }

    /**
     * @return string
     */
    public function getGameType(): ?string
    {
        return $this->gameType;
    }

    /**
     * @param string $gameType
     * @return self
     */
    public function setGameType(?string $gameType): self
    {
        $this->gameType = $gameType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->gamePromotionEvent !== null) {
            $result['game_promotion_event'] = $this->gamePromotionEvent;
        }
        if ($this->gameSellingPoints !== null) {
            $result['game_selling_points'] = $this->gameSellingPoints;
        }
        if ($this->gameType !== null) {
            $result['game_type'] = $this->gameType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['game_promotion_event'] ?? null) !== null && is_array($v)) {
            $obj->gamePromotionEvent = \Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataProductAdditionalIntroductionGamePromotionEvent::fromArray($v);
        }
        if (($v = $data['game_selling_points'] ?? null) !== null && is_array($v)) {
            $obj->gameSellingPoints = array_map(fn ($vv) => \Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataProductAdditionalIntroductionGameSellingPointsInner::fromArray($vv), $v);
        }
        if (($v = $data['game_type'] ?? null) !== null) {
            $obj->gameType = (string) $v;
        }
        return $obj;
    }
}
