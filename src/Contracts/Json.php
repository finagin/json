<?php

namespace Finagin\Json\Contracts;

interface Json
{
    public const DEFAULT_OPTIONS = 0;

    public const DEPTH = 512;

    public static function additionalOptions(int $options): int;

    /**
     * Returns the JSON representation of a value.
     *
     * @see https://php.net/manual/en/function.json-encode.php
     *
     * @param mixed $value <p>
     * The <i>value</i> being encoded. Can be any type except
     * a resource.
     * </p>
     * <p>
     * All string data must be UTF-8 encoded.
     * </p>
     * <p>PHP implements a superset of
     * JSON - it will also encode and decode scalar types and <b>NULL</b>. The JSON standard
     * only supports these values when they are nested inside an array or an object.
     * </p>
     * @param int $options [optional] <p>
     * Bitmask of JSON encode options:<br/>
     * <b>{@see JSON_HEX_QUOT}</b>,
     * <b>{@see JSON_HEX_TAG}</b>,
     * <b>{@see JSON_HEX_AMP}</b>,
     * <b>{@see JSON_HEX_APOS}</b>,
     * <b>{@see JSON_NUMERIC_CHECK}</b>,
     * <b>{@see JSON_PRETTY_PRINT}</b>,
     * <b>{@see JSON_UNESCAPED_SLASHES}</b>,
     * <b>{@see JSON_FORCE_OBJECT}</b>,
     * <b>{@see JSON_UNESCAPED_UNICODE}</b>.
     * </p>
     * @param int $depth [optional] <p>
     * Set the maximum depth. Must be greater than zero.
     * </p>
     *
     * @return string a JSON encoded string on success
     *
     * @throws \JsonException
     */
    public static function encode($value, int $options = self::DEFAULT_OPTIONS, int $depth = self::DEPTH): string;

    /**
     * Decodes a JSON string.
     *
     * @see https://php.net/manual/en/function.json-decode.php
     *
     * @param string $json <p>
     * The <i>json</i> string being decoded.
     * </p>
     * <p>
     * This function only works with UTF-8 encoded strings.
     * </p>
     * <p>PHP implements a superset of
     * JSON - it will also encode and decode scalar types and <b>NULL</b>. The JSON standard
     * only supports these values when they are nested inside an array or an object.
     * </p>
     * @param int $options [optional] <p>
     * Bitmask of JSON decode options:<br/>
     * {@see JSON_BIGINT_AS_STRING} decodes large integers as their original string value.<br/>
     * {@see JSON_INVALID_UTF8_IGNORE} ignores invalid UTF-8 characters,<br/>
     * {@see JSON_INVALID_UTF8_SUBSTITUTE} converts invalid UTF-8 characters to \0xfffd,<br/>
     * {@see JSON_OBJECT_AS_ARRAY} decodes JSON objects as PHP array, since 7.2.0 used by default if $assoc parameter is null,<br/>
     * </p>
     * @param bool $assoc [optional] <p>
     * When <b>TRUE</b>, returned objects will be converted into
     * associative arrays.
     * </p>
     *
     * @return array<mixed, mixed>|object the value encoded in <i>json</i> in appropriate
     * PHP type. Values true, false and
     * null (case-insensitive) are returned as <b>TRUE</b>, <b>FALSE</b>
     * and <b>NULL</b> respectively.
     *
     * @throws \JsonException
     */
    public static function decode(string $json, int $options = self::DEFAULT_OPTIONS, bool $assoc = false);

    /**
     * Decodes a JSON string.
     *
     * @see https://php.net/manual/en/function.json-decode.php
     *
     * @param string $json <p>
     * The <i>json</i> string being decoded.
     * </p>
     * <p>
     * This function only works with UTF-8 encoded strings.
     * </p>
     * <p>PHP implements a superset of
     * JSON - it will also encode and decode scalar types and <b>NULL</b>. The JSON standard
     * only supports these values when they are nested inside an array or an object.
     * </p>
     * @param int $options [optional] <p>
     * Bitmask of JSON decode options:<br/>
     * {@see JSON_BIGINT_AS_STRING} decodes large integers as their original string value.<br/>
     * {@see JSON_INVALID_UTF8_IGNORE} ignores invalid UTF-8 characters,<br/>
     * {@see JSON_INVALID_UTF8_SUBSTITUTE} converts invalid UTF-8 characters to \0xfffd,<br/>
     * {@see JSON_OBJECT_AS_ARRAY} decodes JSON objects as PHP array, since 7.2.0 used by default if $assoc parameter is null,<br/>
     * </p>
     *
     * @return array<mixed, mixed> the value encoded in <i>json</i> in appropriate
     * PHP type. Values true, false and
     * null (case-insensitive) are returned as <b>TRUE</b>, <b>FALSE</b>
     * and <b>NULL</b> respectively.
     *
     * @throws \JsonException
     */
    public static function decodeAsArray(string $json, int $options = self::DEFAULT_OPTIONS): array;

    /**
     * Decodes a JSON string.
     *
     * @see https://php.net/manual/en/function.json-decode.php
     *
     * @param string $json <p>
     * The <i>json</i> string being decoded.
     * </p>
     * <p>
     * This function only works with UTF-8 encoded strings.
     * </p>
     * <p>PHP implements a superset of
     * JSON - it will also encode and decode scalar types and <b>NULL</b>. The JSON standard
     * only supports these values when they are nested inside an array or an object.
     * </p>
     * @param int $options [optional] <p>
     * Bitmask of JSON decode options:<br/>
     * {@see JSON_BIGINT_AS_STRING} decodes large integers as their original string value.<br/>
     * {@see JSON_INVALID_UTF8_IGNORE} ignores invalid UTF-8 characters,<br/>
     * {@see JSON_INVALID_UTF8_SUBSTITUTE} converts invalid UTF-8 characters to \0xfffd,<br/>
     * {@see JSON_OBJECT_AS_ARRAY} decodes JSON objects as PHP array, since 7.2.0 used by default if $assoc parameter is null,<br/>
     * </p>
     *
     * @return object the value encoded in <i>json</i> in appropriate
     * PHP type. Values true, false and
     * null (case-insensitive) are returned as <b>TRUE</b>, <b>FALSE</b>
     * and <b>NULL</b> respectively.
     *
     * @throws \JsonException
     */
    public static function decodeAsObject(string $json, int $options = self::DEFAULT_OPTIONS): object;
}
