<?php
/************************************************************/
/*                   CODER CONTROLLERS                      */
/************************************************************/
/*

Author: Ozan UYKUN
Site: http://www.zntr.net
Copyright 2012-2015 zntr.net - Tüm hakları saklıdır.

*/
class ZNDynamic
{
	
	/*
	 * Singleton referans değişkeni
	 *
	 * @var	object
	 */
	 
	private static $reference;
	
	/*
	 * ZNDynamic yapısı çalıştırılıyor... 
	 *
	 */
	
	public function __construct()
	{
		self::$reference =& $this;
		// Dahil edilen kütüphaneler tanımlanıyor...
		$libraries = config::get('Autoload','Library');
		
		if( ! empty($libraries)) 
			foreach($libraries as $class)
				is_imported($class);
			
		is_imported('Config');
		is_imported('Import');
	}
	
	/*
	 * Singleton referans yöntemi
	 *
	 * @function object
	 */
	
	public static function &reference()
	{
		return self::$reference;		
	}
}