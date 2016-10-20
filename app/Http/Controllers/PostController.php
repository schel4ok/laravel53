<?php namespace App\Http\Controllers;

use App\Mail\Callback;
use Mail;
use Illuminate\Http\Request;
use Session;
use Redirect;
use App\User;
use App\Furnitura;

class PostController extends Controller {


    public function __construct()
    {
    }


    public function callback(Request $request) 
    {

        $this->validate($request, [
            'name' => 'required|min:3',
            'tel' => 'required|min:10'
        ]);

        if ($request->ajax()) return;
        return 'publish';
        
        /*
        $email = new Callback($request);
        Mail::to('ipopov@steklo-group.ru', 'Илья Попов')->send($email);
        return Redirect::back()->with('message','Ваше сообщение отправлено. В ближайшее время мы с вами свяжемся');
        */

    }




	public function order(CallbackRequest $request) 
	{
	    $result = $request->all();
    	Event::fire(new SendMail($result));
    	//Session::flash('message','Заказ отправлен. В ближайшее время мы с вами свяжемся');    
	}


    public function search($query)

    {
        return \App\Furnitura::search($query)->get();
        /*
        $query = Request::input('search');
        if( $query ){
            $items = Furnitura::where('title', 'LIKE', '%' . $query . '%')->get();
        }

        return view('pages.search', compact('items'));
        */
    }


	public function sendmail(ContactFormRequest $request) 
	{
        $mailarray = $request->all();

                    Mail::send('emails.contacts', $mailarray, function($message) use ($mailarray) {
                        $message->from($mailarray['email'], $mailarray['name'] );
                        $message->to('ipopov@steklo-group.ru', 'Илья Попов');
                        $message->setCc($mailarray['email'], $mailarray['name']);
                        $message->replyTo($mailarray['email'], $mailarray['name'] );
                        $message->subject('Письмо со страницы Контакты');

                        if ( isset($mailarray['attachment']) ) 
                        {
                            $message->attach($mailarray['attachment']->getRealPath(), array(
                                'as'    => $mailarray['attachment']->getClientOriginalName(), 
                                'mime'  => $mailarray['attachment']->getMimeType()));
                        }
                    });
        $category = Category::where('sef', '=', 'contacts')->first();
        
        return view('pages.contacts')->withCategory($category);
	}

}
