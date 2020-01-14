<?php

namespace pxgamer\Convert;

final class Bytes
{
    /**
     * The number of bytes in a kilobyte.
     *
     * @see https://wikipedia.org/wiki/Kilobyte
     */
    public const KILOBYTE = 1000;

    /**
     * The number of bytes in a kibibyte.
     *
     * @see https://wikipedia.org/wiki/Kibibyte
     */
    public const KIBIBYTE = 1024;

    /**
     * Parses a given byte size string to an integer.
     *
     * @param  string  $size  A string size expressed as a number of bytes.
     * @param  bool|null  $iecFormat  Whether the string is formatted using the IEC standard.
     *
     * @return int An integer representation of the size in bytes.
     */
    public static function toInt(string $size, ?bool $iecFormat = null): int
    {
        // Remove the non-unit characters from the size.
        $unit = preg_replace('/[^bkmgtpezy]/i', '', $size);

        // Remove the non-numeric characters from the size.
        $size = preg_replace('/[^0-9.]/', '', $size);

        if ($unit) {
            // Find the position of the unit in the ordered string which is the power
            // of magnitude to multiply a kilobyte / kibibyte by.
            return (int) round((float) $size * (($iecFormat ? self::KIBIBYTE : self::KILOBYTE) ** stripos('bkmgtpezy', $unit[0])));
        }

        return (int) round((float) $size);
    }

    /**
     * Parses a given byte size to a human-readable string.
     *
     * @param  int  $size  An integer size expressed as a number of bytes.
     *
     * @return string A string representation of the size.
     */
    public static function toString(int $size): string
    {
        $absoluteSize = abs($size);

        if ($absoluteSize < self::KILOBYTE) {
            return $size.($size === 1 ? ' byte' : ' bytes');
        }

        // Create a multiplier to preserve the sign of $size.
        $sign = $absoluteSize / $size;

        foreach (['KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'] as $unit) {
            $absoluteSize /= self::KILOBYTE;
            $roundedSize = round($absoluteSize, 2);

            if ($roundedSize < self::KILOBYTE) {
                break;
            }
        }

        $sizeInUnits = $roundedSize * $sign;

        return "{$sizeInUnits} {$unit}";
    }
}
