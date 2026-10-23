<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserGoingGlobalBudgetUpdateV2ResponseData implements \JsonSerializable
{
    /**
     * 批量模式下表示是否全部成功
     * @var bool
     */
    protected ?bool $ok = null;

    /**
     * 与请求 Items 等长，按下标对应
     * @var \Oceanengine\Models\AdvertiserGoingGlobalBudgetUpdateV2ResponseDataResultsInner[]
     */
    protected ?array $results = null;

    /**
     * 批量模式下表示是否全部成功
     * @return bool
     */
    public function getOk(): ?bool
    {
        return $this->ok;
    }

    /**
     * 批量模式下表示是否全部成功
     * @param bool $ok
     * @return self
     */
    public function setOk(?bool $ok): self
    {
        $this->ok = $ok;
        return $this;
    }

    /**
     * 与请求 Items 等长，按下标对应
     * @return \Oceanengine\Models\AdvertiserGoingGlobalBudgetUpdateV2ResponseDataResultsInner[]
     */
    public function getResults(): ?array
    {
        return $this->results;
    }

    /**
     * 与请求 Items 等长，按下标对应
     * @param \Oceanengine\Models\AdvertiserGoingGlobalBudgetUpdateV2ResponseDataResultsInner[] $results
     * @return self
     */
    public function setResults(?array $results): self
    {
        $this->results = $results;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->ok !== null) {
            $result['ok'] = $this->ok;
        }
        if ($this->results !== null) {
            $result['results'] = $this->results;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ok'] ?? null) !== null) {
            $obj->ok = (bool) $v;
        }
        if (($v = $data['results'] ?? null) !== null && is_array($v)) {
            $obj->results = array_map(fn ($vv) => \Oceanengine\Models\AdvertiserGoingGlobalBudgetUpdateV2ResponseDataResultsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
