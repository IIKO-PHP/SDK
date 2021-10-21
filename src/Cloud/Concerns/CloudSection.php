<?php

namespace IikoPhp\SDK\Cloud\Concerns;

use IikoPhp\SDK\Cloud\ApiClient;

abstract class CloudSection extends ApiClient
{
    private array $lists;

    abstract protected function listsMap(): array;

    protected function listsDefaultParams(): array
    {
        return [];
    }

    protected function specificDefaultParams(): array
    {
        return [];
    }

    private function getList(string $objectName, string $listName, array $details = []): array
    {
        if(!isset($this->lists[$listName]) || $this->lists[$listName] === null) {
            [
                $this->lastOperationId,
                $this->lists[$listName],
            ] = $objectName::all($this, $details);
        }

        return $this->lists[$listName];
    }

    public function __call($name, $arguments)
    {
        if (isset($this->specificDefaultParams()[$name])) {
            $arguments = $this->specificDefaultParams()[$name];
        }

        if (empty($arguments) && !isset($this->specificDefaultParams()[$name])) {
            $arguments = $this->listsDefaultParams();
        }
        return $this->getList($this->listsMap()[$name], $name, $arguments);
    }

    protected static function endpoint(): string
    {
        return '/';
    }
}