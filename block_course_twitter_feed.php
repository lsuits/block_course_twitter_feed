<?php
class block_course_twitter_feed extends block_base {

	public function init() {
		
		$this->title = get_string('course_twitter_feed', 'block_course_twitter_feed');

	}

	public function get_content() {
		
		if ($this->content !== null) {
			return $this->content;
		}

		$this->content = new stdClass;
		$this->content->text = 'The content of the Course Twitter Feed block!';
		$this->content->footer = 'Footer here...';
	
		return $this->content;
	}

}