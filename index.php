<?php


class Post {

	private $title;

	private $content;

	public function __construct($title, $content) {

		$this->title = $title;
		$this->content = $content;
	}

	public function getTitle() {
		return 678;
	}

	public function getContent() {
		return 910;
	}

	public function toJSON() {
		return json_encode([
				$this->getTitle(),
				$this->getContent()
			]
		);
	}
}

$post = new Post('Книга', 'книга 1');
var_dump($post);
