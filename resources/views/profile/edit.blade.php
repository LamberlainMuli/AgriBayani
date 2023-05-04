<x-app-layout>
    <x-header :bottom="100" />

    <div class="container mt-6">
        <div class="row w-100">
            <div class="card p-3 m-4">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <h2>Profile Information</h2>
                        <p class="color-secondary">Update your account's profile information and email address.</p>


                        <form method="post" action="{{ route('profile.update') }}" class="mt-2 space-y-6">
                            @csrf
                            @method('patch')
                            <div class="form-group row w-100">
                                <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
                                <div class="col-sm-9 p-0">
                                    <input id="first_name" class="form-control" type="text"
                                        value="{{ old('first_name', Auth::user()->first_name) }}" name="first_name"
                                        required />
                                </div>
                            </div>
                            <div class="form-group row w-100">
                                <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
                                <div class="col-sm-9 p-0">
                                    <input id="last_name" class="form-control" type="text"
                                        value="{{ old('last_name', Auth::user()->last_name) }}" name="last_name"
                                        required />
                                </div>
                            </div>
                            <div class="form-group row w-100">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-9 p-0">
                                    <input id="email" class="form-control" type="email"
                                        value="{{ old('email', Auth::user()->email) }}" name="email" required />
                                </div>
                            </div>
                            <div class="form-group row w-100">
                                <label for="picture_url" class="col-sm-2 col-form-label">Picture URL</label>
                                <div class="col-sm-9 p-0">
                                    <input id="picture_url" class="form-control" type="text"
                                        value="{{ old('picture_url', Auth::user()->picture_url) }}"
                                        name="picture_url" />
                                </div>
                            </div>
                            <div class="form-group row w-100">
                                <label for="phone_number" class="col-sm-2 col-form-label">Phone Number</label>
                                <div class="col-sm-9 p-0">
                                    <input id="phone_number" class="form-control" type="text"
                                        value="{{ old('phone_number', Auth::user()->phone_number) }}"
                                        name="phone_number" required />
                                </div>

                            </div>
                            <div class="form-group row w-100">
                                <label for="location" class="col-sm-2 col-form-label">Location</label>
                                <div class="col-sm-9 p-0">
                                    <input id="location" class="form-control" type="text"
                                        value="{{ old('location', Auth::user()->location) }}" name="location"
                                        required />
                                </div>
                            </div>

                            @if (Auth::user()->is_borrower)
                                <div class="form-group row w-100">
                                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-9 p-0">
                                        <textarea id="description" class="form-control" type="text" name="description"
                                            value="old('description', Auth::user()->borrower->description)">{{ Auth::user()->borrower->description }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row w-100">
                                    <label for="goal_amount" class="col-sm-2 col-form-label">Goal Amount</label>
                                    <div class="col-sm-9 p-0">
                                        <input id="goal_amount" class="form-control" type="number" name="goal_amount"
                                            value="{{Auth::user()->borrower->goal_amount}}" />
                                    </div>
                                </div>
                            @endif

                            <button class="btn bg-gradient-success" type="submit">Save</button>
                        
                            
                        </form>
                    </li>
                    <li class="list-group-item">
                        <h2>Update Password</h2>
                        <p class="color-secondary">Ensure your account is using a long, random password to stay secure.
                        </p>

                        <form method="post" action="{{ route('password.update') }}" class="mt-2 space-y-6">
                            @csrf
                            @method('put')
                            <div class="form-group row w-100">
                                <label for="current_password" class="col-sm-2 col-form-label">Current Password</label>
                                <div class="col-sm-9 p-0">
                                    <input id="current_password" name="current_password" class="form-control"
                                        type="password" required autofocus autocomplete="current-password" />
                                </div>
                            </div>
                            <div class="form-group row w-100">
                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-9 p-0">
                                    <input id="password" name="password" class="form-control" type="password"
                                        required autofocus autocomplete="new-password" />
                                </div>
                            </div>
                            <div class="form-group row w-100">
                                <label for="password_confirmation" class="col-sm-2 col-form-label">Confirm
                                    Password</label>
                                <div class="col-sm-9 p-0">
                                    <input id="password_confirmation" name="password_confirmation"
                                        class="form-control" type="password" required autofocus
                                        autocomplete="new-password" />
                                </div>
                            </div>
                            <button class="btn bg-gradient-success" type="submit">Save</button>
                            @if (session('status') === 'password-updated')
                                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
                            @endif
                        </form>
                    </li>


                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
