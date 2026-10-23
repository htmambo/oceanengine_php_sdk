<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class UniProjectAwemeAuthorizedGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\UniProjectAwemeAuthorizedGetV30ResponseDataAwemeIdListInner[]
     */
    protected ?array $awemeIdList = null;

    /**
     * @var bool
     */
    protected ?bool $hasMore = null;

    /**
     * @return \Oceanengine\Models\UniProjectAwemeAuthorizedGetV30ResponseDataAwemeIdListInner[]
     */
    public function getAwemeIdList(): ?array
    {
        return $this->awemeIdList;
    }

    /**
     * @param \Oceanengine\Models\UniProjectAwemeAuthorizedGetV30ResponseDataAwemeIdListInner[] $awemeIdList
     * @return self
     */
    public function setAwemeIdList(?array $awemeIdList): self
    {
        $this->awemeIdList = $awemeIdList;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasMore(): ?bool
    {
        return $this->hasMore;
    }

    /**
     * @param bool $hasMore
     * @return self
     */
    public function setHasMore(?bool $hasMore): self
    {
        $this->hasMore = $hasMore;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeIdList !== null) {
            $result['aweme_id_list'] = $this->awemeIdList;
        }
        if ($this->hasMore !== null) {
            $result['has_more'] = $this->hasMore;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_id_list'] ?? null) !== null && is_array($v)) {
            $obj->awemeIdList = array_map(fn ($vv) => \Oceanengine\Models\UniProjectAwemeAuthorizedGetV30ResponseDataAwemeIdListInner::fromArray($vv), $v);
        }
        if (($v = $data['has_more'] ?? null) !== null) {
            $obj->hasMore = (bool) $v;
        }
        return $obj;
    }
}
