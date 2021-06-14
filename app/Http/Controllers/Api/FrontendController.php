<?php

namespace App\Http\Controllers\Api;

use App\Blog;
use App\User;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BlogCollection;
use App\Http\Resources\BlogResource;
use App\Notifications\ContactNotification;

class FrontendController extends Controller
{
    public function ContactStore(Request $request)
    {

        $contact  =  new Contact();
        $contact->owner_id = $request->owner_id;
        $contact->property_id = $request->property_id;
        $contact->type = $request->type;
        $contact->date = $request->date;
        $contact->time = $request->time;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->check = $request->check;
        $contact->save();
        $user = User::find($request->owner_id);
        $message = 'Notification For Tour';
        $user->notify(new ContactNotification($message));
        return response()->json(['success' => 'Contact Add Successfully!']);
    }


    public function ContacInfotStore(Request $request)
    {

        $contact  =  new Contact();
        $contact->owner_id = $request->owner_id;
        $contact->property_id = $request->property_id;
        $contact->type = $request->type;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->check = $request->check;
        $contact->message = $request->message;
        $contact->save();
        $user = User::find($request->owner_id);
        $message = 'Notification For Info';
        $user->notify(new ContactNotification($message));
        return response()->json(['success' => 'Contact Info Add Successfully!']);
    }


    public function blogs()
    {
        $blogs = Blog::paginate(4);
        $data  = BlogCollection::collection($blogs);
        return response()->json(BlogCollection::collection($data));
    }

    public function SingleBlog($id)
    {
        $blog = Blog::find($id);
        $data = new BlogResource($blog);
        return $data->toJson();
    }
}
