<?php

namespace App\Http\Controllers\Api;

use Braintree;
use App\Subscription;
use Illuminate\Http\Request;
use App\PurchasedSubscription;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\SubscriptionResource;
use App\Http\Resources\SubscriptionCollection;
use App\Http\Resources\PurchasedSubscriptionCollection;

class SubscriptionController extends Controller
{
    public function allSubscription()
    {
        $subscription = Subscription::where('agent_role', '=', Auth::guard('api')->user()->role->agent_role)->get();
        $data = SubscriptionCollection::collection($subscription);
        return response()->json(SubscriptionCollection::collection($data));
    }

    public function singleSubscription($id)
    {
        $subscription = Subscription::find($id);
        if ($subscription) {
            $data = new SubscriptionResource($subscription);
            return $data->toJson();
        } else {
            return response()->json(['error' => 'Subscription Not Found', 'success' => false], 401);
        }
    }
    // get current purchased subscription 

    public function CurrentPruchasedSubscription()
    {
        $agent_id = Auth::guard('api')->user()->id;
        $PruchasedSubscription = PurchasedSubscription::where('agent_id', '=', $agent_id)->get();
        if ($PruchasedSubscription->isEmpty()) {
            return response()->json(['error' => 'Pruchased Subscription not Found', 'success' => false], 404);
        } else {
            $data = PurchasedSubscriptionCollection::collection($PruchasedSubscription);
            return response()->json(PurchasedSubscriptionCollection::collection($data));
        }
    }
    // purchase subscription 

    public function checkoutForm()
    {
        return redirect()->route('agent.payment');
    }
}
