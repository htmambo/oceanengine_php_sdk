<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsCreativeWordSelectV2ResponseDataCreativeWordInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsCreativeWordSelectV2DataCreativeWordContentType
     */
    protected ?string $contentType = null;

    /**
     * @var int
     */
    protected ?int $creativeWordId = null;

    /**
     * @var string
     */
    protected ?string $defaultWord = null;

    /**
     * @var int
     */
    protected ?int $maxWordLen = null;

    /**
     * @var int
     */
    protected ?int $minWordLen = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\ToolsCreativeWordSelectV2DataCreativeWordStatus
     */
    protected ?string $status = null;

    /**
     * @var float
     */
    protected ?float $userRate = null;

    /**
     * @var string[]
     */
    protected ?array $words = null;

    /**
     * @return \Oceanengine\Models\ToolsCreativeWordSelectV2DataCreativeWordContentType
     */
    public function getContentType(): ?string
    {
        return $this->contentType;
    }

    /**
     * @param \Oceanengine\Models\ToolsCreativeWordSelectV2DataCreativeWordContentType $contentType
     * @return self
     */
    public function setContentType(?string $contentType): self
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreativeWordId(): ?int
    {
        return $this->creativeWordId;
    }

    /**
     * @param int $creativeWordId
     * @return self
     */
    public function setCreativeWordId(?int $creativeWordId): self
    {
        $this->creativeWordId = $creativeWordId;
        return $this;
    }

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
     * @return int
     */
    public function getMaxWordLen(): ?int
    {
        return $this->maxWordLen;
    }

    /**
     * @param int $maxWordLen
     * @return self
     */
    public function setMaxWordLen(?int $maxWordLen): self
    {
        $this->maxWordLen = $maxWordLen;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinWordLen(): ?int
    {
        return $this->minWordLen;
    }

    /**
     * @param int $minWordLen
     * @return self
     */
    public function setMinWordLen(?int $minWordLen): self
    {
        $this->minWordLen = $minWordLen;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsCreativeWordSelectV2DataCreativeWordStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsCreativeWordSelectV2DataCreativeWordStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return float
     */
    public function getUserRate(): ?float
    {
        return $this->userRate;
    }

    /**
     * @param float $userRate
     * @return self
     */
    public function setUserRate(?float $userRate): self
    {
        $this->userRate = $userRate;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getWords(): ?array
    {
        return $this->words;
    }

    /**
     * @param string[] $words
     * @return self
     */
    public function setWords(?array $words): self
    {
        $this->words = $words;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->contentType !== null) {
            $result['content_type'] = $this->contentType;
        }
        if ($this->creativeWordId !== null) {
            $result['creative_word_id'] = $this->creativeWordId;
        }
        if ($this->defaultWord !== null) {
            $result['default_word'] = $this->defaultWord;
        }
        if ($this->maxWordLen !== null) {
            $result['max_word_len'] = $this->maxWordLen;
        }
        if ($this->minWordLen !== null) {
            $result['min_word_len'] = $this->minWordLen;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->userRate !== null) {
            $result['user_rate'] = $this->userRate;
        }
        if ($this->words !== null) {
            $result['words'] = $this->words;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['content_type'] ?? null) !== null) {
            $obj->contentType = (string) $v;
        }
        if (($v = $data['creative_word_id'] ?? null) !== null) {
            $obj->creativeWordId = (int) $v;
        }
        if (($v = $data['default_word'] ?? null) !== null) {
            $obj->defaultWord = (string) $v;
        }
        if (($v = $data['max_word_len'] ?? null) !== null) {
            $obj->maxWordLen = (int) $v;
        }
        if (($v = $data['min_word_len'] ?? null) !== null) {
            $obj->minWordLen = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['user_rate'] ?? null) !== null) {
            $obj->userRate = (float) $v;
        }
        if (($v = $data['words'] ?? null) !== null && is_array($v)) {
            $obj->words = $v;
        }
        return $obj;
    }
}
