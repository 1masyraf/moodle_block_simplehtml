<?php
class block_simplehtml extends block_base {
    public function init() {
        $this->title = get_string('simplehtml', 'block_simplehtml');
    }

    public function get_content() {
        if ($this->content !== null) {
          return $this->content;
        }
    
        $this->content         =  new stdClass;
        $this->content->text   = '<h3>This is a link to todo list local plugin</h3>';
        // $this->content->footer = '<a href="http://localhost/local/todo/list.php" class="btn btn-primary"> Link to Todo</a>';
        $this->content->footer = '<a href="/local/todo/list.php" class="btn btn-primary"> Link to Todo</a>';
        return $this->content;
    }
    // The PHP tag and the curly bracket for the class definition 
    // will only be closed after there is another function added in the next section.
}

