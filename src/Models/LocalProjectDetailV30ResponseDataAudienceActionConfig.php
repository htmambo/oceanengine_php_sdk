<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalProjectDetailV30ResponseDataAudienceActionConfig implements \JsonSerializable
{
    /**
     * 行为类目词
     * @var int[]
     */
    protected ?array $actionCategories = null;

    /**
     * @var \Oceanengine\Models\LocalProjectDetailV30DataAudienceActionConfigActionDays
     */
    protected ?string $actionDays = null;

    /**
     * 行为关键词
     * @var int[]
     */
    protected ?array $actionWords = null;

    /**
     * 行为类目词
     * @return int[]
     */
    public function getActionCategories(): ?array
    {
        return $this->actionCategories;
    }

    /**
     * 行为类目词
     * @param int[] $actionCategories
     * @return self
     */
    public function setActionCategories(?array $actionCategories): self
    {
        $this->actionCategories = $actionCategories;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectDetailV30DataAudienceActionConfigActionDays
     */
    public function getActionDays(): ?string
    {
        return $this->actionDays;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectDetailV30DataAudienceActionConfigActionDays $actionDays
     * @return self
     */
    public function setActionDays(?string $actionDays): self
    {
        $this->actionDays = $actionDays;
        return $this;
    }

    /**
     * 行为关键词
     * @return int[]
     */
    public function getActionWords(): ?array
    {
        return $this->actionWords;
    }

    /**
     * 行为关键词
     * @param int[] $actionWords
     * @return self
     */
    public function setActionWords(?array $actionWords): self
    {
        $this->actionWords = $actionWords;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->actionCategories !== null) {
            $result['action_categories'] = $this->actionCategories;
        }
        if ($this->actionDays !== null) {
            $result['action_days'] = $this->actionDays;
        }
        if ($this->actionWords !== null) {
            $result['action_words'] = $this->actionWords;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['action_categories'] ?? null) !== null && is_array($v)) {
            $obj->actionCategories = $v;
        }
        if (($v = $data['action_days'] ?? null) !== null) {
            $obj->actionDays = (string) $v;
        }
        if (($v = $data['action_words'] ?? null) !== null && is_array($v)) {
            $obj->actionWords = $v;
        }
        return $obj;
    }
}
