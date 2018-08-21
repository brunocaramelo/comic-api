<?php

namespace Domain\Admin\Users\Http;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Domain\Admin\Users\Consumers\AdminUsersConsumer;

class UsersController extends Controller
{
    public function __construct()
    {
    }

    public function index( Request $request ) 
    {
        $user = new AdminUsersConsumer();
        $list = $user->filterList( $request );
        
        return view( 'users.index' , [ 'users' => $list->data->results ] );
    }

    public function viewItem( Request $request ) 
    {
        $user = new AdminUsersConsumer();
        $list = $user->showItem( $request->id );
        // dd($list);
        return view( 'users.edit' , [ 'users' => $list->data->results ] );
    }

}
