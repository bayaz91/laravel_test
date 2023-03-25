<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GzipMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        $response = $next($request);
        $buffer = $response->getContent();
        if(strpos($buffer,'<pre>') !== false)
        {
            $replace = array(
//                '/<!--[^\[](.*?)[^\]]-->/s' => '',       mea taglerinde hata çıkmaması için yorum satırına aldık
                "/<\?php/"                  => '<?php ',
                "/\r/"                      => '',
                "/>\n</"                    => '><',
                "/>\s+\n</"                 => '><',
                "/>\n\s+</"                 => '><',
            );
        }
        else
        {
            $replace = array(
//                '/<!--[^\[](.*?)[^\]]-->/s' => '',       meta taglerinde hata çıkmaması için yorum satırına aldık
                "/<\?php/"                  => '<?php ',
                "/\n([\S])/"                => '$1',
                "/\r/"                      => '',
                "/\n/"                      => '',
                "/\t/"                      => '',
                "/ +/"                      => ' ',
            );
        }
        $buffer = preg_replace(array_keys($replace), array_values($replace), $buffer);
        $response->setContent($buffer);
        ini_set('zlib.output_compression', 'On'); // If you like to enable GZip, too!
        return $response;
    }

}