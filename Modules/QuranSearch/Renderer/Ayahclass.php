<?php


// 270 characters per line
namespace QuranSearch\Renderer;
class Ayah
{
    public static function renderAyahEndingInArabic($number)
    {
		if (strlen($number) == 2) {
			$ayahNumber = 'ayah-number-2digit';
		} else if (strlen($number) == 3) {
			$ayahNumber = 'ayah-number-3digit';
		} else {
			$ayahNumber = 'ayah-number';
		}

        return '<span class="ayah-ending">
			<span class="'. $ayahNumber . ' label label-default">' .
				Generic::latinToArabicNumerals($number)
           . '
			</span>
		</span>
        ';
    }

    public static function renderAyahEndingInLatin($number)
    {
        return '<span class="ayah-ending">&#1757;
			<span class="ayah-number">' .
				$number
           . '
			</span>
		</span>
        ';
    }

	public static function renderAyahReferenceInArabic($surah, $ayahNumber)
	{
		return Generic::latinToArabicNumerals($surah . ':' . $ayahNumber);
	}

	public static function renderAyahReferenceInLatin($surah, $ayahNumber)
	{
		return $surah . ':' . $ayahNumber;
	}
}