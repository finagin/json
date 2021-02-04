<?php

namespace Finagin\Json\Services;

class Json implements \Finagin\Json\Contracts\Json
{
    public static function additionalOptions(int $options): int
    {
        return $options | JSON_THROW_ON_ERROR;
    }

    /**
     * {@inheritDoc}
     */
    public static function encode($value, int $options = self::DEFAULT_OPTIONS, int $depth = self::DEPTH): string
    {
        $options = static::additionalOptions($options);

        return json_encode($value, $options, $depth);
    }

    /**
     * {@inheritDoc}
     */
    public static function decode(string $json, int $options = self::DEFAULT_OPTIONS, bool $assoc = false)
    {
        $options = static::additionalOptions($options);

        return json_decode($json, $assoc, static::DEPTH, $options);
    }

    /**
     * {@inheritDoc}
     */
    public static function decodeAsArray(string $json, int $options = self::DEFAULT_OPTIONS): array
    {
        return static::decode($json, $options, true);
    }

    /**
     * {@inheritDoc}
     */
    public static function decodeAsObject(string $json, int $options = self::DEFAULT_OPTIONS): object
    {
        return static::decode($json, $options);
    }
}
