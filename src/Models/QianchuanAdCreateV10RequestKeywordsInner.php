<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdCreateV10RequestKeywordsInner implements \JsonSerializable
{
    /**
     * 是否设置抢首屏
     * @var bool
     */
    protected ?bool $grabFirstScreenSwitch = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10KeywordsMatchType
     */
    protected ?string $matchType = null;

    /**
     * @var string
     */
    protected ?string $word = null;

    /**
     * @var int
     */
    protected ?int $wordId = null;

    /**
     * @var int
     */
    protected ?int $wordPackageId = null;

    /**
     * @var string
     */
    protected ?string $wordPackageName = null;

    /**
     * 是否设置抢首屏
     * @return bool
     */
    public function getGrabFirstScreenSwitch(): ?bool
    {
        return $this->grabFirstScreenSwitch;
    }

    /**
     * 是否设置抢首屏
     * @param bool $grabFirstScreenSwitch
     * @return self
     */
    public function setGrabFirstScreenSwitch(?bool $grabFirstScreenSwitch): self
    {
        $this->grabFirstScreenSwitch = $grabFirstScreenSwitch;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdCreateV10KeywordsMatchType
     */
    public function getMatchType(): ?string
    {
        return $this->matchType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10KeywordsMatchType $matchType
     * @return self
     */
    public function setMatchType(?string $matchType): self
    {
        $this->matchType = $matchType;
        return $this;
    }

    /**
     * @return string
     */
    public function getWord(): ?string
    {
        return $this->word;
    }

    /**
     * @param string $word
     * @return self
     */
    public function setWord(?string $word): self
    {
        $this->word = $word;
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
     * @return int
     */
    public function getWordPackageId(): ?int
    {
        return $this->wordPackageId;
    }

    /**
     * @param int $wordPackageId
     * @return self
     */
    public function setWordPackageId(?int $wordPackageId): self
    {
        $this->wordPackageId = $wordPackageId;
        return $this;
    }

    /**
     * @return string
     */
    public function getWordPackageName(): ?string
    {
        return $this->wordPackageName;
    }

    /**
     * @param string $wordPackageName
     * @return self
     */
    public function setWordPackageName(?string $wordPackageName): self
    {
        $this->wordPackageName = $wordPackageName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->grabFirstScreenSwitch !== null) {
            $result['grab_first_screen_switch'] = $this->grabFirstScreenSwitch;
        }
        if ($this->matchType !== null) {
            $result['match_type'] = $this->matchType;
        }
        if ($this->word !== null) {
            $result['word'] = $this->word;
        }
        if ($this->wordId !== null) {
            $result['word_id'] = $this->wordId;
        }
        if ($this->wordPackageId !== null) {
            $result['word_package_id'] = $this->wordPackageId;
        }
        if ($this->wordPackageName !== null) {
            $result['word_package_name'] = $this->wordPackageName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['grab_first_screen_switch'] ?? null) !== null) {
            $obj->grabFirstScreenSwitch = (bool) $v;
        }
        if (($v = $data['match_type'] ?? null) !== null) {
            $obj->matchType = (string) $v;
        }
        if (($v = $data['word'] ?? null) !== null) {
            $obj->word = (string) $v;
        }
        if (($v = $data['word_id'] ?? null) !== null) {
            $obj->wordId = (int) $v;
        }
        if (($v = $data['word_package_id'] ?? null) !== null) {
            $obj->wordPackageId = (int) $v;
        }
        if (($v = $data['word_package_name'] ?? null) !== null) {
            $obj->wordPackageName = (string) $v;
        }
        return $obj;
    }
}
