<?php

final class Resource
{
	/** path to the translation files */
	const RESOURCE_PATH = 'data/translation_';
	/** default language if no language is set or found */
	const DEFAULT_LANGUAGE = 'en';
	/** fallback if translation was not found, may be concatenated with other data */
	const FALLBACK = 'InvalidTranslation';

	/** language set for the translation */
	private $language;
	/** array containing the JSON translations */
	private $resources;


	public function __construct($language = self::DEFAULT_LANGUAGE)
	{
		$this->language = $language;
		$file = self::RESOURCE_PATH . $this->language . '.json';
		$this->resources = (file_exists($file) ? json_decode(file_get_contents($file), true) : null);
	}

	public function tr($key)
	{
		$res = self::FALLBACK . '(' . $key . ', ' . $this->language . ')';
		if($this->resources)
		{
			$keys = explode('.', $key);
			$curResources = $this->resources;
			foreach($keys as $subKey)
			{
				if(isset($curResources[$subKey]))
				{
					$curResources = $curResources[$subKey];
				}
				else
				{
					return $res;
				}
			}
			$res = $curResources;
		}
		return $res;
	}
}
