<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandGetEpisodeLimitV2ResponseData implements \JsonSerializable
{
    /**
     * 集数配置限制：{从剧目创建第key秒开始：最大可配置不可超过value集}
     * @var array<string,int>
     */
    protected ?array $episodeLimit = null;

    /**
     * 集数配置限制：{从剧目创建第key秒开始：最大可配置不可超过value集}
     * @return array<string,int>
     */
    public function getEpisodeLimit(): ?array
    {
        return $this->episodeLimit;
    }

    /**
     * 集数配置限制：{从剧目创建第key秒开始：最大可配置不可超过value集}
     * @param array<string,int> $episodeLimit
     * @return self
     */
    public function setEpisodeLimit(?array $episodeLimit): self
    {
        $this->episodeLimit = $episodeLimit;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->episodeLimit !== null) {
            $result['episode_limit'] = $this->episodeLimit;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['episode_limit'] ?? null) !== null && is_array($v)) {
            $obj->episodeLimit = $v;
        }
        return $obj;
    }
}
