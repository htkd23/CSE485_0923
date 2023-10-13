<?php
require_once 'Book.php';

$books = Book::getAllBooks();

include 'index_view.php';
?>