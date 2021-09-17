<?php

namespace App\Http\Controllers;

use Stripe;
Use App\User;
use Session;
use Exception;
use App\Models\Sale;
use Stripe\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout.create');
    }

    public function orderPost(Request $request)
    {



            $user = auth()->user();
            $input = $request->all();
            $token =  $request->stripeToken;
            $paymentMethod = $request->paymentMethod;
            try {

                Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

                if (is_null($user->stripe_id)) {
                    $stripeCustomer = $user->createAsStripeCustomer();
                }

                Customer::createSource(
                    $user->stripe_id,
                    ['source' => $token]
                );

                $user->newSubscription('test',$input['plane'])
                    ->create($paymentMethod, [
                    'email' => $user->email,
                ]);

                $order = Sale::create([

                    'user_id' => Auth::user()->id,
                    'seller_id' => $request->teacher_id,
                    'course_id' => $request->course_id,
                    'amount' => $request->amount,
                    


                ]);

                return back()->with('success','Subscription is completed.');
            } catch (Exception $e) {
                return back()->with('success',$e->getMessage());
            }

    }

}
