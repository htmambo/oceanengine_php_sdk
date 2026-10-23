<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectStdProjectToolsGetV30ResponseDataProjectAdjustInfoInnerKeywordsAdjustInfo implements \JsonSerializable
{
    /**
     * @var bool
     */
    protected ?bool $ifKeywords = null;

    /**
     * @var int
     */
    protected ?int $quota = null;

    /**
     * @return bool
     */
    public function getIfKeywords(): ?bool
    {
        return $this->ifKeywords;
    }

    /**
     * @param bool $ifKeywords
     * @return self
     */
    public function setIfKeywords(?bool $ifKeywords): self
    {
        $this->ifKeywords = $ifKeywords;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuota(): ?int
    {
        return $this->quota;
    }

    /**
     * @param int $quota
     * @return self
     */
    public function setQuota(?int $quota): self
    {
        $this->quota = $quota;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->ifKeywords !== null) {
            $result['if_keywords'] = $this->ifKeywords;
        }
        if ($this->quota !== null) {
            $result['quota'] = $this->quota;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['if_keywords'] ?? null) !== null) {
            $obj->ifKeywords = (bool) $v;
        }
        if (($v = $data['quota'] ?? null) !== null) {
            $obj->quota = (int) $v;
        }
        return $obj;
    }
}
