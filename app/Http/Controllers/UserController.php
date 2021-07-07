<?php

namespace App\Http\Controllers;

use App\Http\Resources\InvestmentResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;

class UserController extends Controller {



    public function store(UserCreateRequest $request)
{
    try {
        $user = $this->userRepository->store($request);
        return redirect()->route('users.edit', $user)
                         ->with('messageSuccess', 'This user successfully created');
    } catch (QueryException $exception) {
        return redirect()->back()->with('messageFail', 'Create failed. Something went wrong')->withInput();
    }
}

    // public function index() {

    //     return $this->successResponse(
    //         UserResource::collection(User::all())
    //     );
    // }





    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email'
    //     ]);
    
    //     \Newsletter::subscribe(
    //         $request->input('email'),
    //         ['name' => $request->input('name')]
    //     );
    
    //     return response()->noContent();
    // }


    // public function show(User $user) {
    //     return $this->successResponse(
    //         new UserResource($user)
    //     );

    // }


    // public function update(Request $request, User $user) {

    //     $user->update(
    //         $request->only(
    //             [
    //                 'first_name',
    //                 'last_name',
    //                 'email'
    //             ]
    //         )
    //     );

    //     return $this->successResponse(
    //         new UserResource($user)
    //     );
    // }

    // // public function investments(User $user) {

    // //     $userInvestments = $user->investments;

    // //     return $this->successResponse(
    // //         InvestmentResource::collection($userInvestments)
    // //     );
    // // }

    // public function destroy(User $user) {

    //     $user->delete();

    //     return $this->deleteResponse();
    // }
}
