<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

global $head, $style, $body, $end;
$head = '<head></head>';
$style = <<< EOF
<style type="text/css">
body {
    font-size:16px;
    color:#999;
}
h1{
    font-size:10rem;
    text-align:right;
    color:#eeeeee;
    margin: -40px 0px -50px 0ox;
}
</style>
EOF;
$body = '</head><body>';
$end = '</body></html>';

function tag($tag, $txt){
    return "<{$tag}>".$txt."</{$tag}>";
}


class HelloController extends Controller
{

    public function index(Request $request, Response $response){
        global $head, $style, $body, $end;
    
        $html = $head
        .tag('title','Hello/Index') 
        .$style
        .$body
        .tag('h1','Hello') 
        .tag('h3','Request') 
        .tag('pre',$request) 
        .tag('h3','Response') 
        .tag('pre',$response) 
        .$end;
        
        $response->setContent($html);
        return $response;
        }
    // public function __invoke(){
    //     global $head, $style, $body, $end;
    
    //     $html = $head
    //     .tag('title','Hello') 
    //     .$style
    //     .$body
    //     .tag('h1','Single Action') 
    //     .tag('p','これはシングルアクションのコントローラーです。') 
    //     .$end;
    
    //     return $html;
    //     }
    
    // public function index(){
    // global $head, $style, $body, $end;

    // $html = $head
    // .tag('title','HelloIndex') 
    // .$style
    // .$body
    // .tag('h1','Index') 
    // .tag('p','This is sample page') 
    // .'<a href="/public/hello/other">go to Other page</a>'
    // .$end;

    // return $html;
    // }

    // public function other(){
    //     global $head, $style, $body, $end;

    //     $html = $head
    //     .tag('title','Hello/Other') 
    //     .$style
    //     .$body
    //     .tag('h1','Other') 
    //     .tag('p','This is Other page') 
    //     .$end;
    
    //     return $html;
    // }
}
