** user input **

$_GET
$HTTP_GET_VARS 
Contains the parameters submitted in the query string. These are accessed by name. For example, in the following URL:
https://site.com/search.php?query=foo the value of the query parameter is accessed using: $_GET[‘query’]
$_POST
$HTTP_POST_VARS
Contains the parameters submitted in
the request body.
$_COOKIE
$HTTP_COOKIE_VARS
Contains the cookies submitted in the
request.
$_REQUEST Contains all the items in the $_GET, $_
POST, and $_COOKIE arrays.
$_FILES
$HTTP_POST_FILES
Contains the fi les uploaded in the
request.
$_SERVER[‘REQUEST_METHOD’] Contains the method used in the HTTP
request.
$_SERVER[‘QUERY_STRING’] Contains the full query string submitted
in the request.
$_SERVER[‘REQUEST_URI’] Contains the full URL contained in the
request.
$_SERVER[‘HTTP_ACCEPT’] Contains the contents of the HTTP
Accept header.
$_SERVER[‘HTTP_ACCEPT_CHARSET’] Contains the contents of the HTTP
Accept-charset header.
$_SERVER[‘HTTP_ACCEPT_
ENCODING’]
Contains the contents of the HTTP
Accept-encoding header.
$_SERVER[‘HTTP_ACCEPT_
LANGUAGE’]
Contains the contents of the HTTP
Accept-language header.
$_SERVER[‘HTTP_CONNECTION’] Contains the contents of the HTTP
Connection header.
$_SERVER[‘HTTP_HOST’] Contains the contents of the HTTP Host
header.
