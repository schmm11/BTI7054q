<?php
class GameImage {
	
	const IMG_PATH = "media/productImages/";
	private $name, $alt, $width, $height;
	private $id;
	
	function __construct($name, $alt="", $width=0, $height=0) {
		$this->name = $name;
		$this->alt = $alt;
		$this->width = $width;
		$this->height = $height;
	}

	public function render() {
		$rel_path = self::IMG_PATH . $this->name;
		$abs_path = __DIR__ .'/'. $rel_path;
		if (!is_file($abs_path)) {
			echo "[{$this->name}]";
		return;
		}
		$w = $this->width > 0 ? ' width="'.$this->width.'"' : '';
		$h = $this->height > 0 ? ' height="'.$this->height.'"' : '';
		$t = $this->alt != '' ? ' title="'.$this->alt.'"' : '';
		$img = '<img id="ArticleImage" src="%s" alt="%s"%s />'."\n";
		printf($img, $rel_path, $this->alt, $t.$w.$h);
		}



}