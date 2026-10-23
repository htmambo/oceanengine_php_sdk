<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ChargeTagGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var bool
     */
    protected ?bool $querySuccess = null;

    /**
     * @var string
     */
    protected ?string $tagValue = null;

    /**
     * @return bool
     */
    public function getQuerySuccess(): ?bool
    {
        return $this->querySuccess;
    }

    /**
     * @param bool $querySuccess
     * @return self
     */
    public function setQuerySuccess(?bool $querySuccess): self
    {
        $this->querySuccess = $querySuccess;
        return $this;
    }

    /**
     * @return string
     */
    public function getTagValue(): ?string
    {
        return $this->tagValue;
    }

    /**
     * @param string $tagValue
     * @return self
     */
    public function setTagValue(?string $tagValue): self
    {
        $this->tagValue = $tagValue;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->querySuccess !== null) {
            $result['query_success'] = $this->querySuccess;
        }
        if ($this->tagValue !== null) {
            $result['tag_value'] = $this->tagValue;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['query_success'] ?? null) !== null) {
            $obj->querySuccess = (bool) $v;
        }
        if (($v = $data['tag_value'] ?? null) !== null) {
            $obj->tagValue = (string) $v;
        }
        return $obj;
    }
}
