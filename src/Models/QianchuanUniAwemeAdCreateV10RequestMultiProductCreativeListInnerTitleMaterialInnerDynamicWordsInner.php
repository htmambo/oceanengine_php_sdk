<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInnerTitleMaterialInnerDynamicWordsInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $defaultWord = null;

    /**
     * @var string
     */
    protected ?string $dictName = null;

    /**
     * @var int
     */
    protected ?int $wordId = null;

    /**
     * @return string
     */
    public function getDefaultWord(): ?string
    {
        return $this->defaultWord;
    }

    /**
     * @param string $defaultWord
     * @return self
     */
    public function setDefaultWord(?string $defaultWord): self
    {
        $this->defaultWord = $defaultWord;
        return $this;
    }

    /**
     * @return string
     */
    public function getDictName(): ?string
    {
        return $this->dictName;
    }

    /**
     * @param string $dictName
     * @return self
     */
    public function setDictName(?string $dictName): self
    {
        $this->dictName = $dictName;
        return $this;
    }

    /**
     * @return int
     */
    public function getWordId(): ?int
    {
        return $this->wordId;
    }

    /**
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
        if ($this->defaultWord !== null) {
            $result['default_word'] = $this->defaultWord;
        }
        if ($this->dictName !== null) {
            $result['dict_name'] = $this->dictName;
        }
        if ($this->wordId !== null) {
            $result['word_id'] = $this->wordId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['default_word'] ?? null) !== null) {
            $obj->defaultWord = (string) $v;
        }
        if (($v = $data['dict_name'] ?? null) !== null) {
            $obj->dictName = (string) $v;
        }
        if (($v = $data['word_id'] ?? null) !== null) {
            $obj->wordId = (int) $v;
        }
        return $obj;
    }
}
