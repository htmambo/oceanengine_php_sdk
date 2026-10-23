<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdRegionUpdateV10ResponseData implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $adIds = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdRegionUpdateV10ResponseDataErrorsInner[]
     */
    protected ?array $errors = null;

    /**
     * @return int[]
     */
    public function getAdIds(): ?array
    {
        return $this->adIds;
    }

    /**
     * @param int[] $adIds
     * @return self
     */
    public function setAdIds(?array $adIds): self
    {
        $this->adIds = $adIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdRegionUpdateV10ResponseDataErrorsInner[]
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdRegionUpdateV10ResponseDataErrorsInner[] $errors
     * @return self
     */
    public function setErrors(?array $errors): self
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adIds !== null) {
            $result['ad_ids'] = $this->adIds;
        }
        if ($this->errors !== null) {
            $result['errors'] = $this->errors;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_ids'] ?? null) !== null && is_array($v)) {
            $obj->adIds = $v;
        }
        if (($v = $data['errors'] ?? null) !== null && is_array($v)) {
            $obj->errors = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdRegionUpdateV10ResponseDataErrorsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
