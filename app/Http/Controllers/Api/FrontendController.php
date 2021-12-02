<?php

namespace App\Http\Controllers\Api;

use App\Blog;
use App\User;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BlogResource;
use App\Http\Resources\BlogCollection;
use App\Notifications\ContactNotification;
use App\Notifications\ContactInfoNotification;

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
        $type = $request->type;
        $date = $request->date;
        $time = $request->time;
        $phone = $request->phone;
        $email = $request->email;
        $user = User::find($request->owner_id);
        $message = 'Notification For Tour.';
        $user->notify(new ContactNotification($message, $date, $time, $email, $phone, $type));
        $success['success'] =  'Contact Add Successfully!';
        $success['success'] = true;
        return response()->json($success, 200);
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
        $msg = 'Notification For Contact Info.';
        $user->notify(new ContactInfoNotification($msg, $request->email, $request->phone, $request->type, $request->message));
        $success['success'] =  'Contact Info Add Successfully';
        $success['success'] = true;
        return response()->json($success, 200);
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
