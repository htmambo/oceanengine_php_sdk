<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class Oauth2AdvertiserGetResponseData implements \JsonSerializable
{
    /**
     * 账户信息
     * @var \Oceanengine\Models\Oauth2AdvertiserGetResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * 账户信息
     * @return \Oceanengine\Models\Oauth2AdvertiserGetResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * 账户信息
     * @param \Oceanengine\Models\Oauth2AdvertiserGetResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->list !== null) {
            $result['list'] = $this->list;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['list'] ?? null) !== null && is_array($v)) {
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\Oauth2AdvertiserGetResponseDataListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
