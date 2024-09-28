<?

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class InjectRoutes
{
    public function handle(Request $request, Closure $next)
    {
        // Inject routes into all views
        view()->share('routes', [
            'register' => route('register'),
            'login' => route('login'),
            'dashboard' => route('dashboard')
        ]);

        return $next($request);
    }
}
 