<?php

namespace App\Http\Controllers\Api;

use App\Subscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\SubscriptionResource;
use App\Http\Resources\SubscriptionCollection;

class SubscriptionController extends Controller
{
    public function allSubscription()
    {
        $subscription = Subscription::where('agent_role', '=', Auth::user()->role->agent_role)->get();
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
}
