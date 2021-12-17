<?php

namespace App\Http\Controllers\Admin\Subscription;

use App\Subscription;
use Illuminate\Http\Request;
use App\PurchasedSubscription;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class SubscriptionController extends Controller
{
    public function allSubscription()
    {
        $subscriptions = Subscription::all();
        return view('admin.subscription.all', compact('subscriptions'));
    }

    public function activeSubscription()
    {
        $activeSubscriptions = PurchasedSubscription::all();
        return view('admin.subscription.activeSubscription', compact('activeSubscriptions'));
    }

    public function subscriptionCreate()
    {
        $roles = Role::where('type', '=', 'FrontEnd')->get();
        return view('admin.subscription.create', compact('roles'));
    }

    public function subscriptionStore(Request $request)
    {
        if ($request->ajax()) {
            if ($request->ajax()) {
                $subscription = new Subscription();
                $subscription->title = $request->title;
                $subscription->price = $request->price;
                $subscription->valid_property = $request->valid_property;
                $subscription->agent_role = $request->agent_role;
                $subscription->status = $request->status;
                $subscription->description = $request->description;
                $subscription->save();
                return response()->json([
                    'success' => 'Subscription Add Successfully!',
                ]);
            }
        }
    }

    public function deleteSubscription($id)
    {
        $subscription = Subscription::find($id);
        $subscription->delete();
        return redirect()->back()->with('message', 'Subscription Delete Successfully!');
    }

    public function editSubscription($id)
    {
        $subscription = Subscription::find($id);
        $roles = Role::all();
        return view('admin.subscription.edit', compact('subscription', 'roles'));
    }

    public function subscriptionUpdate(Request $request)
    {
        if ($request->ajax()) {
            $subscription = Subscription::find($request->subscription_id);
            $subscription->title = $request->title;
            $subscription->price = $request->price;
            $subscription->valid_property = $request->valid_property;
            $subscription->agent_role = $request->agent_role;
            $subscription->status = $request->status;
            $subscription->description = $request->description;
            $subscription->update();
            return response()->json([
                'success' => 'Subscription Update Successfully!',
            ]);
        }
    }
}
