<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DmpCustomAudienceReadV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\DmpCustomAudienceReadV2ResponseDataCustomAudienceListInner[]
     */
    protected ?array $customAudienceList = null;

    /**
     * @return \Oceanengine\Models\DmpCustomAudienceReadV2ResponseDataCustomAudienceListInner[]
     */
    public function getCustomAudienceList(): ?array
    {
        return $this->customAudienceList;
    }

    /**
     * @param \Oceanengine\Models\DmpCustomAudienceReadV2ResponseDataCustomAudienceListInner[] $customAudienceList
     * @return self
     */
    public function setCustomAudienceList(?array $customAudienceList): self
    {
        $this->customAudienceList = $customAudienceList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->customAudienceList !== null) {
            $result['custom_audience_list'] = $this->customAudienceList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['custom_audience_list'] ?? null) !== null && is_array($v)) {
            $obj->customAudienceList = array_map(fn ($vv) => \Oceanengine\Models\DmpCustomAudienceReadV2ResponseDataCustomAudienceListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
