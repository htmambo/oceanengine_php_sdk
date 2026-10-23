<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StardeliveryTaskDetailV30ResponseDataAudienceSettings implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $age = null;

    /**
     * @var \Oceanengine\Models\StardeliveryTaskDetailV30DataAudienceSettingsGender
     */
    protected ?string $gender = null;

    /**
     * @var string[]
     */
    protected ?array $similarGames = null;

    /**
     * @return string[]
     */
    public function getAge(): ?array
    {
        return $this->age;
    }

    /**
     * @param string[] $age
     * @return self
     */
    public function setAge(?array $age): self
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StardeliveryTaskDetailV30DataAudienceSettingsGender
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param \Oceanengine\Models\StardeliveryTaskDetailV30DataAudienceSettingsGender $gender
     * @return self
     */
    public function setGender(?string $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSimilarGames(): ?array
    {
        return $this->similarGames;
    }

    /**
     * @param string[] $similarGames
     * @return self
     */
    public function setSimilarGames(?array $similarGames): self
    {
        $this->similarGames = $similarGames;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->age !== null) {
            $result['age'] = $this->age;
        }
        if ($this->gender !== null) {
            $result['gender'] = $this->gender;
        }
        if ($this->similarGames !== null) {
            $result['similar_games'] = $this->similarGames;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['age'] ?? null) !== null && is_array($v)) {
            $obj->age = $v;
        }
        if (($v = $data['gender'] ?? null) !== null) {
            $obj->gender = (string) $v;
        }
        if (($v = $data['similar_games'] ?? null) !== null && is_array($v)) {
            $obj->similarGames = $v;
        }
        return $obj;
    }
}
