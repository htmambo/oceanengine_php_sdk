<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalConsultAwameListGetV30Filtering implements \JsonSerializable
{
    /**
     * 仅支持传1/2
     * @var \Oceanengine\Models\LocalConsultAwameListGetV30FilteringAuthType[]
     */
    protected ?array $authType = null;

    /**
     * @var string
     */
    protected ?string $searchKeyWord = null;

    /**
     * 仅支持传1/2
     * @return \Oceanengine\Models\LocalConsultAwameListGetV30FilteringAuthType[]
     */
    public function getAuthType(): ?array
    {
        return $this->authType;
    }

    /**
     * 仅支持传1/2
     * @param \Oceanengine\Models\LocalConsultAwameListGetV30FilteringAuthType[] $authType
     * @return self
     */
    public function setAuthType(?array $authType): self
    {
        $this->authType = $authType;
        return $this;
    }

    /**
     * @return string
     */
    public function getSearchKeyWord(): ?string
    {
        return $this->searchKeyWord;
    }

    /**
     * @param string $searchKeyWord
     * @return self
     */
    public function setSearchKeyWord(?string $searchKeyWord): self
    {
        $this->searchKeyWord = $searchKeyWord;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authType !== null) {
            $result['auth_type'] = $this->authType;
        }
        if ($this->searchKeyWord !== null) {
            $result['search_key_word'] = $this->searchKeyWord;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['auth_type'] ?? null) !== null && is_array($v)) {
            $obj->authType = $v;
        }
        if (($v = $data['search_key_word'] ?? null) !== null) {
            $obj->searchKeyWord = (string) $v;
        }
        return $obj;
    }
}
