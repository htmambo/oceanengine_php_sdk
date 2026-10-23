<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerActionConfig implements \JsonSerializable
{
    /**
     * 行为类目词
     * @var int[]
     */
    protected ?array $actionCategories = null;

    /**
     * @var \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesActionConfigActionDay
     */
    protected ?string $actionDay = null;

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
     * @return \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesActionConfigActionDay
     */
    public function getActionDay(): ?string
    {
        return $this->actionDay;
    }

    /**
     * @param \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesActionConfigActionDay $actionDay
     * @return self
     */
    public function setActionDay(?string $actionDay): self
    {
        $this->actionDay = $actionDay;
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
        if ($this->actionDay !== null) {
            $result['action_day'] = $this->actionDay;
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
        if (($v = $data['action_day'] ?? null) !== null) {
            $obj->actionDay = (string) $v;
        }
        if (($v = $data['action_words'] ?? null) !== null && is_array($v)) {
            $obj->actionWords = $v;
        }
        return $obj;
    }
}
