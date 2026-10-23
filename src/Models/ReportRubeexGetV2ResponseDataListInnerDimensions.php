<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportRubeexGetV2ResponseDataListInnerDimensions implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $currentSection = null;

    /**
     * @var string
     */
    protected ?string $dataMd5 = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var string
     */
    protected ?string $nextSection = null;

    /**
     * @var string
     */
    protected ?string $playableUrl = null;

    /**
     * @var string
     */
    protected ?string $projectId = null;

    /**
     * @var string
     */
    protected ?string $statTimeDay = null;

    /**
     * @return string
     */
    public function getCurrentSection(): ?string
    {
        return $this->currentSection;
    }

    /**
     * @param string $currentSection
     * @return self
     */
    public function setCurrentSection(?string $currentSection): self
    {
        $this->currentSection = $currentSection;
        return $this;
    }

    /**
     * @return string
     */
    public function getDataMd5(): ?string
    {
        return $this->dataMd5;
    }

    /**
     * @param string $dataMd5
     * @return self
     */
    public function setDataMd5(?string $dataMd5): self
    {
        $this->dataMd5 = $dataMd5;
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
     * @return string
     */
    public function getNextSection(): ?string
    {
        return $this->nextSection;
    }

    /**
     * @param string $nextSection
     * @return self
     */
    public function setNextSection(?string $nextSection): self
    {
        $this->nextSection = $nextSection;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlayableUrl(): ?string
    {
        return $this->playableUrl;
    }

    /**
     * @param string $playableUrl
     * @return self
     */
    public function setPlayableUrl(?string $playableUrl): self
    {
        $this->playableUrl = $playableUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getProjectId(): ?string
    {
        return $this->projectId;
    }

    /**
     * @param string $projectId
     * @return self
     */
    public function setProjectId(?string $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatTimeDay(): ?string
    {
        return $this->statTimeDay;
    }

    /**
     * @param string $statTimeDay
     * @return self
     */
    public function setStatTimeDay(?string $statTimeDay): self
    {
        $this->statTimeDay = $statTimeDay;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->currentSection !== null) {
            $result['current_section'] = $this->currentSection;
        }
        if ($this->dataMd5 !== null) {
            $result['data_md5'] = $this->dataMd5;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->nextSection !== null) {
            $result['next_section'] = $this->nextSection;
        }
        if ($this->playableUrl !== null) {
            $result['playable_url'] = $this->playableUrl;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->statTimeDay !== null) {
            $result['stat_time_day'] = $this->statTimeDay;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['current_section'] ?? null) !== null) {
            $obj->currentSection = (string) $v;
        }
        if (($v = $data['data_md5'] ?? null) !== null) {
            $obj->dataMd5 = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['next_section'] ?? null) !== null) {
            $obj->nextSection = (string) $v;
        }
        if (($v = $data['playable_url'] ?? null) !== null) {
            $obj->playableUrl = (string) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (string) $v;
        }
        if (($v = $data['stat_time_day'] ?? null) !== null) {
            $obj->statTimeDay = (string) $v;
        }
        return $obj;
    }
}
