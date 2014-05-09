<?php

	class Facebook {

		/*
		 * Setting variables
		 */

		private $client = 'PropellerComms';
		private $access_token = 'xxx';
		private $app_secret = 'xxx';

		public $count = 5;
		public $char_limit = 200;

		public function feed() {
			// Set Facebook URL
			$url = 'https://graph.facebook.com/'.$this->client.'/feed?access_token='.$this->access_token.'|'.$this->app_secret;
			$json = file_get_contents($url);

			// Return JSON
			if($json) {
				return json_decode($json);
			}
		}

	}

	$facebook = new Facebook();

	if($facebook->feed()) {
		for($i = 0; $i < $facebook->count; $i++) {

			// Define Post
			$post = $facebook->feed()->data[$i];

			/* Here you put all your HTML!
			 * Remember to close off the PHP and open after!
			 * You call $post instead of $entry
			 * Also instead of $char_limit, you call $facebook->char_limit
			 *
			 * Therefore, to view the message, you would call:
			 * $post->message;
			 */

		}
	}
?>