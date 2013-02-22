<?php

namespace Giko\PinyinBundle\Twig\Extension;

use Symfony\Component\DependencyInjection\ContainerInterface;
class PinyinExtension extends \Twig_Extension
{
	protected $container;
	/**
	 * 
	 * @var \Giko\PinyinBundle\Pinyin\ChineseSpell
	 */
	protected $pinyin;
	
	public function __construct(ContainerInterface $container)
	{
		$this->container = $container;
		$this->pinyin = $container->get("giko.pinyin");
	}
	
	/**
	 * Returns a list of functions to add to the existing list.
	 *
	 * @return array An array of functions
	 */
	public function getFunctions()
	{
		return array(
				"pinyin" => new \Twig_Function_Method($this, "pinyinize"),
		);
	}
	
	
	public function pinyinize($str, array $options = array()) {
		//$delimiter = ' ', $length
		$options = array_merge(array('delimiter' => ' ', 'length' => 0), $options);
		return $this->pinyin->stringToPinyin($str);
	}

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'pinyin';
    }
}
