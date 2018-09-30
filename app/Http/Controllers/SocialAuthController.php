<?php
 
namespace App\Http\Controllers;
  
 use Illuminate\Http\Request;
 use Socialite;
 use Laravel\Socialite\Contracts\Provider;
 use App\User;
 use Auth;
  
 class SocialAuthController extends Controller
 {
     
     public function callback($provider)
     {
      
         $user = $this->createOrGetUser(Socialite::driver($provider));
      
         auth()->login($user);
      
         return redirect()->to('/');
     }
  
     public function redirect($provider)
     {
         return Socialite::driver($provider)->redirect();
     }
  
     private function createOrGetUser(Provider $provider)
     {
  
         $providerUser = $provider->user();
  
         $providerName = class_basename($provider);
  
         $user = User::where('email', $providerUser->getEmail())
             ->first();
  
         if (!$user) {
             $user = User::create([
                 'email' => $providerUser->getEmail(),
                 'name' => $providerUser->getName(),
                 'apodo' => rand(100005, 99999999999999999),
             ]);
         }
         
         return $user;
     }
  
     public function logout(Request $request) {
         Auth::logout();
         return redirect('/');
     }
 }