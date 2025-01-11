<?php

namespace App\Transformers;

use RuntimeException;

/**
 * @template TransformedClass
 */
abstract class TransformerAbstract
{
    /**
     * Transforms a set of items.
     *
     * @param TransformedClass[] $set An array of items to transform.
     * @return array<string, mixed> The transformed items.
     */
    public function transformSet(array $set): array
    {
        return array_map([$this, 'transformItem'], $set);
    }

    /**
     * Transforms a single item.
     *
     * @param TransformedClass $item The item to transform.
     * @return array<string, mixed> The transformed item.
     */
    public function transformItem(mixed $item): array
    {
        if (!method_exists($this, 'transform')) {
            throw new RuntimeException("Missing transform method");
        }

        return $this->transform($item);
    }

    /**
     * Transforms an item (to be implemented in a subclass).
     *
     * @param TransformedClass $item The item to transform.
     * @return array<string, mixed> The transformed representation.
     */
    abstract protected function transform(mixed $item): array;
}