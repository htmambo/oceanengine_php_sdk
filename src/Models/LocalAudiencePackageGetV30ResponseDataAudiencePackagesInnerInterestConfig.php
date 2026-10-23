<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerInterestConfig implements \JsonSerializable
{
    /**
     * 兴趣类目词
     * @var int[]
     */
    protected ?array $interestCaregories = null;

    /**
     * 兴趣关键词
     * @var int[]
     */
    protected ?array $interestWords = null;

    /**
     * 兴趣类目词
     * @return int[]
     */
    public function getInterestCaregories(): ?array
    {
        return $this->interestCaregories;
    }

    /**
     * 兴趣类目词
     * @param int[] $interestCaregories
     * @return self
     */
    public function setInterestCaregories(?array $interestCaregories): self
    {
        $this->interestCaregories = $interestCaregories;
        return $this;
    }

    /**
     * 兴趣关键词
     * @return int[]
     */
    public function getInterestWords(): ?array
    {
        return $this->interestWords;
    }

    /**
     * 兴趣关键词
     * @param int[] $interestWords
     * @return self
     */
    public function setInterestWords(?array $interestWords): self
    {
        $this->interestWords = $interestWords;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->interestCaregories !== null) {
            $result['interest_caregories'] = $this->interestCaregories;
        }
        if ($this->interestWords !== null) {
            $result['interest_words'] = $this->interestWords;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['interest_caregories'] ?? null) !== null && is_array($v)) {
            $obj->interestCaregories = $v;
        }
        if (($v = $data['interest_words'] ?? null) !== null && is_array($v)) {
            $obj->interestWords = $v;
        }
        return $obj;
    }
}
