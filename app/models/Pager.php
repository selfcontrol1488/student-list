<?php
class Pager {
    private $totalRecords; // общее число записей
    private $recordsPerPage; // число записей на странице
    private $link; // шаблон для ссылки
    
    public function __construct($totalRecords, $recordsPerPage, $link) {
        $this->totalRecords = $totalRecords;
        $this->recordsPerPage = $recordsPerPage;
        $this->link = $link;
    }
    public function getTotalPages() {
        if ($this->totalRecords < $this->recordsPerPage) {
            return 1;
        } else {
            $totalPages = ceil($this->totalRecords / $this->recordsPerPage);
            return $totalPages;
        }        
    }
    public function getOffset($pageNum) {
        if ($pageNum == 1 | !isset($pageNum)) {
            return 0;
        } else {
            return $this->recordsPerPage * $pageNum - $this->recordsPerPage;
        }        
    }
    public function getLimit() {
        return $this->recordsPerPage;               
    }
    public function getLinkForPage($pageNum) {
        $this->link = 'list.php' . "?" . http_build_query(['page'=>$pageNum]);        
        return $this->link;
    }
    public function getLinkForLastPage($pageNum) {
        $this->link = 'list.php' . "?" . http_build_query(['page'=>$this->getTotalPages()]);        
        return $this->link;
    }
}