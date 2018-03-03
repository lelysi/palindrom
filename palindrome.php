<?php
declare(strict_types=1);

class Palindrome
{
	public static function isPalindrome(string $word): bool
	{
		$wordLength = strlen($word);
		if ($wordLength <= 1)
			return true;
		$lowercaseWord = mb_strtolower($word);
		return mb_substr($lowercaseWord, 0, 1) == mb_substr($lowercaseWord, -1)
			&& self::isPalindrome(mb_substr($lowercaseWord, 1, $wordLength - 2));
	}
}