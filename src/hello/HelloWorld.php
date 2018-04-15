<?php

/**
 * Composer練習範例程式碼
 * 
 * @author Mars Hung
 */

// 名稱空間
namespace marshung\hello;

/**
 * 類別名稱
 */
class HelloWorld
{
	/**
	 * 名子
	 *
	 * @var string
	 */
	private $name;

	/**
	 * 建構子
	 *
	 * @param string $name 名子，預設"world"
	 */
	public function __construct($name = 'World')
	{
		$this->name = $name;
	}

	/**
	 * 取得名子
	 *
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * 取得問候
	 *
	 * @return string
	 */
	public function hello()
	{
		return 'Hello ' . $this->name . '!';
	}
}
