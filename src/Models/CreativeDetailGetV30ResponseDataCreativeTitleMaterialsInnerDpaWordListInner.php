<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeDetailGetV30ResponseDataCreativeTitleMaterialsInnerDpaWordListInner implements \JsonSerializable
{
    /**
     * DPA词包ID
     * @var int
     */
    protected ?int $wordId = null;

    /**
     * DPA词包ID
     * @return int
     */
    public function getWordId(): ?int
    {
        return $this->wordId;
    }

    /**
     * DPA词包ID
     * @param int $wordId
     * @return self
     */
    public function setWordId(?int $wordId): self
    {
        $this->wordId = $wordId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->wordId !== null) {
            $result['word_id'] = $this->wordId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['word_id'] ?? null) !== null) {
            $obj->wordId = (int) $v;
        }
        return $obj;
    }
}
