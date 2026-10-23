<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SubscribeAccountsListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\SubscribeAccountsListV30ResponseDataAdvertisersInner[]
     */
    protected ?array $advertisers = null;

    /**
     * @var int
     */
    protected ?int $count = null;

    /**
     * @var int
     */
    protected ?int $nextCursor = null;

    /**
     * @return \Oceanengine\Models\SubscribeAccountsListV30ResponseDataAdvertisersInner[]
     */
    public function getAdvertisers(): ?array
    {
        return $this->advertisers;
    }

    /**
     * @param \Oceanengine\Models\SubscribeAccountsListV30ResponseDataAdvertisersInner[] $advertisers
     * @return self
     */
    public function setAdvertisers(?array $advertisers): self
    {
        $this->advertisers = $advertisers;
        return $this;
    }

    /**
     * @return int
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * @param int $count
     * @return self
     */
    public function setCount(?int $count): self
    {
        $this->count = $count;
        return $this;
    }

    /**
     * @return int
     */
    public function getNextCursor(): ?int
    {
        return $this->nextCursor;
    }

    /**
     * @param int $nextCursor
     * @return self
     */
    public function setNextCursor(?int $nextCursor): self
    {
        $this->nextCursor = $nextCursor;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertisers !== null) {
            $result['advertisers'] = $this->advertisers;
        }
        if ($this->count !== null) {
            $result['count'] = $this->count;
        }
        if ($this->nextCursor !== null) {
            $result['next_cursor'] = $this->nextCursor;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertisers'] ?? null) !== null && is_array($v)) {
            $obj->advertisers = array_map(fn ($vv) => \Oceanengine\Models\SubscribeAccountsListV30ResponseDataAdvertisersInner::fromArray($vv), $v);
        }
        if (($v = $data['count'] ?? null) !== null) {
            $obj->count = (int) $v;
        }
        if (($v = $data['next_cursor'] ?? null) !== null) {
            $obj->nextCursor = (int) $v;
        }
        return $obj;
    }
}
