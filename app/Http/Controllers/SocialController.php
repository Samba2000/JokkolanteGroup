namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
public function redirectToProvider($provider)
{
return Socialite::driver($provider)->redirect();
}

public function handleProviderCallback($provider)
{
$user = Socialite::driver($provider)->user();

// Add your logic to authenticate the user or create an account
// based on the user's social profile data.
}
}