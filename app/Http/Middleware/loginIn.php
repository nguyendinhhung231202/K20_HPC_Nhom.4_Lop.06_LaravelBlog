<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class loginIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $email = $_REQUEST["email"];
            $password = $_REQUEST["password"];

               if ($email === "dinhhung231202@gmail.com")
               {
                   if ($password ==="hung123") {

                        return ('dăng nhập thành công');

                   }else {

                        return ('password sai rồi bn ơi');
                   }
               }else {
                        return ('email ko chùng với tài khoản nào !login');
               }

        return $next($request);
    }
}
