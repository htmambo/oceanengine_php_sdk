<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandKnowledgeQaGetV30ResponseData implements \JsonSerializable
{
    /**
     * 回答
     * @var string
     */
    protected ?string $answer = null;

    /**
     * 回答
     * @return string
     */
    public function getAnswer(): ?string
    {
        return $this->answer;
    }

    /**
     * 回答
     * @param string $answer
     * @return self
     */
    public function setAnswer(?string $answer): self
    {
        $this->answer = $answer;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->answer !== null) {
            $result['answer'] = $this->answer;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['answer'] ?? null) !== null) {
            $obj->answer = (string) $v;
        }
        return $obj;
    }
}
