<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class UniProjectMonetizationModeUpdateV30RequestProjectListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\UniProjectMonetizationModeUpdateV30ProjectListMonetizationMode
     */
    protected ?string $monetizationMode = null;

    /**
     * @var string
     */
    protected ?string $playletSeriesUrl = null;

    /**
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * @return \Oceanengine\Models\UniProjectMonetizationModeUpdateV30ProjectListMonetizationMode
     */
    public function getMonetizationMode(): ?string
    {
        return $this->monetizationMode;
    }

    /**
     * @param \Oceanengine\Models\UniProjectMonetizationModeUpdateV30ProjectListMonetizationMode $monetizationMode
     * @return self
     */
    public function setMonetizationMode(?string $monetizationMode): self
    {
        $this->monetizationMode = $monetizationMode;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlayletSeriesUrl(): ?string
    {
        return $this->playletSeriesUrl;
    }

    /**
     * @param string $playletSeriesUrl
     * @return self
     */
    public function setPlayletSeriesUrl(?string $playletSeriesUrl): self
    {
        $this->playletSeriesUrl = $playletSeriesUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->monetizationMode !== null) {
            $result['monetization_mode'] = $this->monetizationMode;
        }
        if ($this->playletSeriesUrl !== null) {
            $result['playlet_series_url'] = $this->playletSeriesUrl;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['monetization_mode'] ?? null) !== null) {
            $obj->monetizationMode = (string) $v;
        }
        if (($v = $data['playlet_series_url'] ?? null) !== null) {
            $obj->playletSeriesUrl = (string) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        return $obj;
    }
}
