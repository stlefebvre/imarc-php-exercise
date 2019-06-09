<?php
    class Author {
        protected $email;
        function set_email($new_email) {
            $this->email = $new_email
        }
        protected $name;
        function set_name($new_name) {
            $this->name = $new_name;
        }

        public function __construct($author_name, $author_email) {
            $this->name = $author_name;
            $this->email = $author_email;
        }
    }

    class Article implements JsonSerializable {
        protected $title;
        protected $body;
        protected $status;
        protected $author;
        function set_author($new_author) {
            $this->author = $new_author;
        }
        public function get_author() {
            return $this->author;
        }
        /**Gets the title 
        *@return string
        */

        public function getTitle() {
            return $this->title;
        }

        /**
        *Gets body
        * @return string
        */
        public function getBody() {
            return $this->body;
        }

        /**
        *Gets the status
        * @return string
         */
         public function getStatus() {
             return $this->status;
         }

         /**
         *Sets title parameter
         *@param string $title The article title
         *
         *@return void
          */

        public function setTitle($title) {
            $this->title = $title;
        }

        /**
        Sets body parameter
        *@param string $body The article body
        *@return void
         */

        public function setBody($body) {
            $this->body = $body;
        }

        public function jsonSerialize() {
            return [
                'article' => [
                    'title' => $this->title;
                    'body' => $this->body;
                    'status' => $this->status;
                    'author' => $this->author;
                ]
            ]
        }
    }

    $article = new Article ('Test Title', 'ipsum lorem body text', 'True', 'Stephen King');
    echo json_encode($article);