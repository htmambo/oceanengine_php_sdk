<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanKeywordCheckV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanKeywordCheckV10ResponseDataFailListInner[]
     */
    protected ?array $failList = null;

    /**
     * @var string[]
     */
    protected ?array $sucList = null;

    /**
     * @return \Oceanengine\Models\QianchuanKeywordCheckV10ResponseDataFailListInner[]
     */
    public function getFailList(): ?array
    {
        return $this->failList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanKeywordCheckV10ResponseDataFailListInner[] $failList
     * @return self
     */
    public function setFailList(?array $failList): self
    {
        $this->failList = $failList;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSucList(): ?array
    {
        return $this->sucList;
    }

    /**
     * @param string[] $sucList
     * @return self
     */
    public function setSucList(?array $sucList): self
    {
        $this->sucList = $sucList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->failList !== null) {
            $result['fail_list'] = $this->failList;
        }
        if ($this->sucList !== null) {
            $result['suc_list'] = $this->sucList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['fail_list'] ?? null) !== null && is_array($v)) {
            $obj->failList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanKeywordCheckV10ResponseDataFailListInner::fromArray($vv), $v);
        }
        if (($v = $data['suc_list'] ?? null) !== null && is_array($v)) {
            $obj->sucList = $v;
        }
        return $obj;
    }
}
