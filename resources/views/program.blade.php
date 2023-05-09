<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Program</title>
        <ol>
            <li>
        namespace App\Http\Controllers;<br>
            use Illuminate\Http\Request;   <br>  
                class WelcomeController extends Controller<br>
            {<br>
            public function hello() {<br>
            return view('blog.hello', ['name' => 'Andi']);<br>
            }<br>
        }<br></li>
            
        </ol>
        {{$isi}}
        </html>
    