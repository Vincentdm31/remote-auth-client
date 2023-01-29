<?php

namespace App\Http\Controllers\RemoteAuthClient;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

class RemoteAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('remote_auth');
    }

    public function listUsers(Request $req)
    {
        $users = User::select(['id', 'name'])->get();
        return response()->json(['users' => $users], 200);
    }
    public function update(Request $req, $id)
    {
        $pass = $req->json('password');

        if (!isset($pass)) {
            return response()->json(['msg' => 'Password required.'], 400);
        }

        try {
            $user = User::findOrFail($id);
        } catch (Exception $e) {
            return response()->json(['msg' => $e->getMessage()]);
        }

        try {
            $user->password = Hash::make($pass);

            $user->save();

            return response()->json(['user' => $user], 200);
        } catch (Exception $e) {
            return response()->json(['msg' => $e->getMessage()]);
        }
    }

    public function delete($id)
    {
        try {
            $user = User::findOrFail($id);
        } catch (Exception $e) {
            return response()->json(['msg' => $e->getMessage()]);
        }

        $user->delete();

        return response()->json(['msg' => 'User deleted'], 200);
    }

    public function healthCheck()
    {
        return response()->json(['success' => true], 200);
    }

    public function down(){
        Artisan::call('down');
    }

    public function up(){
        Artisan::call('down');
    }
}
