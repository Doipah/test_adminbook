<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use App\Services\SocialFacebookAccountService;

class SocialAuthFacebookController extends Controller
{
     /**
   * Create a redirect method to facebook api.
   *
   * @return void
   */
  public function redirect()
  {
      return Socialite::driver('facebook')->redirect();
    //   $user_data = Socialite::driver($provider)->user();
  }

  /**
   * Return a callback method from facebook api.
   *
   * @return callback URL from facebook
   */
  public function callback()
  {
      print("FUCK");

  }
//   public function callback(SocialFacebookAccountService $service)
//     {
//         $user = $service->createOrGetUser(Socialite::driver('facebook')->user());
//         auth()->login($user);
//         return redirect()->to('/home');
//     }
}
